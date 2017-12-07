
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.*;

public class CountWorkingDays {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        ArrayList<Date> holidays = holidays();
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        LocalDate startDate = LocalDate.parse(scan.nextLine(), formatter);
        LocalDate endDate = LocalDate.parse(scan.nextLine(), formatter);

        int workingDays = 0;

        while (!startDate.isAfter(endDate)) {
            int day = startDate.getDayOfMonth();
            int month = startDate.getMonthValue();
            Date currDate = new Date(day, month);

            boolean isHoliday = false;
            for (int i = 0; i < holidays.size(); i++) {

                if (currDate.day == holidays.get(i).day &&
                        currDate.month == holidays.get(i).month){
                    isHoliday = true;
                    break;
                }

            }
            String dayOfWeek = startDate.getDayOfWeek().toString().toUpperCase();
            if (!dayOfWeek.equals("SATURDAY") &&
                    !dayOfWeek.equals("SUNDAY") &&
                    !isHoliday) {
                workingDays++;
            }
            startDate = startDate.plusDays(1);
        }
        System.out.println(workingDays);
    }

        private static ArrayList<Date> holidays () {
            Date[] holidays = new Date[]{
                    new Date(1, 1), new Date(3, 3), new Date(1, 5), new Date(6, 5),
                    new Date(24, 5), new Date(6, 9), new Date(22, 9), new Date(1, 11),
                    new Date(24, 12), new Date(25, 12), new Date(26, 12)
            };
            return new ArrayList<>(Arrays.asList(holidays));
        }
    }

    class Date {
         int day;
         int month;

        public Date(int day, int month){
            this.day = day;
            this.month = month;
        }
    }

