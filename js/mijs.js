

$( "#guardarventas" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/insertnuevaventa.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
	$('#guardarventas').trigger("reset");
		  }
	});
  event.preventDefault();
})
$( "#guarproducto" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/insertproducto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
	$('#guarproducto').trigger("reset");
		  }
	});
  event.preventDefault();
})



//GUARDAR ALUMNO
$( "#guarunidamedida" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/insertunidadmedida.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			
			$('#guarunidamedida').trigger("reset");
		  }
	});
  event.preventDefault();
})

$('.modiunida').on('click', function(){
  var id = $(this).attr('cod'); //aqui cogera el id 
  console.log(id);
$.ajax({
                url: './ajax/buscaridunidadmedida.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id }
    
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtco").val(data.codigo);
    $("#txtdes").val(data.descripcion);
    $("#txtpre").val(data.precio);
    $("#txtsto").val(data.stock);
    $("#txtac").val(data.activo);
    $("#txtob").val(data.observacion);
    //$("#txtunime").val(data.id_unidad_medida);
    $("#txtid").val(data.id_producto);
       
})
})


//GUARDAR MODICACIÓN DEL PRODUCTO
$( "#modicaunidadmedida" ).submit(function( event ) {
  $('#btngrabar').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/modiproducto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajaxnu").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajaxnu").html(datos);
			$('#btngrabar').attr("disabled", false);
			
			
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
    
     var id = ($("#txtcodigo").val());

     $("#codigo").val(id);
  
})

/*$('#productoVenta').on('click', function(){
     var id = ($("#productoVenta").val());
    console.log(id);
  $.ajax({
   url: './ajax/buscaridprecios.php',
   type: 'POST',
   dataType: 'json',
   data: {id: id}
}).done(function(data){
    $("#txtpre").val(data.precio);
    $("#txtsto").val(data.stock);
       
})
})*/




//ENVIAR ID A LA CAJA CLIENTE   

$('.asignarcliente').on('click', function(){
 var id = $(this).attr('cod'); //aqui cogera el id 
  console.log(id);
$.ajax({
                url: './ajax/buscaridclientes.php',// tu url donde vas a consltar el id
				type: 'POST',
				dataType: 'json',
				data: {id: id}
}).done(function(data){// data es el json q recoge 
 //console.log(data);
    $("#txtid").val(data.id_cliente);
    $("#txtclien").val(data.apellidos+ ' ' +data.nombre);
    alertify.success("Cliente agragado con éxito");    
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


                $('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
                
                
		$('.btnAgregaVenta').click(function(){
                    var can;
                    can=parseFloat(prompt("Ingresar Cantidad: ",'1'));
                    
                    if(can<=0){
                        alertify.error("Cantidad no Validad!");
                    return;
                    }
                    if(isNaN(can)){
                        alertify.error("Solo Numeros!");
                    return;
                    }
                     if ($("#txtid").val()=="" ) {
                    alertify.error("Primero Seleccione el cliente para llenar el Carrito de Compras.!");
                    return;
                        }
			 var id = $(this).attr('cod');
			 var pre = $(this).attr('pre');
                         console.log(id);
                         console.log(pre);
                         console.log(can);
		
			$.ajax({
				type:"POST",
				data:{id: id , pre: pre , can: can},
				url:"classes/agregaProductoTemp.php",
				success:function(r){
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
                                        alertify.success("Agregado al Carrito!");
				}
			});
		});
                
                
                $('#btnVaciarVentas').click(function(){

		$.ajax({
			url:"ventas/vaciarTemp.php",
			success:function(r){
				$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
                                alertify.warning("Carrito Vacio");
			}
		});
	});
        
        function quitarP(index){
		$.ajax({
			type:"POST",
			data:"ind=" + index,
			url:"ventas/quitarproducto.php",
			success:function(r){
				$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				alertify.success("Se quito el producto");
			}
		});
	}
        
        $('#pagatodopension').on('click', function(){   
         $("#factura").children().remove();
            })
        
        $('#abonopension').on('click', function(){
    
 
      $("#factura").children().remove();
      $("#factura").append("<input type='text' id='txtruc'  name='txtruc' class='form-control' required placeholder='Ruc'><br>");
      $("#factura").append("<input type='text' id='txtrz'  name='txtrz' class='form-control' required placeholder='Razón Social'><br>");
      $("#factura").append("<input type='text' id='txtdir'  name='txtdir' class='form-control' required placeholder='Dirección'>");
    
      //$("#pagartodo").append("<hr> <input type='button' name='btnabonar' id='btnabonar' value='Abonar' class='btn btn-primary'>");
      //  $("#txtabo").val(data.costopension);
     //$("#txtpen").val(data.costopension);
    
})