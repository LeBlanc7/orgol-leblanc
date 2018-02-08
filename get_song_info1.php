<?php
    $data = array();

    $song_name = $_GET['song_name'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query1 = "SELECT song_artist FROM info WHERE song_name = '$song_name'";
    
    if($result1 = mysqli_query($connect,$query1)){
        var_dump($result1);
        $temp = mysqli_fetch_row($result1);
        $query2 = "SELECT song_artist,song_name,song_url FROM info WHERE song_artist = '$temp[0]'";

        $result2 = mysqli_query($connect,$query2);
        var_dump($result2);

        $data = array (
            while($song = mysqli_fetch_row($result2)){
                arrray('ok',$song[0],$song[1],$song[2])
            }
        );
    }else{
        $data['status'] = 'err';
        $data['artist'] = '';
        $data['url']    = '';
    }

    echo json_encode($data);
?>