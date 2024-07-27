import java.util.HashMap;
import java.util.Map;

public class AuthorizationExample {
    private static Map<String, String> users = new HashMap<>();
    
    static {
        users.put("admin", "password123");
        users.put("user", "password456");
    }
    
    public static void main(String[] args) {
        String username = "admin";
        String password = "password123";
        
        if (authenticate(username, password)) {
            System.out.println("Authentication successful");
            
            if (authorize(username, "admin")) {
                System.out.println("Authorization successful: Access granted");
            } else {
                System.out.println("Authorization failed: Access denied");
            }
        } else {
            System.out.println("Authentication failed");
        }
    }
    
    private static boolean authenticate(String username, String password) {
        return users.containsKey(username) && users.get(username).equals(password);
    }
    
    private static boolean authorize(String username, String role) {
        // Simple authorization check based on username
        return "admin".equals(username) && "admin".equals(role);
    }
}
