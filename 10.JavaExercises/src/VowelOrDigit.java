
import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args){


        Scanner scan  = new Scanner(System.in);
        String vowels = "aeiouy";
        String input = scan.nextLine();
        String symbol = input;
        if (symbol.matches("^-?\\d+$")){
            System.out.println("digit");
        }
        else if (vowels.contains(symbol)){
            System.out.println("vowel");
        }
        else {
            System.out.println("other");
        }
    }
}
