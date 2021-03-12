<?php
    $jsondata = file_get_contents("movies.json");
    $json = json_decode($jsondata, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Movies</title>
</head>
<body>
    <div id="container">
        <h1>My Favorite Movies</h1>
        <ul>
            <?php
                foreach($json[''] as $key => $value){
                    echo '<h4>'.$value['title'].'</h4>';
                    echo '<li>Year: '.$value['year'].'</li>';
                    echo '<li>Genre: '.$value['genre'].'</li>';
                    echo '<li>Director: '.$value['director'].'</li>';
                }

            ?>
        </ul>
    </div>
</body>
</html>