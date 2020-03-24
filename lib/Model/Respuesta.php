<?php

namespace FinancialIndexProfileSimulacion\Client\Model;

use \ArrayAccess;
use \FinancialIndexProfileSimulacion\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $FinancialIndexProfileSimulacionModelName = 'Respuesta';
    
    protected static $FinancialIndexProfileSimulacionTypes = [
        'folio_score' => 'string',
        'folio_consulta' => 'string',
        'score' => '\FinancialIndexProfileSimulacion\Client\Model\CatalogoScores',
        'exclusion' => '\FinancialIndexProfileSimulacion\Client\Model\CatalogoExclusion'
    ];
    
    protected static $FinancialIndexProfileSimulacionFormats = [
        'folio_score' => null,
        'folio_consulta' => null,
        'score' => null,
        'exclusion' => null
    ];
    
    public static function FinancialIndexProfileSimulacionTypes()
    {
        return self::$FinancialIndexProfileSimulacionTypes;
    }
    
    public static function FinancialIndexProfileSimulacionFormats()
    {
        return self::$FinancialIndexProfileSimulacionFormats;
    }
    
    protected static $attributeMap = [
        'folio_score' => 'folioScore',
        'folio_consulta' => 'folioConsulta',
        'score' => 'score',
        'exclusion' => 'exclusion'
    ];
    
    protected static $setters = [
        'folio_score' => 'setFolioScore',
        'folio_consulta' => 'setFolioConsulta',
        'score' => 'setScore',
        'exclusion' => 'setExclusion'
    ];
    
    protected static $getters = [
        'folio_score' => 'getFolioScore',
        'folio_consulta' => 'getFolioConsulta',
        'score' => 'getScore',
        'exclusion' => 'getExclusion'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$FinancialIndexProfileSimulacionModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['folio_score'] = isset($data['folio_score']) ? $data['folio_score'] : null;
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['exclusion'] = isset($data['exclusion']) ? $data['exclusion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioScore()
    {
        return $this->container['folio_score'];
    }
    
    public function setFolioScore($folio_score)
    {
        $this->container['folio_score'] = $folio_score;
        return $this;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        $this->container['folio_consulta'] = $folio_consulta;
        return $this;
    }
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }
    
    public function getExclusion()
    {
        return $this->container['exclusion'];
    }
    
    public function setExclusion($exclusion)
    {
        $this->container['exclusion'] = $exclusion;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
