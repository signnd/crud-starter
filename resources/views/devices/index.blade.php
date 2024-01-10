<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('devices.store') }}">
        <fieldset>
            <label id="product">Product 
            <input type="text" id="product" />
            </label>
            <br><br>
            <label id="announced">Announced
            <input type="text" id="announced" />
            </label>
            <br><br>
            <label id="type">Device type
            <input type="text" id="type" />
            </label>
        </fieldset>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4 ml-3">{{ __('Add device') }}</x-primary-button>
        </form>
</x-app-layout>