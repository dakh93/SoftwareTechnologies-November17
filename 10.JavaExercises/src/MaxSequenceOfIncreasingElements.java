import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        String[] input = scan.nextLine().split("\\s+");
        String tempLongest = "";
        String currLongest = "";
        int cnt = 1;
        int tempCnt = 0;
        for (int i = 0; i < input.length - 1  ; i++) {
            int currNum = Integer.parseInt(input[i]);
            int plusNum = Integer.parseInt(input[i + 1]);
            if (currNum < plusNum){

                currLongest += input[i] + " ";
                cnt++;
            }
            else {
                if (cnt > tempCnt) {
                    tempCnt = cnt;
                    currLongest += input[i] + " ";
                    tempLongest = currLongest;
                    currLongest = "";
                }
                cnt = 0;
            }
        }
        int beforeLast = Integer.parseInt(input[input.length - 2]);
        int last = Integer.parseInt(input[input.length - 1]);
            if (beforeLast < last) {
                currLongest += input[input.length - 1];
            }

        if (currLongest.trim().toCharArray().length > tempLongest.trim().toCharArray().length ){
            tempLongest = currLongest;
        }

        System.out.println(tempLongest);
    }
}
