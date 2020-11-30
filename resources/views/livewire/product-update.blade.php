<div>
    <div class="card-header">Input Produk</div>
    <div class="card-body">
        <form wire:submit.prevent="update">
            <input type="hidden" name="" wire:model="id_brg">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm">
                    <input wire:model="nama_brg" type="text" class="form-control @error('nama_brg') is-invalid @enderror" placeholder="example: Shampo Lifebouy">
                    @error('nama_brg')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Qty</label>
                <div class="col-sm">
                    <input wire:model="qty" type="text" class="form-control @error('qty') is-invalid @enderror" placeholder="example: 3">
                    @error('qty')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm">
                    <input wire:model="harga" type="text" class="form-control @error('harga') is-invalid @enderror" placeholder="example: 5000">
                    @error('harga')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="float-right mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
