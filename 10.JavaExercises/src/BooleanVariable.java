import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine().toLowerCase();

        if (Boolean.valueOf(input)){
            System.out.println("Yes");
        }
        else{
            System.out.println("No");
        }
    }
}
