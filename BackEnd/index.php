<?php 
    //echo ("Hello world");
    //print ("Hello again");
    //comentario
    /*comentario
    multilinea*/
    //$var1=10;
    //$var2=20;
    //$var3=30;

    //echo $var1;
    //echo $var2;
    //echo $var3;

    //echo($var1+$var2+$var3);
    //echo("la suma de ".$var1." mas"  .$var1. " es ".($var1+$var2)." <br> ".$var3);
    //$x="<h1> Este es un titulo</h1>";
    //echo $x;

    header("Content-Type: application/json; chartset-UTF-8");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Authorization, X-Requested-With");
   
    $data = array(
        "data"=>[
            array("id"=>"1", "contact"=>"Veronica","Phone"=>"4491234567", "date"=>"2022/07/01", "status"=>"Activo"),
            array("id"=>"2", "contact"=>"Armando", "Phone"=>"4491234568", "date"=>"2022/07/11", "status"=>"No activo")
        ]
    );
    
    echo json_encode($data);
        


    //$data=array(
      //  "data"=>[
        //    array(
          //      "id"=>"1","contact"=>"veronica","phone"=>"4492322411","date"=>"2022/07/01","status"=>"Activo"
            //),
            //array(
              //  "id"=>"2","contact"=>"ferando","phone"=>"4492328611","date"=>"2022/07/05","status"=>"Inactivo"
            //),
        //]
    //);
    //echo json_encode($data);
?>