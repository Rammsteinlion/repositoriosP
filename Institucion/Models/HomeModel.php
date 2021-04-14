<?php 


Class HomeModel extends Mysql{

   public function __construct()
    {
        parent::__construct();
        
    }

    public function setUser(string $nombre , string $edad){

        $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
        $arrData = array($nombre,$edad); //array de los datos
        $request_insert = $this->insert($query_insert,$arrData); //almacenar el resultado
        return $request_insert;

    }


    public function getUser($id){

        $sql = "SELECT * FROM usuario WHERE id = $id";
        $request = $this->select($sql);
        return $request;
    }


    public function updateUser(int $id ,string $nombre, string $edad){

        $qurery_update = "UPDATE usuario SET nombre=?, edad=? WHERE id = $id";
        $arraData = array($nombre, $edad);
        $request_update = $this->update($qurery_update, $arraData);
        return $request_update;
    }


    public function getUsers(){

        $sql = "SELECT * FROM usuario";
        $request = $this->select_all($sql);
        return $request;
        
    }

    public function deleteUser($id){

        $sql ="DELETE FROM usuario WHERE id = $id";
        $request = $this->delete($sql);
        return $request;
    }
}