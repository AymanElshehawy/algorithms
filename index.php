<?php
include "UnionQuickFind.php";
$unionClass = new UnionQuickFind();
echo "<pre/>";
$unionClass->quickFindUF(10);
$unionClass->setUnion(0,5);
$unionClass->setUnion(5, 6);
$unionClass->setUnion(1, 6);
$unionClass->setUnion(1, 2);
$unionClass->setUnion(2, 7);
echo "Union Quick Find";
print_r($unionClass->getAll());

include "QuickUnion.php";
$quickUnion = new QuickUnion();
$quickUnion->quickUnionUF(10);
$quickUnion->setUnion(4,3);
$quickUnion->setUnion(3,8);
$quickUnion->setUnion(6,5);
$quickUnion->setUnion(9,4);
$quickUnion->setUnion(5,0);
$quickUnion->setUnion(7,2);
$quickUnion->setUnion(6,1);
$quickUnion->setUnion(7,3);
print_r($quickUnion->getAll());

