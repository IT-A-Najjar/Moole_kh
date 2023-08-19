<x-guest-layout>
   <form method="POST" action="{{ route('offer.store') }}">
      @csrf
      <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Create Offer') }}
         </h2>
      </x-slot>
      <div>
         <x-input-label for="type" :value="__('Type Offer')" />
         <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus autocomplete="type" />
         <x-input-error :messages="$errors->get('type')" class="mt-2" />
      </div>
       <div>
           <x-input-label for="des" :value="__('Descrption Offer')" />
           <x-text-input id="des" class="block mt-1 w-full" type="text" name="des" :value="old('des')" required autofocus autocomplete="des" />
           <x-input-error :messages="$errors->get('des')" class="mt-2" />
       </div>
      <div>
         <x-input-label for="discount" :value="__('Discount Value in %')" />
         <x-text-input id="discount" class="block mt-1 w-full" type="number" step="any" name="discount" :value="old('discount')" required autofocus autocomplete="discount" />
         <x-input-error :messages="$errors->get('discount')" class="mt-2" />
      </div>
      <div>
         <x-input-label for="expiry" :value="__('Expiry Date')" />
         <x-text-input id="expiry" class="block mt-1 w-full" type="date" name="expiry" :value="old('expiry')" required autofocus autocomplete="expiry" />
         <x-input-error :messages="$errors->get('expiry')" class="mt-2" />
      </div>
       <div class="flex items-center justify-end mt-4">
           <x-primary-button class="ml-4">
               {{ __('Create') }}
           </x-primary-button>
       </div>
   </form>
</x-guest-layout>
