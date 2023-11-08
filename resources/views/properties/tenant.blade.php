<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        
        <div>
            <x-input-label for="property_id" :value="__('PROPERTY ID')" />
            <x-text-input id="property_id" class="block mt-1 w-full" type="text" name="property_id" :value="old('property_id')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('property_id')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="name" :value="__('NAME')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="email" :value="__('EMAIL')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="Phone_number" :value="__('PHONE NUMBER')" />
            <x-text-input id="Phone_number" class="block mt-1 w-full" type="number" name="Phone_number" :value="old('Phone_number')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('Phone_number')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="is_advance_paid" :value="__('IS ADVANCE PAID')" />
            <div>
                <label for="is_advance_paid" class="inline-block mr-2">
                    <input id="is_advance_paid" type="radio" name="is_advance_paid" value="yes" {{old('is_advance_paid') === 'yes' ? 'checked': ''}} required autocomplete="username">
                    yes
                </label>
                <label for="is_advance_paid" class="inline-block">
                    <input id="is_advance_paid" type="radio" name="rent_amount" value="no" {{old('is_advance_paid') === 'no' ? 'checked': ''}} required autocomplete="username">
                    No 
                </label>
            </div>
            <x-input-error :messages="$errors->get('is_advance_paid')" class="mt-2" />
        </div>

        
        <div class="mt-4">
            <x-input-label for="advance_paid_date" :value="__('ADVANCE PAID DATE')" />
            <div>
                <label for="advance_paid_date" class="inline-block mr-2">
                    <input id="advance_paid_date" type="date" name="advance_paid_date" {{old('advance_paid_date') === 'yes' ? 'checked': ''}} required autocomplete="username">
                </label>
            </div>
            <x-input-error :messages="$errors->get('advance_paid_date')" class="mt-2" />
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
