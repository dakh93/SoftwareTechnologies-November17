import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class PhonebookUpgrade {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        Map<String, String> phoneBook = new TreeMap<>();
        while (true){
            String input = scan.nextLine();


            if (input.equals("END")){
                break;
            }
            //PRINT ALL CONTACTS
            if (input.equals("ListAll")){
                for (Map.Entry<String, String> entry : phoneBook.entrySet()){
                    System.out.println(entry.getKey() + " -> " + entry.getValue());
                }
                continue;
            }
            String[] splittedInput = input.split(" ");

            String command = splittedInput[0];
            String name = splittedInput[1];


            //ADD
            if (command.equals("A")){
                String phoneNum = splittedInput[2];

                phoneBook.put(name, phoneNum);

            }
            //SEARCH
            if (command.equals("S")) {
                if (phoneBook.containsKey(name)) {
                    System.out.println(name + " -> " + phoneBook.get(name));
                } else {
                    System.out.println("Contact " + name + " does not exist.");
                }
            }
        }
    }
}
