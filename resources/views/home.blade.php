<x-guest-layout>
    <x-slot name="header">
        {{-- Hero Section --}}
        <div class="w-full h-96 flex items-center">
            <div class="flex flex-col max-w-7xl mx-auto w-full space-y-4">
                <h1 class="lg:text-8xl lg:mb-0 md:mb-0 xs:mb-3 md:text-8xl text-8xl font-bold">Stay
                    curious.
                </h1>
                <h3 class="text-xl font-thin max-w-sm !mb-5 ml-2">
                    Discover stories, thinking, and expertise from writers on any topic.
                </h3>
                <button class="inline-flex items-center w-fit px-9 py-2 ml-1 text-lg bg-black text-white rounded-full">
                    Start Reading
                </button>
            </div>
        </div>
    </x-slot>


    {{-- Trending Section --}}
    <div class="grid grid-cols-3 max-w-7xl mx-auto">
        <div class="bg-red-500">
            <h1>01</h1>
            <div class="flex flex-col">
                <button
                    class="flex text-sm border-2 border-transparent self-start rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="lg:h-auto w-9 rounded-full object-cover"
                        src="http://localhost:8000/storage/profile-photos/jalKZxLvGH6fmnGQ2lNW3KMHIKczQyGgk2mFHfCM.jpg"
                        alt="Gusti" />
                </button>
            </div>
        </div>
        <div class="bg-red-500">
            <h1>01</h1>
        </div>
        <div class="bg-red-500">
            <h1>01</h1>
        </div>
    </div>

</x-guest-layout>
