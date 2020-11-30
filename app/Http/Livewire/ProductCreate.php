<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ProductCreate extends Component
{
    public $nama_brg;
    public $qty;
    public $harga;

    public function render()
    {
        return view('livewire.product-create');
    }

    public function store()
    {
        $this->validate([
            'nama_brg' => 'required',
            'qty' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        
        $kode_brg = IdGenerator::generate(['table' => 'products', 'length' => 10, 'prefix' =>'BRG20-', 'field' => 'kode_brg']);

        $product = Product::create([
            'kode_brg' => $kode_brg,
            'nama_brg' => $this->nama_brg,
            'qty' => $this->qty,
            'harga' => $this->harga
        ]);

        $this->clear();
        $this->emit('stored', $product);
    }

    private function clear()
    {
        $this->nama_brg = null;
        $this->qty = null;
        $this->harga = null;
    }
}
