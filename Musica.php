
<!--Class Album inicia a classe--> 
  
 <!--As propriedades são privadas,por isso elas só podem ser acessadas e modificadas dentro da classe--> 
 
<?php
class Musica {
    private $id;
    private $nome;
    private $duracao;
    private $album;

//Método construtor 

    public function __construct($id, $nome, $duracao, Album $album) {
        $this->id = $id;
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->album = $album;
    }

//Retorna os valores nome,duração e album 

    public function getNome() { return $this->nome; }
    public function getDuracao() { return $this->duracao; }
    public function getAlbum() { return $this->album; }
}
?>
