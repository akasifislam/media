<x-app-layout>
    <x-slot name="header">{{ $album->title }}</x-slot>

   <div class="container mx-auto m-2 p-2 bg-white shadow-md rounded-lg mt-2">
    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
        <form method="POST" action="{{ route('albums.upload',$album->id) }}" enctype="multipart/form-data">
          @csrf
          <div class="sm:col-span-6">
            <label for="title" class="block text-sm font-medium text-gray-700"> Album Image </label>
            <div class="mt-1">
              <input type="file" id="image" name="image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
          </div>
          <div class="sm:col-span-6 pt-5">
            <x-button class="bg-green-500">save</x-button>
          </div>
        </form>
      </div>
      <div class="mt-4">
          <div class="grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-4">
                @foreach ($photos as $photo)
                    <div>
                        <a class="block relative h-56 rounded overflow-hidden">
                            <img class="object-cover object-center w-full h-full block" src="{{ $photo->getUrl('thumb') }}" alt="sdbkfgsdbg">
                        </a>
                        <a href="{{ route('album.image.show',[$album->id,$photo->id]) }}">Full Image</a>
                    </div>
                @endforeach
          </div>
      </div>
   </div>
</x-app-layout>