<?php

require_once dirname(__FILE__) . '/../dao/QuadroDAO.php';

class Quadro {

    private $id;
    private $titulo;
    private $color;
    private $email_usuario;

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getColor() {
        return $this->color;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getEmail_usuario() {
        return $this->email_usuario;
    }

    public function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
    }

    public static function listar($email) {
        $tuplas = QuadroDAO::listar($email);
        $vetor = [];
        if (is_object($tuplas)) {
            if ($tuplas->num_rows > 0) {
                while ($t = $tuplas->fetch_assoc()) {
                    $q = new Quadro();

                    $q->setId($t["idQuadro"]);
                    $q->setTitulo($t["titulo"]);
                    $q->setColor($t["color"]);
                    $q->setEmail_usuario($t["email_usuario"]);

                    $vetor [] = $q;
                }
                return $vetor;
            }
        }
        return $vetor;
    }

}
