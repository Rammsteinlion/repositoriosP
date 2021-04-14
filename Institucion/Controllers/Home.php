<?php

Class Home extends Controllers{

    public function __construct()
    {
        /**
         * ejecutando el metodo constructor de 
         * la clase que esta heredando
         */
        parent::__construct(); 
    }

    public function home(){

        $data['page_id'] = 1;
        $data['page_tag'] = "Home";
        $data['page_title'] ="Página Principal";
        $data['pag_name'] ='home';
        $this->views->getView($this,"home",$data);
    }

    public function insertar(){

        $data = $this->model->setUser("Rammstein", 20);
        print_r($data);
    }

    public function verUsuario($id){

        $data = $this->model->getUser($id);
            print_r($data);
    }

    public function actualizar(){

        $data = $this->model->updateUser(3,"Sara", 10);
        print_r($data);
    }



    public function verusuarios(){
        $data = $this->model->getUsers();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }


    public function eliminar($id){
        $data = $this->model->deleteUser($id);        
        print_r($data);
        
    }

}