<?php
class getNumber {

    public function getNumber(){
        for($i=1; $i<=100;$i++){
           $num = $i; 
           $x= ($i % 15);
           switch ($x){
               case 0:
                   $num = "Linianos";
                   break;
               case 5:
               case 10:
                   $num = "IT";
                   break;
               default:
                   if($i % 3 == 0) {
                       $num = "Linio";
                   }
                   break;
           }
           echo $num. "<br/>";
        }
    }
}

