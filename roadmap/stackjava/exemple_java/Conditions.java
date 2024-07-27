public class Conditions {
    public static void main(String[] args) {
        int number = 10;
        
        if (number > 0) {
            System.out.println("The number is positive.");
        } else if (number < 0) {
            System.out.println("The number is negative.");
        } else {
            System.out.println("The number is zero.");
        }
        
        switch (number) {
            case 0:
                System.out.println("The number is zero.");
                break;
            case 10:
                System.out.println("The number is ten.");
                break;
            default:
                System.out.println("The number is neither zero nor ten.");
        }
    }
}
