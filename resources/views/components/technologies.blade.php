<div x-data="{close: false}" x-show="technologies" :class="[technologies ? 'anim-test' : '', close ? 'custom-close-slide' : '']" class="w-full h-full flex flex-col min-h-40 absolute bottom-0 left-0 items-center bg-white-custom p-4 rounded-5 md:items-start overflow-x-hidden">

    <h2 class="py-8 font-extrabold text-4xl text-neutral-700 text-center self-center">TECHNOLOGIES</h2>

    <div class="absolute top-1 right-1 md:top-3 md:right-3">
        <p @click="[close = true, setTimeout(() => {technologies = false, close = false}, 1000)]" class="rotate-45 font-extrabold text-neutral-700 text-6xl cursor-pointer lg:cursor-none hover:text-red-500 ease-in duration-500">+</p>
    </div>

    <div class="md:flex md:flex-row md:flex-wrap overflow-x-hidden pb-8 md:overflow-y-scroll">
        <x-technology-card title="PROGRAMMING LANGUAGES" :images="['php', 'golang', 'javascript', 'typescript', 'css', 'html']" />
        <x-technology-card title="DATABASES" :images="['postgresql', 'mysql']" />
        <x-technology-card title="FRAMEWORKS & LIBRARIES" :images="['laravel', 'react', 'nextjs', 'alpinejs', 'sass', 'tailwindcss', 'bootstrap']" />
        <x-technology-card title="DEVELOPER TOOLS" :images="['neovim', 'vs code', 'git', 'github', 'postman', 'vitejs' ]" />
        <x-technology-card title="DEPLOYMENT" :images="['docker']" />
        <x-technology-card title="OS" :images="['linux', 'mac', 'windows']" />
    </div>
</div>
