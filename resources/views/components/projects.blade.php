<div x-data="{close: false}" x-show="projects" :class="[projects ? 'anim-test' : '', close ? 'custom-close-slide' : '']" class="w-full h-full flex flex-col min-h-40 absolute bottom-0 left-0 items-center bg-white-custom p-4 rounded-5 overflow-hidden">

    <h2 class="py-8 font-extrabold text-4xl text-neutral-700">PROJECTS</h2>
    <div  class="absolute top-1 right-1 md:top-3 md:right-3">
        <p @click="[close = true, setTimeout(() => {projects = false, close = false}, 1000)]"  class="rotate-45 font-extrabold text-neutral-700 text-6xl hover:text-red-500 origin-center ease-in duration-500 cursor-pointer md:cursor-none">+</p>
    </div>
    <div class="md:flex md:flex-row md:flex-wrap gap-10 md:overflow-y-scroll pb-8 px-4">
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />

    </div>
</div>
