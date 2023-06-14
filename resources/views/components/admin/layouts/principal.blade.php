<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Importar o Tailwind para o projeto--}}
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Locadora de Veículos - Dashboard</title>

    @livewireStyles
</head>
<body>

    {{-- Menu Lateral --}}
    <x-admin.menu-lateral />

    {{-- Conteudo Principal --}}
    <main class="ml-auto mb-6 w-[85%]">
        <div class="px-6 pt-6">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
</body>
</html>