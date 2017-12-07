import java.util.Scanner;

public class MaxSeqOfEqualElements {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String[] input = scan.nextLine().split("\\s+");
        int cnt = 1;
        int tempCnt = 0;
        String tempLongest = "";
        String currLongest = "";

        for (int i = 1; i < input.length  ; i++) {
            if (input[i].equals(input[i - 1])){
                cnt++;
                currLongest = input[i - 1];
            }
            else {
                if (tempCnt < cnt) {
                    tempLongest = currLongest;
                    tempCnt = cnt;

                }
                cnt = 1;
            }
        }
        if (tempCnt < cnt) {
            tempLongest = currLongest;
            tempCnt = cnt;
        }
        for (int i = 0; i < tempCnt; i++) {
            System.out.printf(tempLongest + " ");

        }
    }
}
