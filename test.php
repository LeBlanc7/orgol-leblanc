<? php
    if(!empty($_POST['song_name'])){

        $db_host = "localhost";
        $db_user = "root";
        $db_pw = "111111";
        $db_name = "tutorials";
        $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);

        if(mysqli_connect_errno()){
            printf("Connect failed : %s\n",mysqli_connect_error());
            exit();
        }

        $query = "SELECT song_url FROM info WHERE song_name = {$_POST['song_name']}";
        if(result = mysqli_query($connect,$query)) {
            $url = mysqli_fetch_row($result);
            $data = url[0];
        }

        echo $data;
    }
?>