console.log(document.body.childNodes)

var lista = document.body.childNodes
alert(lista.length)
alert(lista[1].innerHTML)
alert(lista[1].nodeName)
alert(lista[1].nodeType)
// nodeType retorna: 
// 1 - Nó de Elemento
// 2 - Nó de Atributo
// 3 - Nó de Texto
// 8 - Nó de Comentário
alert(lista[1].nodeValue)
// nodeValue retorna
// Nulo - para nós de Elementos
// Valor do Atributo - para nós de Atributos
// Conteúdo - para nós de Textos e Comentários
alert(lista[3].childNodes[3].childNodes[0].nodeValue)