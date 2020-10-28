// Tipos de dados

// Esses são os tipos primitivos
// strings
var nome = "Tales Oliver"
console.log(typeof(nome))

// number
var idade = 36
console.log(typeof(idade))

// boolean
var solteiro = true
console.log(typeof(solteiro))

// Esses não são primitivos
// array
var frutas = ["goiaba", "maça", "banana"]
console.log(typeof(frutas))

// object
var carro = new Object()
carro.fabricacao = "1990"
carro.cor = "Azul"
carro.modelo = "Monza"
console.log(typeof(carro))
console.log(carro)
console.log(carro.fabricacao)
console.log(carro.cor)
console.log(carro.modelo)

// function
var soma = function (a, b) {return a + b}
console.log(soma(5, 13))
console.log(typeof(soma(5, 13)))
console.log(typeof(soma))