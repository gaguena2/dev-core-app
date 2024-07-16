<?php


require __DIR__.'/vendor/autoload.php';
use App\Kafka\KafkaConfig;


$kafka = new KafkaConfig();

echo ">>>>>> " . $kafka . "\n";

