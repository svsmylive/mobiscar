@extends('layouts.site')

@section('content')
    <div class="px-[104px] bg-[#060606] lg:px-[40px]">
        <section class="pt-[108px] pb-[152px] lg:pb-[73px] lg:pt-[56px]">
            <h1 class="mb-[67px] lg:mb-[42px] lg:text-center lg:text-[30px]">КОНТАКТЫ</h1>
            <div class="hidden lg:flex gap-[37px] flex-col items-center">
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        телефон
                    </h5>
                    <h3 class="text-[40px] lg:text-[30px]"><span class="font-raleway">+</span>7 (861) 275-88-00</h3>
                </div>
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        МЕССЕНДЖЕРЫ
                    </h5>
                    <div class="flex gap-[31px] lg:gp-[25px]">
                        <h3 class="text-[40px] lg:text-[30px]">WHATSAPP</h3>
                        <h3 class="text-[40px] lg:text-[30px]">TELEGRAM</h3>
                    </div>
                </div>
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                        <h5
                            class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                        >
                            ПОЧТА
                        </h5>
                        <h3 class="text-[40px] lg:text-[30px]">mobi@mobiscar-krasnodar.ru</h3>
                    </div>
                </div>
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        АДРЕС
                    </h5>
                    <h3 class="text-[40px] lg:text-[30px]">г. Краснодар, <br/>ул. Васнецова 20</h3>
                </div>
            </div>
            <div class="grid grid-rows-2 grid-cols-2 gap-y-[58px] gap-x-[61px] max-w-[880px] lg:hidden">
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        телефон
                    </h5>
                    <h3 class="text-[40px] lg:text-[30px]"><span class="font-raleway">+</span>7 (861) 275-88-00</h3>
                </div>
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        АДРЕС
                    </h5>
                    <h3 class="text-left text-[40px] lg:text-[30px]">г. Краснодар, <br/>ул. Васнецова 20</h3>
                </div>

                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        ПОЧТА
                    </h5>
                    <h3 class="text-left text-[40px] lg:text-[30px]">mobi@mobiscar-krasnodar.ru</h3>
                </div>
                <div class="flex flex-col items-start w-fit lg:items-center lg:w-full">
                    <h5
                        class="mb-[18px] lg:mb-[11px] text-[#505050] font-bebas font-normal not-italic text-[22px] leading-none tracking-normal text-center uppercase lg:text-[18px]"
                    >
                        МЕССЕНДЖЕРЫ
                    </h5>
                    <div class="flex gap-[31px] lg:gp-[25px]">
                        <h3 class="text-[40px] lg:text-[30px]">WHATSAPP</h3>
                        <h3 class="text-[40px] lg:text-[30px]">TELEGRAM</h3>
                    </div>
                </div>
            </div>
            <iframe
                class="rounded-[30px] mt-[94px] sm:hidden"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A300ab5907ed0b81dddb4c919f710df24121d6cc35e1c2f2287fd9501901bdac7&amp;source=constructor"
                width="100%"
                height="424"
                frameborder="0"
            ></iframe>
            <iframe
                class="rounded-[30px] mt-[66px] hidden sm:block"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A300ab5907ed0b81dddb4c919f710df24121d6cc35e1c2f2287fd9501901bdac7&amp;source=constructor"
                width="100%"
                height="242"
                frameborder="0"
            ></iframe>
        </section>
    </div>
@endsection
