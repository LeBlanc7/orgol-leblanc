<?php
    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $result = mysqli_query($connect,"select distinct song_category From info");

    while($row=mysqli_fetch_row($result)){
        echo "$row[0]";
    }

?>