<!-- This is the hero section on the homepage
    Hero means the top section of a website, usually with a big image and some text -->

<section class="relative h-72 bg-xblack flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"></div>

    <div class="z-10">
        {{-- <h1 class="text-6xl font-bold uppercase text-white font-google">
            job<span class="text-white">lancer</span>
        </h1> --}}
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find Software jobs & projects
        </p>
        <div>
            <a href="/register"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-laravel hover:border-laravel">Sign
                Up to List a Job</a>
        </div>
    </div>
</section>
