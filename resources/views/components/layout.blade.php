<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'google': ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        laravel: "#ef3b2d",
                        xblack: "#14171A",
                    },
                },
            },
        };
    </script>
    <title>joblancer | Find Software Jobs & Projects</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        {{-- <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a> --}}
        <a href="/" class="text-4xl font-google">💻joblancer</a>
        <ul class="flex space-x-6 mr-6 text-md">
            <!-- Welcome User -->
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ explode(' ', auth()->user()->name)[0] }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                        Manage Listings</a>
                </li>
                <!-- Logout -->
                <li>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-laravel"><i class="fa-solid fa-door-closed"></i>
                            Logout</button>
                    </form>
                </li>
                <!-- Register and Login -->
            @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-20 mt-20 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

        <a href="/listings/create" class="absolute top-1/3 right-10 bg-white text-black py-2 px-5 font-bold"> Post
            Job</a>
    </footer>

    <x-flash-message />
</body>

</html>
