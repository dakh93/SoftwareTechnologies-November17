import java.util.Arrays;
import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String firstInput = scan.nextLine().replaceAll("\\s+", "");

        String secondInput = scan.nextLine().replaceAll("\\s+", "");


        char[] firstChar = firstInput.trim().toCharArray();
        char[] secondChar = secondInput.trim().toCharArray();


        if (Arrays.equals(firstChar, secondChar)){
            System.out.println(firstInput);
            System.out.println(firstInput);
            return;
        }
        else{

            int lenghtMin = Math.min(firstInput.length(), secondInput.length());
            int lenghtMax = Math.max(firstInput.length(), secondInput.length());
            if (lenghtMax == lenghtMin) {

                for (int i = 0; i < lenghtMin; i++) {
                    if ((int)firstChar[i] < (int)secondChar[i]){
                        System.out.println(firstInput);
                        System.out.println(secondInput);
                        return;
                    }
                    else if ((int)firstChar[i] > (int)secondChar[i]){
                        System.out.println(secondInput);
                        System.out.println(firstInput);
                        return;
                    }
                }
            }
            else{
                boolean diff = false;
                for (int i = 0; i < lenghtMin; i++) {
                    if ((int)firstChar[i] == (int)secondChar[i]){
                        continue;
                    }
                    else{
                        diff = true;
                    }
                    if (diff == true){
                        if ((int)firstChar[i] > (int)secondChar[i]){
                            System.out.println(secondInput);
                            System.out.println(firstInput);
                            return;
                        }
                        else{
                            System.out.println(firstInput);
                            System.out.println(secondInput);
                            return;
                        }
                    }
                }
            }
            if (firstChar.length < secondChar.length){
                System.out.println(firstInput);
                System.out.println(secondInput);
            }
            else{
                System.out.println(secondInput);
                System.out.println(firstInput);
            }


        }
    }
}
