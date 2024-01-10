<x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('Data Produk') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-md">
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <div class="p-3">
        @if ($message = Session::get('success'))
        <div class="flex bg-green-700 rounded-md shadow-md m-4 px-2 py-2 text-green-100" role="alert">
            {{ $message }}
        </div>
        @endif
        <a href="{{ route('product.create') }}"><x-primary-button class="m-4"><i class="bi bi-plus-circle"></i>{{ __(' Tambah Produk ') }}</a></x-primary-button>
        <div class="relative overflow-x-auto sm:rounded-lg p-3">
        <table class="w-full p-2 text-md text-left text-gray-800">
            <thead class="text-sm text-gray-800 uppercase bg-gray-200 dark:bg-gray=700 dark:text-gray-600">
                <tr class="bg-gray-100 border-b">
                    <th scope="col" class="p-2 text-center">No</th>
                    <th scope="col" class="p-2">Nama</th>
                    <th scope="col" class="p-2">ID_Kategori</th>
                    <th scope="col" class="p-2 text-center">Qty</th>
                    <th scope="col" class="p-2 text-right">Harga Beli</th>
                    <th scope="col" class="p-2 text-right">Harga Jual</th>
                    <th scope="col" class="p-2"> </th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td scope="row" class="p-2 text-center">{{ $loop->iteration }}</th>
                    <td class="p-2">{{ $product->nama }}</td>
                    <td class="p-2">{{ $product->category->nama }}</td>
                    <td class="p-2 text-center">{{ $product->qty }}</td>
                    <td class="p-2 text-right">{{ $product->harga_beli }}</td>
                    <td class="p-2 text-right">{{ $product->harga_jual }}</td>
                    <td class="text-center">
                    <a href="{{ route('product.edit', $product->id) }}"><button class="text-sm rounded-md sm:bg-white sm:text-black py-3 uppercase">
                    <i class="bi bi-pencil-square text-md"></i> Edit</button></a></td>
                    <td class="text-center">
                    <a href="{{ route('product.show', $product->id) }}"><button class="text-sm rounded-md sm:bg-white sm:text-black py-3 uppercase">
                    <i class="bi bi-eye text-sm"></i> Lihat</button></a></td>
                    <td class="text-center">
                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="text-sm rounded-md py-3 uppercase sm:bg-white sm:text-black" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                        <i class="bi bi-trash text-md"></i> Hapus</button> 
                    </form></td>
                    </td>
                </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>Belum ada produk.</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </div>
    </div>
    </div>
</x-app-layout>
    <div class="card">
        <div class="card-body">
            {{ $products->links() }}
        </div>
</div>