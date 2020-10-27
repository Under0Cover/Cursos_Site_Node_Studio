var paragrafo = document.createElement("p")
paragrafo.innerHTML = "Olá pessoal"
document.getElementById("conteudo").appendChild(paragrafo)

var imagem = document.createElement("img")
imagem.src = "imagens/js.png"
document.getElementById("conteudo").appendChild(imagem)

document.getElementById("conteudo").removeChild(paragrafo)