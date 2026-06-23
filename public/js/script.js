let data = new Date();
let diaNumero = data.getDay() + 1;

let ativo = document.querySelector(".semana li:nth-child("+diaNumero+")")
ativo.classList.add('atual');

