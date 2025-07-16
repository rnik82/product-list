@extends('layouts.app')

@section('content')
    <section class="bg-white min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-52 bg-gray-800 text-white p-4 flex flex-col">
            <h1 class="text-lg font-semibold mb-4">Enterprise Resource Planning</h1>

            <p>Продукты</p>
            <div class="flex-1"></div> <!-- Растягивает плашку вниз -->
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6">
            <!-- Header -->
            <div class="flex justify-between items-start mb-6">
                <h2 class="text-lg font-bold text-red-600 ml-4">ПРОДУКТЫ</h2>

                <div class="flex flex-col items-end">
                    <p class="text-sm text-red-600 mb-2">{{ Auth::user()->name }}</p>
                    {{ html()->a(route('products.create'), __('Добавить'))
                        ->class("bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded") }}
                </div>
            </div>

            <!-- Table headers -->
            <div class="shadow rounded overflow-hidden">
            <table class="mt-4">
                <thead class="border-b-2 border-solid border-black text-left">
                <tr>
                    <th class="p-2">{{ __('АРТИКУЛ') }}</th>
                    <th class="p-2">{{ __('НАЗВАНИЕ') }}</th>
                    <th class="p-2">{{ __('СТАТУС') }}</th>
                    <th class="p-2">{{ __('АТРИБУТЫ') }}</th>
                </tr>
                </thead>
            <!-- Products -->
                <tbody>
                @foreach ($products as $product)
                    <tr class="border-b bg-white">
                        <td class="text-sm font-medium p-2">{{ $product->article  ?? '' }}</td>
                        <td class="text-sm font-medium p-2">{{ $product->name  ?? '' }}</td>
                        <td class="text-sm font-medium p-2">{{ $product->status  ?? '' }}</td>
                        <td class="text-sm font-medium p-2">{{ $product->attributes  ?? '' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </section>
@endsection
