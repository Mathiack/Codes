import java.util.Scanner;

public class calc {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double n1;
        double n2;
        String operation;

        boolean exit = false;
        while (exit != true) {
            if (exit == true) {
                System.out.println("You choose exit");
                break;
            }
            System.out.println("N1: ");
            n1 = scan.nextDouble();

            System.out.println("N2: ");
            n2 = scan.nextDouble();

            System.out.println("Operation: ");
            operation = scan.next();

            switch (operation) {
                case "+":
                    soma(n1, n2);
                    break;
                case "-":
                    sub(n1, n2);
                    break;
                case "*":
                    mult(n1, n2);
                    break;
                case "/":
                    div(n1, n2);
                    break;
                case "%":
                    mod(n1, n2);
                default:
                    System.out.println("Invalid operation");
            }
        }
    }

    public static double soma(double n1, double n2) {
        double soma = n1 + n2;
        return soma;
    }

    public static double sub(double n1, double n2) {
        double sub = n1 - n2;
        return sub;
    }

    public static double mult(double n1, double n2) {
        double mult = n1 * n2;
        return mult;
    }

    public static double div(double n1, double n2) {
        double div = n1 / n2;
        return div;
    }

    public static double mod(double n1, double n2) {
        double mod = n1 % n2;
        return mod;
    }
}