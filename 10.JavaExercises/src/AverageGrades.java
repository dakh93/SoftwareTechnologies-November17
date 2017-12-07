import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.Scanner;
import java.util.stream.Collectors;



public class AverageGrades {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int studentNum = Integer.parseInt(scan.nextLine());
        ArrayList<Student> students = new ArrayList<>();
        for (int i = 0; i < studentNum; i++) {
            String[] currStud = scan.nextLine().split(" ");
            String name = currStud[0];

            ArrayList<Double> grades = Arrays.stream(currStud).skip(1)
                    .map(Double::valueOf)
                    .collect(Collectors.toCollection(ArrayList::new));
            Student stud = new Student(name, grades);
            students.add(stud);

        }

        students.stream()
                .filter(student -> student.getAverage() >= 5.00)
                .sorted(Comparator.comparing(Student::getName)
                .thenComparing(Student::getAverage, Comparator.reverseOrder())
                ).forEach(student -> {
            System.out.printf("%s -> %.2f%n", student.getName(), student.getAverage());

        });

    }
}
    class Student {
        private String name;
        private ArrayList<Double> grades;


        Student(String name, ArrayList<Double> grades) {
            this.name = name;
            this.grades = grades;
        }

        public String getName() {
            return name;
        }

        public double getAverage() {
            double sum = 0.0;
            for (int i = 0; i < grades.size(); i++) {
                sum += grades.get(i);
            }
            double average = sum / (grades.size());
            return average;
        }
    }



