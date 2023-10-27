<div class="container">
    <form method="POST" action="{{ route('add-screen-post') }}">
        @csrf
        <div class="mb-3">
            <label for="inputMerek" class="form-label">Merek Beras</label>
            <input type="text" class="form-control" id="inputMerek" name="merek">
        </div>
        <div class="mb-3">
            <label for="inputKilo" class="form-label">Kemasan (KG)</label>
            <input type="number" class="form-control" id="inputKilo" name="kilo">
        </div>
        <div class="mb-3">
            <label for="inputStok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="inputStok" name="stok">
        </div>
        <div class="mb-3">
            <label for="inputHarga" class="form-label">Harga (RP)</label>
            <input type="number" class="form-control" id="inputHarga" name="harga">
        </div>
        <div class="mb-3">
            <label for="inputHargaGrosir" class="form-label">Harga Grosir (RP)</label>
            <input type="number" class="form-control" id="inputHargaGrosir" name="harga_grosir">
        </div>
        <button type="submit" class="btn btn-primary w-100">Tambah</button>
    </form>
</div>
