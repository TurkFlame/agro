<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Definindo as rotas RESTful para operações CRUD
Route::resource('products', ProductController::class);

// Rota personalizada para a página inicial de produtos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Rota personalizada para a criação de novos produtos
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');

// Rota personalizada para editar um produto
Route::put('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Rota personalizada para deletar um produto
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Defina rotas para listar todos os produtos (GET /products),
// criar um novo produto (POST /products),
// editar um produto existente (GET /products/{id}/edit,
// PUT/PATCH /products/{id}) e excluir um produto (DELETE /products/{id}).

// <?php

// //app/Http/Controllers/ProductController.php

// namespace App\Http\Controllers;

// use App\Models\Product;
// use Illuminate\Http\Request;

// class ProductController extends Controller
// {
//     public function index()
//     {
//         $products = Product::all();
//         return view('products.index', compact('products'));
//     }

//     public function create()
//     {
//         return view('products.create');
//     }

//     public function store(Request $request)
//     {
//         $product = Product::create($request->all());
//         return redirect()->route('products.index');
//     }

//     public function edit(Product $product)
//     {
//         return view('products.edit', compact('product'));
//     }

//     public function update(Request $request, Product $product)
//     {
//         $product->update($request->all());
//         return redirect()->route('products.index');
//     }

//     public function destroy(Product $product)
//     {
//         $product->delete();
//         return redirect()->route('products.index');
//     }
// }

