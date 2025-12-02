@extends('layouts.site')

@section('content')
    <div class="bg-[#060606] px-[104px] lg:px-[40px]">
        <section class="pt-[89px] pb-[161px] lg:pt-[57px] lg:pb-[90pxl]">
            <h1 class="mb-[54px] text-center">Резиденты автоклуба</h1>
            <ul class="space-y-[49px]">
                <li
                    class="shadow-[0px_4px_100px_1px_#3B87D538] relative bg-[#131313] rounded-[20px] border border-[#3F3F3F] flex gap-[52px] pl-[53px] pt-[53px] pb-[53px] 2xl:flex-col 2xl:px-[53px] lg:p-[20px] lg:pb-[30px] lg:gap-0"
                >
                    <div
                        class="w-[100px] h-[100px] flex justify-center items-center bg-cover bg-center bg-no-repeat absolute top-[29px] right-[44px] lg:top-[15px] lg:right-[5px] lg:w-[72px] lg:h-[72px]"
                        style="background-image: url({{ asset('/assets/images/Star.svg') }})"
                    >
                        <h3 class="text-[22px] lg:text-[18px]">
                            10 лет<br/>
                            в деле
                        </h3>
                    </div>
                    <div
                        class="w-[383px] 2xl:h-[350px] 2xl:w-full self-stretch bg-cover bg-center bg-no-repeat rounded-[20px] 2xl:self-auto lg:w-full lg:h-[220px] sm:h-[114px] 2xl:max-w-full"
                        style="background-image: url('./assets/Partners_1.png')"
                    ></div>
                    <div>
                        <h2 class="text-[45px] lg:text-center lg:mt-[19px] lg:text-[28px]">Big Motorsport</h2>
                        <h5
                            class="mb-[42px] text-[#878787] font-raleway font-semibold not-italic text-xl leading-none tracking-widest uppercase lg:text-[12px] lg:text-center lg:mt-[7px] lg:mb-0"
                        >
                            Ремонт двигателей
                        </h5>
                        <h3 class="text-[30px] mb-[10px] text-left lg:text-center lg:text-[24px] lg:mt-[27px]">
                            услуги:</h3>
                        <div class="flex gap-[10px] mb-[19px] lg:justify-center lg:mt-[20px] lg:items-stretch lg:mb-0">
                            <div
                                class="px-[19px] h-[52px] bg-[#1C1C1C] rounded-[10px] flex justify-center items-center lg:px-[5px]">
                                <p
                                    class="text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-[0.03em] lg:text-[12px]"
                                >
                                    Диагностика
                                </p>
                            </div>
                            <div
                                class="w-fit px-[19px] bg-[#1C1C1C] rounded-[10px] flex justify-center items-center lg:py-[7px] lg:px-[5px]"
                            >
                                <p
                                    class="text-white font-raleway font-normal not-italic text-[18px] leading-none tracking-[0.03em] lg:text-[12px] lg:text-center"
                                >
                                    Ремонт и замена двигателей и турбокомпрессоров
                                </p>
                            </div>
                        </div>
                        <p
                            class="max-w-[611px] text-[#FFFFFF] mb-[19px] font-raleway font-normal not-italic text-sm leading-none tracking-[0.05em] lg:text-[14px] lg:mt-[28px] lg:text-center lg:mb-0"
                        >
                            Мастерская, где знают сердце автомобиля. Опытные мотористы выполняют капитальный и текущий
                            ремонт любой сложнос
                            ти.
                            <br class="hidden lg:inline"/>Мы возвращаем мощность, надежность и уверенность вашему
                            двигателю! 
                        </p>
                        <h3 class="text-[30px] mb-[5px] text-left lg:mt-[18px] lg:text-center">
                            <span class="font-raleway">+</span>7 (919) 219-97-95
                        </h3>
                        <p
                            class="mb-[26px] text-[#878787] font-raleway font-medium not-italic text-sm leading-none tracking-wider lg:mb-0 lg:text-center"
                        >
                            Ежедневно с 10:00 до 20:00
                        </p>
                        <div class="flex items-center lg:mt-[18px] xl:flex-col">
                            <div class="flex gap-[11px] lg:flex-col relative xl:w-full">
                                <a href=""
                                   class="button w-[268px] pt-[23px] pb-[20px] lg:w-auto lg:py-[20px] lg:mx-[22px]"
                                >ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a
                                >
                                <a href="" class="button-secondary w-[268px] pt-[23px] pb-[20px] lg:w-auto lg:mx-[22px]"
                                >НАПИСАТЬ В whatsapp</a
                                >
                            </div>
                            <h3 class="text-[22px] ml-[55px] cursor-pointer xl:mt-[25px] lg:ml-0 lg:text-[18px]">
                                ОТЗЫВЫ</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>

@endsection
