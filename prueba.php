<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!---->
  <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!--CSS-->
  <link href="css/inicio-style.css" rel="stylesheet" type="text/css">
  <link href="css/registro-equipo-style.css" rel="stylesheet" type="text/css">

  <!--icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Generador de códigos QR con PHP</title>
  </head>
  <body>
    
	<div class='container' >
	<h1>Generador de códigos QR con PHP</h1>
	<form method='post' id="generador">
	<div class='row'>
	<div class='col-md-4'>
		  <div class="form-group">
			<label for="textqr">Ingresa el texto</label>
			<input type="text" class="form-control" id="textqr"  placeholder="Ingresa el texto" required>
			
		  </div>
		  
		  <button type="button" class="btn btn-primary" onclick="generarQr()">Generar</button>
	</div>
	
	<div class='col-md-2'>
		  <div class="form-group">
			<label for="textqr">Tamaño</label>
			<select class='form-control' id='sizeqr'>
				<option value='100'>100 px</option>
				<option value='200' selected>200 px</option>
				<option value='300'>300 px</option>
				<option value='400'>400 px</option>
				<option value='500'>500 px</option>
			</select>
			
		  </div>
		  
		  
	</div>
	<div class='col-md-6'>
		<div class='result'>
		
		</div>
	</div>
	</div> 
	
	  
	  
	  
</form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  
  <script type="text/javascript">
    function generarQr(){
        var textqr=$("#textqr").val();
			var sizeqr=$("#sizeqr").val();
			parametros={"textqr":textqr,"sizeqr":sizeqr};
			 $.ajax({
				 type: "POST",
				url: "qr.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
				 
			 })
			
		  event.preventDefault();
    }
  </script>
  
  <script>
		$( "#generador" ).submit(function( event ) {
			
		});
	</script>
  </body>
</html>