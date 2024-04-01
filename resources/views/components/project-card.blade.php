    <div class="flex flex-col gap-4 md:w-5/12 rounded-5 grow my-4 md:mb-0">
        <image class="max-w-full max-h-80 rounded-5 test-shadow object-cover" src="{{asset('/images/'.$image)}}">
            <div class="bg-white-custom test-shadow py-4 rounded-5">
                <h2 class="text-center font-extrabold text-3xl text-neutral-700">{{$title}}</h2>
                <p class="font-semibold text-md text-center text-neutral-500">"{{$desc}}"</p>
            </div>


            <div class="bg-white-custom test-shadow p-4 text-neutral-600 rounded-5">
                <p class="text-center font-semibold">{{$info}}</p>

            </div>

            <div class="flex flex-wrap gap-4">
                @foreach($tech as $image)
                <a class="bg-white-custom test-shadow rounded-5 flex flex-wrap items-center justify-center px-3 py-2 gap-2 cursor-default lg:cursor-none">
                    <image class="w-8" src="{{asset('/images/logos/'.$image.'.svg')}}" />
                </a>

                @endforeach
            </div>

            <div class="flex flex-row gap-4">
                <a href="{{$codeurl}}" target="_blank" class="bg-white-custom test-shadow p-4 text-neutral-700 rounded-5 flex flex-row justify-center items-center cursor-pointer lg:cursor-none custom-cursor-white">
                    <image class="w-8" src="{{asset('/images/github-mark.png')}}">
                </a>
                <a href="{{$websiteurl}}" target="_blank" class="test-shadow p-4 text-white rounded-5 grow flex justify-center items-center bg-neutral-700 cursor-pointer lg:cursor-none custom-cursor-white">
                    <p class="text-center font-extrabold text-lg">WEBSITE</p>
                </a>

            </div>
    </div>
