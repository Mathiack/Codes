/*


+
-
/
*
%
++
--
+=
-=
/=
*=

*/

/*let num1, num2, num3

//num1=num2=num3=10 define tudo de uma vez, tudo igual.

console.log(num1)
console.log(num2)
console.log(num3)*/

let num=0, num2=0, soma, menos, div, mult, exp

num1 = 5
num2 = 10

soma = num1 + num2
menos = num1 - num2
div = num1 / num2
mult = num1 * num2
rest = num2 % num1
//exp = (num1 + num2) / ((num1 * 2) - 10) 
// ^    incrivelmente, consegui fazer isso aqui dar Infinito, fazendo de um modo aleatório kkkkk
// o NODEJS vai retornar ' Infinity ' pq vai ser 15 / 0

console.log("Soma: " + soma)
console.log("Subtração: " + menos)
console.log("Divisão: " + div)
console.log("Multiplicação: " + mult)
//console.log("Expresão Numérica: " + exp)
console.log("Resto de Divisão: " + rest)
