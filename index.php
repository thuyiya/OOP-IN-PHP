<?php 

require 'Bird.php';

require 'Pigeon.php';

$pigeon= new Pigeon(true, 2);

echo $pigeon->getLegCount();