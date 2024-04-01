<div x-data="{close: false}" x-show="projects" :class="[projects ? 'anim-test' : '', close ? 'custom-close-slide' : '']" class="w-full h-full flex flex-col min-h-40 absolute bottom-0 left-0 items-center bg-white-custom p-4 rounded-5 overflow-hidden">

    <h2 class="py-8 font-extrabold text-4xl text-neutral-700">PROJECTS</h2>
    <div  class="absolute top-1 right-1 md:top-3 md:right-3">
        <p @click="[close = true, setTimeout(() => {projects = false, close = false}, 1000)]"  class="rotate-45 font-extrabold text-neutral-700 text-6xl hover:text-red-500 origin-center ease-in duration-500 cursor-pointer lg:cursor-none">+</p>
    </div>
    <div class="md:flex md:flex-row md:flex-wrap gap-10 md:overflow-y-scroll pb-8 px-4">
        <x-project-card
            image="fly_paper.png"
            title="fly paper shop"
            desc="An e-commerce shop for all things fly fishing"
            info="An online platform for fly fishing. Users can post their catches, discuss various topics in the forum section as well as buy any fly fishing material they need in the e-commerce shop."
            :tech="['php','laravel','mysql','tailwindcss','alpinejs','vitejs']"
            codeurl="https://github.com/GautDel/fly_paper"
            websiteurl="http://www.flypapershop.eu"
        />

        <x-project-card
            image="fly_paper.png"
            title="fly paper shop"
            desc="An e-commerce shop for all things fly fishing"
            info="An online platform for fly fishing. Users can post their catches, discuss various topics in the forum section as well as buy any fly fishing material they need in the e-commerce shop."
            :tech="['php','laravel','mysql','tailwindcss','alpinejs','vitejs']"
            codeurl="https://github.com/GautDel/fly_paper"
            websiteurl="http://www.flypapershop.eu"
        />

    </div>
</div>
