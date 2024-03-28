<div x-show="projects" :class="projects ? 'anim-test' : '' " class="w-full h-full flex flex-col min-h-40 absolute bottom-0 left-0 items-center  cursor-pointer bg-white-custom p-4 rounded-lg overflow-y-scroll overflow-x-hidden">

    <h2 class="py-8 font-extrabold text-4xl text-neutral-700">PROJECTS</h2>
    <div class="absolute top-1 right-1 md:top-3 md:right-3">
        <p @click="projects = false" class="rotate-45 font-extrabold text-neutral-700 text-6xl">+</p>
    </div>
    <div class="md:flex md:flex-row md:flex-wrap gap-8 md:overflow-y-scroll pb-8">
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />

    </div>
</div>
