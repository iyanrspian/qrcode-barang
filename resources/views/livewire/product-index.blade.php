<div class="row mr-1 ml-1 mt-2">
    <div class="col-md-4 order-md-2">
        <div class="card">
            @if ($status)
                <livewire:product-update></livewire:product-update>
            @else
                <livewire:product-create></livewire:product-create>
            @endif
        </div>
    </div>
    <div class="col-md-8 order-md-1">
        <div class="card">
            <div class="card-header">List Produk</div>
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th col width="40">No</th>
                            <th col width="130">Kode Barang</th>
                            <th>Nama Barang</th>
                            <th col width="40">Qty</th>
                            <th col width="130">Harga</th>
                            <th col width="125">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($products as $product)
                        <?php $no++; ?>
                        <tr>
                            <td class="text-center">{{ $no }}</td>
                            <td>{{ $product->kode_brg }}</td>
                            <td>{{ $product->nama_brg }}</td>
                            <td class="text-center">{{ $product->qty }}</td>
                            <td>{{ $product->harga }}</td>
                            <td>
                                <button wire:click="edit({{ $product->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                                <button wire:click="destroy({{ $product->id }})" class="btn btn-sm btn-danger text-white">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>