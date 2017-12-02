import java.util.Scanner;

public class ThreeIntegersSum {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        int num1 = scan.nextInt();
        int num2 = scan.nextInt();
        int num3 = scan.nextInt();

        String result = CheckTwoIntEqualsThird(num1 , num2, num3);
        System.out.println(result);

    }
   public static String CheckTwoIntEqualsThird(int num1, int num2, int num3){
        String result = "";
        boolean firstBig = num1 ==(num3 + num2);
        boolean secondBig = num2 ==(num1 + num3);
        boolean thirdBig = num3 ==(num1 + num2);

        if (firstBig){
            result =
                    (String.format("%d + %d = %d",
                            Math.min(num2, num3),
                            Math.max(num2, num3), num1));

        }
        else if (secondBig){
            System.out.println
                    (String.format("%d + %d = %d",
                            Math.min(num1, num3),
                            Math.max(num1, num3), num2));

        }
        else if (thirdBig){
            result =
                    (String.format("%d + %d = %d",
                            Math.min(num2, num1),
                            Math.max(num2, num1), num3));

        }
        else {
            result = "No";
        }
        return result;

    }

}
