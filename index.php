<?php 

require 'Bird.php';

require 'Pigeon.php';

require 'Penguin.php';

$penguin= new Penguin(false, 2);

if ($penguin->canFly()) {
	echo 'yes!';
}else{
	echo 'Penguin Can Not Fly'; 
}