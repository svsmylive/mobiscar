@extends('layouts.site')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/main_page.css') }}"/>
@endpush

@section('content')
    <section id="main" class="bg-cover bg-center"
             style="background-image: url({{ asset('assets/images/about.webp') }});">
        <div class="pt-[179px] pl-[107px] pb-[117px] lg:pl-[38px] lg:pt-[133px] lg:pb-[184px]">
            <h1 class="">Качество. Гарантия. Сервис.</h1>
            <p
                class="mt-[15px] font-raleway font-medium not-italic text-[22px] leading-none tracking-normal text-[#E7E7E7] lg:text-[14px]"
            >
                Объединили лучших мастеров в своём деле <br/>
                Автоклуб с именем на территории 1600 м² 
            </p>
            <div class="mt-[31px] flex gap-[24px] lg:flex-col lg:gap-[9px]">
                <button
                    class="button requestBtn whitespace-nowrap rounded-[10px] w-[296px] py-[30px] text-[white] uppercase font-bebas font-normal not-italic text-usual tracking-widest text-center leading-none text-[25px] cursor-pointer lg:text-[18px] lg:w-[185px] lg:pt-[17px] lg:pb-[13px]"
                >
                    Записаться
                </button>
                <button
                    onclick="window.location='{{ route('partners') }}'"
                    class="hover:backdrop-blur-sm duration-200 ease-in-out w-[296px] py-[30px] text-[white] uppercase font-bebas font-normal not-italic text-usual tracking-widest text-center leading-none rounded-[10px] border border-white text-[25px] cursor-pointer lg:text-[18px] lg:w-[185px] lg:pt-[17px] lg:pb-[13px]"
                >
                    СТАТЬ ПАРТНЁРОМ
                </button>
            </div>
            <div
                class="w-fit pr-[50px] mt-[39px] backdrop-blur-[10px] bg-[#FFFFFF1A] rounded-[15px] py-[12px] pl-[14px] flex items-center lg:mr-[39px] lg:pr-[19px]"
            >
                <img src="{{ asset('assets/images/Trophy.svg') }}" alt=""/>
                <p
                    class="ml-[14px] font-raleway text-[16px] font-medium not-italic text-usual leading-none tracking-normal text-[#E7E7E7] max-w-[322px] lg:text-[14px] lg:ml-[25px]"
                >
                    Доверьте автомобиль профессионалам с безупречной репутацией в Краснодаре
                </p>
            </div>
        </div>
    </section>
    <div class="px-[102px] bg-[#060606] lg:px-[0px]">
        <section class="pt-[139px] lg:pt-[68px]">
            <h1 class="text-center lg:text-[36px]">Полный спектр услуг</h1>
            <h4 class="mt-[19px] lg:mt-[13px]">
                Все виды ремонта, обслуживания и детейлинга <br/>
                — в одном месте
            </h4>
            <ul
                class="mt-[48px] grid grid-cols-4 grid-rows-2 gap-y-[37px] justify-items-center lg:mt-[39px] 2xl:grid-cols-3 xl:grid-cols-2 lg:grid-cols-1 lg:gap-y-[28px]"
            >
                @foreach($services as $service)
                    {{--                    <li--}}
                    {{--                        class="bg-[#131313] rounded-[20px] border border-[#131313] shadow-[0px_4px_4px_0px_#00000040] w-[302px] h-[346px] flex flex-col"--}}
                    {{--                    >--}}
                    {{--                        <img src="{{ $service->image ?? asset('assets/images/Services_1.png') }}" alt="" class="w-[267px] h-[168px] mt-[25px]--}}
                    {{--                    ml-[17px]"/>--}}
                    {{--                        <h5--}}
                    {{--                            class="max-w-[280px] bg-transparent ml-[27px] mt-[25px] uppercase font-bebas text-[26px] font-normal not-italic text-white leading-none tracking-wider text-left flex-grow"--}}
                    {{--                        >--}}
                    {{--                            {{ $service->name }}--}}
                    {{--                        </h5>--}}
                    {{--                        <button--}}
                    {{--                            onclick="window.location='{{ route('service_by_slug', ['slug' => $service->slug]) }}'"--}}
                    {{--                            class="button ml-[27px] mb-[25px] mt-[13px] text-white font-bebas px-[42px] py-[14px] font-normal not-italic text-usual leading-none tracking-widest text-center rounded-[7px] self-start"--}}
                    {{--                        >--}}
                    {{--                            ПОДРОБНЕЕ--}}
                    {{--                        </button>--}}
                    {{--                    </li>--}}
                @endforeach
            </ul>
            <ul
                class="w-fit gap-[12px] mt-[48px] grid grid-cols-3 gap-y-[49px] auto-rows-fr justify-items-center lg:mt-[39px] 2xl:grid-cols-2 [@media(max-width:945px)]:gap-y-[25px] [@media(max-width:945px)]:grid-cols-1"
            >
                @foreach($services as $service)
                    <li
                        class="bg-[#131313] rounded-[20px] border border-[#131313] shadow-[0px_4px_4px_0px_#00000040] w-[402px] flex flex-col sm:w-[302px]"
                    >
                        <div class="w-full flex justify-center mt-[38px] mb-[38px] sm:mt-[19px] sm:mb-[25px]">
                            <img src="{{ $service->image ?? asset('assets/images/Services_1.png') }}" alt=""
                                 class="w-[355px] h-[254px] rounded-[20px] sm:w-[267px] sm:h-[168px]"/>
                        </div>

                        <h5
                            class="max-w-[340px] ml-[23px] mb-[18px] sm:mb-[13px] bg-transparent uppercase font-bebas text-[26px] font-normal not-italic text-white leading-none tracking-wider text-left"
                        >
                            {{ $service->name }}
                        </h5>
                        <p
                            class="flex-1 max-w-[355px] ml-[23px] mb-0 text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-[0.54px] sm:text-[14px] sm:mb-[25px]"
                        >
                            {{ $service->preview_text }}
                        </p>
                        <h6
                            class="text-white text-right font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[20px] leading-none tracking-[0.6px] mr-[24px] mb-[15px] sm:mr-0 sm:text-center sm:mb-[10.5px]"
                        >
                            {{ $service->price }} руб
                        </h6>
                        <div class="flex justify-between mx-[23px] gap-[13px] mb-[41px] sm:mb-[20.5px] sm:gap-[5px]">
                            <button
                                data-ctx-type="service"
                                data-ctx-id="{{ $service->id }}"
                                data-ctx-title="{{ $service->name }}"
                                data-ctx-url="{{ request()->fullUrl() }}"
                                class="h-full requestBtn shadow-none uppercase button text-white flex-1 py-[14px] font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-base leading-none tracking-[0.48px] text-center rounded-[7px] self-start"
                            >
                                оставить заявку
                            </button>
                            <a
                                href="{{ route('service_by_slug', ['slug' => $service->slug]) }}"
                                class="border border-white uppercase button shadow-none bg-transparent text-white flex-1 py-[14px] font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-base leading-none tracking-[0.48px] text-center rounded-[7px] self-start"
                            >
                                подробнее
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="w-full flex flex-col items-center">
                <button
                    class="button requestBtn text-[25px] mt-[91px] text-white font-bebas px-[48px] pt-[30px] pb-[25px] font-normal not-italic text-usual leading-none tracking-widest text-center rounded-[10px] shadow-[0px_4px_25px_5px_#4FC3E06E] lg:text-[18px] lg:mt-[43px] lg:px-[53px] lg:pt-[17px] lg:pb-[13px]"
                >
                    ЗАПИСАТЬСЯ <span class="inline lg:hidden">НА ДИАГНОСТИКУ</span>
                </button>
                <a
                    class="hidden lg:inline cursor-pointer text-white mt-[25px] font-bebas font-normal text-[20px] leading-none tracking-[0.03em] text-center uppercase"
                >все услуги</a
                >
            </div>
        </section>
        <section class="pt-[75px] lg:pt-[150px]">
            <h2 class="text-center lg:px-[5px]">Автоклуб Мобискар <br/>Территория ремонта и творчества</h2>
            <h3 class="mt-[25px] lg:mt-[17px]">
                Сообщество компаний в сфере ремонта и детейлинга, <br/>
                являющихся лидерами в своих отраслях
            </h3>
            <ul class="mt-[47px] flex justify-between px-[100px] xl:flex-col xl:items-center xl:gap-[17px] xl:mt-[52px] xl:px-[0]">
                @foreach($partners as $partner)
                    <li
                        class="whitespace-nowrap text-[#7D7D7D] font-bebas font-normal not-italic text-[35px] leading-none tracking-widest uppercase"
                    >
                        {{ $partner->name }}
                    </li>
                @endforeach
            </ul>
        </section>
        <section class="pt-[195px] lg:pt-[101px]">
            <h2 class="text-center">
                Резиденты Мобискар — те,<br class="hidden lg:inline"/>
                кому можно <br class="xl:hidden"/>доверить
                <br class="hidden lg:inline"/>
                любой автомобиль
            </h2>
            <div class="2xl:flex 2xl:justify-center">
                <ul class="flex justify-between mt-[45px] lg:mt-[42px] xl:flex-col xl:gap-[23px]">
                    <div class="gradient-border-wrapper">
                        <li class="residents-item">
                            <img
                                src="{{ asset('assets/images/Residents_1.png') }}"
                                alt=""
                                class="mt-[40px] w-[243px] lg:w-[208px] lg:rounded-[10px] lg:mt-[29px]"
                            />
                            <h1
                                class="mt-[30px] uppercase font-bebas font-normal not-italic text-[35px] leading-none tracking-normal text-center bg-[linear-gradient(90deg,#FFFFFF_0%,#999999_123.01%)] bg-clip-text text-transparent lg:text-[28px] lg:mt-[23px]"
                            >
                                Мобискар — клуб, <br/>
                                где работают только <br/>проверенные специалисты
                            </h1>
                            <p
                                class="mt-[24px] text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-normal text-center max-w-[300px] lg:mt-[14px] lg:text-[14px] lg:max-w-[237px]"
                            >
                                Каждый резидент — это мастер с опытом, собственным подходом и репутацией, заслуженной
                                годами практики.
                            </p>
                        </li>
                    </div>
                    <div class="gradient-border-wrapper">
                        <li class="residents-item">
                            <img
                                src="{{ asset('assets/images/Residents_2.png')}}"
                                alt=""
                                class="mt-[40px] w-[243px] lg:w-[208px] lg:rounded-[10px] lg:mt-[29px]"
                            />
                            <h1
                                class="mt-[30px] uppercase font-bebas font-normal not-italic text-[35px] leading-none tracking-normal text-center bg-[linear-gradient(90deg,#FFFFFF_0%,#999999_123.01%)] bg-clip-text text-transparent lg:text-[28px] lg:mt-[23px]"
                            >
                                В клубе нет <br/>случайных <br class="lg:hidden"/>людей
                            </h1>
                            <p
                                class="mt-[24px] text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-normal text-center max-w-[300px] lg:mt-[14px] lg:text-[14px] lg:max-w-[249px]"
                            >
                                Все специалисты Мобискар прошли отбор и доказали свой уровень качеством работы,
                                вниманием к деталям и
                                ответственным отношением к клиентам.
                            </p>
                        </li>
                    </div>
                    <div class="gradient-border-wrapper">
                        <li class="residents-item">
                            <img
                                src="{{ asset('assets/images/Residents_3.png')}}"
                                alt=""
                                class="mt-[40px] w-[243px] lg:w-[208px] lg:rounded-[10px] lg:mt-[29px]"
                            />
                            <h1
                                class="mt-[30px] uppercase font-bebas font-normal not-italic text-[35px] leading-none tracking-normal text-center bg-[linear-gradient(90deg,#FFFFFF_0%,#999999_123.01%)] bg-clip-text text-transparent lg:text-[28px] lg:mt-[23px]"
                            >
                                Мы объединили <br class="lg:hidden"/>мастеров <br class="hidden lg:inline"/>
                                разных <br class="lg:hidden"/>специализаций
                            </h1>
                            <p
                                class="mt-[24px] text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-normal text-center max-w-[300px] lg:mt-[14px] lg:text-[14px] lg:max-w-[241px]"
                            >
                                От механиков и электриков до кузовщиков и детейлеров — чтобы вы могли получить всё
                                обслуживание в одном месте,
                                без компромиссов в качестве.
                            </p>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="w-full flex justify-center">
                <button
                    onclick="window.location='{{ route('partners') }}'"
                    class="button text-[25px] mt-[46px] text-white font-bebas px-[54px] pt-[30px] pb-[25px] font-normal not-italic text-usual leading-none tracking-widest text-center rounded-[10px] shadow-[0px_4px_25px_5px_#4FC3E06E] self-start lg:text-[18px] lg:px-[25px] lg:pt-[17px] lg:pb-[13px]"
                >
                    ВЫБРАТЬ РЕЗИДЕНТА
                </button>
            </div>
        </section>
        <section class="pt-[177px] lg:pt-[154px]">
            <h2 class="mb-[66px] text-center lg:mb-[30px]">
                ПРИСОЕДИНЯЙТЕСЬ <br class="hidden lg:inline"/>
                К КЛУБУ МОБИСКАР
            </h2>
            <div
                class="flex justify-between xl:items-center xl:gap-[20px] lg:gap-0 items-stretch xl:flex-col-reverse lg:items-center lg:px-[42px]"
            >
                <div
                    class="w-full max-w-[581px] h-[445px] bg-cover bg-center bg-no-repeat rounded-[20px] lg:w-full lg:mt-[30px] lg:h-[215px]"
                    style="background-image: url({{ asset('assets/images/Club.png')}});"
                ></div>
                <!-- <img
                    src=./assets/images/Club.png"
                    alt=""
                    class="w-full max-w-[581px] h-auto min-h-0 shrink lg:mt-[30px] lg:h-[215px] lg:rounded-[20px]"
                  /> -->
                <div class="flex flex-col xl:flex-row lg:flex-col gap-[13px] max-w-[628px] flex-1">
                    <div class="rounded-[20px] bg-[#121212] pt-[32px] pl-[30px] pb-[38px] h-full flex-1 lg:pt-[22px]">
                        <p
                            class="text-[#FEFEFE] font-raleway font-normal not-italic text-[22px] leading-none tracking-normals lg:text-[16px]"
                        >
                            Если вы владелец автомобиля — запишитесь в клуб и доверьте свой автомобиль экспертам с
                            опытом и репутацией.
                        </p>
                        <button
                            class="button requestBtn px-[17px] mt-[29px] text-white py-[12px] rounded-[7px] font-bebas font-normal not-italic text-[18px] leading-none tracking-[0.03em] text-center"
                        >
                            Записаться на диагностику
                        </button>
                    </div>
                    <div class="rounded-[20px] bg-[#121212] pt-[32px] pl-[30px] pb-[38px] flex-1 lg:pt-[22px]">
                        <p
                            class="text-[#FEFEFE] font-raleway font-normal not-italic text-[22px] leading-none tracking-normals lg:text-[16px]"
                        >
                            Если вы опытный специалист — станьте резидентом Мобискар и получите собственное
                            пространство, клиентов и
                            поддержку сильного бренда с репутацией.
                        </p>
                        <button
                            onclick="window.location='{{ route('partners') }}'"
                            class="button px-[17px] mt-[18px] text-white py-[12px] rounded-[7px] font-bebas font-normal not-italic text-[18px] leading-none tracking-[0.03em] text-center"
                        >
                            СТАТЬ РЕЗИДЕНТОМ
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-[231px] lg:pt-[112px]">
            <h2 class="mb-[66px] text-center lg:mb-[38px]">
                Территория автоклуба <br class="hidden lg:inline"/>
                для вашего комфорта
            </h2>
            <ul class="lg:px-[40px]">
                <li class="flex justify-between py-[58px] lg:pb-[60px] gap-[20px] lg:flex-col lg:pt-0">
                    <div class="flex flex-col justify-center lg:items-center">
                        <h5
                            class="text-[#F3F3F3] font-bebas font-normal not-italic text-[40px] leading-none tracking-[0.03em] text-left lg:text-[30px] lg:text-center"
                        >
                            Офис для записи
                        </h5>
                        <p
                            class="pt-[17px] max-w-[585px] text-[#F3F3F3] font-['Raleway'] font-normal not-italic text-[20px] leading-none tracking-normal lg:text-[14px] lg:text-center"
                        >
                            Администраторы автоклуба Мобискар помогут подобрать нужного мастера, оперативно оформят
                            заявку и
                            проконсультируют по всем вопросам.  <br/>
                            <br/>
                            Мы ценим ваше время, поэтому процесс приёма автомобиля организован быстро и максимально
                            удобно.
                        </p>
                    </div>
                    <div
                        class="w-[579px] h-[309px] lg:w-full lg:mt-[28px] rounded-[20px] lg:h-[213px] lg:w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url({{ asset('assets/images/Territory_1.png') }});"
                    ></div>
                </li>
                <div class="relative w-full">
                    <div
                        class="bg-[#121212] h-full z-1 -ml-[102px] lg:-ml-[40px] absolute left-0.5 -translate-x-0.5 w-screen"></div>
                    <li
                        class="z-10 w-full relative flex justify-between py-[58px] lg:pt-[48px] lg:pb-[60px] gap-[20px] lg:flex-col-reverse lg:px-0 lg:w-auto"
                    >
                        <div
                            class="w-[579px] h-[309px] lg:w-full lg:mt-[28px] rounded-[20px] lg:h-[213px] lg:w-full bg-cover bg-center bg-no-repeat"
                            style="background-image: url({{ asset('assets/images/Territory_2.png') }});"
                        ></div>

                        <div class="flex flex-col justify-center">
                            <h5
                                class="text-[#F3F3F3] font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[40px] leading-none tracking-[0.03em] text-left lg:text-[30px] lg:text-center"
                            >
                                Зал ожидания
                            </h5>
                            <p
                                class="pt-[17px] max-w-[585px] text-[#F3F3F3] font-['Raleway'] font-normal not-italic text-[20px] leading-none tracking-normal lg:text-[14px] lg:text-center"
                            >
                                Через панорамные окна сможете наблюдать за всеми этапами ремонта и обслуживания вашего
                                автомобиля. <br/>
                                <br/>

                                Пока мастера работают, вы отдыхаете в комфорте: мягкие кресла, напитки и спокойная
                                атмосфера.
                            </p>
                        </div>
                    </li>
                </div>
                <li class="flex justify-between lg:flex-col py-[58px] lg:pt-[48px] lg:pb-[60px] gap-[20px]">
                    <div class="flex flex-col justify-center">
                        <h5
                            class="text-[#F3F3F3] font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[40px] leading-none tracking-[0.03em] text-left lg:text-[30px] lg:text-center"
                        >
                            Автомойка
                        </h5>
                        <p
                            class="pt-[17px] max-w-[585px] text-[#F3F3F3] font-['Raleway'] font-normal not-italic text-[20px] leading-none tracking-normal lg:text-[14px] lg:text-center"
                        >
                            Полный комплекс услуг – от стандартной мойки кузова, до глубокого ухода и химчистки.
                            <br/>
                            <br/>
                            Профессиональная химия и мягкие материалы обеспечат блеск автомобиля и свежесть салона.
                        </p>
                    </div>
                    <div
                        class="w-[579px] h-[309px] lg:w-full lg:mt-[28px] rounded-[20px] lg:h-[213px] lg:w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url({{ asset('assets/images/Territory_3.png') }});"
                    ></div>
                </li>
            </ul>
        </section>
        <section class="pb-[49px] border border-[#121212] relative">
            <div class="bg-[#121212] h-full z-1 -ml-[102px] lg:ml-0 absolute left-0.5 -translate-x-0.5 w-screen"></div>
            <h5
                class="lg:text-[30px] relative mt-[68px] z-10 mb-[34px] text-white text-center font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[40px] leading-none tracking-[0.03em]"
            >
                Пока авто в ремонте
            </h5>
            <div class="relative z-10 flex w-full justify-center gap-[21px] xl:flex-col xl:items-center xl:px-[40px]">
                <div class="w-[398px] xl:w-full">
                    <img src="{{ asset('assets/images/Repair_1.png') }}" alt="" class="w-full mb-[28px]"/>
                    <h5
                        class="text-white font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[26px] leading-none tracking-[0.78px] text-center"
                    >
                        Ресторан
                    </h5>
                </div>
                <div class="w-[398px] xl:w-full">
                    <img src="{{ asset('assets/images/Repair_2.png') }}" alt="" class="w-full mb-[28px]"/>

                    <h5
                        class="text-white font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[26px] leading-none tracking-[0.78px] text-center"
                    >
                        Бильярд
                    </h5>
                </div>
                <div class="w-[398px] xl:w-full">
                    <img src="{{ asset('assets/images/Repair_3.png') }}" alt="" class="w-full mb-[28px]"/>

                    <h5
                        class="text-white font-['Bebas_Neue_Cyrillic'] font-normal not-italic text-[26px] leading-none tracking-[0.78px] text-center"
                    >
                        Сауна
                    </h5>
                </div>
            </div>
        </section>
    </div>

@endsection
