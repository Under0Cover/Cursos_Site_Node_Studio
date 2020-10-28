// Variáveis

var nome = "Tales"
console.log(nome)
var sobrenome = "Oliver"
console.log(sobrenome)
var idade = 36
console.log(idade)

if (true) {
    nome = "Pedro"
    console.log(nome)
    sobrenome = "Martins"
    console.log(sobrenome)
    idade = 19
    console.log(idade)
    var escopo = "Escapou"
    console.log(escopo)
    let veiculo = "Bike"
    console.log(veiculo)
}

console.log("Fora do Escopo")
console.log(escopo)
console.log(veiculo)