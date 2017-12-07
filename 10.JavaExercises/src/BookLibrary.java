import java.util.LinkedList;
import java.util.List;
import java.util.Scanner;

public class BookLibrary {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int n = Integer.parseInt(scan.nextLine());

        Library library = new Library();
        Library book = new Library();
        List<Book> books = new LinkedList<>();
        for (int i = 0; i < n; i++) {
            String[] input = scan.nextLine().split("\\s+");
            Book currBook = ReadBook(input);
            books.add(currBook);
        }
        library.books = books;
        PrintBooksPriceSum(library);
    }

    private static void PrintBooksPriceSum(Library library) {
        library.books.stream().map(x -> x.author).or
    }

    private static Book ReadBook(String[] input) {
        Book curBook = new Book();

        curBook.title = input[0];
        curBook.author = input[1];
        curBook.publisher = input[2];
        curBook.releaseDate = input[3];
        curBook.ISBN = input[4];
        curBook.price = Double.parseDouble(input[5]);

        return curBook;


    }
}
     class Library{
        public String name;
        public List<Book> books;
    }
    class Book  {
        String title;
        String author;
        String publisher;
        String releaseDate;
        String ISBN;
        double price;
    }
}
