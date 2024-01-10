<x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <x-slot name="header">
    <div class="absolute">
    <button class="rounded-md text-black focus:ring focus:ring-gray-300">
    <a href="{{ route('product.index') }}"><i class="bi bi-chevron-left"></i> Kembali</a>
    </button>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 text-center">
        Informasi Produk
    </h2>
    </x-slot>
    <div class="max-w-6xl mx-auto p-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-md px-5 py-5">
            <div class="grid grid-cols-2 px-8">
                <label for="nama" class="my-3 pr-3 text-right"><strong>Nama: </strong></label>
                <div class="my-3 pr-3 text-left">{{ $product->nama }}</div>
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="kategori" class="pr-3 text-right"><strong>Kategori: </strong></label>
                <div class="pr-3 text-left">{{ $product->category->nama }}</div>
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="qty" class="my-3 pr-3 text-right"><strong>Jumlah Awal (<em>Quantity</em>): </strong></label>
                <div class="my-3 pr-3 text-left">{{ $product->qty }}</div>
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="harga_beli" class="pr-3 text-right"><strong>Harga Beli: </strong></label>
                <div class="pr-3 text-left">{{ $product->harga_beli }}</div>
            </div>
            <div class="grid grid-cols-2 px-8">
                <label for="harga_jual" class="my-3 pr-3 text-right"><strong>Harga Jual: </strong></label>
                <div class="my-3 pr-3 text-left">{{ $product->harga_jual }}</div>
            </div>
        </div>
            </div>
</div>
        </div>
    </div>
</x-app-layout>