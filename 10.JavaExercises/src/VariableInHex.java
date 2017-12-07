import java.util.Scanner;

public class VariableInHex {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine();

        int convertToInt = Integer.parseInt(input, 16);
        System.out.println(convertToInt);
    }
}