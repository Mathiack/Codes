import java.util.Scanner;

public class calc {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        boolean exit = false;
        while (exit != true) {
            if (exit == true) {
                System.out.println("You choose exit");
                break;
            }
            System.out.println("N1: ");
            double n1 = scan.nextDouble();

            System.out.println("N2: ");
            double n2 = scan.nextDouble();

            System.out.println("Operation: ");
            String operation = scan.next();

            switch (operation) {
                case "+":
                    System.out.println(n1 + n2);
                    break;
                case "-":
                    System.out.println(n1 - n2);
                    break;
                case "*":
                    System.out.println(n1 * n2);
                    break;
                case "/":
                    System.out.println(n1 / n2);
                    break;
                default:
                    System.out.println("Invalid operation");
            }
        }
    }
}