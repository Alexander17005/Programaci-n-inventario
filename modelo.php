<?php
class provinciaaa
{   public $vlprv_id;
    public $vlprv_nombre;
    public $vlprv_observacion;
    public function __construct()
    {
        $this->vlprv_id="";
        $this->vlprv_nombre="";
        $this->vlprv_observacion="";
    }
    public function _iiinsertar($vlprv_nombre, $vlprv_observacion){
        require_once("../../conexion/conexion.php");
        //$dmlsentencia="insert into si_provincias(pro_nombre,pro_observacion) values ('vlpro_nombre ','vlpro_observacion')";
        $dmlsentencia="insert into si_provincias(prv_nombre,prv_observacion) values ('" . $vlprv_nombre . "','" . $vlprv_observacion . "')";
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from si_provincias";
        }
        else
        {
            $dmlsentencia="select * from si_provincias where pro_nombre like '%s', %".$valor."%";
        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $nombre, $observacion)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>