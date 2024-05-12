public class CriarConta {
    public static void main (String [] args) {
        Conta primeira_Conta = new Conta();
        primeira_Conta.saldo = 200;
        System.out.println("O saldo é: " + primeira_Conta.saldo + "R$");

        primeira_Conta.saldo += 100;
        System.out.println("O saldo atual é de: " + primeira_Conta.saldo);

        Conta segunda_Conta = new Conta();
        segunda_Conta.saldo = 50;

        System.out.println("O saldo da primeira conta é: " + primeira_Conta.saldo);
        System.out.println("O saldo da segunda conta é: " + segunda_Conta.saldo);
    }
}
