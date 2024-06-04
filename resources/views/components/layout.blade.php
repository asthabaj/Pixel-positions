<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Postitions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-blue-300 text-white font-myfont">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/60">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-11 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salary</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[980] mx-auto">
            {{$slot}}
        </main>
    </div>
    
</body>
</html>