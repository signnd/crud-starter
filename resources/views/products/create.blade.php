<!-- https://www.allphptricks.com/simple-laravel-10-crud-application/ -->
<x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <x-slot name="header">
        <div class="absolute">
        <button class="rounded-md text-black focus:ring focus:ring-gray-300">
        <a href="{{ route('product.index') }}"><i class="bi bi-chevron-left"></i> Kembali</a>
        </button>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 text-center">
            Tambah Produk
        </h2>
    </x-slot>
    <form action="{{ route('product.store') }}" method="post" class="mx-auto max-w-5xl">
    @csrf
    <div class="max-w-6xl mx-auto p-6 sm:px-3 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-md">
            <div class="max-w-5xl">
            <div class="grid grid-cols-2 px-8 py-1">
                <label for="nama" class="my-4 pr-3 text-right">Nama Produk</label>
                <input type="text" class="my-2 rounded-md border border-slate-400 text-sm shadow-sm
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 form-control @error('nama') is-invalid @enderror" 
                id="nama" name="nama" value="{{ old('nama') }}"/>
                @if($errors->has('nama'))
                    <span class=" bg-red-300">{{ $errors->first('nama') }}</span>
                @endif
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="kategori" class="my-4 pr-3 text-right">Pilih Kategori</label>
                    <select class="my-2 rounded-md border border-slate-400 text-sm shadow-sm
                    focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" id="id_kategori" name="id_kategori">
                    @foreach($categories as $k)
                    <option value="{{ $k-> id }}">{{ $k->nama }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="qty" class="my-4 pr-3 text-right"><i>Quantity</i></label>
                <input type="number" class="my-2 rounded-md border border-slate-400 text-sm shadow-sm
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 form-control @error('qty') is-invalid @enderror" 
                        id="qty" name="qty" value="{{ old('qty') }}"/>
                        @if($errors->has('qty'))
                            <span class="text-danger">{{ $errors->first('qty') }}</span>
                        @endif
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="harga_beli" class="my-4 pr-3 text-right">Harga Beli</label>
                <input type="number" step="100" class="my-2 rounded-md border border-slate-400 text-sm shadow-sm
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 form-control @error('harga_beli') is-invalid @enderror" 
                        id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}"/>
                        @if($errors->has('harga_beli'))
                            <span class="text-danger">{{ $errors->first('harga_beli') }}</span>
                        @endif
            </div>
            <div class="grid grid-cols-2 px-8">
            <label for="harga_jual" class="my-4 pr-3 text-right">Harga Jual</label>
                <input type="number" step="100" class="my-2 rounded-md border border-slate-400 text-sm shadow-sm
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 form-control @error('harga_jual') is-invalid @enderror" 
                        id="harga_jual" name="harga_jual" value="{{ old('harga_jual') }}"/>
                        @if($errors->has('harga_jual'))
                            <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                        @endif
            </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-3">
            <div class="invisible"></div>
            <button type="submit" class="mx-5 my-4 px-5 py-2 bg-gray-800 rounded-md text-white hover:bg-gray-600 focus:ring focus:ring-gray-300" value="Tambah Produk">Tambah Produk</button>
        </div>
    </div>
</div>
        </div>
</form>
        </div>
    </div>    
</div>
</x-app-layout>