import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        char[] input = scan.nextLine().toCharArray();

        for (int i = 0; i < input.length; i++) {

            int index = (int)input[i] - 97;
            System.out.println(input[i] + " -> " + index);

        }
    }
}
