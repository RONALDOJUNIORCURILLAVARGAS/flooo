<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
    die();
}
$abs=$_SESSION['listatienda'];
$lista=$_SESSION['categoriaproducto'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar productos</title>
        <link href="../../../css/servicios/RegistroServicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/productos/reg_producto.js" type="text/javascript"></script>
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
       
        
        <main >
             
                    <input class="btn btn-success" type="button" value="Regresar" onclick="regresar_producto('1')" />
               
                    <div class="container">
                         <form name="form">
                <input type="hidden" name="op">

               <center>
                <h1>Registra tu productos en FLOOOP</h1>
                <h2>Actualizar Producto</h2>
                </center>
                
                <div class="form-group">
                    <label>Nombre de Producto</label>
                    <input class="form-control" type="text" placeholder="Nombre" id="espec" name="txtnombre"/>
                </div>
                 <div class="form-group">
                      <label>Descripción del Producto </label>
                      <textarea class="form-control" name="txtdescripcion" placeholder="Descripción"></textarea>
                </div>
               
                 <div class="form-group">
                    <label>Cantidad de Producto</label>
                    <input class="form-control" type="number" placeholder="Cantidad" id="espec" name="txtcantidad"/> 
                </div>
                 <div class="form-group">
                    <label>Precio de Producto</label>
                    <input class="form-control" type="number" placeholder="Precio" id="espec" name="txtprecio"/>
                </div>
                 <div class="form-group">
                     <label>Selecione Tienda</label>
                     <select class="form-control" name="combobo"> 
                                <option value="0">Selecciona Tienda</option>
                                <?php foreach ($abs as $re) { ?>
                                <option value="<?php echo $re['ID_TIENDA']?>"><?php echo $re['NOMBRE_TIENDA']?></option>
                                <?php } ?>
                            </select>
                </div>
                 <div class="form-group">
                     <label>Categoria</label>
                     <td><select class="form-control" name="combobox">
                                
                                <option value="0">Selecciona categoria</option>
                                <?php foreach ($lista as $reg) { ?>
                                <option value="<?php echo $reg['ID_CAT_PROD']?>"><?php echo $reg['NOMBRE_CAT_PROD']?></option>
                                <?php } ?>
                            </select>
                </div>
            
            </form>
            </div>
                    <center>
                    <button type="submit" class="btn btn-success" onclick="actualizarProducto('2')" >Actualizar Producto</button>
                    </center>
                    
        </main>
        
          <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
          <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
