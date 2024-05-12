public class Teste_Metodo {
    public static void main (String [] args) {
        Conta contaDeAlguem = new Conta();

        contaDeAlguem.depositar(50);
        System.out.println(contaDeAlguem.saldo);
        contaDeAlguem.saque(30);
        System.out.println(contaDeAlguem.saldo);
        contaDeAlguem.saque(1000);
        System.out.println(contaDeAlguem.saldo);

        Conta contaDaMaria = new Conta();
        contaDaMaria.depositar(1000);

        contaDaMaria.transferencia(5000, contaDeAlguem);

        System.out.println("Após a trasferência, o saldo restante é de: " + contaDaMaria.saldo);
        System.out.println("Após a trasferência, o saldo restante é de: " + contaDeAlguem.saldo);
    }
}