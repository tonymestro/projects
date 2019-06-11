/*
    Horas Atuais
*/

// Utiliza o script depois da página estar totalmente carregada
window.onload = function() {
    // Define a função a ser chamada e o intervalo de tempo
    setInterval(horaDeAgora, 1000);
}
// Função com o objeto e a variável de tempo
function horaDeAgora() {
    // Cria o objeto do tipo Date
    var intervalo = new Date();
    // Cria a variável que receberá as informações que serão apresentadas
	var dia     = intervalo.getDate();           // 1-31
	var mes     = intervalo.getMonth();          // 0-11 (zero=janeiro)
	var ano4    = intervalo.getFullYear();       // 4 dígitos
	var horas   = intervalo.getHours();
	var minutos = intervalo.getMinutes();
	var segundos= intervalo.getSeconds();
	
	var mesF = (mes+1);

	//Colocando zeros à esquerda
	if (dia < 10){
		dia = '0' + dia;
	}
	if (mesF < 10){
		mesF = '0' + mesF;
	}
	if (horas < 10){
		horas = '0' + horas;
	}
	if (minutos < 10){
		minutos = '0' + minutos;
	}
	if (segundos < 10){
		segundos = '0' + segundos;
	}


    var tempo = dia + '/' + mesF + '/' + ano4 + ' - ' + horas + ":" + minutos + ":" + segundos;
    // Utiliza o elemento HTML com id tempo para apresentar os valores da variável tempo
    document.getElementById("tempo").innerHTML = tempo;
}
