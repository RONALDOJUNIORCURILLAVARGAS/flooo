<?php
require_once '../util/conexionBD.php';

class CategoriaProductoDAO {
     public function RecuperarCategoria() {
        try{
           
            $sql="SELECT * FROM CATEGORIA_PRODUCTO;";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            $categoria=array();
            while($fila= mysqli_fetch_assoc($rs))
            {
                $categoria[]=$fila;
            }
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    return $categoria; 
    }
}
