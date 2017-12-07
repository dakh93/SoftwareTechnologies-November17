import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class BombNumbers {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        int[] nums = Arrays.stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt).toArray();
        int[] numAndPower = Arrays.stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt).toArray();

        int specialNum = numAndPower[0];
        int power = numAndPower[1];

        List<Integer> listOfNums = new ArrayList<Integer>();
        for (int i = 0; i < nums.length; i++) {
        listOfNums.add(nums[i]);
        }
        while (listOfNums.contains(specialNum)) {
            int bombIndex = listOfNums.indexOf(specialNum);
            int startIndex = bombIndex - power;
            if (startIndex < 0) startIndex = 0;
            int stopIndex = bombIndex + power;
            if (stopIndex > listOfNums.size() - 1) stopIndex = listOfNums.size() - 1;
            for (int i = 0; i <= stopIndex - startIndex; i++) {
                listOfNums.remove(startIndex);
            }
        }
        System.out.println(listOfNums.stream().mapToInt(Integer::intValue).sum());


    }
}
