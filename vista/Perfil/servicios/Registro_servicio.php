<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['lista'];
if($varsesion==null){
    echo 'No tiene autorizacion';
    die();
}
$estado=$_SESSION['estado'];
if($estado===false)
{
    echo '<script>alert("Este servicio no existe");</script>';
    $estado=true;
    $_SESSION['estado']=true;
}
$abs=$_SESSION['listatienda'];
$lista =$_SESSION['categoriasevicio'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar servicios</title>
        <link href="../../../css/servicios/RegistroServicio.css" rel="stylesheet" type="text/css"/>
        <script src="../../../js/servicios/reg_servicio.js" type="text/javascript"></script>
          <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
       
        
        <main >
             <input type="button" class="btn btn-success" value="Regresar" onclick="regresar_servicio('1')" style="float: left;"><br>
            <div class="container">
                  <form name="form">
                <input type="hidden" name="op">
                
            <center>
                <h1>Registra tu servicio en FLOOOP</h1>
                <h2>Añadir Servicios</h2>
            </center>
                <div class="form-group">
                     <label for="nombre">Nombre de Servicio</label>
                        <input class="form-control" type="text" placeholder="Nombre" id="espec" name="txtserv"/>
                </div>
                    
                <div class="form-group">
                   <label>Descripción de Servicio</label>
                   <textarea class="form-control" name="txtdescrip"  placeholder="Descripción"></textarea> 
                </div>
                
                <div class="form-group">
                    <label for="option">Selecione Tienda</label>
                        <select class="form-control" name="combobo"> 
                                <option value="0">Selecciona Tienda</option>
                                <?php foreach ($abs as $re) { ?>
                                <option value="<?php echo $re['ID_TIENDA']?>"><?php echo $re['NOMBRE_TIENDA']?></option>
                                <?php } ?>
                            </select>
                </div>
                <div class="form-group">
                    <label for="option">Categoria</label>
                        <select  class="form-control" name="combobox"> 
                                <option value="0">Selecciona categoria</option>
                                <?php foreach ($lista as $reg) { ?>
                                <option value="<?php echo $reg['ID_CAT_SERV']?>"><?php echo $reg['NOMBRE_CAT_SERV']?></option>
                                <?php } ?>
                            </select>
                </div>                    
                <table class="btnpublicar">
                    <button type="submit" class="btn btn-success" onclick="RegistrarServicio('2')" >Publicar servicio</button><br>
                </table>
            
            </form>
            </div>
        </main>
        <script src="../../../js/jquery/jquery.js" type="text/javascript"></script>
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
