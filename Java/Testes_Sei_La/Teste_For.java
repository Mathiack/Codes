package Testes_Sei_La;
public class Teste_For {
    public static void main (String [] args) {

        for (int contador = 0; contador <= 10; contador ++) {
            /*
            é o mesmo que:
            while (contador <= 10) {
            System.out.println(contador);
            contador += 1;
            //contador = contador + 1;
            //contador ++;
            } */
            System.out.println(contador);
        }
        // se fizer o sout aqui fora da errado, pq foi inicializado dentro do FOR;
    }
}