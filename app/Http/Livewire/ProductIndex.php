<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $status = false;

    protected $listeners = [
        'stored' => 'storing',
        'updated' => 'updating'
    ];

    public function render()
    {
        return view('livewire.product-index', [
            'products' => Product::latest()->paginate(5)
        ]);
    }

    public function edit($id)
    {
        $this->status = true;
        $product = Product::find($id);
        $this->emit('edited', $product);
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
        // Masih bug, jika tidak di reload, setelah update barang
        // Kalo tambah barang, namun malah update barang terakhir
        return redirect('/home');
    }
}
