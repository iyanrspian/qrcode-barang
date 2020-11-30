<div class="row mr-1 ml-1 mt-2">
    <div class="col-md-4 order-md-2">
        <div class="card">
            <livewire:product-create></livewire:product-create>
        </div>
    </div>
    <div class="col-md-8 order-md-1">
        <div class="card">
            <div class="card-header">List Produk</div>
            <div class="card-body">
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
                        <tr>
                            <td class="text-center">1</td>
                            <td>BRG20-0001</td>
                            <td>Shampo Zinc</td>
                            <td class="text-center">3</td>
                            <td>1500</td>
                            <td>
                                <button class="btn btn-sm btn-info text-white">Edit</button>
                                <button class="btn btn-sm btn-danger text-white">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>