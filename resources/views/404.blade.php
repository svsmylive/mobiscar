@extends('layouts.site')

@section('content')
    <div class="w-full bg-[#000000]">
        <section class="w-full pt-[250px] pb-[285px] lg:pb-[186px] lg:pt-[208px]">
            <div class="flex flex-col items-center">
                <h1 class="lg:text-[40px] mb-[11px] lg:mb-[10px]">ОШИБКА 404</h1>
                <p
                    class="mb-[36px] mb-[28px] font-raleway font-normal text-[22px] leading-[100%] tracking-[0%] lg:text-[14px] text-white"
                >
                    Такой страницы не существует
                </p>
                <a href="{{ route('index') }}" class="button px-[28px] pt-[17px] pb-[13px] text-[18px]!">ВЕРНУТЬСЯ НА
                    ГЛАВНУЮ</a>
            </div>
        </section>
    </div>
@endsection
