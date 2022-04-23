<?php
require_once './farm.php';
require_once './barn.php';

$barn = new Barn;
$farm = new Farm;
$barn->add_animal('cow', 10, 'milk', [8, 12]);
$barn->add_animal('chicken', 20, 'eggs', [0, 1]);
$farm->get_animals();
