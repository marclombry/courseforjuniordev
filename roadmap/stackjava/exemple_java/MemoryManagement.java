/*
public class MemoryManagement {
    public static void main(String[] args) {
        Runtime runtime = Runtime.getRuntime();
        
        // Print initial memory usage
        long initialMemory = runtime.totalMemory() - runtime.freeMemory();
        System.out.println("Initial memory usage: " + initialMemory / (1024 * 1024) + " MB");
        
        // Create a large number of objects to simulate memory usage
        for (int i = 0; i < 1000000; i++) {
            String str = new String("Memory management example");
        }
        
        // Run garbage collector
        runtime.gc();
        
        // Print memory usage after garbage collection
        long finalMemory = runtime.totalMemory() - runtime.freeMemory();
        System.out.println("Final memory usage: " + finalMemory / (1024 * 1024) + " MB");
    }
}
*/