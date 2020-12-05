<?php
include "union.php";
$unionClass = new union();
echo "<pre/>";
$unionClass->quickFindUF(10);
$unionClass->setUnion(0,5);
$unionClass->setUnion(5, 6);
$unionClass->setUnion(1, 6);
$unionClass->setUnion(1, 2);
$unionClass->setUnion(2, 7);
print_r($unionClass->getAll());
