import java.net.*;
import java.io.*;

public class SocketExample {
    public static void main(String[] args) {
        try {
            // Client
            Socket socket = new Socket("localhost", 8080);
            PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
            BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
            
            out.println("Hello, server!");
            System.out.println("Server response: " + in.readLine());
            
            socket.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
