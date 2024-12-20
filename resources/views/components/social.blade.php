<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" /> 
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> 
<script src="https://cdn.tailwindcss.com"></script>
<!-- This is an example component -->

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>

    <title>Welcome to {{$title}}</title>

</head>
<body>
    @include('partials.sidebar')
    <main>
        <div class="container">
            <div class="row my-3">
                @include('partials.flashbag')
            </div>
            {{$slot}}
        </div>

    </main>


</body>
</html>
