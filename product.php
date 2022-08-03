<?php

//function getProducts() : array {
   // $bdd = dbConnect();

    //$query = $bdd->query("SELECT * FROM `products`");

   // $datas =[];

    // while ($data = $query->fetch()) {
    //       $datas[] = $data;
//
//    }

  //  var_dump($datas);

 //   return $datas;

//} */

function getProducts() : array {
    $bdd = dbConnect();

    $query = $bdd->query("SELECT * FROM `products`");
  
    $datas =$query->fetchAll();

    var_dump($datas);

    return $datas;
      }



