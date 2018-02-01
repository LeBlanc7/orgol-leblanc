<?php

    $song_name = $_POST['song'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query = "SELECT song_artist,song_name,song_url,song_category FROM info WHERE song_artist like '%$song_name%'";
    if($result = mysqli_query($connect,$query)) {
        if(!$song) echo "<h1> no song in DB</h1>";
        else {
            while($song = mysqli_fetch_row($result)) {
                echo "<div class='image'>";
                echo "<img src='https://img.youtube.com/vi/$song[2]/default.jpg'>";
                echo "</div>";
                echo "<div class='text'>";
                echo "<h1>$song[1]</h1>";
                echo "<br><br>";
                echo "<hr size='1'>";
                echo "<h2>$song[0]</h2>";
                echo "<a href='https://www.youtube.com/watch?v=$song[2] 'target='_blank'>Youtube에서 보기</a>"; 
                echo "</div>";     
            }
        }
    }

?>