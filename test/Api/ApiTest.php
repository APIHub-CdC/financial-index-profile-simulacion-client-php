<?php

namespace MadurezSimulacion\Client;

use \MadurezSimulacion\Client\Configuration;
use \MadurezSimulacion\Client\ApiException;
use \MadurezSimulacion\Client\ObjectSerializer;

class MadurezApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \MadurezSimulacion\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \MadurezSimulacion\Client\Api\MadurezSimulacionApi($client, $config);

        $this->x_api_key = "your_api_key";   
    }
    
    public function testMadurez()
    {
        $folioConsulta = "100000000";

        try {
            $result = $this->apiInstance->madurez($this->x_api_key, $folioConsulta);
            print_r($result);
            $this->assertTrue($result->getFolioScore()!==null);
        } catch (Exception $e) {
            echo 'Exception when calling MadurezSimulacionApi->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    } 
}
