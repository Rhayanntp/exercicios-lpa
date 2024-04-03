<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('receber/nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return $nome . $idade;
});

Route::get('receber/nome/nascimento/cidadeNatal', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidadeNatal = $request->input('cidadeNatal');
    return $nome . $nascimento . $cidadeNatal;
});

Route::get('exercicio4', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero + $segundoNumero;
    return $resultado;
});

Route::get('receber/1Numero/2Numero/terceiroNumero', function (Request $request) {
    $primeiroNumero = $request->input('1Numero');
    $segundoNumero = $request->input('2Numero');
    $terceiroNumero = $request->input('terceiroNumero');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return $resultado;
});

Route::get('receber/Numero1/Numero2', function (Request $request) {
    $primeiroNumero = $request->input('Numero1');
    $segundoNumero = $request->input('Numero2');
    $resultado =  $primeiroNumero / $segundoNumero;
    return $resultado;
});

Route::get('receber/primeiro/segundo', function (Request $request) {
    $primeiroNumero = $request->input('primeiro');
    $segundoNumero = $request->input('segundo');
    $resultado =  $primeiroNumero * $segundoNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero/quartoNumero/quintoNumero', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $quartoNumero = $request->input('quartoNumero');
    $quintoNumero = $request->input('quintoNumero');
    $resultado =  $primeiroNumero + $segundoNumero;
    +$terceiroNumero +  $quartoNumero +  $quintoNumero / 5;
    return $resultado;
});

Route::get('receber/primeiro1/segundo2', function (Request $request) {
    $primeiroNumero = $request->input('primeiro1');
    $segundoNumero = $request->input('segundo2');
    $resultado =  $segundoNumero / $primeiroNumero;
    return $resultado;
});

Route::get('receber/1primeiro', function (Request $request) {
    $primeiroNumero = $request->input('1primeiro');
    $resultado = $primeiroNumero * 2;
    return 'O dobro do ' . $primeiroNumero . 'é igual a' . $resultado;
});

Route::get('calcular/base/altura', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('calcular/valor/desconto/valorDodesconto/valorComdesconto', function (Request $request) {
    $valor = $request->input('valor');
    $desconto = $request->input('desconto');
    $valorDodesconto = $valor / 100 * $desconto;
    $valorComdesconto = $valor - $valorDodesconto;
    $resultado = $valorComdesconto;
    return $resultado;
});

Route::get('calcular/salario/salarioAumento/aumento', function (Request $request) {
    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $salarioAumento = ($aumento / 100) * $salario;
    return $salarioAumento + $salario;
});

Route::get('receber/valor/calcular/pontos', function (Request $request) {
    $valor = $request->input('valor');
    $pontos = $valor / 10;
    return $pontos;
});

Route::get('calcular/vendas/comissao', function (Request $request) {
    $vendas = $request->input('vendas');
    $comissao = $vendas * 5 / 100;
    return $comissao;
});

Route::get('calcular/dias/horas/minutos/segundos', function (Request $request) {
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $dias *  1440;
    $segundos = $dias *  86400;
    $resultado = $horas . 'horas' . $minutos . 'minutos' . $segundos . 'segundos';
    return $resultado;
});

Route::get('receber/preço/quantidade/calcular/valor', function (Request $request) {
    $preço = $request->input('preço');
    $quantidade = $request->input('quantidade');
    $valor = $preço * $quantidade;
    return $valor;
});

Route::get('exemplo/condicao', function (Request $request) {
    $idade = $request->input('idade');
    $retorno = "";
    if ($idade >= 18) {
        $retorno = "Maior de idade";
    } else {
        $retorno = "Menor de idade";
    }
    return $retorno;
});

Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input("idade");
    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('verificar/par', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('verifica/numero', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero > 10) {
        return "maior que 10";
    } else {
        return "menor que 10";
    }
});

Route::get('verifica/temperatura', function (Request $request) {
    $temperatura = $request->input("temperatura");
    if ($temperatura > 30) {
        return "Eatá quente";
    } else {
        return "Está frio";
    }
});

Route::get('verifica/numeração', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero > 0) {
        return "positivo";
    } else if ($numero < 0) {
        return "negativo";
    } else {
        return "numero igual a zero";
    }
});

Route::get('verifica/numeroMaior', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");

    if ($numero1 > $numero2) {
        return "Numero maior é numero1";
    } else {
        return "Numero maior é numero2";
    }
});

Route::get('verifica/divisão', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero % 3 == 0) {
        return "divisivel";
    } else {
        return "não é divisivel";
    }
});

Route::get('exercício/1', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero > 10) {
        return "Numero maior que 10";
    } else {
        return "Numero menor que 10";
    }
});

Route::get('exercício/2', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero > 0) {
        return "positivo";
    } else if ($numero < 0) {
        return "negativo";
    } else {
        return "numero igual a zero";
    }
});

Route::get('exercício/3', function (Request $request) {
    $idade = $request->input("idade");
    if ($idade >= 18) {
        return "Você é maior de idade";
    } else {
        return "Você é menor de idade";
    }
});

Route::get('exercício/4', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('exercício/5', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");

    if ($numero1 > $numero2) {
        return "Numero maior é numero1";
    } else {
        return "Numero maior é numero2";
    }
});

Route::get('exercício/6', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero % 9 == 0) {
        return "divisivel";
    } else {
        return "não é divisivel";
    }
});

Route::get('exercício/7', function (Request $request) {
    $temperatura = $request->input("temperatura");
    if ($temperatura > 30) {
        return "Eatá quente";
    } else {
        return "Está frio";
    }
});

Route::get('exercício/8', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero % 7 == 0) {
        return "é multiplo";
    } else {
        return "não é multiplo";
    }
});

Route::get('exercício/9', function (Request $request) {
    $idade = $request->input("idade");
    if ($idade < 12) {
        return "Você é uma criança";
    } else {
        return "Você é um adolecente";
    }
});

Route::get('exercício/10', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero > 0) {
        if ($numero % 2 != 0) {
            return "impar";
        }
    }
});

Route::get('exercício/11', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero > 100) {
        return "maior";
    } else if ($numero < 100) {
        return "menor";
    } else {
        return "numero igual a cem";
    }
});

Route::get('exercício/12', function (Request $request) {
    $numero = $request->input("numero");
    if ($numero % 6 == 0) {
        return "divisivel";
    } else {
        return "não é divisivel";
    }
});

Route::get('exercício/13', function (Request $request) {
    $nome = $request->input('nome');
    return "Olá $nome";
});

Route::get('exercício/15', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");

    if ($numero1 < $numero2) {
        return "Numero menor é numero1";
    } else {
        return "Numero menor é numero2";
    }
});

Route::get('exercício/16', function (Request $request) {
    $nome = $request->input("nome");
    $idade = $request->input("idade");
    if ($idade >= 18) {
        return "Você é maior de idade" . " " . $nome;
    } else {
        return $nome . "menor de idade";
    }
});

Route::get('exercício/18', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");
    return $numero1 * $numero2;
});

Route::get('exercício/14', function (Request $request) {
    $idade = $request->input("idade");
    if ($idade >= 18) {
        return "Você pode dirigir";
    } else {
        return "Você não pode dirigir";
    }
});

Route::get('exercício/17', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 == 0) {
        return "não é possível efetuar a divisão pois o primeiro número é zero";
    } else if ($numero2 == 0) {
        return "não é possível efetuar a divisão pois o segundo número é zero";
    } else {
        return $numero1 / $numero2;
    }
});

Route::get('exercício/19', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 + $numero2;
    if ($resultado % 2 == 0) {
        return "a soma dos dois numeros é par";
    } else {
        return $numero1 / $numero2;
    }
});

Route::get('tarefa/1', function (Request $request) {
    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    if ($resultado >= 7) {
        return "aprovado";
    } else {
        return "reprovado";
    }
});

Route::get('tarefa/2', function (Request $request) {
    $renda = $request->input('renda');
    if ($renda <= 1900) {
        return "isento de imposto";
    }
    if ($renda > 1900) {
        if ($renda <= 2800) {
            return $renda - ($renda * 7 / 100);
        }
        if ($renda > 2800) {
            if ($renda <= 3700) {
                return $renda - ($renda * 15 / 100);}
                else  { return $renda - ($renda * 22 / 100);
                       
                }
            }
        }
    
});
