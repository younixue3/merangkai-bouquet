<nav class="bg-transparent w-full fixed z-50 bg-gradient-to-b from-white via-white to-transparent">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
                <a href="#"
                   class="flex flex-shrink-0 items-center font-bold text-2xl text-rose-600 font-philosopher">
                    Merangkai
                </a>
                <div class="hidden sm:ml-6 sm:flex">
                    <div class="flex m-auto space-x-4">
                        <a href="{{route('home')}}"
                           class="text-rose-500 hover:btn-primary transition rounded-md px-3 py-2 font-medium"
                           aria-current="page">Beranda</a>
                        <a href="{{route('about')}}"
                           class="text-rose-500 hover:btn-primary transition rounded-md px-3 py-2 font-medium">Tentang</a>
                        <a href="{{route('contact')}}"
                           class="text-rose-500 hover:btn-primary transition rounded-md px-3 py-2 font-medium">Kontak</a>
                        <a href="{{route('cart')}}"
                           class="text-rose-500 hover:btn-primary transition rounded-md px-3 py-2 font-medium">Keranjang</a>
                        @if(auth()->user())
                            @if(auth()->user()->role === 'admin')
                                <a href="{{route('dashboard.index')}}"
                                   class="btn-primary transition rounded-md px-3 py-2 font-medium">Dashboard</a>
                            @endif
                        @else
                            <a href="{{route('login')}}"
                               class="btn-primary transition rounded-md px-3 py-2 font-medium">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class='sm:hidden absolute bg-white w-full transition-all ease-in-out overflow-hidden' id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="#"
               class="text-gray-300 hover:bg-primary  block rounded-md px-3 py-2 text-base font-medium"
               aria-current="page">Dashboard</a>
            <a href="#"
               class="text-gray-300 hover:bg-primary block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#"
               class="text-gray-300 hover:bg-primary block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#"
               class="text-gray-300 hover:bg-primary block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            <div class='flex justify-center gap-3 pt-2'>
                <a href='#'>
                    <button class="rounded-md py-1.5 m-auto px-2 transition ease-in-out btn-primary">
                        Masuk
                    </button>
                </a>
                <a href='#'>
                    <button class="rounded-md py-1.5 m-auto px-2 transition ease-in-out btn-primary">
                        Masuk
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>
