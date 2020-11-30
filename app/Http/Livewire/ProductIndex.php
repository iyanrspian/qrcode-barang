<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $status = false;

    protected $listeners = [
        'stored' => 'storing',
        'updated' => 'updating'
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

    public function destroy($id)
    {
        if ($id) {
            $product = Product::find($id);
            $product->delete();
            session()->flash('message', 'Data barang telah dihapus!');
        }
    }

    public function storing($product)
    {
        // dd($product);
        session()->flash('message', 'Data barang telah ditambahkan!');
    }

    public function updating($product)
    {
        // dd($product);
        session()->flash('message', 'Data barang telah diperbarui!');
    }
}
