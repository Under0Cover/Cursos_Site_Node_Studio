document.getElementById("botao_set").addEventListener("click", function () {
    document.getElementById("titulo").setAttribute("class", "red")
})

document.getElementById("botao_remove").addEventListener("click", function () {
    document.getElementById("titulo").removeAttribute("class")
})

document.getElementById("botao_get").addEventListener("click", function () {
    var atributo = document.getElementById("titulo").getAttribute("class")
    document.getElementById("classe").innerHTML = atributo
})