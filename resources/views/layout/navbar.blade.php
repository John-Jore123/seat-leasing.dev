<header class="w-full fixed top-0 left-0 z-50 bg-transparent shadow-none">
    <div class="container mx-auto">
        <div class="flex items-center justify-between relative">            
            <div class="flex justify-end items-center w-full">
                <div class="max-w-full w-64 ml-12 mr-40 px-4">
                    <a href="javascript:void(0)" class="w-full block py-5">
                        <img src="{{ asset('/images/logo.png') }}" alt="logo" class="w-full" />
                    </a>
                </div>

                <nav id="navbarCollapse" class="py-5 w-full lg:block lg:static lg:shadow-none" >
                    <ul class="flex items-center justify-end">
                        @foreach($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>