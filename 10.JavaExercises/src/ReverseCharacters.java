import java.util.ArrayList;
        import java.util.Arrays;
        import java.util.Collections;
        import java.util.Scanner;

public class ReverseCharacters {
    public static void main (String[] args){

        Scanner scan = new Scanner(System.in);

        ArrayList<String> lettersArray = new ArrayList<String>();
        StringBuilder result = new StringBuilder();
        for (int i = 0; i < 3; i++) {
            String currLetter = scan.nextLine();
            result.append(currLetter);
        }
        result.reverse();

        System.out.println(result);



    }
}
