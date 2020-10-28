var lista = document.getElementsByTagName("ul")
console.log(lista)
// HTML Colection

var lista_01 = document.getElementsByTagName("ul")[0]
console.log(lista_01)

var lista_02 = document.getElementsByTagName("ul")[1]
console.log(lista_02)

var itens = document.getElementsByTagName("li")
console.log(itens)

var itens_lista_01 = lista_01.children
console.log(itens_lista_01)
// HTML Colection

var itens_lista_02 = lista_02.children
console.log(itens_lista_02)
// HTML Colection

var novo_item_01 = document.createElement("li")
novo_item_01.textContent = "Suco de Laranja"
lista_01.insertBefore(novo_item_01, itens_lista_01[0])
// Item inserido na primeira posição da primeira lista

var novo_item_02 = document.createElement("li")
novo_item_02.textContent = "Requeijão"
lista_02.insertBefore(novo_item_02, itens_lista_02[1])
// Item inserido na segunda posição da segunda lista