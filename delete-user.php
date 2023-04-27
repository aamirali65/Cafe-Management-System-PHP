<?php
    include('./connection.php');
    $id = $_GET['userpro'];
    $query = mysqli_query($con,"DELETE FROM tbl_user WHERE id = $id");
    if($query){
        echo '<script>alert("Delete Successfully");window.location.href="user-view.php"</script>';
    }else{
        echo '<script>alert("Delete Failed");window.location.href="user-view.php"</script>';
    }



?>