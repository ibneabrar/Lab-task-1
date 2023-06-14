<?php
$array = array(4,5,6,7,8,9,10);

$search = 6;

$found = false;

foreach ($array as $element) {
	if($element==$search){
		$found = true;
		break;
	}
}

if($found){
	echo "element $search is found";
}
else{
	echo "element $search not found";
}
?>