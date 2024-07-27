import java.util.Stack;
import java.util.LinkedList;
import java.util.Queue;

public class StackQueueExample {
    public static void main(String[] args) {
        // Stack
        Stack<Integer> stack = new Stack<>();
        stack.push(1);
        stack.push(2);
        stack.push(3);
        System.out.println("Stack: " + stack);
        stack.pop();
        System.out.println("Stack after pop: " + stack);
        
        // Queue
        Queue<Integer> queue = new LinkedList<>();
        queue.add(1);
        queue.add(2);
        queue.add(3);
        System.out.println("Queue: " + queue);
        queue.poll();
        System.out.println("Queue after poll: " + queue);
    }
}
