<x-guest-layout>

        <div class="fixed top-0 z-50 bg-yellow-900  ">


        <div class="relative  flex items-top h-14 bg-yellow-900 sm:items-center items-baseline	 py-4 sm:pt-0">
            <div class="flex     items-baseline	 bottom-0 absolute shrink-0 items-center  flex-wrap">
                <!-- Logo -->
                <div class=" m-1 mt-4 mb-2 ">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />

                    </a>
                </div>
 <div class="flex items-center items-baseline flex-wrap	">


            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-orange-700 text-orange-500  py-2 px-1 bg-amber-200 rounded">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-orange-700 text-orange-500 py-2 px-1 bg-amber-200  rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-orange-700 text-orange-500 py-2 px-1 bg-amber-200  rounded ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
</div>

                     <router-view />



</x-guest-layout>
