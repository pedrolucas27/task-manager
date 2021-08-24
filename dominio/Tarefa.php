<?php

class Task {
   
    private $id;
    private $titulo;
    private $desc;
    private $color_sprint;
    private $idStatus;
    
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function getColor_sprint() {
        return $this->color_sprint;
    }

    public function getIdStatus() {
        return $this->idStatus;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

    public function setColor_sprint($color_sprint) {
        $this->color_sprint = $color_sprint;
    }

    public function setIdStatus($idStatus) {
        $this->idStatus = $idStatus;
    }
    
}
