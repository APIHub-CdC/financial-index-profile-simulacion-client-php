<?php

namespace FinancialIndexProfileSimulacion\Client\Model;
use \FinancialIndexProfileSimulacion\Client\ObjectSerializer;

class CatalogoExclusion
{
    
    const E1 = 'E1';
    const E2 = 'E2';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::E1,
            self::E2,
        ];
    }
}
