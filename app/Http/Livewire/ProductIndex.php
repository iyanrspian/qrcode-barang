<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $status = false;

    protected $listeners = [
        'stored' => 'handle'
    ];

    public function render()
    {
        return view('livewire.product-index', [
            'products' => Product::latest()->get()
        ]);
    }

    public function edit($id)
    {
        $this->status = true;
        $product = Product::find($id);
        $this->emit('edit', $product);
    }

    public function handle($product)
    {
        // dd($product);
        session()->flash('message', 'Data barang telah ditambahkan!');
    }
}
