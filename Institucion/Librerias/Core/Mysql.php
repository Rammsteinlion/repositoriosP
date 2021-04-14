<?php 

class Mysql extends Conexion{

    private $conexion;
    private $strquery;
    private $arrVAlues;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
        
    }

    //insertar un registro
    public function insert(string $query, array $arrVAlues)
    {
        $this->strquery = $query;
        $this->arrVAlues = $arrVAlues;

        $insert = $this->conexion->prepare($this->strquery);
        $resInsert = $insert->execute($this->arrVAlues);
        if($resInsert){
            $lastInsert = $this->conexion->lastInsertid();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    //Obtener un registro 
    public function select(string $query){
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    //DEvolver todos los registros 
    public function select_all(string $query){
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }


    //Actualizar datos
    public function update(string $query,array $arrVAlues){

        $this->strquery = $query;
        $this->arrVAlues = $arrVAlues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrVAlues);
        return $resExecute;
    }


    //Eliminar un registro
    public function delete(string $query){

        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        return  $result;

    }



}