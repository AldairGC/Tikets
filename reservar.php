<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="chiphysi" content="Bootstrap HTML5">
        <meta name="chiphysi" content="HTML5, CSS3, JavaScript">


   <link rel="shortcut icon" href="img/usuario.png">

       <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    </head>


<body>
  <br><br>
  <h1><center><font color="" face="algerian">COMPRA DE PELICULAS CHIPHYSI PROGRAMACIÓN</font></center></h1>
  <br><br>
    <div class="container-fluid">
        <div class="row">
        <aside id="columna" class="col-md-3">
             
           <div class="list-group">
     
  </a><a href="index.php" class="list-group-item active"><center>Cerrar sesión</center></a>
</div>
        </aside>

        <section id="seccion" class="col-md-8">
            <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="img/<?php echo $_GET['name'];?>.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3><?php echo $_GET['name'];?></h3>
            <p><?php echo $_GET['name'];?> es una película de maravillosa.</p>
            <p><a href="javascript:history.back();" class="btn btn-primary "  role="button">Regresar</a>
			<button action="trip.php" class="btn btn-danger producto" precio="7" titulo="<?php echo $_GET['name'];?>"role="button">Comprar voleto</button></p>
          </div>
        </div>
      </div>
    </div> 	
            <br>
            <br>  
        </section>
        </div>
    </div>
	<script src="minicart.js"></script>
	<script>
	  // configuración inicial del carrito 
	  paypal.minicart.render({
	  strings:{
	    button:'Pagar'
	   ,buttonAlt: "Total"
	   ,subtotal: 'Total:'
	   ,empty: 'No hay productos en el carrito'
	  }
	  });	  	  
	</script>
	
</body>
</html>




