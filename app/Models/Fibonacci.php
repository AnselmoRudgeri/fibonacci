<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fibonacci extends Model
{
    public static function calculo($envio)
    {
        $computed = preg_split("/[,]/", $envio);
        asort($computed);
        echo "<strong>A ordem correta e os números que fazem parte da sequência são :</strong> ", "<br>" ;
        foreach ($computed as $argn) {
            for ($x = 0, $y = 1; $x < $argn; $x = $y, $y = $t) $t = $x + $y;
            if ($x == $argn) {
                echo '<pre>';print_r($argn);
            }
        }
    }
}
