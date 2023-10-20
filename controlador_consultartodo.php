
<link href="../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../Libs/jquery.min.js"></script>
<script src="../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
    require_once('modelo.php');
    $obj = new provinciaaa();
    $result=$obj->_consultartodo();
   
     //require_once('vistasinestilo.html');
?>
