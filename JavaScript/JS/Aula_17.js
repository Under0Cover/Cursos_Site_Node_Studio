var lista_01 = document.getElementsByTagName("ul")[0]
var itens_01 = lista_01.children
var novo_item_01 = document.createElement("li")
novo_item_01.textContent = "Suco de Maracujá"
lista_01.replaceChild(novo_item_01, itens_01[1])


var lista_02 = document.getElementsByTagName("ul")[1]
var itens_02 = lista_02.children
var novo_item_02 = document.createElement("li")
novo_item_02.textContent = "Ovo"
lista_02.replaceChild(novo_item_02, itens_02[1])