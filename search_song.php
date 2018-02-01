<?php

    $song_name = $_GET['song'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query = "SELECT song_artist,song_name,song_url,song_category FROM info WHERE song_artist like '%$song_name%'";
    if($result = mysqli_query($connect,$query)) {
       $song = mysqli_fetch_row($result);
       if(!$song) echo "<h1> no song in DB</h1>";
       else {
                echo "<p>artist is $song[0]</p>";
                echo "<p>name is $song[1]</p>";
                echo "<p>url is $song[2]</p>";

       }

    }

?>
