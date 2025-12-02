<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $page->seo_title ?? $page->title ?? 'MobisCar' }}</title>
    <meta name="description" content="{{ $page->seo_description ?? '' }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/output.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="pt-[64px]">
@include('components.header')

@yield('content')

@include('components.footer')

<div id="requestModal" class="request-modal-overlay modal-wrapper">
    <div class="request-modal modal-content relative">
        <button
            class="closeBtn absolute top-[10px] right-[10px] w-[40px] h-[40px] before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:w-[20px] before:h-[1px] before:bg-white before:rotate-45 before:-translate-x-1/2 before:-translate-y-1/2 after:content-[''] after:absolute after:top-1/2 after:left-1/2 after:w-[20px] after:h-[1px] after:bg-white after:-rotate-45 after:-translate-x-1/2 after:-translate-y-1/2 hover:before:bg-gray-200 hover:after:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2"
        ></button>

        <h2 class="mb-[17px] lg:text-[25px] text-center requestBtn">
            ЗАПОЛНИТЕ ЗАЯВКУ НА <br class="inline lg:hidden"/>ДИАГНОСТИКУ АВТОМОБИЛЯ
        </h2>
        <p class="text-white text-center text-usual text-[22px] lg:text-[12px] mb-[48px] lg:mb-[29px]">
            Наши менеджеры свяжутся с вами
        </p>
        <form action="https://..." method="post">
            <input
                type="text"
                name="name"
                placeholder="Ваше имя"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] text-[#686868] placeholder:text-[#686868] mb-[17px] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />
            <input
                type="text"
                name="phone"
                placeholder="Ваш ТЕЛЕФОН"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] mb-[17px] text-[#686868] placeholder:text-[#686868] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />
            <div class="flex gap-[16px] mb-[44px] w-full justify-start lg:mb-[26px]">
                <input type="checkbox" class="checkbox-custom"/>
                <p
                    class="font-raleway text-[#686868] font-normal not-italic text-[12px] leading-none tracking-[0.05em] lg:text-[10px] max-w-[429] lg:max-w-[200px]"
                >
                    Я согласен(-на) с политикой конфиденциальности и даю согласие на получение рекламных сообщений
                </p>
            </div>
            <button
                type="submit"
                class="button mx-auto block text-[25px] pt-[30px] pb-[25px] px-[99px] lg:px-[51px] lg:text-[16px] lg:py-[17px]"
            >
                ОТПРАВИТЬ
            </button>
        </form>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{ asset('/assets/js/shared.js') }}"></script>
@stack('scripts')
</body>
</html>
