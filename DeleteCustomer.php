<?php 
include('function.php');

deletecustomer($_GET["customerNumber"]);
    echo "
        <script>
        alert('selected customer data has been deleted');
        document.location.href = 'index1.php';
        </script>
    ";
?>