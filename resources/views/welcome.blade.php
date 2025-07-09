<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Product Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .content-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header-bar {
            background-color: lightgray;
            width: 100%;
            border-bottom: 1px solid #bae6fd;
        }
        .simple-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .simple-table th, .simple-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .simple-table th {
            background-color: #f2f2f2;
        }
        .nav-button {
            color: #1d4ed8;
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }
        .nav-button:hover {
            background-color: #dbeafe;
            text-decoration: underline;
        }
    </style>
</head>
<body class="font-sans antialiased bg-white">
<div class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="header-bar">
        <div class="content-container py-4">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Product Management System</h1>
                    @auth
                        <p class="text-sm text-gray-600 mt-1">Вы вошли как: {{ Auth::user()->name }}</p>
                    @else
                        <p class="text-sm text-gray-600 mt-1">Вы вошли как: Гость</p>
                    @endauth
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('products.index') }}" class="nav-button">
                            Перейти к продуктам
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-button">
                                Выйти
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="nav-button">
                            Вход
                        </a>
                        <a href="{{ route('register') }}" class="nav-button">
                            Регистрация
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="content-container py-8">
            <div class="mb-6">
                <p>Разработать функционал на <span class="font-semibold">Laravel</span> с базой данных <span class="font-semibold">PostgreSQL</span>. Реализовать вывод списка продуктов, просмотр карточки продукта, добавление, редактирование и удаление продукта.</p>
            </div>

            <h2 class="text-lg font-semibold mb-2">Создать таблицу «products»:</h2>

            <table class="simple-table">
                <thead>
                <tr>
                    <th>Поле</th>
                    <th>Тип данных</th>
                    <th>Описание</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>id</td>
                    <td>uint, autoincrement</td>
                    <td>Уникальный идентификатор</td>
                </tr>
                <tr>
                    <td>article</td>
                    <td>varchar(255), unique</td>
                    <td>Артикул (уникальный)</td>
                </tr>
                <tr>
                    <td>name</td>
                    <td>varchar(255)</td>
                    <td>Название товара</td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>varchar(255)</td>
                    <td>"available" или "unavailable"</td>
                </tr>
                <tr>
                    <td>data</td>
                    <td>jsonb</td>
                    <td>Доп. поля (например, color, size)</td>
                </tr>
                <tr>
                    <td>created_at</td>
                    <td>timestamps</td>
                    <td>Дата создания</td>
                </tr>
                <tr>
                    <td>updated_at</td>
                    <td>timestamps</td>
                    <td>Дата обновления</td>
                </tr>
                <tr>
                    <td>deleted_at</td>
                    <td>soft deletes</td>
                    <td>Мягкое удаление</td>
                </tr>
                </tbody>
            </table>

            <div class="mt-6">
                <h2 class="text-lg font-semibold mb-2">Требования:</h2>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Создать Eloquent-модель «Product», связанную с таблицей «products»</li>
                    <li>В модели реализовать Local Scope для получения только доступных продуктов (STATUS = “available”).</li>

                    <li>Сделать валидацию создания и редактирования:
                    NAME — обязательное поле, длиной не менее 10 символов;
                    ARTICLE — обязательное поле, только латинские символы и цифры, уникальное в таблице.</li>

                    <li>Создать роль администратора, который может редактировать артикул, остальным пользователям можно редактировать всё, кроме артикула.
                    Роль пользователя можно узнать из настроек (config(‘products.role’)).
                    Реализовать валидацию и проверку прав (контроллер, модель, отдельный сервис — на своё усмотрение).</li>

                    <li>Дополнительно:
                    При создании продукта реализовать отправку на заданный в конфигурации Email (config(‘products.email’)) уведомления (Notification) о том, что продукт создан.
                    Уведомление должно отправляться через задачу (Job) в очереди (Queue).
                    Готовое приложение упаковать в docker.</li>
                    <li>В модели реализовать Local Scope для получения только доступных продуктов (STATUS = "available")</li>
                    <li>Интерфейс реализовать по
                        <a href="https://www.figma.com/file/pVspJcvzwZUYynT2dogGG2/PIN-ERP-ТЗ-03.02.2022-(Copy)?type=design&node-id=0-1&mode=design&t=pzPc1ZJlca6HnPL3-0"
                           class="clickable-link">
                            макету в Figma
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>
</body>
</html>
