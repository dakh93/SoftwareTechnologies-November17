import java.util.Scanner;

public class SymetricNumbers {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        int num = scan.nextInt();

        for (int i = 1; i <= num ; i++) {
            String currNum = "" + i;
            StringBuilder numToReverse =
                new StringBuilder(currNum);
            String reverse = numToReverse.reverse().toString();

            if (currNum.equals(reverse)){
                System.out.printf("%s ", currNum);
            }

        }
    }
}
