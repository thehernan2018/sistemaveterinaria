

	// NUEVO APODERADO
$( "#guardarapoderado" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_apoderado.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			load_usu(1);
			//alert(12);
			$('#guardarapoderado').trigger("reset");
		  }
	});
  event.preventDefault();
})

//GUARDAR ALUMNO
$( "#guardaralumno" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_alumno.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			load_usu(1);
			//alert(12);
			$('#guardaralumno').trigger("reset");
		  }
	});
  event.preventDefault();
})

//GUARDAR MATRICULA
$( "#matriculaalumnos" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nueva_matricula.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			load_usu(1);
			//alert(12);
			$('#matriculaalumnos').trigger("reset");
		  }
	});
  event.preventDefault();
})

//GUARDAR DATOS ALUMNOS MODIFICADOS
$( "#modicaalumno" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/modialumno.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			load_usu(1);
			//alert(12);
			$('#modicaalumno').trigger("reset");
		  }
	});
  event.preventDefault();
})

//GUARDAR DATOS APODERAMOS MODIFICADOS
$( "#modiapoderado" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/modiapoderado.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			load_usu(1);
			//alert(12);
			$('#modiapoderado').trigger("reset");
		  }
	});
  event.preventDefault();
})


    
//ENVIAR ID A LA CAJA APODERADO

$('.asignar').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
  console.log(id);//para verrificar si lo vota xD
 //console.log(dat);//para verrificar si lo vota xD
//aqui viene el ajax con json 
$.ajax({
                url: './ajax/buscaridapoderado.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id}
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtid").val(data.idapoderado);
    $("#txtapode").val(data.apellidos+ ' ' +data.nombres);
       
})
})

//ENVIAR ID A LA CAJA ALUMNO

$('.asignaralum').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
  console.log(id);
$.ajax({
                url: './ajax/buscaridalumnos.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id}
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtid").val(data.idalumnos);
    $("#txtalum").val(data.apellidos+ ' ' +data.nombres);
       
})
})

//ENVIAR ID A LA CAJA ALUMNO PARA PAGO DE PENSION DEL MES

$('.asignaralummatri').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
 var a = $(this).attr('añoes'); //aqui cogera el añoescolar
  console.log(a);
  console.log(id);
$.ajax({
                url: './ajax/buscaridalumnosmatricula.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id , a: a}
    
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    var dt= new Date();
    var month = dt.getMonth()+1;        
    
    $("#txtid").val(data.idalumnos);
    
    $("#txtcosma").val(data.costomatricula);
    if(month>=10){
               var au = 5;
             $("#txtpen").val(parseFloat(data.costopension)+au);
    }else{
        
        $("#txtpen").val(data.costopension);
    }
    
        
    
    $("#txtaño").val(data.añoescolar);
    $("#txtgra").val(data.grado);
    $("#txtalum").val(data.apellidos+ ' ' +data.nombres);
       
})
})

/// cargar datos al modal para modificar alumno

$('.modialu').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
  console.log(id);
$.ajax({
                url: './ajax/buscaridalumnos.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id }
    
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtape").val(data.apellidos);
    $("#txtnom").val(data.nombres);
    $("#txtpro").val(data.procedencia);
    $("#txtdomi").val(data.domicilio);
    $("#txtdni").val(data.dni);
    $("#txtdoes").val(data.docescolar);
    $("#txtcose").val(data.coentero);
    $("#txtid").val(data.idalumnos);
       
})
})

/// cargar datos al modal para modificar usuarios

$('.modiusu').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
//  console.log(id);
$.ajax({
                url: './ajax/buscaridusuarios.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id }
    
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtape").val(data.apellido);
    $("#txtnom").val(data.nombre);
    $("#txtpro").val(data.email);
    $("#txtdomi").val(data.direccion);
    $("#txtdni").val(data.dni);
    $("#txttele").val(data.telefono);
    $("#txtcose").val(data.sexo);
    $("#txtid").val(data.idpersona);
    $("#txtfn").val(data.fechanacimiento);
    $("#txtec").val(data.idEstado);
       
})
})
//CARGAR DATOS PARA MODIFICAR APODERADO

$('.modiapoderado').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
  console.log(id);
$.ajax({
                url: './ajax/buscaridapoderado.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id }
    
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtape").val(data.apellidos);
    $("#txtnom").val(data.nombres);
    $("#txtdomi").val(data.domicilio);
    $("#txtdni").val(data.dni);
    $("#txtid").val(data.idapoderado);
   
       
})
})

//CARGAR PENSIONES POR PAGAR

$('.carpension').on('click', function(){
    if ($("#txtid").val()=="") {
        alert("Asigne alumno para cargar sus pensiones");
        return;
    }
   
    var id = ($("#txtid").val());
    var ae = ($("#txtaño").val());
 //var id = $(this).attr('cod'); //aqui cogera el id 
    //console.log(id);
    //console.log(ae);
    $.ajax({
                url: './ajax/cargarpensionesporpagar.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id , ae: ae}
    
            }).done(function(data){// data es el json q recoge 
        
           if(data===null){
               alert("No tiene Pensiónes por Pagar");
               return(0);
           }
            var pagos  = data;
          //  console.log(data);
            $("#pensiones").children().remove();
           
    /*  $.each(data, function(index, data) {
    $("#pensiones").append("<li> Pensión "+ data.mes +" <input type='checkbox'  id='"+data.mes+"' name='"+data.mes+"' > - " +data.añoescolar+"</li>");
});*/
    
 $.each(data, function(index, data) {
    $("#pensiones").append("<li> Pensión "+ data.mes +" - " +data.añoescolar+"</li>");
});
        
        var costo = $("#txtpen").val();
        
         $("#txtpepa").val(data[0].mes);
         $("#txtadabo").val(data[0].bono1);
        
        var costo = $("#txtpen").val();
        var abono = $("#txtadabo").val();
        
        $("#txtresta").val(parseFloat(costo)-abono+".00");
        
              
          //  var vm=$(this).val(data[0].mes);
        
           
         if ($("#txtadabo").val()=="") {
          
                console.log('ok');
        }else{
             $("#abonopension").prop("disabled",true);
        }
        
        
        $("#mespaga").html();
            if ($("#txtpepa").val()=="1" ) {
            $("#mespaga").html("Enero");
                return;
        }else 
            if ($("#txtpepa").val()=="2" ) {
            $("#mespaga").html("Febrero");
        }else
            if ($("#txtpepa").val()=="3" ) {
            $("#mespaga").html("Marzo");
        }else 
            if ($("#txtpepa").val()=="4" ) {
            $("#mespaga").html("Abril");
        }else 
            if ($("#txtpepa").val()=="5" ) {
            $("#mespaga").html("Mayo");
        }else 
            if ($("#txtpepa").val()=="6" ) {
            $("#mespaga").html("Junio");
        }else 
            if ($("#txtpepa").val()=="7" ) {
            $("#mespaga").html("Julio");
        }else 
            if ($("#txtpepa").val()=="8" ) {
            $("#mespaga").html("Agosto");
        }else 
            if ($("#txtpepa").val()=="9" ) {
            $("#mespaga").html("Septiembre");
        }else 
            if ($("#txtpepa").val()=="10" ) {
            $("#mespaga").html("Octubre");
        }else 
            if ($("#txtpepa").val()=="11" ) {
            $("#mespaga").html("Noviembre");
        }else
            if ($("#txtpepa").val()=="12" ) {
            $("#mespaga").html("Diciembre");
        }
})
})


// radio opciones

$('#pagatodopension').on('click', function(){
    
   if ($("#txtid").val()=="" ) {
        alert("Asigne alumno para cargar sus pensiones");
        return;
    }
     if ($("#txtpepa").val()=="" ) {
        alert("actualizar pensión a pagar");
        return;
    }
   // alert( "clik" );
        
      $("#pagartodo").children().remove();
    
    // $("#pagartodo").append(" <hr> <input type='button' name='btngrabar' id='btngrabar' value='Pagar Todo' class='btn btn-primary'>");
    
})

$('#abonopension').on('click', function(){
    
   if ($("#txtid").val()=="") {
        alert("Asigne alumno para cargar sus pensiones");
        return;
    }
         if ($("#txtpepa").val()=="" ) {
        alert("actualizar pensión a pagar");
        return;
    }
   // alert( "clik" );
        
      $("#pagartodo").children().remove();
      $("#pagartodo").append("<input type='text' id='txtabo' class='form-control' name='txtabo' required placeholder='abono'>");
    
      //$("#pagartodo").append("<hr> <input type='button' name='btnabonar' id='btnabonar' value='Abonar' class='btn btn-primary'>");
      //  $("#txtabo").val(data.costopension);
     //$("#txtpen").val(data.costopension);
    
})

///PAGO PENSIÒN

$( "#pagosalumnos" ).submit(function( event ) {
    $('#btngrabar').attr("disabled", true);
  console.log('ok');

    
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/pagospension.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
		
			$('#pagosalumnos').trigger("reset");
		  }
	});
  event.preventDefault();
})

////IMPRIME COMPROBANTE

function print_fac_vdt(idpago,ae,mpa,tipo){
VentanaCentrada('./pdf/documentos/ver_boletadeventa.php?idpagoalu='+idpago+"&aes="+ae+"&mpago="+mpa+"&tipo="+tipo);
		}

//////////////////////perfil


/////////////////////////////////////// perfil


$( "#perfil" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
    console.log('ok');
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_perfil.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})




		function upload_image(){
				
				var inputFileImage = document.getElementById("imagefile");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#load_img").text('Cargando...');	
					var data = new FormData();
					data.append('imagefile',file);
					
					
					$.ajax({
						url: "ajax/imagen_ajax.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#load_img").html(data);
							
						}
					});	
				}
				
				
			}






$( "#guardarestado" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/grabaestadoalumno.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			load_usu(1);
			//alert(12);
			$('#guardarestado').trigger("reset");
		  }
	});
  event.preventDefault();
})