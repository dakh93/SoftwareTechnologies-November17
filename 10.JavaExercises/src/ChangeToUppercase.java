import java.util.Scanner;

public class ChangeToUppercase {
    public static void main(String[] args){
        Scanner scan  = new Scanner(System.in);

        String input = scan.nextLine();

        String startTag = "<upcase>";
        String stopTag = "</upcase>";

        String[] textArr = input.split("<upcase>");

        while (true){
            int start = input.indexOf(startTag);
            int stop = input.indexOf(stopTag);

            if (start < 0 || stop < 0){
                break;
            }

            String textToChange = input.substring(start, stop + 9);
            String upperCase = textToChange.substring(8, textToChange.length() - 9).toUpperCase();
            input = input.replace(textToChange,upperCase);
        }
        System.out.println(input);
    }
}
