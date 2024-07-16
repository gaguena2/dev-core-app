<?php
namespace App\Kafka;

class KafkaConfig
{

    private $brokerList;
    private $refreshInterval;
    private $groupId;

    public function __construct()
    {
        $this->brokerList = getenv('BROKERS');
        $this->groupId = getenv('BROKERS');
        $this->refreshInterval = getenv('REFRESH_INTERVAL');
    }
    public function __toString()
	{
		return "KafkaConfig: ". $this->brokerList;
	}
}
