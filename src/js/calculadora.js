function insert(num){
    var previousResult = document.getElementById('resultado').value;
    document.getElementById('resultado').value = previousResult + num;
}
function clean(){
    document.getElementById('resultado').value = 0;
}
function back(){
    var resultado = document.getElementById('resultado').value;
    document.getElementById('resultado').value = resultado.substring(0, resultado.length -1);
}
