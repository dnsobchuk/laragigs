<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d'
                    },
                },
            },
        }
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/">
            <img src="{{asset('images/logo.png')}}" alt="" class="w-24 logo">
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
            </li>
            <li>
                <a href="login.html">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                </a>
            </li>
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>
    
    <footer class="fixed bottom-0 left-0 w-full flex item-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All rights reserved</p>
        <a href="/listings/create" class="absolute top=1/3 right-10 bg-black text-white pu-2 px-5">Post Job</a>
    </footer>
    <x-flash-message />
</body>
</html>