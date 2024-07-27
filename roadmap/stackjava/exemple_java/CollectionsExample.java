import java.util.ArrayList;
import java.util.HashSet;
import java.util.HashMap;

public class CollectionsExample {
    public static void main(String[] args) {
        // List
        ArrayList<String> list = new ArrayList<>();
        list.add("apple");
        list.add("banana");
        list.add("cherry");
        System.out.println("List: " + list);
        
        // Set
        HashSet<String> set = new HashSet<>();
        set.add("apple");
        set.add("banana");
        set.add("cherry");
        System.out.println("Set: " + set);
        
        // Map
        HashMap<String, Integer> map = new HashMap<>();
        map.put("apple", 1);
        map.put("banana", 2);
        map.put("cherry", 3);
        System.out.println("Map: " + map);
    }
}
