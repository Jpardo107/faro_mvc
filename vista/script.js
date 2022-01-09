
    
    
    
    
    var opt_2 = new Array ("Buenos Aires", "Cordoba", "Mar del Plata", "Rosario");
    var opt_3 = new Array ("Lima", "Arequipa", "Cuzco", "Callao");
    var opt_4 = new Array ("La Paz", "Sucre", "Oruro", "Cochabamba");
    var opt_1 = new Array ("Arica", "Iquique", "Antofagasta", "Copiapo", "La Serena", "Valparaiso", "Santiago",
                        "Rancagua", "Talca", "Chillan", "Concepcion", "Temuco", "Valdivia", "Puerto Montt", 
                        "Coyhaique", "Punta Arenas");
function cdd()
{
    var cosa;
	cosa = document.formulario1.cosa[document.formulario1.cosa.selectedIndex].value;
	if(cosa!=0)
        {
		    mis_opts=eval("opt_" + cosa);
			num_opts=mis_opts.length;
			document.formulario1.opt.length = num_opts;
			for(i=0; i<num_opts; i++)
                {
					document.formulario1.opt.options[i].value=i+1;
					document.formulario1.opt.options[i].text=mis_opts[i];
				}
		}
    else
        {
			document.formulario1.opt.length = 1;
			document.formulario1.opt.options[0].value="-";
			document.formulario1.opt.options[0].text="-";
		}
	document.formulario1.opt.options[0].selected = true;
}
var mostrar_user = function()
{
    var nombre = document.getElementById("nombre").value;
    var user = document.getElementById("user").innerHTML="Usuario: "+nombre;
    document.getElementById("nombre").value="";
    document.getElementById("email").value="";
    document.getElementById("nombre").style.display="none";
    document.getElementById("email").style.display="none";
    document.getElementById("boton").style.display="none";
}
var indicadores = function(opc)
{
    var opcion = opc;
    var imagen = document.getElementById("source");
    if(opcion == 1)
    {
        imagen.src = "vista/imagenes/grafico_dolar.png";
        document.getElementById("info_text").innerHTML="Dolar observado: $780,59";
    }
    else if( opcion == 2)
    {
        imagen.src = "vista/imagenes/grafico_euro.png";
        document.getElementById("info_text").innerHTML="Euro: $917,69";
    }
    else if( opcion == 3)
    {
        imagen.src = "vista/imagenes/grafico_uf.png";
        document.getElementById("info_text").innerHTML="Unidad de fomento (UF): $30.048,36";
    }
    else if( opcion == 4)
    {
        imagen.src = "vista/imagenes/grafico_utm.png";
        document.getElementById("info_text").innerHTML="Unidad tributaria mensual (UTM): $52.842,00";
    }
    else if( opcion == 5)
    {
        imagen.src = "vista/imagenes/grafico_ipc.png";
        document.getElementById("info_text").innerHTML="Indice de precios al consumidor: 0.4";
    }
}

var indicadores2 = function(opc)
{
    var opcion = opc;
    var imagen = document.getElementById("source");
    if(opcion == 1)
    {
        imagen.src = "../imagenes/grafico_dolar.png";
        document.getElementById("info_text").innerHTML="Dolar observado: $780,59";
    }
    else if( opcion == 2)
    {
        imagen.src = "../imagenes/grafico_euro.png";
        document.getElementById("info_text").innerHTML="Euro: $917,69";
    }
    else if( opcion == 3)
    {
        imagen.src = "../imagenes/grafico_uf.png";
        document.getElementById("info_text").innerHTML="Unidad de fomento (UF): $30.048,36";
    }
    else if( opcion == 4)
    {
        imagen.src = "../imagenes/grafico_utm.png";
        document.getElementById("info_text").innerHTML="Unidad tributaria mensual (UTM): $52.842,00";
    }
    else if( opcion == 5)
    {
        imagen.src = "../imagenes/grafico_ipc.png";
        document.getElementById("info_text").innerHTML="Indice de precios al consumidor: 0.4";
    }
}
var indicadores3 = function(opc)
{
    var opcion = opc;
    var imagen = document.getElementById("source");
    if(opcion == 1)
    {
        imagen.src = "../vista/imagenes/grafico_dolar.png";
        document.getElementById("info_text").innerHTML="Dolar observado: $780,59";
    }
    else if( opcion == 2)
    {
        imagen.src = "../vista/imagenes/grafico_euro.png";
        document.getElementById("info_text").innerHTML="Euro: $917,69";
    }
    else if( opcion == 3)
    {
        imagen.src = "../vista/imagenes/grafico_uf.png";
        document.getElementById("info_text").innerHTML="Unidad de fomento (UF): $30.048,36";
    }
    else if( opcion == 4)
    {
        imagen.src = "../vista/imagenes/grafico_utm.png";
        document.getElementById("info_text").innerHTML="Unidad tributaria mensual (UTM): $52.842,00";
    }
    else if( opcion == 5)
    {
        imagen.src = "../vista/imagenes/grafico_ipc.png";
        document.getElementById("info_text").innerHTML="Indice de precios al consumidor: 0.4";
    }
}
var getdata2 = function()
{
    var nombre = document.getElementById("nombre").value;
    var fono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var asunto = document.getElementById("coment").value;
    var tipo = document.getElementById("tipo").value;
    if(nombre =="" || fono == "" || email == "" || asunto == "" || tipo == "Seleccionar")
    {
        swal("Error!!!","Rellene todos los campos porfavor.", "error");
    }
    
}

var contador = function()
{
    var div = document.getElementsByClassName("n");
    var total = div.length;
    var objetivo = document.getElementById("cant");
    swal("Cantidad de articulos: "+total);
}

var mostrar = function()
{
    document.getElementById("tit").style.display="block";
    document.getElementById("ingreso").style.display="block";
    document.getElementById("txttitulo").value="";
    document.getElementById("txtsubtitulo").value="";
    document.getElementById("coment").value="";
    
}
function postRefreshPage () {
    var theForm, newInput1;
    // Start by creating a <form>
    theForm = document.createElement('form');
    theForm.action = 'consult_principal.php';
    theForm.method = 'post';
    // Next create the <input>s in the form and give them names and values
    newInput1 = document.createElement('input');
    newInput1.type = 'hidden';
    newInput1.name = 'input_1';
    newInput1.value = 'value 1';
    // Now put everything together...
    theForm.appendChild(newInput1);
    // ...and it to the DOM...
    document.getElementById('hidden_form_container').appendChild(theForm);
    // ...and submit it
    theForm.submit();
  }
var privacidad = function()
{
    alert("Identidad y dirección del responsable del fichero donde se encuentran sus datos"+
    "A efectos de lo previsto en el artículo 19 No 4 de la Constitución Política de la República y a las "+
    "normas pertinentes de la Ley No 19.628 sobre protección de la vida privada le informamos que los datos "+
    "que voluntariamente nos facilita serán incorporados a un fichero mixto de datos de carácter personal, "+
    "cuya finalidad es la de realizar las gestiones comerciales y administrativas necesarias en la relación "+
    "con los clientes que tiene implementadas todas las medidas de seguridad establecidas en la ley. "+
    
    "Derechos de acceso, rectificación y cancelación"+
    "El usuario garantiza la veracidad de los datos aportados y se compromete a comunicar cualquier cambio "+
    "que se produzca en los mismos. El envío de datos de carácter personal es obligatorio para contactar y "+
    "recibir información sobre nuestros productos y servicios. El no facilitar los datos personales solicitados "+
    "o el no aceptar la presente política de protección de datos supone la imposibilidad de suscribirse, "+
    "registrarse o recibir información de los productos y servicios de la compañía. De acuerdo a lo establecido "+
    "en Ley 19.628, le informamos que podrá ejercitar sus derechos de Acceso, Rectificación, Oposición, "+
    "Cancelación, y Portabilidad enviando un email a contacto@iarc.cl indicando como Asunto: “LOPD”. "+
    
    "Aceptación y consentimiento"+
    "El Usuario declara haber sido informado de las condiciones sobre protección de datos de carácter personal, "+
    "aceptando y consintiendo el tratamiento automatizado de los mismos por parte de nuestra compañía en la forma "+
    "y para las finalidades indicadas en la presente Política de Protección de Datos Personales. Así mismo y de "+
    "acuerdo con la ley el usuario consiente el envío de comunicaciones comerciales por medios electrónicos o en "+
    "papel."+
    
    "Contenido de la web y enlaces"+
    "Nos reservamos el derecho a actualizar, modificar o eliminar la información contenida en esta Web, pudiendo "+
    "incluso limitar o no permitir el acceso a dicha información a los usuarios. No asumimos responsabilidad alguna "+
    "por la información contenida en las páginas web de terceros a las que se pueda acceder mediante enlaces desde "+
    "cualquier página web de este sitio. La presencia enlaces en las páginas Web tiene una finalidad meramente "+
    "informativa y en ningún caso supone sugerencia, invitación o reconocimiento sobre los mismos. "+
    
    "Cesión"+
    "Si usted es premiado en alguno de nuestros concursos o promociones, autoriza la publicación de sus datos "+
    "personales en nuestra Web y en los perfiles sociales de Ibero Americana Radio Chile de Facebook, Youtube, "+
    "Twitter, Instagram, Google y Pinterest a efectos de anunciar quien ha sido la persona ganadora. Asimismo, "+
    "usted consiente la comunicación de sus datos a proveedores externos de Ibero Americana Radio Chile relacionados "+
    "con los sectores de las telecomunicaciones, financiero, ocio, formación, gran consumo, automoción y energía, a "+
    "fin de ser utilizados para el envío de promociones publicitarias y prospección comercial."+
    
    "Propiedad intelectual e industrial"+
    "Los derechos de propiedad intelectual del contenido de las páginas Web, su diseño gráfico y códigos son "+
    "titularidad propia y por tanto, queda prohibida su reproducción, distribución, comunicación pública, "+
    "transformación o cualquier otra actividad que se pueda realizar con los contenidos de sus páginas Web ni aún "+
    "citando las fuentes, salvo consentimiento por escrito. "+
    
    "Legislación"+
    "Con carácter general las relaciones entre nuestra empresa con los usuarios de los servicios telemáticos "+
    "presentes en este sitio Web, se encuentran sometidas a la legislación y jurisdicción Chilena.")
}