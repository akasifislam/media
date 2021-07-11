<x-app-layout>
    <x-slot name="header">Albums</x-slot>

    <div class="container mx-auto mt-6 p-4">
        <div class="w-fll m-2 p-2">
            <a href="{{ route('albums.create') }}" class="bg-blue-600 text-white font-semibold rounded p-2">create</a>
        </div>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
                      <th scope="col" class="relative px-6 py-3">Manage</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($albums as $key => $album)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"> {{ $key+1 }} </td>
                        <td class="px-6 py-4 whitespace-nowrap"> {{ $album->title }} </td>                      
                        <td class="px-6 py-4 text-right text-sm">Manage</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="m-2 p-2">Pagination</div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>