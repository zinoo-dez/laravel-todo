@extends('layouts.app')
@section('title', 'welcome')
@section('content')
    <div class="m-auto w-[600px] p-10 bg-green-500">

        <form action="{{ route('todos.store') }}" method="post">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
                <label for="descripton"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="descripton" id="descripton" name="description"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
            </div>
            <div class="mb-6">

                <div class="flex items-center">
                    <input value="1" name="completed" id="checked-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-green-600 dark:ring-offset-green-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Completed</label>
                </div>

                </select>


            </div>
            <input type="submit" class="px-3 py-2 bg-green-700 text-green-100">


        </form>

    </div>
@endsection
