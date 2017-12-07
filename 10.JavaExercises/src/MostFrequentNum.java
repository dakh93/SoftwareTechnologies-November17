import java.util.Arrays;
import java.util.Scanner;

public class MostFrequentNum {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        int[] nums = Arrays.stream(scan.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int tempLongest = 0;


        int tempNum = 0;
        int currNum = 0;

        for (int i = 0; i < nums.length ; i++) {
            int currLongest = 0;
            for (int j = 0; j < nums.length; j++) {
                if (nums[i] == nums[j]){
                    currLongest++;
                }
            }
            if (currLongest > tempLongest){
                tempLongest = currLongest;
                tempNum = nums[i];
            }

        }
        System.out.println(tempNum);
    }
}
