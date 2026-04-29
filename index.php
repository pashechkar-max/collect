<?php
//namespace Collect;
//
//require_once 'vendor/autoload.php';
//
//$records =
//    [
//        'id' => 2135,
//        'first_name' => 'John',
//        'last_name' => 'Doe',
//    ];
//var_dump(collection($records)->toArray());
//


require_once 'vendor/autoload.php';

use function Collect\collection;

$data = [1, 2, 3, 4];

$result = collection($data)
    ->filter(fn($item) => $item > 2)
    ->toArray();

var_dump($result);
