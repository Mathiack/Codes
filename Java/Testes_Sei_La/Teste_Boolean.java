package Testes_Sei_La;
public class Teste_Boolean {
    public static void main(String[] args) {
        System.out.println("Testando condicionais");
        int idade = 10;
        int quant_Pessoa = 1;
        boolean acompanhado;

        if (quant_Pessoa >= 2 ) {
            acompanhado = true;
        } else {
            acompanhado = false;
        }
        if (idade >= 18 && acompanhado == true) {
            System.out.println("Você pode comprar");
        } else {
            System.out.println("Você não pode comprar");
        }
    }
}