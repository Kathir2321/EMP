<x-guest-layout>
    <form method="POST" action="{{ route('store.image') }}">
        @csrf

        
        <div>
            <x-input-label for="property_id" :value="__('PROPERTY ID')" />
            <x-text-input id="property_id" class="block mt-1 w-full" type="number" name="property_id" :value="old('property_id')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('property_id')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="image" :value="__('IMAGE')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="Status" :value="__('STATUS')" />
            <div>
                <label for="Status" class="inline-block mr-2">
                    <input id="Status" type="radio" name="status" value="Married" required autocomplete="username">
                    Married
                </label>
                <label for="Status" class="inline-block">
                    <input id="Status" type="radio" name="status" value="Unmarried"  required autocomplete="username">
                    Unmarried
                </label>
            </div>
            <x-input-error :messages="$errors->get('Status')" class="mt-2" />
            
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
