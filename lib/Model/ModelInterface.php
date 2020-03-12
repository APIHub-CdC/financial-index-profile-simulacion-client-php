<?php

namespace MadurezSimulacion\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function MadurezSimulacionTypes();
    
    public static function MadurezSimulacionFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
