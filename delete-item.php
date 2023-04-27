<?php
    include('./connection.php');
    $id = $_GET['i_id'];
    $query = mysqli_query($con,"DELETE FROM items_and_deals WHERE i_id = $id");
    if($query){
        echo '<script>alert("Delete Successfully");window.location.href="items.php"</script>';
    }else{
        echo '<script>alert("Delete Failed");window.location.href="items.php"</script>';
    }



?>