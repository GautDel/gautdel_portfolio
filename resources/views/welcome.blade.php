<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GautDel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Tailwind -->
    <link rel="stylesheet" href="{{asset('css/output.css')}}" />

    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    ])
</head>

<body x-data="{projects: false, contact: false, technologies: false, weather: getWeather(), text: ['fullstack developer', 'tennis player', 'chef', 'cat pleaser'], counter: 0}" class="antialiased overflow-x-hidden lg:cursor-none ">

    <div class="rounded-cursor mix-blend-difference hidden lg:block"></div>

    <div class="relative p-4 lg:flex lg:justify-center lg:items-center lg:pt-10 lg:overflow-hidden">

        <!-- Main box -->
        <div class="w-full h-full flex flex-col gap-4 lg:max-w-5xl justify-center items-center relative">

            <!-- First box -->
            <div class="md:flex md:flex-row gap-4 w-full">

                <!-- First left box -->
                <div class="w-full flex flex-col gap-4">

                    <div class="bg-[#ececec] text-neutral-700  w-full min-h-40 test-shadow flex justify-center items-center">
                        <h1 class="font-extrabold text-center text-5xl">GAUTHIER DELALLEAU</h1>
                    </div>

                    <!-- mobile image -->
                    <div class="bg-[#ececec] text-neutral-700 w-full test-shadow h-80 md:hidden">
                        <div class="image-test w-full h-full min-h-full">
                        </div>
                    </div>


                    <div class="flex flex-row gap-4 w-full flex-nowrap">
                        <div @click="counter < text.length - 1 ? counter++ : counter = 0" class="px-2 h-48 test-shadow flex w-1/2 bg-neutral-700 justify-center items-center">
                            <h1 class="text-white text-center font-extrabold text-2xl md:text-4xl py-16 uppercase " x-text="text[counter]"></h1>
                        </div>

                        <div class="flex flex-col w-1/2 gap-4">
                            <div class="flex gap-4 w-full h-1/2">
                                <a x-data="{hovered: false}" @mouseover="hovered = true" @mouseover.away="hovered = false" href="https://github.com/GautDel" class="w-1/2 h-full custom-cursor-white " target="_blank">
                                    <div class="test-shadow h-full flex justify-center items-center grow hover:bg-neutral-700 ease-in duration-300">
                                        <image :class="hovered ? 'grayscale invert' : ''" class="w-14 ease-in duration-300" src="{{ asset('images/github-mark.png') }}">
                                    </div>
                                </a>

                                <a x-data="{hovered: false}" @mouseover="hovered = true" @mouseover.away="hovered = false" href="https://ie.linkedin.com/in/gauthier-delalleau" class="w-1/2 h-full custom-cursor-white" target="_blank">
                                    <div class="test-shadow h-full flex justify-center items-center bg-[#ececec] grow hover:bg-neutral-700 ease-in duration-300">
                                        <image :class="hovered ? 'grayscale invert' : ''" class="w-14 ease-in duration-300"  src="{{ asset('images/LI-In-Bug.png') }}">
                                    </div>
                                </a>
                            </div>

                            <div class="flex gap-4 w-full h-1/2 ">

                                <a x-data="{hovered: false}" @mouseover="hovered = true" @mouseover.away="hovered = false" href="https://mastodon.social/@GautDel" class="w-1/2 h-full custom-cursor-white" target="_blank">
                                    <div class="test-shadow h-full flex justify-center items-center bg-[#ececec] grow hover:bg-neutral-700 ease-in duration-300">
                                        <image :class="hovered ? 'grayscale invert' : ''" class="w-14 ease-in duration-300" src="{{ asset('images/logo-purple.svg') }}">
                                    </div>
                                </a>

                                <a  x-data="{hovered: false}" @mouseover="hovered = true" @mouseover.away="hovered = false" class="w-1/2 h-full custom-cursor-white" target="_blank">
                                    <div class="test-shadow h-full flex justify-center items-center grow hover:bg-neutral-700 ease-in duration-300">
                                        <h1  :class="hovered ? 'grayscale invert' : ''" class=" ease-in duration-300 w-full text-neutral-700 font-extrabold text-2xl md:text-3xl text-center">BLOG</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- First right box -->
                <div class="w-full md:w-2/4 flex flex-col gap-4 relative">
                    <div class="bg-[#ececec] text-neutral-700  w-full h-full test-shadow">
                        <div class="image-test w-full h-full">
                        </div>
                    </div>

                    <div @click="contact = !contact" :class="contact ? 'bg-[#ececec]' : 'bg-neutral-700'" class=" text-white w-full test-shadow py-4 text-center  grow custom-cursor-white relative">

                        <span x-show="!projects" class="absolute flex h-5 w-5 -top-1 -right-1">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-300 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-full w-full bg-red-500"></span>
                        </span>

                        <h1 x-show="!contact" class="text-white w-full font-extrabold text-2xl">CONTACT</h1>
                        <h1 x-show="contact" class="text-neutral-700 w-full font-extrabold text-lg py-[2px]">GAUT.DEL@PROTON.ME</h1>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-row gap-4">

                <div class="test-shadow flex flex-col w-full bg-[#ececec] p-4 gap-3">
                    <p class="font-extrabold text-4xl text-neutral-700 pb-2">HEY THERE &#9996;&#127996;, </p>
                    <p class="font-bold text-3xl text-neutral-600 pb-1">I'm Gauthier Delalleau, a Full Stack Web Developer from the sunny South of France. </p>
                    <p class="text-neutral-500 w-full font-semibold text-xl pb-2"> I primarily code in PHP and JavaScript, but I'm always open to exploring and mastering other languages and technologies. Crafting seamless digital experiences is my thing. When I'm not coding, you can find me playing tennis or cooking up a storm. </p>
                    <p class="italic text-neutral-400 font-semibold text-xl">Sláinte!</p>
                </div>
            </div>

            <div class="w-full flex flex-col md:flex-row gap-4 min-h-40 relative">

                <div @click="projects = !projects" class="test-shadow flex justify-center items-center bg-neutral-700 relative min-h-24 px-4 grow custom-cursor-white">
                    <h1 class="text-white text-center font-extrabold text-4xl ">PROJECTS</h1>
                </div>

                <div @click="technologies = !technologies" class="test-shadow flex bg-[#ececec] justify-center items-center min-h-24 px-4 custom-cursor-white">
                    <h1 class="text-neutral-700 font-extrabold text-4xl text-center">TECHNOLOGIES</h1>
                </div>

                <div class="test-shadow w-full md:w-4/12 pr-20 pb-20 bg-[#ececec] relative min-h-40 px-4">
                    <h1 :class="weather > 25 ? 'text-red-500' : 'text-blue-500'" class="absolute right-2 top-2 font-extrabold text-2xl md:text-lg lg:text-2xl" x-text="`${await weather} °C`"></h1>
                    <h1 id="day" class="text-neutral-500 absolute left-1/2 -translate-x-1/2 top-2 font-extrabold text-2xl md:left-2 md:-translate-x-0 md:text-lg lg:text-2xl lg:left-1/2 lg:-translate-x-1/2"></h1>
                    <h1 id="clock" class="text-neutral-700 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-extrabold text-6xl md:text-4xl lg:text-6xl"></h1>
                    <p id="date" class="font-extrabold text-2xl md:text-xl lg:text-2xl text-neutral-500 absolute bottom-0 left-1/2 -translate-x-1/2 pb-1 whitespace-nowrap"></p>
                </div>

            </div>

            <x-projects />
            <x-technologies />
        </div>

    </div>
</body>

</html>
