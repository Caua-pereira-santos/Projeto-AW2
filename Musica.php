<?php
class Musica {
    private $id;
    private $nome;
    private $duracao;
    private $album;

    public function __construct($id, $nome, $duracao, Album $album) {
        $this->id = $id;
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->album = $album;
    }

    public function getNome() { return $this->nome; }
    public function getDuracao() { return $this->duracao; }
    public function getAlbum() { return $this->album; }
}
?>
