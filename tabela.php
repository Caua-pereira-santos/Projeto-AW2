<!--Inclusão das classes Gravadora, Artista, Album e Musica-->

<?php
include 'Gravadora.php';
include 'Artista.php';
include 'Album.php';
include 'Musica.php';

//Arrays para armazenar os valores

$gravadoras = [];
$artistas = [];
$albuns = [];
$musicas = [];

//Criação dos objetos que serão armazenados na array

$gravadoras[] = new Gravadora(1, "EMI Records", "123 Street, London");
$artistas[] = new Artista(1, "Beyonce", $gravadoras[0]);
$albuns[] = new Album(1, "Renassaince", $artistas[0]);
$musicas[] = new Musica(1, "Alien Superstar", "4:30", $albuns[0]);

$gravadoras[] = new Gravadora(2, "EMI Records", "123 Street, London");
$artistas[] = new Artista(2, "Madonna", $gravadoras[1]);
$albuns[] = new Album(2, "MDNA", $artistas[1]);
$musicas[] = new Musica(2, "I'M SINNER", "4:24", $albuns[1]);

$gravadoras[] = new Gravadora(3, "EMI Records", "123 Street, London");
$artistas[] = new Artista(3, "Jay-Z", $gravadoras[2]);
$albuns[] = new Album(3, "4:44", $artistas[2]);
$musicas[] = new Musica(3, "4:44", "4:44", $albuns[2]);

$gravadoras[] = new Gravadora(4, "EMI Records", "123 Street, London");
$artistas[] = new Artista(4, "BLACK VEIL BRIDES", $gravadoras[3]);
$albuns[] = new Album(4, "The Mourning", $artistas[3]);
$musicas[] = new Musica(4, "Scarlet Cross", "4:44", $albuns[3]);

$gravadoras[] = new Gravadora(5, "EMI Records", "123 Street, London");
$artistas[] = new Artista(5, "Doja Cat", $gravadoras[4]);
$albuns[] = new Album(5, "Planet Her", $artistas[4]);
$musicas[] = new Musica(5, "Kiss me More", "3:29", $albuns[4]);

$gravadoras[] = new Gravadora(5, "EMI Records", "123 Street, London");
$artistas[] = new Artista(5, "Madonna", $gravadoras[5]);
$albuns[] = new Album(5, "Madame X", $artistas[5]);
$musicas[] = new Musica(5, "Dark Ballet", "6:00", $albuns[5]);

$gravadoras[] = new Gravadora(4, "EMI Records", "123 Street, London");
$artistas[] = new Artista(4, "M83", $gravadoras[6]);
$albuns[] = new Album(4, "Hurry Up, We're Dreaming", $artistas[6]);
$musicas[] = new Musica(4, "Outro", "4:07", $albuns[6]);

$gravadoras[] = new Gravadora(4, "EMI Records", "123 Street, London");
$artistas[] = new Artista(4, "Taylor Swift", $gravadoras[7]);
$albuns[] = new Album(4, "Reputation", $artistas[7]);
$musicas[] = new Musica(4, "I did something bad", "3:58", $albuns[7]);

$gravadoras[] = new Gravadora(4, "EMI Records", "123 Street, London");
$artistas[] = new Artista(4, "Kendrick Lamar", $gravadoras[3]);
$albuns[] = new Album(4, "Mr.Morale e The Big Steppers", $artistas[3]);
$musicas[] = new Musica(4, "Count me Out", "4:43", $albuns[3]);



//Criação da tabela com Bootstrap 


echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Música</th>';
echo '<th>Duração</th>';
echo '<th>Álbum</th>';
echo '<th>Artista</th>';
echo '<th>Gravadora</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

//A tabela é preenchida com os objetos da Array que criamos, foreach percorre o array e preenche a tabela

foreach ($musicas as $musica) {
    echo '<tr>';
    echo '<td>' . $musica->getNome() . '</td>';
    echo '<td>' . $musica->getDuracao() . '</td>';
    echo '<td>' . $musica->getAlbum()->getNome() . '</td>';
    echo '<td>' . $musica->getAlbum()->getArtista()->getNome() . '</td>';
    echo '<td>' . $musica->getAlbum()->getArtista()->getGravadora()->getNome() . '</td>';
    echo '</tr>';
}

//Exibição da tabela 


echo '</tbody>';
echo '</table>';

?>
