import java.util.Scanner;
public class mem {
    
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double[] num = new double[11];
        int i;

        for (i = 0; i <= 10; i++) {
            System.out.println("_____________________________");
            System.out.print("Digite um número (" + i + "): " );
            num[i] = scan.nextDouble();
            System.out.println(num[i]);
            System.out.println("_____________________________");
        }
    }
}
