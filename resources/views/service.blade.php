@extends('layouts.site')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/assets/styles/service.css') }}"/>
@endpush

@section('content')
    <main class="w-full min-h-full bg-black">
        <section
            class="px-[107px] xl:px-[60px] sm:px-[40px] pt-[84px] flex justify-between lg:flex-col gap-[14px] lg:gap-[22px]">
            <div class="flex flex-col items-start lg:items-center">
                <h3
                    class="mb-[14px] text-white font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[44px] leading-none tracking-[1.32px] uppercase lg:text-[26px]"
                >
                    {{ $service->name }}
                </h3>
                @php
                    $detail = json_decode($service->detail_text ?? '', true) ?: [];
                    $left = $detail['left'] ?? [];
                    $right = $detail['right'] ?? [];
                @endphp

                <div class="flex gap-[40px] sm:flex-col lg:gap-[12px]">
                    <div class="space-y-[14px] max-w-[474px] lg:space-y-[12px] lg:max-w-full">
                        @foreach($left as $p)
                            <p class="text-white font-raleway font-normal not-italic text-sm leading-none tracking-[0.42px]">
                                {{ $p }}
                            </p>
                        @endforeach
                    </div>

                    <div class="space-y-[14px] max-w-[474px] lg:space-y-[12px] lg:max-w-full">
                        @foreach($right as $p)
                            <p class="text-white font-raleway font-normal not-italic text-sm leading-none tracking-[0.42px]">
                                {{ $p }}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div
                    class="flex flex-col lg:flex-row lg:flex-row-reverse lg:w-full lg:justify-center lg:gap-[28px] lg:items-center sm:justify-end"
                >
                    <h3
                        class="mb-[17px] text-white font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[44px] leading-none tracking-[1.32px] uppercase lg:text-[26px] whitespace-nowrap"
                    >
                        {{ $service->price }} руб
                    </h3>

                    <button
                        class="requestBtn mb-[23px] text-[18px] button whitespace-nowrap rounded-[10px] w-full py-[17px] text-[white] uppercase font-bebas font-normal not-italic text-usual tracking-widest text-center leading-none lg:w-[185px]"
                    >
                        Записаться
                    </button>
                </div>

                <h4
                    class="sm:self-start font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[26px] leading-none tracking-normal lg:text-[22px] whitespace-nowrap"
                >
                    <span class="font-raleway">+</span>7 (861) 275-88-00
                </h4>
            </div>
        </section>
        <section class="examples-section px-[107px] xl:px-[60px] sm:px-[40px]">
            <h3
                class="mb-[34px] mt-[151px] text-white mb-[20px] font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[44px] leading-none tracking-[1.32px] text-center uppercase"
            >
                ПРИМЕРЫ РАБОТ
            </h3>
            <div class="examples-section__swiper">
                <div class="swiper-wrapper">
                    @foreach($images as $image)
                        <div class="swiper-slide">
                            <div class="swiper-slide-content"
                                 style="background-image: url({{ $image }})"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mt-[115px] px-[107px] pb-[127px] sm:px-[40px]">
            <h3
                class="text-white mb-[20px] font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[44px] leading-none tracking-[1.32px] text-center uppercase"
            >
                УСЛУГУ ВЫПОЛНЯЕТ
            </h3>

            <div
                class="shadow-[0px_4px_100px_1px_#3B87D538] relative bg-[#131313] rounded-[20px] border border-[#3F3F3F] flex gap-[52px] pl-[53px] pt-[53px] pb-[53px] 2xl:flex-col 2xl:px-[53px] lg:p-[20px] lg:pb-[30px] lg:gap-0"
            >
                <div
                    class="w-[100px] h-[100px] flex justify-center items-center bg-cover bg-center bg-no-repeat absolute top-[29px] right-[44px] lg:top-[15px] lg:right-[5px] lg:w-[72px] lg:h-[72px]"
                    style="background-image: url({{ asset('/assets/images/Star.svg') }})"
                >
                    <h3 class="text-[22px] lg:text-[18px]">
                        {{ $partner->experience_years }} лет<br/>
                        в деле
                    </h3>
                </div>
                <div
                    class="w-[383px] min-w-[300px] lg:min-w-auto shrink-0 2xl:h-[350px] 2xl:w-full self-stretch bg-cover bg-center bg-no-repeat rounded-[20px] 2xl:self-auto lg:w-full lg:h-[220px] sm:h-[114px] 2xl:max-w-full"
                    style="background-image: url('{{ $partner->image }}')"
                ></div>
                <div class="pr-[80px] 2xl:pr-[40px] xl:pr-0">
                    <h2 class="text-[45px] lg:text-center lg:mt-[19px] lg:text-[28px]">{{ $partner->name }}</h2>
                    <h5
                        class="mb-[42px] text-[#878787] font-raleway font-semibold not-italic text-xl leading-none tracking-widest uppercase lg:text-[12px] lg:text-center lg:mt-[7px] lg:mb-0"
                    >
                        {{ $partner->job_profile }}
                    </h5>

                    @if($partner->services->isNotEmpty())
                        <h3 class="text-[30px] mb-[10px] text-left lg:text-center lg:text-[24px] lg:mt-[27px]">
                            услуги:</h3>
                        <div
                            class="flex flex-wrap gap-[10px] mb-[19px] lg:justify-center lg:mt-[20px] lg:items-stretch lg:mb-0">
                            @foreach($partner->services as $service)
                                <div
                                    class="px-[19px] h-[52px] bg-[#1C1C1C] rounded-[10px] flex justify-center items-center lg:px-[5px]">
                                    <p
                                        class="text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-[0.03em] lg:text-[12px]"
                                    >
                                        {{ $service->name }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <p
                        class="max-w-[611px] text-[#FFFFFF] mb-[19px] font-raleway font-normal not-italic text-sm leading-none tracking-[0.05em] lg:text-[14px] lg:mt-[28px] lg:text-center lg:mb-0"
                    >
                        {{ $partner->description }}
                    </p>
                    <h3 class="text-[30px] mb-[5px] text-left lg:mt-[18px] lg:text-center">
                        <span class="font-raleway">+</span>{{ $partner->phone }}
                    </h3>
                    <p
                        class="mb-[26px] text-[#878787] font-raleway font-medium not-italic text-sm leading-none tracking-wider lg:mb-0 lg:text-center"
                    >
                        {{ $partner->work_time }}
                    </p>
                    <div class="flex items-center justify-between lg:mt-[18px] xl:flex-col">
                        <div class="flex gap-[11px] lg:flex-col relative xl:w-full mr-[20px] lg:mr-0">
                            <a href="javascript:void(0)"
                               data-ctx-type="partner"
                               data-ctx-id="{{ $partner->id }}"
                               data-ctx-title="{{ $partner->name }}"
                               data-ctx-url="{{ request()->fullUrl() }}"
                               class="requestBtn button w-[268px] pt-[23px] pb-[20px] lg:w-auto lg:py-[20px] lg:mx-[22px] xl:flex-1"
                            >ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a
                            >
                            <a target="_blank" href="{{ $partner->whatsapp_link ?? "#" }}"
                               class="button-secondary w-[268px] pt-[23px] pb-[20px] lg:w-auto lg:mx-[22px] xl:flex-1"
                            >НАПИСАТЬ В whatsapp</a
                            >
                        </div>
                        <h3 class="text-[22px] cursor-pointer xl:mt-[25px] lg:ml-0 lg:text-[18px]"><a
                                target="_blank"
                                href="{{ $partner->reviews_link ?? "#" }}">ОТЗЫВЫ</a></h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@push('scripts')
    <script type="module" src="{{ asset('assets/js/service.js') }}"></script>
@endpush
