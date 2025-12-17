@extends('layouts.site')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/blog.css') }}"/>
@endpush

@section('content')
    <div class="bg-[#060606] px-[180px] pb-[213px] pt-[124px] xl:pb-[67px] xl:px-[40px] xl:pt-[68px]">
        <h1 class="text-center xl:text-[30px]">{{ $article->name }}</h1>
        <div class="mt-[62px] lg:mt-[48px]">
            <img
                class="mr-[32px] mb-[47px] lg:mb-[27px] w-[593px] rounded-[10px] xm:w-full float-left xm:float-none"
                src="{{ $article->image }}"
                alt="article"
            />
            <p
                class="inline font-raleway font-normal not-italic text-[22px] leading-[100%] lg:text-[14px] tracking-[0%] text-center uppercase text-white"
            >
                {{ $article->detail_description }}
            </p>
            <div class="clear-both"></div>
        </div>
        <a href="{{ route('blog') }}" class="button py-[13px] px-[42px] text-[16px] mt-[32px] w-fit block mx-auto">ВСЕ СТАТЬИ</a>
    </div>
@endsection
