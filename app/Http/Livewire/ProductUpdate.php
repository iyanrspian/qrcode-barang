<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductUpdate extends Component
{
    public $nama_brg;
    public $qty;
    public $harga;
    public $id_brg;

    protected $listeners = [
        'edit' => 'show'
    ];

    public function render()
    {
        return view('livewire.product-update');
    }

    public function show($product)
    {
        $this->nama_brg = $product['nama_brg'];
        $this->qty = $product['qty'];
        $this->harga = $product['harga'];
        $this->id_brg = $product['id'];
    }

    public function update()
    {
        $this->validate([
            'nama_brg' => 'required',
            'qty' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        
        if ($this->id_brg) {
            $product = Product::find($this->id_brg);
            $product->update([
                'nama_brg' => $this->nama_brg,
                'qty' => $this->qty,
                'harga' => $this->harga
            ]);

            $this->clear();
            $this->emit('updated', $product);
        }
    }

    private function clear()
    {
        $this->nama_brg = null;
        $this->qty = null;
        $this->harga = null;
    }
}
