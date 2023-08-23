<x-guest-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Create News') }}
      </h2>
   </x-slot>
   <form method="POST" action="{{ route('news.store') }}">
      @csrf

      <!-- title -->
      <div>
         <x-input-label for="title" :value="__('Title News')" />
         <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
         <x-input-error :messages="$errors->get('title')" class="mt-2" />
      </div>
      <!-- content -->
      <div>
         <x-input-label for="content" :value="__('Content News')" />
         <x-text-input id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required autofocus autocomplete="content" />
         <x-input-error :messages="$errors->get('content')" class="mt-2" />
      </div>
      <div class="flex items-center justify-end mt-4">
         <x-primary-button class="ml-4">
            {{ __('Create') }}
         </x-primary-button>
      </div>
   </form>
</x-guest-layout>
