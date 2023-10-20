
<link href="../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../Libs/jquery.min.js"></script>
<script src="../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
    require_once('modelo.php');
    $obj = new provinciaaa();
    $result=$obj->_iiinsertar(
    $_POST['txt_nombre'];
    $_POST['txt_observacion']);
    
    if($result)
    {
        echo '<script>jQuery(function(){swal({
            title:"Guardar Provincia", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
        }, function(){location.href="crud.html";});});</script>';
    }
    else
    {
        echo '<script>jQuery(function(){swal({
            title:"Guardar Persona", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
        }, function(){location.href="crud.html";});});</script>';
    }

     //require_once('vistasinestilo.html');
    ?>
