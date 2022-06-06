<?php
$value=array("Sadi","misho","musa","morshed","Rick");
print_r($value);
echo "<br>";

if(in_array("Sadi",$value)){
    echo "Sadi is present inside array";
}
else{echo "Sadi is not there";}
    

?>