@extends('layouts.app')
@section('title', 'todo-index')
@section('content')
    <h1 class="bg-green-500 text-3xl text-bold text-center">Todo list</h1>
    <a href="{{ route('todos.create') }}" class="px-6 py-2 bg-green-400 text-green-100">New Todo</a>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Todo Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        completed
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $td)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $td->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $td->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $td->completed ? 'checked' : 'uncheck' }}
                        </td>

                        <td class="px-6 py-4">
                            <a href="{{ route('todos.edit', $td->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
