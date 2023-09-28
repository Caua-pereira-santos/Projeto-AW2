<!--Class Album inicia a classe-->

<!--As propriedades são privadas,por isso elas só podem ser acessadas e modificadas dentro da classe-->

<?php
class  Album {
    private $id;
    private $nome;
    private $artista;

//Método construtor da classe
    public function __construct($id, $nome, Artista $artista) {
        $this->id = $id;
        $this->nome = $nome;
        $this->artista = $artista;
    }

//Retorna os valores nome e artista

    public function getNome() { return $this->nome; }
    public function getArtista() { return $this->artista; }
}
?>
