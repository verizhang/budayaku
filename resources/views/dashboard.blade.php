<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <form action="{{ route("article.create") }}" method="GET">
                            <button type="submit" class="m-3 text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">+ Add</button>
                        </form>

                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">Image</th>
                                <th scope="col" class="px-6 py-3">Title</th>
                                <th scope="col" class="px-6 py-3">Body</th>
                                <th scope="col" class="px-6 py-3 text-center" colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $item)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <img src="{{URL("storage/app/public/".$item->image)}}" class="w-52" />
                                    </th>
                                    <td class="px-6 py-4">{{$item->title}}</td>
                                    <td class="px-6 py-4">{{$item->body}}</td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="/articles/edit/{{$item->id}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="/articles/delete/{{$item->id}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="font-medium text-red-600 hover:underline" type="submit">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
