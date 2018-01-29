<?php

    $song_name = $_GET['song'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    /*$query = "SELECT song_artist,song_url FROM info WHERE song_name = '$song_name'";
    if($result = mysqli_query($connect,$query)) {
       

    }*/

    echo "<script>viewSearchResult()</script>";

?>