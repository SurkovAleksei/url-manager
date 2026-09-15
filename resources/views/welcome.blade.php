<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800 antialiased">

    <div class="min-h-screen flex items-center justify-center px-6 py-12">

        <div class="w-full max-w-2xl">

            <div class="bg-white rounded-3xl shadow-xl border border-slate-100 px-10 py-12 md:px-14 md:py-16">

                <h1 class="text-4xl font-bold text-slate-900 mb-4">URL Manager</h1>

                <p class="text-slate-500 text-lg leading-relaxed mb-6">
                    Сервис для генерации и перенаправления коротких ссылок.
                </p>

                <p class="text-slate-600 leading-relaxed mb-6">
                    Создавайте короткие ссылки из длинных адресов, делитесь ими и получайте
                    подробную статистику: количество кликов, время переходов, IP-адреса и
                    источники трафика — всё в одном месте.
                </p>

                <ul class="text-slate-600 space-y-2">
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-1.5 h-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>
                        <span>Генерация коротких ссылок</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-1.5 h-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>
                        <span>Мгновенное перенаправление на оригинальный адрес</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-1.5 h-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>
                        <span>Статистика по кликам: дата, IP, источник</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-1.5 h-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>
                        <span>Управление своими ссылками в личном кабинете</span>
                    </li>
                </ul>

            </div>

            <div class="mt-6">
                @auth
                    <a href="/admin"
                       class="block w-full px-8 py-4 rounded-2xl bg-indigo-600 text-white text-lg font-medium text-center shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
                        Перейти к моим ссылкам
                    </a>
                @else
                    <div class="flex flex-row gap-4">
                        <a href="{{ route('login') }}"
                           class="flex-1 px-8 py-4 rounded-2xl bg-indigo-600 text-white text-lg font-medium text-center shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
                            Войти
                        </a>
                        <a href="{{ route('register') }}"
                           class="flex-1 px-8 py-4 rounded-2xl bg-white text-indigo-600 text-lg font-medium text-center border-2 border-indigo-200 hover:bg-indigo-50 transition">
                            Зарегистрироваться
                        </a>
                    </div>
                @endauth
            </div>

        </div>

    </div>

</body>
</html>