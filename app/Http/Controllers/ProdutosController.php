<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
  public function index(Request $request)
  {

    /*
    Opção 1
      $dados = $request->all(); //pegar todos os dados
      
      $produto = $dados['produto'];
      $preco = $dados['preco'];
      $categoria = $dados['categoria'];
      */

    /*
     Opção 2
      $produto = $request->query('produto');
      $preco = $request->query('preco');
      $categoria = $request->query('categoria');
      */

    /*Opção 3 - (metodo post oculta as informações)
    $produto = $request->input('produto');
    $preco = $request->input('preco');
    $categoria = $request->input('categoria');
    return view('produtos', ['produto' => $produto, 'preco' => $preco, 'categoria' => $categoria]);
     */

    //Opção 4 - (metodo post oculta as informações e cria um array)
    $dados = [
      'produto' => $request->input('produto'),
      'preco' => $request->input('preco'),
      'categoria' => $request->input('categoria'),
    ];
    return view('produtos', $dados);
  }
}
