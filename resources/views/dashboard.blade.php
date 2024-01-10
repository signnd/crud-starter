<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-6xl mx-auto p-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="m-4">{{ __(' + Tambah') }}</x-primary-button>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-3">
        <table class="w-full text-md text-left text-gray-800">
                <thead class="text-sm text-gray-800 uppercase bg-gray-200 dark:bg-gray=700 dark:text-gray-600">
                    <tr class="bg-gray-100 border-b">
                        <th scope="col" class="p-2">ID</th>
                        <th scope="col" class="p-2">Nama</th>
                        <th scope="col" class="p-2">ID_Kategori</th>
                        <th scope="col" class="p-2">Qty</th>
                        <th scope="col" class="p-2">Harga Beli</th>
                        <th scope="col" class="p-2">Harga Jual</th>
                        <th scope="col" class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100">
                        <td scope="row" class="p-2 whitespace-nowrap">1</td>
                        <td class="p-2">Longer_item_name</td>
                        <td class="p-2">Perlengkapan</td>
                        <td class="p-2">1</td>
                        <td class="p-2">Rp8500</td>
                        <td class="p-2">Rp9500</td>
                        <td class="p-2">Jual</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100">
                        <td scope="row" class="p-2 whitespace-nowrap">2</td>
                        <td class="p-2">Longest_item_name</td>
                        <td class="p-2">Perlengkapan</td>
                        <td class="p-2">2</td>
                        <td class="p-2">Rp35000</td>
                        <td class="p-2">Rp45000</td>
                        <td class="p-2">Jual</td>
                    </tr>
                </tbody>
        </table>

        </div>
        </div>
    </div>
</x-app-layout>
