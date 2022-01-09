(function(){
    var actualizarhora = function(){
        var fecha = new Date(),
            horas = fecha.getHours(),
            minutos = fecha.getMinutes(),
            segundos = fecha.getSeconds(),
            dia = fecha.getDate(),
            mes = fecha.getMonth(),
            year = fecha.getFullYear();
        
        var pHoras = document.getElementById('horas'),
            pMinutos = document.getElementById('minutos'),
            pSegundos = document.getElementById('segundos'),
            pDia = document.getElementById('dia'),
            pMes = document.getElementById('mes'),
            pYear = document.getElementById('year');
        pDia.textContent = dia;
        var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        pMes.textContent = meses[mes];
        pYear.textContent = year;
        if(horas == 0) 
        {
            horas = 12;
        }
        if(horas < 10 )
            {
                horas = "0" + horas;
            }
        pHoras.textContent = horas;
        if(minutos < 10)
            {
                minutos = "0" + minutos;
            }
        if (segundos < 10)
            {
                segundos = "0" + segundos;
            }
        pMinutos.textContent = minutos;
        pSegundos.textContent = segundos;
    };
actualizarhora();
var intervalo = setInterval(actualizarhora, 1000);
}())