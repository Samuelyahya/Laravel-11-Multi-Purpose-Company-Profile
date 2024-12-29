@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">

            <x-navbar></x-navbar>

            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Products</p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center">Crafted with Precision<br>Designed for Excellence.</h2>
            </div>
        </div>
    </div>

    <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">

        @forelse ($products as $product)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                    <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-contain" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                    <p
                        class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        {{ $product->tagline }}
                    </p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">
                            {{ $product->name }}
                        </h2>
                        <p class="leading-[30px] text-cp-light-grey">
                            {{ $product->about }}
                        </p>
                    </div>
                    <a href="{{ route('front.appointment') }}"
                        class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book
                        Appointment</a>
                </div>
            </div>

        @empty
            <p>Belum ada data terbaru</p>
        @endforelse
    </div>

    <div id="Stats" class="bg-cp-black w-full mt-20">
        <div class="container max-w-[1000px] mx-auto py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">

                @forelse ($statistics as $statistic)
                    <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{ Storage::url($statistic->icon) }}" class="object-contain w-full h-full"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->name }}</p>
                    </div>
                @empty
                    <p>Belum ada data terbaru</p>
                @endforelse

            </div>
        </div>
    </div>

    <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
        <div class="flex flex-col gap-[14px] items-center">
            <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                SUCCESS CLIENTS</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Clients<br>From Worldwide Company
            </h2>
        </div>
        <div class="main-carousel w-full">

            @forelse ($testimonials as $testimonial)
                <div
                    class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
                    <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
                        <div class="flex flex-col gap-[30px]">
                            <div class="h-9 overflow-hidden">
                                <img src="{{ Storage::url($testimonial->client->logo) }}" class="object-contain"
                                    alt="icon">
                            </div>
                            <div class="relative pt-[27px] pl-[30px]">
                                <div class="absolute top-0 left-0">
                                    <img src="{{ asset('assets/icons/quote.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-2xl leading-[46px] relative z-10">
                                    {{ $testimonial->message }}</p>
                                </p>
                            </div>
                            <div class="flex items-center justify-between pl-[30px]">
                                <div class="flex items-center gap-6">
                                    <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                                        <img src="{{ Storage::url($testimonial->client->avatar) }}"
                                            class="w-full h-full object-cover" alt="photo">
                                    </div>
                                    <div class="flex flex-col justify-center gap-1">
                                        <p class="font-bold">{{ $testimonial->client->name }}</p>
                                        <p class="text-sm text-cp-light-grey">{{ $testimonial->client->occupation }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-nowrap">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
                        </div>
                    </div>
                    <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="{{ Storage::url($testimonial->thumbnail) }}"
                            class="w-full h-full object-cover object-center" alt="thumbnail">
                    </div>
                </div>


            @empty
                <p>Belum ada data terbaru</p>
            @endforelse
        </div>
    </div>

    <x-footer></x-footer>
@endsection

@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('js/modal-video.js') }}"></script>
@endpush
