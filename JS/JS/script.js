function mostrarNome(){
    let nome= document.getElementById("n").value;
     document.getElementById("nome").innerHTML = "Nome digitado: " + nome;


}
function somar(){
    let n1 = Number(document.getElementById("n1").value);
    let n2 = Number(document.getElementById("n2").value);
    let soma = n1 + n2;
    document.getElementById("resultado").innerHTML = "Resultado: " + soma;
}
function mostraMsg(){
    alert("Bom Dia!");
}