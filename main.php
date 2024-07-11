<?php


require __DIR__.'/vendor/autoload.php';

use \App\kafka\KafkaConfig;

$kafka = new KafkaConfig();

echo ">>>>>> " . $kafka;

