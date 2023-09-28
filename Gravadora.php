
<!--Class Album inicia a classe--> 
  
 <!--As propriedades são privadas,por isso elas só podem ser acessadas e modificadas dentro da classe--> 
 
<?php
class Gravadora {
    private $id;
    private $nome;
    private $endereco;

//Método construtor 

    public function __construct($id, $nome, $endereco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

//Retorna os valores Id,nome e endereço 

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getEndereco() { return $this->endereco; }
}
?>
