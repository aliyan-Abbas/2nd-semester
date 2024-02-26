<?php

$allStudents=["std_1"=>"ali",
"std_2"=>"aqsa",
"std_3"=>"hamza"

];

//foreach($allStudents as $k => $std){
//echo $k .":". $std. "<br>";
//}



?>



<?php

$allStudents=["std_1"=>"ali",
"std_2"=>"aqsa",
"std_3"=>"hamza"

];
$allkeys=array_keys($allStudents);

for($i=0;$i<count($allkeys);$i++){
echo $allkeys[$i]." ".$allStudents[$allkeys[$i]]."<br>";
}
?>