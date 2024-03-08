<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){
    $nome = $request->input('$nome');
    return $nome;
});

Route::get('receber/nome/idade', function(Request $request){
    $nome = $request->input('$nome');
    $idade = $request->input('$idade');
    return $nome . $idade;
});

Route::get('receber/nome/nascimento/cidadeNatal', function(Request $request){
    $nome = $request->input('$nome');
    $nascimento = $request->input('$nascimento');
    $cidadeNatal = $request->input('$cidadeNatal');
    return $nome . $nascimento . $cidadeNatal;
});

Route::get('receber/primeiroNumero/segundoNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero');
    $segundoNumero = $request->input('$segundoNumero');
    $resultado = $primeiroNumero . $segundoNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero');
    $segundoNumero = $request->input('$segundoNumero');
    $terceiroNumero = $request->input('$terceiroNumero');
    $resultado = $primeiroNumero . $segundoNumero . $terceiroNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/segundoNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $resultado =  $primeiroNumero / $segundoNumero;
    return $resultado; 
});

Route::get('receber/primeiroNumero/segundoNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $resultado =  $segundoNumero . $primeiroNumero;
    return $resultado; 
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero/quartoNumero/quintoNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $terceiroNumero = $request->input('$terceiroNumero');
    $quartoNumero = $request->input('$quartoNumero');
    $quintoNumero = $request->input('$quintoNumero');
    $resultado =  $primeiroNumero + $segundoNumero; + $terceiroNumero +  $quartoNumero +  $quintoNumero / 5;
    return $resultado; 
});

Route::get('receber/primeiroNumero/segundoNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero'); 
    $segundoNumero = $request->input('$segundoNumero'); 
    $resultado =  $segundoNumero / $primeiroNumero;
    return $resultado; 
});

Route::get('receber/primeiroNumero', function(Request $request){
    $primeiroNumero = $request->input('$primeiroNumero');
    $resultado = $primeiroNumero * 2;
    return 'O dobro do '. $primeiroNumero . 'é igual a' . $resultado;
});

Route::get('calcular/base/altura', function(Request $request){
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('calcular/valor/desconto/valorDodesconto/valorComdesconto', function(Request $request){
    $valor = $request->input('valor');
    $desconto = $request->input('desconto');
    $valorDodesconto = $valor / 100 * $desconto;
    $valorComdesconto = $valor - $valorDodesconto;
    $resultado = $valorComdesconto;
    return $resultado;
});

Route::get('calcular/salario/salarioAumento/aumento', function(Request $request){
    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $salarioAumento = $salario + $aumento;
    $resultado = $salarioAumento;
    return $resultado;
});

Route::get('receber/valor/calcular/pontos', function(Request $request){
    $valor = $request->input('valor');
    $pontos = $valor / 10;
    return $pontos;

});

Route::get('calcular/vendas/comissao', function(Request $request){
    $vendas = $request->input('vendas');
    $comissao = $vendas * 5 / 100;
    return $comissao;
});

Route::get('calcular/dias/horas/minutos/segundos', function(Request $request){
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $dias *  1440;
    $segundos = $dias *  86400;
    $resultado = $horas . $minutos . $segundos;
    return $resultado;
});

Route::get('receber/preço/quantidade/calcular/valor', function(Request $request){
    $preço = $request->input('preço');
    $quantidade = $request->input('quantidade');
    $valor = $preço * $quantidade;
    return $valor;
});