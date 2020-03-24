<?php

namespace FinancialIndexProfileSimulacion\Client;

use \FinancialIndexProfileSimulacion\Client\Api\MadurezSimulacionApi as MadurezSimulacionApi;

class MadurezApiTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \FinancialIndexProfileSimulacion\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new MadurezSimulacionApi($client, $config);
        $this->x_api_key = "your_api_key";
    }

    public function testMadurez()
    {
        $folioConsulta = "100000000";

        try {
            $result = $this->apiInstance->madurez($this->x_api_key, $folioConsulta);
            print_r($result);
            $this->assertTrue($result->getFolioScore() !== null);
        } catch (Exception $e) {
            echo 'Exception when calling MadurezSimulacionApi->getFolioScore: ', $e->getMessage(), PHP_EOL;
        }
    }
}
