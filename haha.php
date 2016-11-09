<?php
$q = intval($_GET['flag']);


            if ($q=="2"){
                include "main.php";
            } elseif ($q == "3"){
                include "org.php";
            } elseif ($q == "4"){
                include "train.php";
            } elseif ($q == "7"){
                include "contact.php";
            } elseif ($q == "6"){
                include "construction.php";
            } elseif ($q == "8"){
                include "search.php";
            } elseif ($q == "9"){
                include "cari.php";
            } elseif ($q == "10"){
                include "cyberhaxpolicy.php";
            } elseif ($q == "11"){
                include "orgch.php";
            } elseif ($q == "13"){
                include "join.php";
            }

?>
