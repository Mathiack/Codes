/*saldo, agencia, numero, titular*/
public class Conta {
    double saldo;
    int agencia;
    int numero;
    String titular;

    void depositar(double valor) {
        saldo += valor;
        System.out.println("Deposito de " + valor + "R$ feito");
    }

    public boolean saque (double valor) {
        if (saldo >= valor) {
            saldo = saldo - valor;
            System.out.println("Saque de " + valor + "R$ feito");
            return true;
        } else {
            System.out.println("Não há saldo suficiente, saque negado");
            return false;
        } 
    }

    public boolean transferencia(double valor, Conta destino) {
        if (saldo >= valor) {
            saldo -= valor;
            destino.depositar(valor);
            return true;
        } else {
            System.out.println("Transferencia de: " + valor + " negada");
            return false;
        }
    }
}
