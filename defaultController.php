<?
    class DefaultController{
        private $vista;

        public function index(){
            $vista="APP_RESTAURANTE/view/admin/adminHomeView.php";
            include_once("app/view/admin/plantillaView.php");
        }
    }
?>