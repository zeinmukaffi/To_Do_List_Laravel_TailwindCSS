<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List - App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a953ebe10c.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-biru p-4 font-rale">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-abu_muda rounded-xl">
        <h1 class="font-bold text-5xl text-center text-biru font-poor">To Do List App with <br> Laravel + TailwindCSS</h1>
        <div class="mb-6">
            <form action="#" method="POST" class="flex flex-col space-y-4"> 
                @csrf
                <input type="text" name="title" id="title" placeholder="Input your to-do Title." class="py-3 px-4 bg-gray-200 mt-5 rounded-xl">
                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <textarea name="desc" id="desc" placeholder="Input your to-do Description" class="py-3 px-4 bg-gray-200 mt-5 rounded-xl h-24"></textarea>
                @error('desc')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <button class="w-28 py-2 px-6 bg-green-400 text-abu_muda rounded-xl">submit</button>
            </form>
        </div>

        <hr>

        <div class="mt-2">
            @foreach ($todo as $item)
                <div @class([
                    'py-4 px-4 rounded-lg flex items-center border-gray-300 my-2', 
                    $item->isDone ? 'bg-green-200' : 'hover:bg-gray-200'
                ])>
                    <div class="flex-1 pr-8">
                        <h3 class="text-lg font-semibold text-biru ">{{ $item->title }}</h3>
                        <p class="text-biru_muda text-sm">{{ $item->desc }}</p>
                    </div>

                    <div class="flex space-x-1">
                        <form method="POST" action="/{{ $item->id }}">
                            @method('PATCH')    
                            @csrf
                            <button class="w-10 h-10 py-2 px-2 bg-green-400 text-abu_muda rounded-xl"><i class="fas fa-check"></i></button>
                        </form>
                        
                        <form method="POST" action="/{{ $item->id }}">
                            @method('DELETE')    
                            @csrf
                            <button class="w-10 h-10 py-2 px-2 bg-red-400 text-abu_muda rounded-xl"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <hr>
    </div>
</body>
</html>