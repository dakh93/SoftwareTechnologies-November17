import java.util.Scanner;

public class CensorEmailAddress {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String emailToHide = scan.nextLine();
        String input = scan.nextLine();
        String[] splitedEmail = emailToHide.split("@");
        boolean contains = input.contains(emailToHide);

        StringBuilder replacer = new StringBuilder();

        for (int i = 0; i < splitedEmail[0].length(); i++) {
            replacer.append("*");
        }
        replacer.append("@");
        replacer.append(splitedEmail[1]);
        if (contains){
          input = input.replaceAll(emailToHide,replacer.toString());
        }
        System.out.println(input);
    }
}
