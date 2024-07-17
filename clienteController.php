<?php
// se incluye un  modelo para poder instalarlo dentro del controlador
include_once("APP_RESTAURANTE/model/clienteModel.php");
class clienteController{
    // Creamos un atributo para el modelo de alumno
    private $cliente;

    public function index(){
    // ocupamos el modelo del alumno
    $this->cliente= new clienteModel();
    // obtenemos la informacion a trabajar dentro de vista
    $datos = $this->cliente->getAll();
    // definir la vista dentro de la plantilla
    $vista= "APP_RESTAURANTE/view/admin/alumnos/alumnosIndexView.php";
    // incluimos la plantilla
    include_once("APP_RESTAURANTE/view/admin/alumnos/plantilview.php");
    }

    public function callInsertForm(){
        $vista="APP_RESTAURANTE/view/admin/alumnos/InsertFormView.php";
        include_once("APP_RESTAURANTE/view/admin/plantillaView.php");
    }

    public function callEdditForm(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            $id=$_GET["id"];
            $this->alumno= new alumnoModel();
            $data = $this->tblreservas->getById($id);
            $vista="APP_RESTAURANTE/view/admin/alumnos/edditForm.php";
            include_once("APP_RESTAURANTE/view/admin/plantillaView.php");
        }
    }
    public function eddit(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $dato=array(
                'id'=>$_POST['id'],
                'nombre'=>$_POST['nombre'],
                'Apaterno'=>$_POST['Apaterno'],
                'Amaterno'=>$_POST["Amaterno"],
                'telefono'=>$_POST['telefono'],
                'fecha'=>$_POST['fecha'],
                'hora_reserva'=>$_POST['hora_reserva'],
            );
            $this->alumno=new clienteController();
            $respuesta=$this->tblreservas_inte->eddit($dato);
            if($respuesta){
                header("location:http://localhost/php-3c/?C=alumnoController&M=index");
            }else{
                header("location:http://localhost/php-3c");
            }
        }
    }

    public function delete(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id=$_GET['id'];
            $this->cliente=new clienteController();
            $respuesta=$this->cliente->delete($id);
            if($respuesta){
                header("location:htpp://localhost/php-3c/?C=alumnoController&M=index");
            }else{
                header("location:http://localhost/php-3c");
            }

        }
    }
}

?>