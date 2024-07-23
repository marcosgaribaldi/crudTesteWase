<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Exibe uma lista de todos os produtos
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Exibe o formulário para criar um novo produto
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário e armazena um novo produto
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:1',
            // Adicione outras regras de validação conforme necessário
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Produto criado com sucesso.');
    }

    public function edit(Product $product)
    {
        // Exibe o formulário para editar um produto existente
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Valida os dados do formulário e atualiza o produto
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:1',
            // Adicione outras regras de validação conforme necessário

          
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy(Product $product)
    {
        // Exclui um produto
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produto excluído com sucesso.');
    }

    public function converterParaReal(Request $request)
{
    $valor = $request->input('valor'); // Supondo que 'valor' é o nome do campo no formulário

    // Convertendo o valor para o formato de moeda brasileira
    $valorFormatado = number_format($valor, 2, ',', '.');

    return view('sua_view', compact('valorFormatado'));
}
}
