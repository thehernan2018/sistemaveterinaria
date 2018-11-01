
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
			//load_usu(1);
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
			//load_usu(1);
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
			//load_usu(1);
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
			//load_usu(1);
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
			//load_usu(1);
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
    $("#txtid").val(data.idalumnos);
    $("#txtpen").val(data.costopension);
    $("#txtcosma").val(data.costomatricula);
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
           
            var pagos  = data;
          //  console.log(data);
            $("#pensiones").children().remove();
           
    /*  $.each(data, function(index, data) {
    $("#pensiones").append("<li> Pensión "+ data.mes +" <input type='checkbox'  id='"+data.mes+"' name='"+data.mes+"' > - " +data.añoescolar+"</li>");
});*/
    
 $.each(data, function(index, data) {
    $("#pensiones").append("<li> Pensión "+ data.mes +" - " +data.añoescolar+"</li>");
});
         $("#txtpepa").val(data[0].mes);
         $("#txtadabo").val(data[0].bono1);
        
         if ($("#txtadabo").val()=="") {
          
                console.log('ok');
        }else{
             $("#abonopension").prop("disabled",true);
        }
        
            if ($("#txtpepa").val()=="1" ) {
            $("#mespaga").append("Enero");
                return;
        }else 
            if ($("#txtpepa").val()=="2" ) {
            $("#mespaga").append("Febrero");
        }else
            if ($("#txtpepa").val()=="3" ) {
            $("#mespaga").append("Marzo");
        }else 
            if ($("#txtpepa").val()=="4" ) {
            $("#mespaga").append("Abril");
        }else 
            if ($("#txtpepa").val()=="5" ) {
            $("#mespaga").append("Mayo");
        }else 
            if ($("#txtpepa").val()=="6" ) {
            $("#mespaga").append("Junio");
        }else 
            if ($("#txtpepa").val()=="7" ) {
            $("#mespaga").append("Julio");
        }else 
            if ($("#txtpepa").val()=="8" ) {
            $("#mespaga").append("Agosto");
        }else 
            if ($("#txtpepa").val()=="9" ) {
            $("#mespaga").append("Septiembre");
        }else 
            if ($("#txtpepa").val()=="10" ) {
            $("#mespaga").append("Octubre");
        }else 
            if ($("#txtpepa").val()=="11" ) {
            $("#mespaga").append("Noviembre");
        }else
            if ($("#txtpepa").val()=="12" ) {
            $("#mespaga").append("Diciembre");
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

