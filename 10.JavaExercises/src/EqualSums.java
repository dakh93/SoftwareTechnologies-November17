import java.util.Arrays;
import java.util.Scanner;

public class EqualSums {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        int[] nums = Arrays.stream(scan.nextLine().split(" "))
        .mapToInt(Integer::parseInt).toArray();

        for (int i = 0; i < nums.length ; i++) {
            int leftSum = 0;
            int rightSum = 0;

            int currNum = nums[i];
            //RIGHT SUM
            for (int j = 0; j < i; j++) {
                rightSum += nums[j];
            }

            //LEFT SUM
            for (int j = i + 1; j < nums.length; j++) {
                leftSum += nums[j];
            }

            if (rightSum == leftSum) {
                System.out.println(i);
                return;
            }

        }
        System.out.println("no");
    }
}
