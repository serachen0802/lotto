<?php
 header("content-type: text/html; charset=utf-8");
    echo "樂透號碼如下:",'<br>';
function lotto(){
    //將亂數傳入陣列中
    for($i=1;$i<=49;$i++){
         $lo[$i]="$i";
        //echo $lo[$i];
    }
    
    $b= array_rand($lo,7) ;
    for($k=0;$k<7;$k++){
        //第七個號碼為特別號
        if ($k==6){
            echo '<font color="red">特別號:</font>','<br>';
        }
         echo $lo[$b[$k]]."<br>";
        }
        
        
        
//     $spe=((rand()%48)+1);
//         for($k=0;$k<6;$k++){
//             if($spe == $b[$k]+1){
//             $spe=((rand()%48)+1);
//     }
//   }
 
//     echo '<font color="red">特別號</font>','<br>';
//     echo $spe;
    
        
}
    
lotto();


?>