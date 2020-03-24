<?php

namespace FinancialIndexProfileSimulacion\Client\Model;
use \FinancialIndexProfileSimulacion\Client\ObjectSerializer;

class CatalogoScores
{
    
    const N1 = 'N1';
    const N2 = 'N2';
    const N3 = 'N3';
    const N4 = 'N4';
    const N5 = 'N5';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::N1,
            self::N2,
            self::N3,
            self::N4,
            self::N5,
        ];
    }
}
