import java.util.Scanner;

public class FitStringIn20Chars {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine();

        if (input.length() == 20){
            System.out.println(input);
        }
        else if (input.length() > 20){
            System.out.println(input.substring(0, 20));
        }
        else{
            System.out.printf(input.substring(0, input.length()));
            int moreNeeded = 20 - input.length();
            for (int i = 0; i < moreNeeded ; i++) {
                System.out.printf("*");

            }

        }

    }
}
