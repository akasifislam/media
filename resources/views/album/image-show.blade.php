<x-app-layout>
    <x-slot name="header">{{ $album->title }}</x-slot>

   <div class="container mx-auto m-2 p-2 bg-white shadow-md rounded-lg mt-2">
        <img src="{{ $image->getUrl() }}" alt="">
   </div>
</x-app-layout>