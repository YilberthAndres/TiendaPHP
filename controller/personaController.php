<?php 
    class personaController {
        private $model;
        public function __construct()
        {
            require_once('../../model/Persona.php'); 
            $this->model = new personaModel();
        }
        public function guardar($persona)
        {
            $id = $this->model->insertar($persona);
            return ($id != false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id)
        {
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function all()
        {
            return ($this->model->all()) ? $this->model->all() : false;
        }
        public function actualizar($persona)
        {
            return ($this->model->actualizar($persona) != false) ? header("Location:show.php?id=".$persona['id']) : header("Location:index.php");
        }
        public function delete($id)
        {
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$persona['id']);
        }
 }
?>