interface Strategy {
    int execute(int a, int b);
}

class AddStrategy implements Strategy {
    @Override
    public int execute(int a, int b) {
        return a + b;
    }
}

class SubtractStrategy implements Strategy {
    @Override
    public int execute(int a, int b) {
        return a - b;
    }
}

class Context {
    private Strategy strategy;
    
    public void setStrategy(Strategy strategy) {
        this.strategy = strategy;
    }
    
    public int executeStrategy(int a, int b) {
        return strategy.execute(a, b);
    }
}

public class StrategyPattern {
    public static void main(String[] args) {
        Context context = new Context();
        
        context.setStrategy(new AddStrategy());
        System.out.println("Addition: " + context.executeStrategy(5, 3));
        
        context.setStrategy(new SubtractStrategy());
        System.out.println("Subtraction: " + context.executeStrategy(5, 3));
    }
}
