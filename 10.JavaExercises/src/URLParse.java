import java.util.Scanner;

public class URLParse {
    public static void main(String[] args){

        Scanner scan = new Scanner(System.in);

        String protocol = "";
        String server = "";
        String resource = "";


        String text = scan.nextLine();
        String[] input;

        if (text.contains("://")){
            input = text.split("://");
            protocol = input[0];
            text = text.replace(protocol + "://", "");
        }

        if (text.contains("/")){
            String[] domain = text.split("/");
            server = domain[0];
            text = text.replace(server + "/", "");
            resource = text;
        }
        else{
            server = text;
        }





        System.out.println("[protocol] = \"" + protocol + "\"" );
        System.out.println("[server] = \"" + server + "\"" );
        System.out.println("[resource] = \"" + resource + "\"" );



    }
}
