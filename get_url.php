<?php
    $data = array();

    $song_name = $_GET['song_name'];

    $db_host = "localhost";
    $db_user = "root";
    $db_pw = "111111";
    $db_name = "tutorials";
    $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);

    if(mysqli_connect_errno()){
        printf("Connect failed : %s\n",mysqli_connect_error());
        exit();
    }

    $query = "SELECT song_artist,song_url FROM info WHERE song_name = '$song_name'";

    if($result = mysqli_query($connect,$query)) {
        $song = mysqli_fetch_row($result);
        $data['status'] = 'ok';
        $data['artist'] = $song[0];
        $data['url']    = $song[1];
    }else{
        $data['status'] = 'err';
        $data['artist'] = '';
        $data['url']    = '';
    }

    echo json_encode($data);    

?>