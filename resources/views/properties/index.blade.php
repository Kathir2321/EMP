<x-guest-layout>
    <form method="POST" action="{{route('prop.store')}}">
        @csrf

        
        <div>
            <x-input-label for="user_id" :value="__('USER ID')" />
            <x-text-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" :value="old('user_id')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>

        
                <div>
                    <x-input-label for="name" :value="__('NAME')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="rent_amount" :value="__('RENT AMOUNT')" />
                    <x-text-input id="rent_amount" class="block mt-1 w-full" type="number" name="rent_amount" :value="old('rent_amount')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('rent_amount')" class="mt-2" />
               

        
        <div class="mt-4">
            <x-input-label for="advance_amount" :value="__('ADVANCE AMOUNT')" />
            <div>
                <label for="advance_amount_yes" class="inline-block mr-2">
                    <input id="advance_amount_yes" type="radio" name="advance_amount" value="yes" {{old('advance_amount') === 'yes' ? 'checked': ''}} required autocomplete="username">
                    yes
                </label>
                <label for="advance_amount_no" class="inline-block">
                    <input id="advance_amount_no" type="radio" name="advance_amount" value="no" {{old('advance_amount') === 'no' ? 'checked': ''}} required autocomplete="username">
                    No 
                </label>
            </div>
            <x-input-error :messages="$errors->get('advance_amount')" class="mt-2" />
            
        </div>
         
        <div class="mt-4">
            <x-input-label for="Status" :value="__('STATUS')" />
            <div>
                <label for="Status" class="inline-block mr-2">
                    <input id="Status" type="radio" name="status" value="married" {{old('Status') === 'yes' ? 'checked': ''}} required autocomplete="username">
                    Married
                </label>
                <label for="Status" class="inline-block">
                    <input id="Status" type="radio" name="status" value="unmarried" {{old('Status') === 'no' ? 'checked': ''}} required autocomplete="username">
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
