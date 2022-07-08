<section id="#" class="w-full h-auto bg-white !block overflow-hidden pt-2 md:pt-0">
    <div class=" h-[130vh] bg-third-hero-image bg-no-repeat bg-center bg-cover relative">
        <div class="w-2/4 bg-white/70 text-casal-800 relative px-24 py-20 rounded-br-[20px] drop-shadow-4xl sm:!px-8 sm:!py-14 md:!w-11/12 lg:w-4/5 lg:px-20 lg:py-12" data-aos="fade-right">
            <p class="font-lead text-xl pb-5 sm:!text-base lg:text-lg">
                Enjoy flexible seat leasing packages at (MCS Seat Leasing Solutions). Our Basic Seat Leasing Package provides you all the characteristics of a comfortable and productive working environment, plus more.
            </p>
            <ul class="list-disc mx-14 sm:mx-7">
                @foreach ($serviceItems as $item)
                    <x-service-item :type="$item['type']"></x-service-item>
                @endforeach
            </ul>
        </div>
    </div>
    <div class=" h-screen bg-firefly">
        <figure class="h-[120vh] bg-fourth-hero-image bg-fixed bg-cover bg-no-repeat absolute bottom-0 left-0 right-0 flex items-center justify-center sm:h-[130vh] second_polygon_hero_bg">
            <div class="container flex mx-auto md:block">
                <div class="w-1/2 text-white mx-10 inline-flex flex-wrap content-center items-center mb-12 md:!w-auto md:!mx-6 lg:ml-12 lg:mr-0" data-aos="fade-right">
                    <p class="mb-5 text-xl inline lg:text-base">
                        We practice basic health and safety protocols. Hence, we have constant temperature checks and office disinfection. We also have alcohol dispensers located at every entrance and other communal places.
                    </p>
                    <p class="mb-5 text-xl inline lg:text-base">
                        Our seat leasing package is based on a one-month contract. This means you can extend or terminate your lease when the month is over. You have control over the duration that you need the working space. You'll only need to notify us on the last week of your lease if you decide to extend or terminate your leasing contract.
                    </p>
                    <h5 class="text-4xl lg:text-2xl" data-aos="fade-right" data-aos-duration="1500">
                        Get a quote today
                    </h5>
                </div>
                <div class="w-1/2 bg-white rounded-3xl p-12 mx-20 block md:w-auto sm:!mx-6 sm:!px-7 sm:!py-10 lg:mx-12 lg:p-10">
                    <h3 class="text-5xl text-casal-500 font-medium capitalize text-center mb-10 sm:!text-3xlg lg:text-4xl">
                        GET A QUOTE TODAY
                    </h3>
                    <x-service-form></x-service-form>
                </div>
            </div>
        </figure>
    </div>
</section>


