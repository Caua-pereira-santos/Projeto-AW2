

<?php
include 'Gravadora.php';
include 'Artista.php';
include 'Album.php';
include 'Musica.php';

$gravadoras = [];
$artistas = [];
$albuns = [];
$musicas = [];

$gravadoras[] = new Gravadora(1, "EMI Records", "123 Street, London");
$artistas[] = new Artista(1, "Coldplay", $gravadoras[0]);
$albuns[] = new Album(1, "A Head Full of Dreams", $artistas[0]);
$musicas[] = new Musica(1, "Adventure of a Lifetime", "4:24", $albuns[0]);

$gravadoras[] = new Gravadora(2, "EMI Records", "123 Street, London");
$artistas[] = new Artista(2, "Madonna", $gravadoras[1]);
$albuns[] = new Album(2, "MDNA", $artistas[1]);
$musicas[] = new Musica(2, "I'M SINNER", "4:24", $albuns[1]);

$gravadoras[] = new Gravadora(3, "EMI Records", "123 Street, London");
$artistas[] = new Artista(3, "Jay-Z", $gravadoras[2]);
$albuns[] = new Album(3, "4:44", $artistas[2]);
$musicas[] = new Musica(3, "4:44", "4:44", $albuns[2]);


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

foreach ($musicas as $musica) {
    echo '<tr>';
    echo '<td>' . $musica->getNome() . '</td>';
    echo '<td>' . $musica->getDuracao() . '</td>';
    echo '<td>' . $musica->getAlbum()->getNome() . '</td>';
    echo '<td>' . $musica->getAlbum()->getArtista()->getNome() . '</td>';
    echo '<td>' . $musica->getAlbum()->getArtista()->getGravadora()->getNome() . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>
