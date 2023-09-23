<?php
class Artista {
    private $id;
    private $nome;
    private $gravadora;

    public function __construct($id, $nome, Gravadora $gravadora) {
        $this->id = $id;
        $this->nome = $nome;
        $this->gravadora = $gravadora;
    }

    public function getNome() { return $this->nome; }
    public function getGravadora() { return $this->gravadora; }
}
?>
