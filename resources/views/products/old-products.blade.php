@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">Tambah Produk Baru</div>
                <div class="float-end">
                    <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">&larr; Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <!-- <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}">
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>
                    </div>-->
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_kategori" class="col-md-4 col-form-label text-md-end text-start">Kategori</label>
                        <div class="col-md-6">
                            <select class="form-control" id="id_kategori" name="id_kategori">
                            <option value="">Pilih Kategori</option> 
                        @foreach($categories as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                            </select>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qty" class="col-md-4 col-form-label text-md-end text-start">Qty</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{ old('qty') }}">
                            @if ($errors->has('qty'))
                                <span class="text-danger">{{ $errors->first('qty') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_beli" class="col-md-4 col-form-label text-md-end text-start">Harga Beli</label>
                        <div class="col-md-6">
                            <input type="number" step="100" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}">
                            @if ($errors->has('harga_beli'))
                                <span class="text-danger">{{ $errors->first('harga_beli') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_jual" class="col-md-4 col-form-label text-md-end text-start">Harga Jual</label>
                        <div class="col-md-6">
                            <input type="number" step="100" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual" name="harga_jual" value="{{ old('harga_jual') }}">
                            @if ($errors->has('harga_jual'))
                                <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                            @endif
                        </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Tambah Produk">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
