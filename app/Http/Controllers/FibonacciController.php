<?php

namespace App\Http\Controllers;

use App\Models\Fibonacci;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function calcular(Request $request)
    {
        $dados = $request->all();
        $envio = $dados['dados'];
        $calculo = Fibonacci::calculo($envio);

        return $calculo;
    }
}
