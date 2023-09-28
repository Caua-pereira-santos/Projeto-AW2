
<!--Class Album inicia a classe--> 
  
 <!--As propriedades são privadas,por isso elas só podem ser acessadas e modificadas dentro da classe--> 

 <?php
class Artista {
    private $id;
    private $nome;
    private $gravadora;

//Método construtor da Classe

    public function __construct($id, $nome, Gravadora $gravadora) {
        $this->id = $id;
        $this->nome = $nome;
        $this->gravadora = $gravadora;
    }

//Recupera as informações de nome e gravadora 

    public function getNome() { return $this->nome; }
    public function getGravadora() { return $this->gravadora; }
}
?>
