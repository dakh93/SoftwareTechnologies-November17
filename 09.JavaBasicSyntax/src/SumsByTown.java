import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class SumsByTown {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        int num = Integer.parseInt(scan.nextLine());

        Map<String,Double> towns = new HashMap<>();
        for (int i = 0; i < num; i++) {
            String[] currInput = scan.nextLine().split("\\s+\\|");
            String town  = currInput[0];
            double income = Double.parseDouble(currInput[1]);

            if (!towns.containsKey(town)){
                towns.put(town, income);
            }
            else{
                towns.put(
                        town,
                        towns.get(town).doubleValue() + income);
            }
        }
        Map<String, Double> sortedMap = new TreeMap<>(towns);
        for (Map.Entry<String, Double> entry : sortedMap.entrySet())
        {
            System.out.println(
                     entry.getKey() + " -> " + entry.getValue());
        }
    }
}
