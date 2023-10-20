<?php
    require_once("../../conexion/conexion.php");
    $dmlsentencia="select prv_id,prv_nombre,prv_observacion from si_provincias";
    $registros=$pdo->query($dmlsentencia);
?>
<table border=5>


<?php
    echo "DATOS CONSULTADOS. \n";
    while ($fila = $registros->fetch()) {
?>        
        <tr>
            <td>
                <?php echo $fila['pro_id']; ?>
            </td>
            <td>
                <?php echo $fila['pro_nombre'];?>
            </td>
            <td>
                <?php echo $fila['pro_observacion'];?>
            </td>

            <td>    
                <input type="submit" value="Editar" name="btn_editar"">
            </td>
            <td>    
                <input type="submit" value="Eliminar" name="btn_eliminar"">
            </td>
        </tr>
<?php       
    }
?>
</table>