<?php
//Require DatabaseSelector to retrieving data
require_once dirname(__FILE__) . '/../classes/System/Database/DatabaseSelector.php';

//Init the database
$db = new \System\Database\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Create new instance of product list
$productList = new \System\ProductList\AllList();
$productList->set($db->getProducts());

//Get formatted product objects
$products = $productList->get();
//$totalProducts= $productList->getTotal();