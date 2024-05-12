public class Teste_Referencia {
    public static void main (String [] args) {
        Conta primeira_Conta = new Conta();
        primeira_Conta.saldo = 300;

        System.out.println("O saldo é: " + primeira_Conta.saldo);

        Conta segunda_Conta = primeira_Conta;

        System.out.println("O saldo da segunda conta é: " + segunda_Conta.saldo);

        segunda_Conta.saldo += 100;
        System.out.println("O novo saldo da segunda conta é: " + segunda_Conta.saldo);

        System.out.println("O novo saldo da segunda conta é: " + segunda_Conta.saldo);

        if (primeira_Conta == segunda_Conta) {
            System.out.println("São a mesma coisa");
        } else {
            System.out.println("São diferentes");
        }

        System.out.println(primeira_Conta);
        System.out.println(segunda_Conta);
    }
}