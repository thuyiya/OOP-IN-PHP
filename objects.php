<?php 
	$object = new stdClass;

	$object->names = ['jone', 'balla', 'ura'];

	echo $object->names[0].'<br><br>';

	foreach ($object->names as $name) {
		echo $name.'<br>'; 
	}
 ?>