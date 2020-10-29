// Objeto 

// Um objeto é uma coleção de propriedades, e uma propriedade é uma associação entre um nome (ou chave ) e um valor. Um valor de propriedade pode ser uma função, que é então considerada um método do objeto.

let pessoa = {
    nome: "Jonathas",
    idade: 35,
    feliz: true,
    pets: ["cachorro", "gato"],
    carros: {
        camaro: {
            placa: "123456",
            cor: "verde"
        },
        uno: {
            placa: "987654",
            cor: "branco"
        }
    },
    andar: function (km) {
        alert(pessoa.nome + " andou " + km + " Km!")
    }
}

console.log(pessoa)
console.log(pessoa.nome)
console.log(pessoa.idade)
console.log(pessoa.feliz)
console.log(pessoa.pets)
console.log(pessoa.pets[0])
console.log(pessoa.pets[1])

pessoa.nome = "Carlos"
pessoa.pets[0] = "Papagaio"
console.log(pessoa.nome)
console.log(pessoa.pets[0])

console.log(pessoa.carros)
console.log(pessoa.carros.camaro)
console.log(pessoa.carros.camaro.placa)
console.log(pessoa.carros.camaro.cor)
console.log(pessoa.carros.uno.placa)
console.log(pessoa.carros.uno.cor)
console.log(pessoa.carros.uno)

pessoa.andar(20)