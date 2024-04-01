<div class="w-full my-4 px-4 md:px-8">

    <p class="font-extrabold text-neutral-700 text-2xl mb-4">{{$title}}</p>

    <div class="flex flex-row flex-wrap gap-4">

        @foreach($images as $image)
        <a class="bg-white-custom test-shadow rounded-5 flex flex-wrap items-center justify-center px-3 py-2 gap-2 cursor-default lg:cursor-none">
            <image class="w-6 md:w-8" src="{{asset('/images/logos/'.$image.'.svg')}}" />
            <p class="text-sm text-neutral-500 font-bold uppercase">{{$image}}</p>
        </a>
        @endforeach

    </div>
</div>
