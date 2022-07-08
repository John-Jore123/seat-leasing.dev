<section id="#" class="bg-fifth-hero-image w-full h-screen sm:h-full sm:py-12">
    <div class="container mx-auto">
        <h3 class="text-7xl text-white text-center font-light mb-24 uppercase md:!text-5xl md:!mb-9 lg:text-6xl"> get in touch with us! </h3>

        <div class="flex flex-wrap sm:block">
            <div class="w-3/5 md:w-full">
                <x-form-item></x-form-item>
            </div>

            <div class="w-2/5 md:w-fit">
                <ul class="list-none sm:!mx-4 md:mx-20" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    @foreach ( $contactItems as $icon )
                        <x-location :href="$icon['href']"
                                    :image="$icon['image']"
                                    :description="$icon['description']"></x-location>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>