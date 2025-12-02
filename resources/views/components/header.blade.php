<header
    class="w-full h-[64px] flex items-center justify-between px-[104px] bg-black 2xl:px-[40px] fixed top-0 z-40 border-b border-b-[#2C2C2C] 2xl:border-none"
>
    <nav class="w-full flex justify-between items-center">
        <img onclick="window.location='{{ route('index') }}'"
             src="{{ asset('/assets/images/Logo.svg') }}" alt="" class="w-[100px] lg:w-[62px]"/>
        <div class="flex justify-between w-full ml-[110px] 2xl:hidden">
            <a href="{{ route('index') }}" class="navlink hover:border-b-white">Главная </a>
            <a href="{{ route('partners') }}" class="navlink hover:border-b-white">Партнёры</a>
            <a href="{{ route('arendators') }}" class="navlink hover:border-b-white">Арендаторам</a>
            <a href="{{ route('blog') }}" class="navlink hover:border-b-white">Блог</a>
            <a href="{{ route('contacts') }}" class="navlink hover:border-b-white">Контакты</a>
            <div class="flex flex-col gap-[5px] items-start">
                <a href="" class="navlink">г. Краснодар, ул. Васнецова 20</a>
                <a href="" class="navlink">+7 (861) 275-88-00</a>
            </div>
        </div>

        <button
            class="requestBtn button 2xl:hidden whitespace-nowrap ml-[43px] rounded-[7px] px-[24px] py-[14px] text-[white] uppercase font-bebas font-normal not-italic text-usual tracking-widest text-center leading-none"
        >
            оставить заявку
        </button>

        <div class="hidden 2xl:flex gap-[21px] items-center">
            <div class="navlink">+7 (861) 275-88-00</div>

            <button class="relative w-[26px] h-[15px] group z-50" id="burgerBtn">
            <span
                class="absolute top-1/2 left-0 w-full h-[1px] bg-white transform -translate-y-1/2 transition-all duration-300 group-[.active]:opacity-0"
            ></span>
                <span
                    class="absolute top-0 left-0 w-full h-[1px] bg-white transform transition-all duration-300 group-[.active]:rotate-45 group-[.active]:top-1/2"
                ></span>
                <span
                    class="absolute bottom-0 left-0 w-full h-[1px] bg-white transform transition-all duration-300 group-[.active]:-rotate-45 group-[.active]:bottom-1/2"
                ></span>
            </button>
        </div>

        <div
            class="duration-200 ease-in-out w-[246px] h-screen fixed top-0 bg-[#060606] border-l-[#252525] border-l z-40"
            id="burgerMenu"
        >
            <div class="pl-[19px] mt-[12px]">
                <img onclick="window.location='{{ route('index') }}'" src="{{ asset('/assets/images/Logo.svg') }}" alt="" class="w-[100px] lg:w-[62px]"/>
            </div>

            <div class="mt-[36px] pl-[19px] flex flex-col gap-[15px]">
                <a href="/main" class="navlink justify-start!">Главная </a>
                <a href="/partners" class="navlink justify-start!">Партнёры</a>
                <a href="/arendators/" class="navlink justify-start!">Арендаторам</a>
                <a href="/blog" class="navlink justify-start!">Блог</a>
                <a href="/contacts" class="navlink justify-start!">Контакты</a>
            </div>

            <div class="pl-[19px] mt-[63px]">
                <button
                    class="requestBtn button whitespace-nowrap text-[12px] rounded-[7px] px-[20px] py-[14px] text-[white] uppercase font-bebas font-normal not-italic text-usual tracking-widest text-center leading-none"
                >
                    оставить заявку
                </button>

                <a href="" class="navlink mt-[13px] justify-start!">+7 (861) 275-88-00</a>
                <a href="" class="navlink mt-[5px] justify-start!">г. Краснодар, ул. Васнецова 20</a>
            </div>
        </div>
    </nav>
</header>
