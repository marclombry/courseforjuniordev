/*
import java.io.*;
import java.net.*;

public class RestApiServer {
    public static void main(String[] args) throws IOException {
        ServerSocket serverSocket = new ServerSocket(8080);
        System.out.println("Server started on port 8080");

        while (true) {
            Socket clientSocket = serverSocket.accept();
            BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
            PrintWriter out = new PrintWriter(clientSocket.getOutputStream(), true);

            String requestLine;
            while ((requestLine = in.readLine()) != null) {
                if (requestLine.isEmpty()) {
                    break;
                }
                System.out.println(requestLine);
            }

            out.println("HTTP/1.1 200 OK");
            out.println("Content-Type: text/plain");
            out.println();
            out.println("Hello, World!");

            in.close();
            out.close();
            clientSocket.close();
        }
    }
}
*/