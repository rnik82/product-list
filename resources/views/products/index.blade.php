@extends('layouts.app')

@section('content')
    <section class="bg-white min-h-screen">
        <div class="max-w-screen-xl mx-auto px-4 py-6">
            <!-- Header section -->
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-2xl font-bold">Enterprise Resource Planning</h1>
                    <p class="text-gray-600">Иванов Иван Иванович</p>
                </div>
                <div class="flex items-center space-x-4">
                    <h2 class="text-xl font-semibold text-red-600">ПРОДУКТЫ</h2>
                    <a href="{{ route('products.create') }}"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded text-sm">
                        Добавить
                    </a>
                </div>
            </div>

            <!-- Main content -->
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-48 bg-gray-800 text-white p-4 rounded-l-lg">
                    <div class="mb-8">
                        <div class="w-16 h-16 bg-white rounded-br-lg mb-2"></div>
                        <p class="text-sm">Продукты</p>
                    </div>
                </div>

                <!-- Product content -->
                <div class="flex-1 bg-gray-50 p-6 rounded-r-lg">
                    <!-- Filter/search bar -->
                    <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
                        <div class="grid grid-cols-4 gap-4">
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">АРТИКУЛ</label>
                                <p class="font-medium">mtokb2</p>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">НАЗВАНИЕ</label>
                                <p class="font-medium">MTOK-B2/216-1KT3645-K</p>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">СТАТУС</label>
                                <p class="font-medium text-green-600">Доступен</p>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">АТРИБУТЫ</label>
                                <p class="text-sm">Цвет: черный</p>
                                <p class="text-sm">Размер: L</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product details -->
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="border-b pb-4 mb-4">
                            <h3 class="text-lg font-semibold">Информация о продукте</h3>
                        </div>

                        <!-- Additional product details would go here -->
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-medium mb-2">Характеристики</h4>
                                <ul class="space-y-2">
                                    <li class="flex justify-between">
                                        <span class="text-gray-600">Вес:</span>
                                        <span>1.2 кг</span>
                                    </li>
                                    <li class="flex justify-between">
                                        <span class="text-gray-600">Материал:</span>
                                        <span>Пластик</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-medium mb-2">Дополнительно</h4>
                                <ul class="space-y-2">
                                    <li class="flex justify-between">
                                        <span class="text-gray-600">Склад:</span>
                                        <span>Основной</span>
                                    </li>
                                    <li class="flex justify-between">
                                        <span class="text-gray-600">Количество:</span>
                                        <span>42</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="screen">
            <div class="overlap-wrapper">
                <div class="overlap">
                    <div class="view">
                        <div class="overlap-group">
                            <div class="rectangle"></div>
                            <div class="div"></div>
                            <div class="rectangle-2"></div>
                            <div class="rectangle-3"></div>
                            <div class="rectangle-4"></div>
                        </div>
                    </div>
                    <div class="view-2">
                        <img class="line" src="img/line-2.svg" />
                        <img class="img" src="img/line-22.svg" />
                        <img class="line-2" src="img/line-11.svg" />
                    </div>
                    <div class="text-wrapper">АРТИКУЛ</div>
                    <div class="group">
                        <div class="text-wrapper-2">mtokb2</div>
                        <div class="text-wrapper-3">MTOK-B2/216-1KT3645-K</div>
                        <div class="text-wrapper-4">Доступен</div>
                        <div class="text-wrapper-5">Цвет: черный</div>
                        <div class="text-wrapper-6">Размер: L</div>
                    </div>
                    <div class="group-2">
                        <div class="text-wrapper-2">mtokb3</div>
                        <div class="text-wrapper-3">MTOK-B3/216-1KT3645-K</div>
                        <div class="text-wrapper-4">Не доступен</div>
                        <div class="text-wrapper-5">Цвет: серый</div>
                        <div class="text-wrapper-6">Размер: ХL</div>
                    </div>
                    <div class="text-wrapper-7">НАЗВАНИЕ</div>
                    <div class="text-wrapper-8">СТАТУС</div>
                    <div class="text-wrapper-9">АТРИБУТЫ</div>
                    <div class="enterprise-resource">Enterprise<br />Resource<br />Planning</div>
                    <div class="text-wrapper-10">ПРОДУКТЫ</div>
                    <div class="text-wrapper-11">Иванов Иван Иванович</div>
                    <div class="view-3"></div>
                    <div class="text-wrapper-12">Продукты</div>
                    <div class="overlap-group-wrapper">
                        <div class="div-wrapper"><div class="text-wrapper-13">Добавить</div></div>
                    </div>
                    <div class="view-4">
                        <div class="overlap-2">
                            <img class="vector" src="img/vector.svg" />
                            <img class="vector-2" src="img/vector-4.svg" />
                            <img class="vector-3" src="img/image.svg" />
                            <img class="vector-4" src="img/vector-2.svg" />
                            <div class="group-3"></div>
                            <img class="vector-5" src="img/vector-3.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
