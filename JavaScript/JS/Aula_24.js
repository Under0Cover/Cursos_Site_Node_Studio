// Operadores Lógicos

// Comparação
// Operador Ternário

let x = 5
console.log(x == 5)
console.log(x == "5")
console.log(x === "5")
console.log(x != 5)
console.log(x !== 5)
console.log(x !== "5")

// Atribuição                       -> =
// Igualdade                        -> ==
// Extritamente igual               -> ===
// Extritamente igual, significa igual em valor e em tipo
// 5 e "5" são diferentes em tipos. Um é númerico e o outro string
// Pórem, são iguais no valor

console.log(x < 10)
console.log(x > 10)

let media = 6
let frequencia = 80
console.log(media >= 7 && frequencia >= 70)
console.log(media >= 7 || frequencia >= 70)

let idade = 16
let eleitor = (idade >= 16) ? "Pode votar" : "Não pode votar"
console.log(eleitor)

idade = 12
eleitor = !(idade <= 15) ? "Pode votar" : "Não pode votar"
console.log(eleitor)