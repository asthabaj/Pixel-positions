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
<body class="bg-blue-300 text-white font-myfont pb-40 ">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/60">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-20 font-bold">
                <a href="/">Jobs</a>
                <a href="/companies/index">Companies</a>
                @auth
                    <a href="/employer/profile">Profile</a>   
                @endauth
            </div>

            @auth
                <div class="space-x-20 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button>Log Out</button>
                    </form>
                </div> 
            @endauth

            @guest
                <div class="space-x-11 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
            
        </nav>

        @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('message'))
        <div class="bg-green-500 text-white p-4 rounded">
            {{ session('message') }}
        </div>
    @endif
    
    @if($errors->any())
        <div class="bg-red-500 text-white p-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
        <main class="mt-10 max-w-[980] mx-auto">
            {{$slot}}
        </main>
    </div>


    
</body>
</html>
