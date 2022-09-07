<?php
require "function.php";
if(!isset($_GET["id"])) {
    header("Location: ./index.php");
    exit;
}
$ID = $_GET["id"];
if ( Delete($ID) > 0 ) {
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('data gagal dihapus');
                document.location.href = 'index.php';
            </script>
        ";
}
?>