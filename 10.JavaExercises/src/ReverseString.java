import java.util.Arrays;
import java.util.Scanner;

public class ReverseString {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        char[] input = scan.nextLine().toCharArray();
        StringBuilder reversed = new StringBuilder();
        for (int i = input.length - 1; i >= 0 ; i--) {
            reversed.append(input[i]);
        }
        System.out.println(reversed);
    }
}
