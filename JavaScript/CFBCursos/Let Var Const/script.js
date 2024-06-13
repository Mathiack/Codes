"use strict"
/*Se for compilar com o NODEJS, deixe comentado as linhas 16 até 23, por que senão elas vão dar erro,
impedindo assim de terminar a copilação do código.*/

if (true) {
    var nome="Thunder"
}
//usar VAR permite o uso, ainda que definido dentro de uma estrutura de decisão,
//o seu uso fora da mesma.
console.log(nome)


//-----------------------------


/*if (true) {
    let name="Thunder"
}
// o LET é o contrário do VAR, pois não permite o uso fora da estrutura.
//Tanto que ainda que o código funcione usando o NODEJS na minha máquina,
//' name ' não é exibida.
console.log(name)
*/

//-----------------------------

function testeLET() { //função n sei pq.
    let Nome="Thunder"
    if (true) {
        console.log("dentro do IF: "+ Nome)
    }
    console.log("dentro da FUNCTION: "+ Nome)
}

testeLET()

//console.log("dentro de NADA: "+ Nome)
//   ^   aqui vai dar erro, ent deixe comentado
// ou tire-o para ver o que acontece, caso você seja um especialista da NASA, e saiba
//retirar os comentários de um código.

//-----------------------------
console.log("-----------------------------")
function testeVAR() { //função n sei pq.
    var NOme="Thunder"
    if (true) {
        console.log("dentro do IF: "+ NOme)
    }
    console.log("dentro da FUNCTION: "+ NOme)
}

testeVAR()
//________________________________________________________________________

//pode-se, ainda mudar o conteúdo de uma variável mesmo após definí-la. Veja:
console.log("__________________________")
let NOME = "Sigma do Sul" //defini
NOME = "Thunder" // e mudei logo após.

// ainda é possível mudar o VALOR dela, ou seja, se printava uma STRING, pode printar INT, DOUBLE, ETC.

console.log(NOME)

//________________________________________________________________________

// vamos testar o CONST, valor inalterável, tanto que o nome já diz:
//                    CONST    CONSTANTE
console.log("__________________________")

const curso = "É o curso"// defini 
// curso = "curso muda vidas"
//   ^   tentei mudar aqui, mas ele dá erro, se quiser ver, descomente ali.

console.log(curso)