import java.util.Arrays;
import java.util.Collections;
import java.util.Scanner;

public class LargestThreeNumbers {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String nums = scan.nextLine();

        String[] arrayNums = nums.split("\\s+");
        int[] numbers = new int[arrayNums.length];

        for (int i = 0; i < arrayNums.length; i++) {
            numbers[i] = Integer.parseInt(arrayNums[i]);
        }
        Arrays.sort(numbers);
        if (numbers.length > 2){
            for (int i = numbers.length - 1; i >numbers.length - 4 ; i--) {
                System.out.println(numbers[i]);
            }

        }
        else{
            for (int i = numbers.length - 1; i >= 0 ; i--) {
                System.out.println(numbers[i]);
            }
        }

    }
}
