<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewabook</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-cyan-500 to-green-300">
    <main class="m-auto max-w-4xl px-12">
    {{$slot}}
    </main>
</body>
</html>