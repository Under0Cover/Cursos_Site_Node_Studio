console.log(document.getElementById("paragrafo_01"))
console.log(document.getElementById("paragrafo_01").innerHTML)

var paragrafo = document.getElementById("paragrafo_01").innerHTML
console.log(paragrafo)

var paragrafo = document.getElementById("paragrafo_01").innerHTML = "Curso de JavaScript"
console.log(paragrafo)

var paragrafo = document.getElementById("paragrafo_01")
paragrafo.style.color = "red"
paragrafo.style.backgroundColor = "#333"
paragrafo.style.height = "400px"
paragrafo.style.width = "200px"