<footer class="px-[102px] bg-[#0D0D0D] pt-[51px] pb-[44px] lg:px-0 lg:pb-[15px]">
    <div class="flex justify-stretch pr-[153px] lg:flex-col lg:items-center lg:pr-0">
        <div class="flex flex-col flex-[2] lg:items-center">
            <img onclick="window.location='{{ route('index') }}'"
                src="{{ asset('/assets/images/Logo.svg') }}" alt="" class="w-[134px] h-[67px]"/>
            <p
                class="lg:text-center mt-[16px] max-w-[169px] text-[#919191] font-raleway font-normal not-italic text-[10px] leading-none tracking-normal"
            >
                Премиум автоклуб в Краснодаре для профессионалов и владельцев дорогих автомобилей
            </p>
        </div>
        <div class="flex flex-col flex-1 lg:items-center">
            <h5
                class="text-[#707070] lg:mt-[40px] mb-[26px] lg:mb-[10px] font-bebas font-normal not-italic text-[26px] lg:text-[20px] leading-none tracking-normal"
            >
                Меню
            </h5>
            <a
                href="{{ route('index') }}"
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal lg:mb-[10px] not-italic text-xl lg:text-[12px] leading-none tracking-normal"
            >
                Главная
            </a>
            <a
                href="{{ route('partners') }}"
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal not-italic lg:mb-[10px] text-xl lg:text-[12px] leading-none tracking-normal"
            >
                Партнёры
            </a>
            <a
                href="{{ route('arendators') }}"
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal not-italic lg:mb-[10px] text-xl lg:text-[12px] leading-none tracking-normal"
            >
                Арендаторам
            </a>
            <a
                href="{{ route('blog') }}"
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal not-italic lg:mb-[10px] text-xl lg:text-[12px] leading-none tracking-normal"
            >
                Блог
            </a>
            <a
                href="{{ route('contacts') }}"
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal not-italic text-xl leading-none lg:text-[12px] tracking-normal"
            >
                Контакты
            </a>
        </div>
        <div class="flex flex-col flex-1 lg:items-center lg:mt-[40px]">
            <h5
                class="text-[#707070] mb-[26px] font-bebas font-normal lg:mb-[10px] not-italic text-[26px] leading-none tracking-normal lg:text-[20px]"
            >
                Контакты
            </h5>
            <p
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal lg:mb-[10px] lg:text-[12px] not-italic text-xl leading-none tracking-normal"
            >
                +7 (861) 275-88-00
            </p>
            <a
                href="mailto:mobi@mobiscar-krasnodar.ru"
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal lg:mb-[10px] lg:text-[12px] not-italic text-xl leading-none tracking-normal"
            >
                mobi@mobiscar-krasnodar.ru
            </a>
            <p
                class="text-[#F5F5F5] mb-[14px] font-raleway font-normal lg:mb-[10px] lg:text-[12px] not-italic text-xl leading-none tracking-normal"
            >
                г. Краснодар, ул. Васнецова 20
            </p>
        </div>
    </div>
    <div class="mt-[125px] flex justify-between lg:flex-col lg:items-center lg:mt-[81px] lg:gap-[5px]">
        <a href="" class="text-[#626262] font-raleway font-normal not-italic text-xs leading-none tracking-normal"
        >Политика конфиденциальности</a
        >
        <a href="" class="text-[#626262] font-raleway font-normal not-italic text-xs leading-none tracking-normal"
        >Согласие на обработку персональных данных</a
        >
{{--        <a href="" class="text-[#626262] font-raleway font-normal not-italic text-xs leading-none tracking-normal"--}}
{{--        >Согласие на рассылку</a--}}
{{--        >--}}
    </div>
</footer>
