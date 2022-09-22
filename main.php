<?php

use Farms\Farm;
use Animals\Cow;
// use Animals\Sheap;
use Animals\Chicken;

spl_autoload_register(function ($classname) {
	include $classname . '.php';
});

$farm = new Farm;

echo 'Добавить животных'.PHP_EOL;
$farm->addAnimals(Cow::class, 10);
$farm->addAnimals(Chicken::class, 20);
// $farm->addAnimals(Sheap::class, 5);

echo 'Всего животных'.PHP_EOL;
$animals = $farm->getAddedAnimals();
foreach ($animals as $item => $i) {
	echo "$item $i".PHP_EOL;
}

echo 'Собрать продукты'.PHP_EOL;
$products = $farm->collectProducts(7);
foreach ($products as $item => $i) {
	echo "$item $i".PHP_EOL;
}

echo 'Добавить животных'.PHP_EOL;
$farm->addAnimals(Cow::class);
$farm->addAnimals(Chicken::class, 5);
// $farm->addAnimals(Sheap::class, 2);

echo 'Всего животных'.PHP_EOL;
$animals2 = $farm->getAddedAnimals();
foreach ($animals2 as $item => $i) {
	echo "$item $i".PHP_EOL;
}

echo 'Собрать продукты'.PHP_EOL;
$products2 = $farm->collectProducts(7);
foreach ($products2 as $item => $i) {
	echo "$item $i".PHP_EOL;
}

echo 'Всего собрано продуктов'.PHP_EOL;
$products3 = $farm->getCollectedProducts();
foreach ($products3 as $item => $i) {
	echo "$item $i".PHP_EOL;
}
