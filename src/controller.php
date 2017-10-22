<?php

require_once "../vendor/autoload.php";

use Triangle\TriangleInstrumented;

$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];

$t = new TriangleInstrumented($A,$B,$C);

echo json_encode($t->getType());