@extends('layouts.app')

@section('content')
    <div
         class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 p-4">
        <div class="relative bg-gray-800 text-white rounded-lg shadow-lg w-full max-w-xl p-8 overflow-y-auto">
            <!-- Кнопка закрытия -->
            <button onclick="history.back()"
                    class="absolute !top-4 !right-4 z-50 text-gray-400 hover:text-white"
                    style="position: absolute; top: 1.5rem; right: 1.5rem;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Заголовок -->
            <h2 class="text-2xl font-bold mb-6 p-4">Добавить продукт</h2>

            <!-- Форма -->
            <form>
                <div class="p-4">
                    <div class="mb-4">
                        <label class="block text-sm mb-1" for="article">Артикул</label>
                        <input type="text" id="article"
                               class="w-full p-3 rounded bg-white text-black focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm mb-1" for="name">Название</label>
                        <input type="text" id="name"
                               class="w-full p-3 rounded bg-white text-black focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm mb-1" for="status">Статус</label>
                        <select id="status"
                                class="w-full p-3 rounded bg-white text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option>Доступен</option>
                            <option>Недоступен</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <p class="text-base font-semibold">Атрибуты</p>
                        <a href="#" class="text-blue-400 text-sm hover:underline">+ Добавить атрибут</a>
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded transition">
                        Добавить
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

    {{--<div onclick="window.location.href='{{ route('products.index') }}'"
         class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 p-4">
        <div class="relative bg-gray-800 text-white rounded-lg shadow-lg w-full max-w-xl p-8 overflow-y-auto">
            <!-- Кнопка закрытия -->
            <button class="absolute !top-4 !right-4 z-50 text-gray-400 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Заголовок -->
            <h2 class="text-2xl font-bold mb-6 p-4">Добавить продукт</h2>

            <!-- Форма -->
            <form>
            <div class="p-4">
                <div class="mb-4">
                    <label class="block text-sm mb-1" for="article">Артикул</label>
                    <input type="text" id="article"
                           class="w-full p-3 rounded bg-white text-black focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm mb-1" for="name">Название</label>
                    <input type="text" id="name"
                           class="w-full p-3 rounded bg-white text-black focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm mb-1" for="status">Статус</label>
                    <select id="status"
                            class="w-full p-3 rounded bg-white text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option>Доступен</option>
                        <option>Недоступен</option>
                    </select>
                </div>

                <div class="mb-4">
                    <p class="text-base font-semibold">Атрибуты</p>
                    <a href="#" class="text-blue-400 text-sm hover:underline">+ Добавить атрибут</a>
                </div>

                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded transition">
                    Добавить
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection--}}
