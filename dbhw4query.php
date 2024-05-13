<?php
 $hostName = "ix.cs.uoregon.edu";
 $userName = "jmacalin";
 $password = "me";
 $conn= new mysqli($hostName,$userName,$password,);
 if($conn){
    echo "connected";
 }else{
    echo "not connected";
 }

  ?>