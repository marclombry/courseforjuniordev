import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.sql.ResultSet;

public class DatabaseExample {
    public static void main(String[] args) {
        try {
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/mydatabase", "root", "password");
            Statement stmt = conn.createStatement();
            
            // Create
            stmt.executeUpdate("INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')");
            
            // Read
            ResultSet rs = stmt.executeQuery("SELECT * FROM users");
            while (rs.next()) {
                System.out.println(rs.getInt("id") + ": " + rs.getString("name") + " - " + rs.getString("email"));
            }
            
            // Update
            stmt.executeUpdate("UPDATE users SET email='john.doe@example.com' WHERE name='John Doe'");
            
            // Delete
            stmt.executeUpdate("DELETE FROM users WHERE name='John Doe'");
            
            conn.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
