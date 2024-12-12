<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller

{
    public function index()
    {
        // Récupérer tous les produits
        $products = Product::all();

        // Passer les produits à la vue
        return view('admin.dashboard', compact('products'));
    }

    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
}


    public function indexc()
    {
        // Récupérer tous les produits
        $products = Product::all();

        // Passer les produits à la vue
        return view('clients.index', compact('products'));
    }

}


