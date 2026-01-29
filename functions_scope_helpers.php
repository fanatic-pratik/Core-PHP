<?php
// type 1 
// $name = 'Pratik';

// function pr($name){
//     if(isset($name)){
//      echo $name;
//     }else{
//         throw new Exception("Error in pr function..");
        
//     }
// }

// try {
//     pr($name);
// } catch (Exception $th) {
//     echo $th->getMessage();
// }



//type 2

set_error_handler(function($severity,$message,$file,$line){
   throw new ErrorException($message,0,$severity,$file,$line);
});

//$name = 'Pratik';

function pr($name){
     echo $name;
}

try {
    pr($name);
} catch (Exception $th) {
    echo $th->getMessage();
}

?>