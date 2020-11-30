<?php

namespace App\Http\Livewire;

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
}
