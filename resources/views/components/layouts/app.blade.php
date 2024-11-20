<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    @livewireStyles
    <title>Event Manager</title>
</head>

<body class="content-around ">
    <div>
        <livewire:navbar>
    </div>
<div class="justify-items-center py-4 px-4">
    {{ $slot }}
</div>

</body>
@livewireScripts

</html>
