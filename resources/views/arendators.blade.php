@extends('layouts.site')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/assets/styles/arendators.css') }}"/>
@endpush

@section('content')
    <main class="bg-black overflow-hidden">
        <section class="pr-[104px] pl-[105px] xl:px-[41px] mt-[138px] lg:mt-[53px]" id="for-arendators">
            <div class="flex flex-col items-center">
                <h2 class="text-center lg:text-[30px]">Для арендаторов</h2>
                <h4 class="mt-[19px] lg:mt-[17px] text-center max-w-[674px] lg:text-[18px]">
                    Развивайте свой бизнес в современном пространстве с готовой инфраструктурой и доступом к базе
                    клиентов
                </h4>
            </div>

            <div class="mt-[53px] lg:mt-[33px] flex justify-between items-center 2xl:flex-col lg:gap-[43px] gap-[54px]">
                <div class="text-usual flex-1 max-w-[571px] 2xl:text-center">
                    <p>
                        Готовые мастерские и свободные зоны под авторские проекты. <br/><br/>
                        Безопасное и удобное пространство для полного сосредоточения на развитии бизнеса – от
                        технического оснащения до
                        инфраструктуры для сотрудников и клиентов. <br/><br/>
                        Поддержка в дооснащении, брендировании и организации рабочих мест.
                    </p>
                </div>

                <div class="gap-x-[51px] shrink-0 flex lg:w-full lg:justify-evenly">
                    <div class="flex gap-y-3 flex-col">
                        <div class="flex items-center gap-4">
                            <div class="p-4 bg-[#3B87D5] border-[#3B87D5] rounded-[5px] shrink-0 grow-0 lg:p-2">
                                <img class="w-[43px] h-[43px] lg:w-[19px] lg:h-[19px]"
                                     src="{{ asset('/assets/images/places-svg/1.svg') }}"
                                     alt="Слесарный цех"/>
                            </div>
                            <span
                                class="text-white font-bebas font-normal text-[24px] leading-none tracking-[4%] lg:text-[12px]"
                            >Слесарный цех</span
                            >
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-4 bg-[#3B87D5] border-[#3B87D5] rounded-[5px] shrink-0 grow-0 lg:p-2">
                                <img
                                    class="w-[43px] h-[43px] lg:w-[19px] lg:h-[19px]"
                                    src="{{ asset('/assets/images/places-svg/2.svg') }}"
                                    alt="Детейлинговый цех"
                                />
                            </div>
                            <span
                                class="text-white font-bebas font-normal text-[24px] leading-none tracking-[4%] lg:text-[12px]"
                            >Детейлинговый цех</span
                            >
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-4 bg-[#3B87D5] border-[#3B87D5] rounded-[5px] shrink-0 grow-0 lg:p-2">
                                <img class="w-[43px] h-[43px] lg:w-[19px] lg:h-[19px]"
                                     src="{{ asset('/assets/images/places-svg/3.svg') }}"
                                     alt="Автомойка"/>
                            </div>
                            <span
                                class="text-white font-bebas font-normal text-[24px] leading-none tracking-[4%] lg:text-[12px]"
                            >Автомойка</span
                            >
                        </div>
                    </div>

                    <div class="flex gap-y-3 flex-col">
                        <div class="flex items-center gap-4">
                            <div class="p-4 bg-[#3B87D5] border-[#3B87D5] rounded-[5px] shrink-0 grow-0 lg:p-2">
                                <img
                                    class="w-[43px] h-[43px] lg:w-[19px] lg:h-[19px]"
                                    src="{{ asset('/assets/images/places-svg/4.svg') }}"
                                    alt="Офис для работы с клиентами"
                                />
                            </div>
                            <span
                                class="text-white font-bebas font-normal text-[24px] leading-none tracking-[4%] lg:text-[12px]"
                            >офис для работы с клиентами</span
                            >
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-4 bg-[#3B87D5] border-[#3B87D5] rounded-[5px] shrink-0 grow-0 lg:p-2">
                                <img class="w-[43px] h-[43px] lg:w-[19px] lg:h-[19px]"
                                     src="{{ asset('/assets/images/places-svg/5.svg') }}"
                                     alt="Зона отдыха"/>
                            </div>
                            <span
                                class="text-white font-bebas font-normal text-[24px] leading-none tracking-[4%] lg:text-[12px]"
                            >Зона отдыха</span
                            >
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-4 bg-[#3B87D5] border-[#3B87D5] rounded-[5px] shrink-0 grow-0 lg:p-2">
                                <img
                                    class="w-[43px] h-[43px] lg:w-[19px] lg:h-[19px]"
                                    src="{{ asset('/assets/images/places-svg/6.svg') }}"
                                    alt="охрана и видеоконтроль 24/7"
                                />
                            </div>
                            <span
                                class="text-white font-bebas font-normal text-[24px] leading-none tracking-[4%] lg:text-[12px]"
                            >охрана и видеоконтроль 24/7</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <img class="mt-[73px] w-full lg:mt-8 rounded-[15px]" src="{{ asset('/assets/images/for-arendators.png') }}"
                 alt="for-arendators-img"/>
        </section>

        <section class="mt-[146px] relative bg-[#121212] px-[100px] xl:px-[40px] lg:mt-[89px]" id="club-territory">
            <div
                class="flex items-center pt-[72px] pb-[88px] relative gap-[85px] 2xl:gap-[20px] 2xl:gap-[41px] 2xl:flex-col">
                <div class="flex-1">
                    <h2 class="lg:text-[30px] xl:text-center">ТЕРРИТОРИЯ КЛУБА</h2>

                    <div class="mt-[25px] flex gap-[21px] lg:mt-[20px] xl:justify-center">
                        <div
                            class="shadow-[0px_4px_100px_1px_#3b87d56e] flex flex-nowrap justify-center items-center py-[15px] px-[16px] gap-[14px] bg-[#131313] border-[#3F3F3F] border rounded-[20px] lg:py-[12px] lg:px-[12px] lg:shadow-[0px_4px_100px_1px_#3b87d56e]"
                        >
                            <h1 class="whitespace-nowrap xl:text-[35px]!">27</h1>
                            <span class="text-white font-bebas text-[24px] max-w-[200px] xl:text-[14px] xl:max-w-[98px]"
                            >Оборудованных рабочих мест</span
                            >
                        </div>

                        <div
                            class="shadow-[0px_4px_100px_1px_#3b87d5b3] flex flex-nowrap justify-center items-center py-[15px] px-[16px] gap-[14px] bg-[#131313] border-[#3F3F3F] border rounded-[20px] lg:py-[12px] lg:px-[12px] lg:shadow-[0px_4px_100px_1px_#3b87d56e]"
                        >
                            <h1 class="whitespace-nowrap xl:text-[35px]">1600 м²</h1>
                            <span class="text-white font-bebas text-[24px] max-w-[130px] xl:text-[14px] xl:max-w-[54px]"
                            >площадь центра</span
                            >
                        </div>
                    </div>

                    <p class="mt-[40px] text-white font-bebas text-[28px] max-w-[495px] lg:mt-[32px] text-[14px] xl:text-center">
                        Инструмент, подъемник, комфорт <br/>
                        и стабильный поток клиентов — всё готово, чтобы ты просто занимался своим делом
                    </p>

                    <div class="xl:text-center">
                        <a class="button requestBtn mt-[35px] py-[23px] px-[62px] lg:py-[17px] lg:px-[37px] lg:mt-[20px]"
                           href="#"
                        >ОСТАВИТЬ ЗАЯВКУ</a
                        >
                    </div>
                </div>
                <img class="flex-1 shrink min-w-0 2xl:w-full" src="{{ asset('/assets/images/territory-plan.png') }}"
                     alt="territory-plan"/>
            </div>
        </section>

        <section class="mt-[175px] px-[100px] lg:px-[40px] lg:mt-[69px]">
            <h2 class="text-center lg:text-[30px]">Слесарный цех</h2>

            <div class="metalworking-shop-swiper mt-[65px] lg:mt-[19px]">
                <!-- desktop version  -->
                <div class="2xl:hidden grid grid-cols-4 grid-rows-4 gap-[20px]">
                    <!-- row 1 -->

                    <div
                        class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/1.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >СЛЕСАРНЫЙ ЦЕХ</span
                >
                        </div>
                    </div>
                    <div
                        class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/2.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >Подъемники на 3 и 4 тонны</span
                >
                        </div>
                    </div>

                    <!-- row 2 -->

                    <div
                        class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/3.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >ОТВОД ВЫХЛОПНЫХ ГАЗОВ</span
                >
                        </div>
                    </div>
                    <div
                        class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/4.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >подвод сжатого воздуха</span
                >
                        </div>
                    </div>
                    <div
                        class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/5.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >Ящик для инструментов</span
                >
                        </div>

                        <img
                            class="absolute right-0 top-0 w-[163px] border-[#3B87D5] border-[6px] rounded-[10px]"
                            src="/assets/images/metalworking-shop/5-add.png"
                        />
                    </div>

                    <!-- row 3 -->

                    <div
                        class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/6.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >рабочий стол и охрана</span
                >
                        </div>

                        <img
                            class="absolute right-0 top-0 w-[115px] border-[#3B87D5] border-[6px] rounded-[10px]"
                            src="/assets/images/metalworking-shop/camera-mini.png"
                        />
                    </div>
                    <div
                        class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/7.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >Развал-схождение</span
                >
                        </div>
                    </div>
                    <div
                        class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/8.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >рабочий стол и охрана</span
                >
                        </div>

                        <img
                            class="absolute right-0 top-0 w-[115px] border-[#3B87D5] border-[6px] rounded-[10px]"
                            src="/assets/images/metalworking-shop/camera-mini.png"
                        />
                    </div>

                    <!-- row 4 -->

                    <div
                        class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/9.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
                <span
                    class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                >Зоны для шиномонтажа и балансировки</span
                >
                        </div>
                    </div>
                    <div
                        class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                        style="background-image: url('/assets/images/metalworking-shop/10.png')"
                    >
                        <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]"></div>
                    </div>
                </div>

                <!-- mobile version -->

                <div class="hidden 2xl:block">
                    <div class="swiper h-[480px] xl:h-[380px] lg:h-[230px]">
                        <div class="swiper-wrapper rounded-[10px]">
                            <div
                                class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/1.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >СЛЕСАРНЫЙ ЦЕХ</span
                    >
                                </div>
                            </div>
                            <div
                                class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/2.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >Подъемники на 3 и 4 тонны</span
                    >
                                </div>
                            </div>

                            <div
                                class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/3.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >ОТВОД ВЫХЛОПНЫХ ГАЗОВ</span
                    >
                                </div>
                            </div>
                            <div
                                class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/4.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >подвод сжатого воздуха</span
                    >
                                </div>
                            </div>
                            <div
                                class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/5.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >Ящик для инструментов</span
                    >
                                </div>

                                <img
                                    class="absolute right-0 top-0 w-[163px] border-[#3B87D5] border-[6px] rounded-[10px]"
                                    src="/assets/images/metalworking-shop/5-add.png"
                                />
                            </div>

                            <div
                                class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/6.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >рабочий стол и охрана</span
                    >
                                </div>

                                <img
                                    class="absolute right-0 top-0 w-[115px] border-[#3B87D5] border-[6px] rounded-[10px]"
                                    src="/assets/images/metalworking-shop/camera-mini.png"
                                />
                            </div>
                            <div
                                class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/7.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >Развал-схождение</span
                    >
                                </div>
                            </div>
                            <div
                                class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/8.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
                    >рабочий стол и охрана</span
                    >
                                </div>

                                <img
                                    class="absolute right-0 top-0 w-[115px] border-[#3B87D5] border-[6px] rounded-[10px]"
                                    src="/assets/images/metalworking-shop/camera-mini.png"
                                />
                            </div>

                            <div
                                class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/9.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]"
                                >
                    <span
                        class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                    >Зоны для шиномонтажа и балансировки</span
                    >
                                </div>
                            </div>
                            <div
                                class="col-span-2 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                                style="background-image: url('/assets/images/metalworking-shop/10.png')"
                            >
                                <div
                                    class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="hidden w-full 2xl:flex justify-center gap-[12px] lg:gap-[5px] mt-[20px] lg:mt-[11px] pagination">
                    <div
                        class="pagination-bullet active rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="0"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="1"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="2"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="3"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="4"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="5"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="6"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="7"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="8"
                    ></div>
                    <div
                        class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                        data-index="9"
                    ></div>
                </div>
            </div>
        </section>

        <section class="mt-[156px] lg:mt-[109px] px-[190px] xl:px-[40px]">
            <h2 class="text-center lg:text-[30px]">Детейлинговый цех</h2>

            <div class="accordeon mt-[88px] lg:mt-[39px]">
                <div class="accordeon-item group cursor-pointer">
                    <div
                        class="flex justify-between items-center py-[22px] px-[25px] lg:px-0 border-b border-[#818181] duration-300 ease-in-out group-[.active]:border-transparent"
                    >
              <span class="text-white font-bebas text-[25px] leading-none tracking-[0%] lg:text-[18px]"
              >МАСТЕРСКАЯ ДЛЯ ПЕРЕТЯЖКИ САЛОНОВ</span
              >
                        <span
                            class="expander-button block relative w-[25px] h-[25px] before:content-[''] before:absolute before:top-1/2 before:border-[#818181] before:border-t before:w-full after:content-[''] after:absolute after:top-1/2 after:border-[#818181] after:border-t after:w-full after:rotate-90 cursor-pointer"
                        ></span>
                    </div>
                    <div class="text-white content overflow-hidden duration-300 ease-in-out">
                        <p class="px-[25px] pt-[10px] text-usual">
                            РАСКРОЕЧНЫЙ СТОЛ, ШВЕЙНЫЕ МАШИНКИ, РАБОЧИЙ СТОЛ, ИНДИВИДУАЛЬНОЕ ОТОПЛЕНИЕ, ЗОНЫ ДЛЯ
                            ХРАНЕНИЯ
                        </p>
                    </div>
                </div>

                <div class="accordeon-item group cursor-pointer">
                    <div
                        class="flex justify-between items-center py-[22px] px-[25px] lg:px-0 border-b border-[#818181] duration-300 ease-in-out group-[.active]:border-transparent"
                    >
              <span class="text-white font-bebas text-[25px] leading-none tracking-[0%] lg:text-[18px]"
              >ИЗОЛИРОВАННОЕ ПОМЕЩЕНИЕ ДЛЯ ПОРОШКОВОЙ ОКРАСКИ</span
              >
                        <span
                            class="expander-button block relative w-[25px] h-[25px] before:content-[''] before:absolute before:top-1/2 before:border-[#818181] before:border-t before:w-full after:content-[''] after:absolute after:top-1/2 after:border-[#818181] after:border-t after:w-full after:rotate-90 cursor-pointer"
                        ></span>
                    </div>
                    <div class="text-white content overflow-hidden duration-300 ease-in-out">
                        <p class="px-[25px] pt-[10px] text-usual">
                            ПЕЧЬ, СЖАТЫЙ ВОЗДУХ, СТАНОК ДЛЯ ПРАВКИ ДИСКОВ, ПЕСКОСТРУЙНАЯ КАМЕРА, РАБОЧИЙ СТО
                        </p>
                    </div>
                </div>

                <div class="accordeon-item group cursor-pointer">
                    <div
                        class="flex justify-between items-center py-[22px] px-[25px] lg:px-0 border-b border-[#818181] duration-300 ease-in-out group-[.active]:border-transparent"
                    >
              <span class="text-white font-bebas text-[25px] leading-none tracking-[0%] lg:text-[18px]"
              >МЕСТА ДЛЯ РАБОТЫ С ПЛЕНКОЙ</span
              >
                        <span
                            class="expander-button block relative w-[25px] h-[25px] before:content-[''] before:absolute before:top-1/2 before:border-[#818181] before:border-t before:w-full after:content-[''] after:absolute after:top-1/2 after:border-[#818181] after:border-t after:w-full after:rotate-90 cursor-pointer"
                        ></span>
                    </div>
                    <div class="text-white content overflow-hidden duration-300 ease-in-out">
                        <p class="px-[25px] pt-[10px] text-usual">
                            СВЕТОВЫЕ РАМКИ, СТЕНДЫ ДЛЯ РЕЗКИ ПЛЕНОК, ПОДВОД СЖАТОГО ВОЗДУХА, БЕСПЫЛЕВЫЕ ПОЛЫ, РАБОЧИЙ
                            СТОЛ,
                            ЯЩИК ДЛЯ ИНСТРУМЕНТОВ
                        </p>
                    </div>
                </div>

                <div class="accordeon-item group cursor-pointer">
                    <div
                        class="flex justify-between items-center py-[22px] px-[25px] lg:px-0 border-b border-[#818181] duration-300 ease-in-out group-[.active]:border-transparent"
                    >
              <span class="text-white font-bebas text-[25px] leading-none tracking-[0%] lg:text-[18px]"
              >ИЗОЛИРОВАННОЕ МЕСТО ДЛЯ ПОЛИРОВКИ</span
              >
                        <span
                            class="expander-button block relative w-[25px] h-[25px] before:content-[''] before:absolute before:top-1/2 before:border-[#818181] before:border-t before:w-full after:content-[''] after:absolute after:top-1/2 after:border-[#818181] after:border-t after:w-full after:rotate-90 cursor-pointer"
                        ></span>
                    </div>
                    <div class="text-white content overflow-hidden duration-300 ease-in-out">
                        <p class="px-[25px] pt-[10px] text-usual">
                            РАБОЧИЙ СТОЛ, ЯЩИК ДЛЯ ИНСТРУМЕНТОВ, ПОДВОД СЖАТОГО ВОЗДУХА
                        </p>
                    </div>
                </div>

                <div class="accordeon-item group cursor-pointer">
                    <div
                        class="flex justify-between items-center py-[22px] px-[25px] lg:px-0 border-b border-[#818181] duration-300 ease-in-out group-[.active]:border-transparent"
                    >
              <span class="text-white font-bebas text-[25px] leading-none tracking-[0%] lg:text-[18px]"
              >МЕСТА ДЛЯ ТОНИРОВКИ И ЗАМЕНЫ СТЕКОЛ</span
              >
                        <span
                            class="expander-button block relative w-[25px] h-[25px] before:content-[''] before:absolute before:top-1/2 before:border-[#818181] before:border-t before:w-full after:content-[''] after:absolute after:top-1/2 after:border-[#818181] after:border-t after:w-full after:rotate-90 cursor-pointer"
                        ></span>
                    </div>
                    <div class="text-white content overflow-hidden duration-300 ease-in-out">
                        <p class="px-[25px] pt-[10px] text-usual">
                            РАБОЧИЙ СТОЛ, ЯЩИК ДЛЯ ИНСТРУМЕНТОВ, ПОДВОД СЖАТОГО ВОЗДУХА
                        </p>
                    </div>
                </div>

                <div class="accordeon-item group cursor-pointer">
                    <div
                        class="flex justify-between items-center py-[22px] px-[25px] lg:px-0 border-b border-[#818181] duration-300 ease-in-out group-[.active]:border-transparent"
                    >
              <span class="text-white font-bebas text-[25px] leading-none tracking-[0%] xl:text-[18px]"
              >МЕСТА ДЛЯ УСТАНОВКИ ДОП. ОБОРУДОВАНИЯ</span
              >
                        <span
                            class="expander-button block relative w-[25px] h-[25px] before:content-[''] before:absolute before:top-1/2 before:border-[#818181] before:border-t before:w-full after:content-[''] after:absolute after:top-1/2 after:border-[#818181] after:border-t after:w-full after:rotate-90 cursor-pointer"
                        ></span>
                    </div>
                    <div class="text-white content overflow-hidden duration-300 ease-in-out">
                        <p class="px-[25px] pt-[10px] text-usual">
                            ЗВУК, ВЫХЛОП, СИГНАЛИЗАЦИЯ, ОБВЕС
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-[118px] xl:mt-[59px] px-[100px] xl:px-[40px] detailing-swiper">
            <!-- desktop version  -->
            <div class="2xl:hidden grid grid-cols-2 gap-[20px]">
                <div
                    class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                    style="background-image: url('/assets/images/detailing-shop/1.png')"
                >
                    <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
              <span
                  class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
              >Детейлинговый цех</span
              >
                    </div>
                </div>

                <div
                    class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                    style="background-image: url('/assets/images/detailing-shop/2.png')"
                >
                    <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
              <span
                  class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
              >Места для работыс пленкой и полировкой</span
              >
                    </div>
                </div>

                <div
                    class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                    style="background-image: url('/assets/images/detailing-shop/3.png')"
                >
                    <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
              <span
                  class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
              >Места для работы с пленкой и полировкой</span
              >
                    </div>
                </div>

                <div
                    class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                    style="background-image: url('/assets/images/detailing-shop/4.png')"
                >
                    <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
              <span
                  class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
              >мастерская перетяжки салонов</span
              >
                    </div>
                </div>

                <div
                    class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                    style="background-image: url('/assets/images/detailing-shop/5.png')"
                >
                    <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
              <span
                  class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
              >место для работы с порошковой краской</span
              >
                    </div>
                </div>

                <div
                    class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden"
                    style="background-image: url('/assets/images/detailing-shop/6.png')"
                >
                    <div class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px]">
              <span
                  class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px]"
              >помещение дополнительного назначения</span
              >
                    </div>
                </div>
            </div>

            <!-- mobile version  -->

            <div class="hidden 2xl:block">
                <div class="swiper h-[480px] xl:h-[380px] lg:h-[230px]">
                    <div class="swiper-wrapper">
                        <div
                            class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                            style="background-image: url('/assets/images/detailing-shop/1.png')"
                        >
                            <div
                                class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]">
                  <span
                      class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                  >Детейлинговый цех</span
                  >
                            </div>
                        </div>

                        <div
                            class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                            style="background-image: url('/assets/images/detailing-shop/2.png')"
                        >
                            <div
                                class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]">
                  <span
                      class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                  >Места для работыс пленкой и полировкой</span
                  >
                            </div>
                        </div>

                        <div
                            class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                            style="background-image: url('/assets/images/detailing-shop/3.png')"
                        >
                            <div
                                class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]">
                  <span
                      class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                  >Места для работы с пленкой и полировкой</span
                  >
                            </div>
                        </div>

                        <div
                            class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                            style="background-image: url('/assets/images/detailing-shop/4.png')"
                        >
                            <div
                                class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]">
                  <span
                      class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                  >мастерская перетяжки салонов</span
                  >
                            </div>
                        </div>

                        <div
                            class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                            style="background-image: url('/assets/images/detailing-shop/5.png')"
                        >
                            <div
                                class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]">
                  <span
                      class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                  >место для работы с порошковой краской</span
                  >
                            </div>
                        </div>

                        <div
                            class="col-span-1 bg-cover bg-center relative rounded-[10px] h-[380px] overflow-hidden swiper-slide"
                            style="background-image: url('/assets/images/detailing-shop/6.png')"
                        >
                            <div
                                class="absolute bottom-0 left-0 py-[15px] px-[30px] bg-[#3B87D58C] rounded-[10px] lg:py-[7px] lg:px-[7px]">
                  <span
                      class="text-white whitespace-nowrap font-bebas text-[30px] leading-none tracking-[0%] lg:text-[22px] lg:max-w-full lg:whitespace-normal"
                  >помещение дополнительного назначения</span
                  >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="hidden w-full 2xl:flex justify-center gap-[12px] lg:gap-[5px] mt-[20px] lg:mt-[11px] pagination">
                <div
                    class="pagination-bullet active rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                    data-index="0"
                ></div>
                <div
                    class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                    data-index="1"
                ></div>
                <div
                    class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                    data-index="2"
                ></div>
                <div
                    class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                    data-index="3"
                ></div>
                <div
                    class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                    data-index="4"
                ></div>
                <div
                    class="pagination-bullet rounded-full w-[20px] h-[20px] lg:w-[12px] lg:h-[12px] sm:w-[5px] sm:h-[5px]"
                    data-index="5"
                ></div>
            </div>
        </section>

        <section class="mt-[211px] xl:mt-[125px] px-[100px] xl:px-[40px]">
            <h2 class="text-center">
                <div class="max-w-[548px] mx-auto">Обеспечиваем необходимое для комфортной работы:</div>
            </h2>

            <!-- grid-cols-[repeat(7,minmax(158px, auto))]  -->
            <div
                class="mt-[108px] xl:mt-[47px] justify-center grid grid-cols-[repeat(7,minmax(158px,auto))] gap-[18px] 2xl:grid-cols-4 xl:grid-cols-2 grid-auto-rows-[335px]"
            >
                <div
                    class="py-[24px] px-[25px] flex flex-col col-span-2 bg-[#131313] border border-[#191919] rounded-[15px] shadow-[0px_4px_100px_1px_#3B87D538]"
                >
                    <div
                        class="flex justify-center items-center text-center font-bebas text-[30px] leading-none tracking-[3%] text-white w-[65px] h-[65px] bg-center bg-cover"
                        style="background-image: url(/assets/images/blue-star.svg)"
                    >
                        1
                    </div>
                    <span
                        class="font-bebas text-[30px] leading-none tracking-[1%] text-white mt-[23px] lg:mt-[18px] lg:text-[22px]"
                    >Доступ к рабочему месту 24/7</span
                    >
                    <p class="text-usual text-white mt-[22px] lg:mt-[12px]">
                        Работайте в удобное время, без ограничений. Въезд и выезд клиентских машин в рабочие часы.
                    </p>
                </div>

                <div
                    class="py-[24px] px-[25px] flex flex-col col-span-2 bg-[#131313] border border-[#191919] rounded-[15px] shadow-[0px_4px_100px_1px_#3B87D538]"
                >
                    <div
                        class="flex justify-center items-center text-center font-bebas text-[30px] leading-none tracking-[3%] text-white w-[65px] h-[65px] bg-center bg-cover"
                        style="background-image: url(/assets/images/blue-star.svg)"
                    >
                        2
                    </div>
                    <span
                        class="font-bebas text-[30px] leading-none tracking-[1%] text-white mt-[23px] lg:mt-[18px] lg:text-[22px]"
                    >кондиционирование и отопление помещений</span
                    >
                    <p class="text-usual text-white mt-[22px] lg:mt-[12px]">Комфортные условия для работы в любое время
                        года.</p>
                </div>

                <div
                    class="py-[24px] px-[25px] flex flex-col col-span-2 bg-[#131313] border border-[#191919] rounded-[15px] shadow-[0px_4px_100px_1px_#3B87D538]"
                >
                    <div
                        class="flex justify-center items-center text-center font-bebas text-[30px] leading-none tracking-[3%] text-white w-[65px] h-[65px] bg-center bg-cover"
                        style="background-image: url(/assets/images/blue-star.svg)"
                    >
                        3
                    </div>
                    <span
                        class="font-bebas text-[30px] leading-none tracking-[1%] text-white mt-[23px] lg:mt-[18px] lg:text-[22px]"
                    >Вывоз мусора</span
                    >
                    <p class="text-usual text-white mt-[22px] lg:mt-[12px]">Регулярный, что помогает поддерживать
                        порядок и уют.</p>
                </div>

                <div
                    class="py-[24px] px-[25px] col-start-2 2xl:col-start-3 xl:col-start-1 flex flex-col col-span-2 bg-[#131313] border border-[#191919] rounded-[15px] shadow-[0px_4px_100px_1px_#3B87D538]"
                >
                    <div
                        class="flex justify-center items-center text-center font-bebas text-[30px] leading-none tracking-[3%] text-white w-[65px] h-[65px] bg-center bg-cover"
                        style="background-image: url(/assets/images/blue-star.svg)"
                    >
                        4
                    </div>
                    <span
                        class="font-bebas text-[30px] leading-none tracking-[1%] text-white mt-[23px] lg:mt-[18px] lg:text-[22px]"
                    >Зона отдыха для сотрудников</span
                    >
                    <p class="text-usual text-white mt-[22px] lg:mt-[12px]">А также бытовая техника, душевые,
                        раздевалка.</p>
                </div>

                <div
                    class="py-[24px] px-[25px] flex flex-col col-span-2 bg-[#131313] border border-[#191919] rounded-[15px] shadow-[0px_4px_100px_1px_#3B87D538]"
                >
                    <div
                        class="flex justify-center items-center text-center font-bebas text-[30px] leading-none tracking-[3%] text-white w-[65px] h-[65px] bg-center bg-cover"
                        style="background-image: url(/assets/images/blue-star.svg)"
                    >
                        5
                    </div>
                    <span
                        class="font-bebas text-[30px] leading-none tracking-[1%] text-white mt-[23px] lg:mt-[18px] lg:text-[22px]"
                    >Уборка общих помещений</span
                    >
                    <p class="text-usual text-white mt-[22px] lg:mt-[12px]">Берем на себя заботу о чистоте.</p>
                </div>

                <div
                    class="py-[24px] px-[25px] flex flex-col col-span-2 bg-[#131313] border border-[#191919] rounded-[15px] shadow-[0px_4px_100px_1px_#3B87D538] relative"
                >
                    <div
                        class="rounded-[15px] absolute inset-0 before:rounded-[15px] before:absolute before:content-normal before:inset-0 before:bg-[#000000B2] bg-center bg-cover z-0"
                        style="background-image: url(/assets/images/detailing-shop/3.png)"
                    ></div>
                    <span
                        class="relative z-10 font-bebas text-[35px] leading-none tracking-[4%] text-white mt-[23px] lg:mt-[18px] lg:text-[22px]"
                    >Сосредоточьтесь на деле, а не на организационных вопросах</span
                    >
                    <a class="relative requestBtn z-10 button mt-[33px] py-[21px] px-[63px] lg:px-[33px] lg:whitespace-nowrap"
                       href="#"
                    >ОСТАВИТЬ ЗАЯВКУ</a
                    >
                </div>
            </div>
        </section>

        <section class="mt-[201px] lg:mt-[114px] px-[100px] xl:px-[40px]">
            <h2 class="text-center lg:text-[30px]">
                Опции и услуги <br/>
                для клиентов и наших партнёров
            </h2>

            <div class="services-wrapper flex flex-col mt-[114px] lg:mt-[28px] lg:mt-[28px]">
                <div class="service flex items-center justify-between gap-[72px] lg:flex-col lg:gap-[19px]">
                    <div class="flex-1">
                        <h3 class="text-[40px] tracking-[3%] text-left lg:text-center lg:text-[30px]">Офис для
                            записи</h3>
                        <div class="mt-[17px] lg:mt-[14px]">
                            <p class="text-usual max-w-[585px] lg:text-center">
                                Ассистенты автоклуба сэкономят ваше время и деньги. <br/>
                                <br/>
                                Возьмут на себя встречу клиентов, помогутим сориентироваться на территории, оформят
                                закази передадут всю
                                информацию мастерам.
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-cover bg-center rounded-[20px] h-[309px] flex-1 lg:w-full lg:h-[213px] lg:flex-none"
                        style="background-image: url(/assets/images/clients-services/1.png)"
                    ></div>
                </div>

                <div
                    class="service flex flex-row-reverse items-center justify-between gap-[72px] mt-[63px] py-[58px] lg:flex-col lg:gap-[19px] relative"
                >
                    <div class="absolute left-1/2 top-0 -translate-x-1/2 w-screen bg-[#121212] h-full z-0"></div>

                    <div class="flex-1 relative z-10">
                        <h3 class="text-[40px] tracking-[3%] text-left lg:text-center lg:text-[30px]">Зал ожидания</h3>
                        <div class="mt-[17px] lg:mt-[14px]">
                            <p class="text-usual max-w-[585px] lg:text-center">
                                Пространство для клиентов, которые ожидают завершения работ или встречи с мастером.
                                <br/>
                                <br/>
                                На территории зала размещаем выставочные стенды с кейсами партнеров автоклуба.
                            </p>
                        </div>
                    </div>

                    <div
                        class="relative z-10 bg-cover bg-center rounded-[20px] h-[309px] flex-1 lg:w-full lg:h-[213px] lg:flex-none xl:hidden"
                        style="background-image: url(/assets/images/clients-services/2.png)"
                    ></div>

                    <div
                        class="hidden relative z-10 bg-cover bg-center rounded-[20px] h-[309px] flex-1 lg:w-full lg:h-[213px] lg:flex-none xl:block"
                        style="background-image: url(/assets/images/clients-services/2-mobile.png)"
                    ></div>
                </div>

                <div class="service flex items-center justify-between gap-[72px] mt-[54px] lg:flex-col lg:gap-[19px]">
                    <div class="flex-1">
                        <h3 class="text-[40px] tracking-[3%] text-left lg:text-center lg:text-[30px]">Автомойка</h3>
                        <div class="mt-[17px] lg:mt-[14px]">
                            <p class="text-usual max-w-[585px] lg:text-center">
                                с отдельным въездом обеспечивает удобный и быстрый доступ для всех клиентов и
                                мастеров. <br/>
                                <br/>
                            </p>
                            <ul>
                                <li
                                    class="text-usual relative before:content-normal before:absolute before:-left-[14px] before:w-[4px] before:h-[4px] before:rounded-full before:bg-white before:top-1/2 before:-translate-y-1/2 lg:before:content-none lg:text-center"
                                >
                                    Не нужно приобретать собственное моечное оборудование
                                </li>
                                <li
                                    class="text-usual relative before:content-normal before:absolute before:-left-[14px] before:w-[4px] before:h-[4px] before:rounded-full before:bg-white before:top-1/2 before:-translate-y-1/2 lg:before:content-none lg:text-center"
                                >
                                    Избежание простоев из-за ожидания сторонней мойки
                                </li>
                                <li
                                    class="text-usual relative before:content-normal before:absolute before:-left-[14px] before:w-[4px] before:h-[4px] before:rounded-full before:bg-white before:top-1/2 before:-translate-y-1/2 lg:before:content-none lg:text-center"
                                >
                                    Быстрая предварительная мойка перед началом работ
                                </li>
                                <li
                                    class="text-usual relative before:content-normal before:absolute before:-left-[14px] before:w-[4px] before:h-[4px] before:rounded-full before:bg-white before:top-1/2 before:-translate-y-1/2 lg:before:content-none lg:text-center"
                                >
                                    Возможность промежуточной очистки авто на разных этапах
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="bg-cover bg-center rounded-[20px] h-[309px] flex-1 lg:w-full lg:h-[213px] lg:flex-none"
                        style="background-image: url(/assets/images/clients-services/3.png)"
                    ></div>
                </div>
            </div>
        </section>

        <section class="mt-[132px] px-[100px] lg:px-[40px]">
            <h2 class="text-center">
                Поддерживаем развитие <br/>
                наших партнёров, предоставляя <br/>
                возможности для роста
            </h2>

            <div class="mt-[85px] flex gap-[22px] lg:mt-[25px] 2xl:flex-col lg:gap-[15px] 2xl:h-auto">
                <div class="development-item flex-[0.8]">
                    <!-- for item background -->
                    <div
                        class="absolute z-0 bg-center bg-cover left-0 top-0 w-full h-full rounded-[20px] before:content-normal before:inset-0 before:absolute before:bg-[#000000BF]"
                        style="background-image: url(/assets/images/partner-support/1.jpg)"
                    ></div>
                    <p
                        class="relative z-10 font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[308px] lg:text-[18px]"
                    >
                        Тимбилдинги для укрепления <br class="hidden 2xl:inline"/>
                        командного духа и обмена опытом
                    </p>
                </div>

                <div class="development-item-wrapper flex-[0.8]">
                    <div class="development-item">
                        <p
                            class="font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[316px] lg:text-[18px]"
                        >
                            Образовательные курсы <br class="hidden 2xl:inline"/>по маркетингу, финансовой<br
                                class="hidden 2xl:inline"/>
                            грамотности и техническим тренингам
                        </p>
                    </div>
                </div>

                <div class="flex-1 development-item">
                    <!-- for item background -->
                    <div
                        class="absolute z-0 bg-center bg-cover left-0 top-0 w-full h-full rounded-[20px] before:content-normal before:inset-0 before:absolute before:bg-[#000000BF]"
                        style="background-image: url(/assets/images/partner-support/2.jpg)"
                    ></div>
                    <p
                        class="relative z-10 font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[411px] lg:text-[18px]"
                    >
                        Поддержка в брендировании <br class="hidden 2xl:inline"/>и дооснащении рабочих мест для
                        <br class="hidden 2xl:inline"/>создания уникального имиджа
                    </p>
                </div>
            </div>

            <div class="flex gap-[22px] mt-[22px] 2xl:flex-col lg:gap-[15px] lg:mt-[15px] lg:h-auto">
                <div class="flex-[0.5] development-item-wrapper">
                    <div class="development-item">
                        <p
                            class="font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[160px] lg:text-[18px]"
                        >
                            Спортивные мероприятия<br class="hidden 2xl:inline"/>
                            и корпоративы
                        </p>
                    </div>
                </div>

                <div class="flex-[1.15] development-item">
                    <!-- for item background -->
                    <div
                        class="absolute z-0 bg-center bg-cover left-0 top-0 w-full h-full rounded-[20px] before:content-normal before:inset-0 before:absolute before:bg-[#000000BF]"
                        style="background-image: url(/assets/images/partner-support/3.jpg)"
                    ></div>
                    <p
                        class="relative z-10 font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[323px] lg:text-[18px]"
                    >
                        Доступ к клиентской базе Mobiscar для<br class="hidden 2xl:inline"/>
                        упрощения привлечения новых заказов
                    </p>
                </div>

                <div class="flex-[0.7] development-item-wrapper">
                    <div class="development-item">
                        <p
                            class="font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[250px] lg:text-[18px]"
                        >
                            Общие праздники и события,<br class="hidden 2xl:inline"/>
                            создающие неформальные связи <br class="hidden 2xl:inline"/>между партнерами
                        </p>
                    </div>
                </div>

                <div class="flex-[0.7] development-item-wrapper">
                    <div class="development-item">
                        <p
                            class="font-bebas text-[30px] leading-none tracking-[0%] bg-gradient-to-b from-white to-[#999999] bg-clip-text text-transparent max-w-[256px] lg:text-[18px]"
                        >
                            Маркетинговая поддержка<br class="hidden 2xl:inline"/>
                            через общий бренд и привлечение <br class="hidden 2xl:inline"/>клиентов
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-[50px] flex justify-center">
                <a class="button requestBtn py-[23px] px-[63px] lg:py-[17px] lg:px-[34px]" href="#">ОСТАВИТЬ ЗАЯВКУ</a>
            </div>
        </section>

        <section class="mt-[152px] px-[102px] xl:px-[41px] lg:mt-[94px] pb-[131px] lg:pb-[47px]">
            <h2 class="text-center">Стоимость аренды рабочих мест:</h2>

            <div class="mt-[127px] lg:mt-[52px]">
                <table class="w-full pb-[149px]">
                    <h4 class="hidden lg:block text-center text-[22px] text-[#3B87D5] mb-[27px]">СЛЕСАРНЫЙ ЦЕХ:</h4>
                    <thead>
                    <tr class="font-bebas text-[30px] tracking-[3%] leading-none text-left lg:text-[14px] whitespace-nowrap">
                        <th class="text-[#3B87D5] text-left lg:max-w-[116px] 2xl:px-[10px] lg:text-transparent">
                            СЛЕСАРНЫЙ ЦЕХ:
                        </th>
                        <th class="text-[#8B8B8B] text-center 2xl:px-[10px]">Количество</th>
                        <th class="text-[#8B8B8B] text-right 2xl:px-[10px]">Цена за 1 место</th>
                    </tr>
                    </thead>
                    <tbody
                        class="font-bebas text-[35px] tracking-[0%] leading-none text-white mt-[18px] lg:text-[14px]">
                    <tr class="border-b border-[#8B8B8B] pb-[21px] h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ПОДЪЕМНИК 3Т
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            6 МЕСТ
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            76.000/МЕС
                        </td>
                    </tr>
                    <tr class="border-b border-[#8B8B8B] pb-[21px] h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ПОДЪЕМНИК 4Т
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            2 МЕСТА
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            86.000/МЕС
                        </td>
                    </tr>
                    <tr class="border-b border-[#8B8B8B] pb-[21px] h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ДИАГНОСТИКА
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            1 МЕСТО
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            69.000/МЕС
                        </td>
                    </tr>
                    <tr class="h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ЭЛЕКТРИКА
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            2 МЕСТА
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            69.000/МЕС
                        </td>
                    </tr>
                    </tbody>
                    <tbody class="h-[150px] xl:h-[61px]">
                    <tr>
                        <td colspan="3" style="height: 30px; background: transparent"></td>
                    </tr>
                    </tbody>
                    <thead class="">
                    <tr class="hidden lg:table-row">
                        <th class="text-center text-[22px] text-[#3B87D5] py-[27px]" colspan="3">
                            <h4 class="text-center text-[22px] text-[#3B87D5] w-full">ДЕТЕЙЛИНГОВЫЙ ЦЕХ</h4>
                        </th>
                    </tr>

                    <tr class="font-bebas text-[30px] tracking-[3%] leading-none text-left lg:text-[14px] whitespace-nowrap">
                        <th class="text-[#3B87D5] text-left 2xl:px-[10px] lg:text-transparent">ДЕТЕЙЛИНГОВЫЙ ЦЕХ:</th>
                        <th class="text-[#8B8B8B] text-center 2xl:px-[10px]">Количество</th>
                        <th class="text-[#8B8B8B] text-right 2xl:px-[10px]">Цена за 1 место</th>
                    </tr>
                    </thead>
                    <tbody
                        class="font-bebas text-[35px] tracking-[0%] leading-none text-white mt-[18px] lg:text-[14px]">
                    <tr class="border-b border-[#8B8B8B] pb-[21px] h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ПЛЕНКА, ПОЛИРОВКА И ТД. (С ДОП. ОсвЕЩЕНИЕМ)
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            2 МЕСТА
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            87.000/МЕС
                        </td>
                    </tr>
                    <tr class="border-b border-[#8B8B8B] pb-[21px] h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ПОРОШКОВАЯ ПОКРАСКА
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            1 МЕСТО
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            98.000/МЕС
                        </td>
                    </tr>
                    <tr class="border-b border-[#8B8B8B] pb-[21px] h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            ШВЕЙНАЯ МАСТЕРСКАЯ (2 КОМНАТЫ)
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            1 МЕСТО
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            98.000/МЕС
                        </td>
                    </tr>
                    <tr class="h-[92px] lg:h-[43px]">
                        <td class="text-left w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            СВОБОДНОГО НАЗНАЧЕНИЯ
                        </td>
                        <td class="text-center w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            12 МЕСТ
                        </td>
                        <td class="text-right w-[33%] xl:w-auto whitespace-nowrap lg:max-w-[116px] xl:whitespace-normal">
                            69.000/МЕС
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-[69px] lg:mt-[30px]">
                <a href="#" class="button requestBtn rounded-[10px] py-[23px] px-[63px]">ОСТАВИТЬ ЗАЯВКУ</a>
            </div>

            <div class="w-full mt-[162px] lg:mt-[154px] relative">
                <img class="w-full xl:min-h-[379px]" src="/assets/images/book-excursion.png" alt="book excursion"/>

                <div
                    class="py-[79px] pl-[43px] bg-[#3B87D5D1] rounded-[20px] absolute left-0 bottom-0 backdrop-blur-[15px] 2xl:left-1/2 2xl:-translate-x-1/2 2xl:bottom-[unset] 2xl:-top-[79px] 2xl:min-w-[70%] 2xl:px-[20px] 2xl:pt-[32px] 2xl:pb-[35px]"
                >
                    <h2 class="text-[50px] max-w-[370px] lg:max-w-[220px] lg:text-[30px] 2xl:text-center 2xl:mx-auto">
                        Запишитесь
                        <br class="hidden lg:inline"/>
                        на экскурсию
                        <br class="hidden lg:inline"/>по автоклубу
                    </h2>
                    <h2 class="mt-[36px] text-[50px] lg:text-[35px] 2xl:mt-[9px] 2xl:text-center whitespace-nowrap">
                        <span class="font-raleway">+</span>
                        7 918 481 36 43
                    </h2>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('assets/js/arendators.js') }}"></script>
@endpush
