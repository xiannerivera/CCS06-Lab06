<?php  
for ($yr=4; $yr<=2024; $yr+=4) {
    
if ($yr%400==0 && $yr%100==0){
} else if($yr%100==0){
    continue;
}
echo $yr. "  ";
}
?>
