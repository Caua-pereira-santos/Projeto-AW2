<?php
class Album {
    private $id;
    private $nome;
    private $artista;

    public function __construct($id, $nome, Artista $artista) {
        $this->id = $id;
        $this->nome = $nome;
        $this->artista = $artista;
    }

    public function getNome() { return $this->nome; }
    public function getArtista() { return $this->artista; }
}
?>
