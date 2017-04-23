<?php

$fruits = array(
    array('name'=>'Banaan', 'color'=>'Kollane', 'energy'=>'88'),
    array('name'=>'Õun', 'color'=>'Punane', 'energy'=>'52'),
    array('name'=>'Ananass', 'color'=>'Kollakas pruun', 'energy'=>'50'),
    array('name'=>'Viinamari', 'color'=>'Tumepunane', 'energy'=>'66'),
    array('name'=>'Pirn', 'color'=>'Roheline', 'energy'=>'57'),
);

foreach ($fruits as $value){
    include "data.html";
}