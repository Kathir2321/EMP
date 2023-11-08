{{-- <h1>hello</h1> --}}

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

      
        <div>
            <x-input-label for="property_id" :value="__('property_id')" />
            <x-text-input id="property_id" class="block mt-1 w-full" type="text" name="property_id" :value="old('property_id')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('property_id')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="tenant_id" :value="__('tenant_id')" />
            <x-text-input id="tenant_id" class="block mt-1 w-full" type="text" name="tenant_id" :value="old('tenant_id')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('tenant_id')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="rent_paid" :value="__('rent_paid')" />
            <div>
                <label for="rent_paid" class="inline-block mr-2">
                    <input id="rent_paid" type="text" name="rent_paid" {{old('rent_paid') === 'yes' ? 'checked': ''}} required autocomplete="username">
                </label>
            </div>
            <x-input-error :messages="$errors->get('rent_paid')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="rent_paid_date" :value="__('rent_paid_date')" />
            <x-text-input id="rent_paid_date" class="block mt-1 w-full" type="date" name="rent_paid_date" :value="old('rent_paid_date')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('rent_paid_date')" class="mt-2" />
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
