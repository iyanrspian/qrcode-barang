<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    protected $listeners = [
        'stored' => 'handle'
    ];

    public function render()
    {
        return view('livewire.product-index', [
            'products' => Product::latest()->get()
        ]);
    }

    public function handle($product)
    {
        // dd($product);
    }
}
