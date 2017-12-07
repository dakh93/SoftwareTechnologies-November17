import java.util.Scanner;

public class IntegerToHexAndBinary {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        int input = Integer.parseInt(scan.nextLine());

        String hexConverted = Integer.toHexString(input);
        String binaryConverted = Integer.toBinaryString(input);

        System.out.println(hexConverted.toUpperCase());
        System.out.println(binaryConverted);

    }
}
