<?php 
    require "function.php";
    $id = $_GET["id"];
    echo $id;
    if( hapus($id) > 0){
        echo "
        <script>
            alert('data telah dihapus');
            document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script>
                alert('data tidak dapat dihapus!');
                document.location.href = 'index.php';
        </script>

        ";
    }
?>