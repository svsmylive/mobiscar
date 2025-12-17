@extends('layouts.site')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/blog.css') }}"/>
@endpush

@section('content')
    <div class="bg-[#060606] px-[113px] lg:px-[40px]">
        <section class="pt-[89px] pb-[189px] lg:pt-[68px] lg:pb-[78px]">
            <h1 class="mb-[62px] text-center lg:mb-[26px]">Блог</h1>
            <div class="w-full hidden xl:block mb-[46px]">
                <div
                    class="w-full border border-[#363636] flex items-center gap-[12px] pl-[22px] py-[20px] rounded-[10px] lg:py-[14px] lg:pl-[11px]"
                >
                    <img src="./assets/Search.svg" alt="" class="w-[26px] h-[26px] lg:w-[15px] lg:h-[15px]"/>
                    <input
                        type="text"
                        placeholder="ПОИСК"
                        class="mt-[5px] search-input w-full text-[#686868] outline-0 font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] text-left placeholder:font-bebas placeholder:font-normal placeholder:text-[#686868] placeholder:not-italic placeholder:text-[22px] placeholder:leading-none placeholder:tracking-[0.03em] placeholder:text-left lg:text-[18px] lg:placeholder:text-[18px]"
                    />
                </div>
            </div>
            <div
                class="blog-items-grid w-full grid grid-cols-3 gap-x-[20px] gap-y-[22px] xl:grid-cols-2 lg:grid-cols-1 lg:gap-y-[16px]"
            >
                <!-- 1 невидимый элемент -->
                <div class="gradient-border-wrapper hidden invisible">
                    <div class="blog-item">
                        <div
                            class="w-full bg-cover bg-center bg-no-repeat rounded-[10px] h-[200px] mb-[33px] sm:h-[128px]"
                            style="background-image: url('/assets/images/Blog.png')"
                        ></div>
                        <h2 class="text-[35px] lg:text-[30px] mb-[22px] text-center lg:mb-[16px]">Статья не
                            определена</h2>
                        <p
                            class="text-white mb-[54px] lg:mb-[33px] font-raleway font-normal not-italic text-[18px] leading-none tracking-normal text-center lg:text-[14px]"
                        >

                        </p>
                    </div>
                </div>
                <!--  -->


                <div class="col-span-2 flex flex-col xl:hidden search-wrapper">
                    <div class="w-full">
                        <div
                            class="xl:hidden w-full border border-[#363636] flex items-center gap-[12px] pl-[22px] py-[20px] rounded-[10px]"
                        >
                            <img src="/assets/images/Search.svg" alt="" class="w-[26px] h-[26px]"/>
                            <input
                                type="text"
                                placeholder="ПОИСК"
                                class="search-input mt-[5px] w-full text-[#686868] outline-0 font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] text-left placeholder:font-bebas placeholder:font-normal placeholder:text-[#686868] placeholder:not-italic placeholder:text-[22px] placeholder:leading-none placeholder:tracking-[0.03em] placeholder:text-left"
                            />
                        </div>
                    </div>

                    <div class="flex-1 flex gap-[20px] mt-[12px] wrapper-2-3">
                        @foreach($articles->shift(3) ?? [] as $articleTop)
                            @php
                                $wrapperClass = 'gradient-border-wrapper inline-block';

                                if ($loop->iteration === 2 || $loop->iteration === 3) {
                                    $wrapperClass = 'gradient-border-wrapper flex-1 inline-block';
                                }
                            @endphp

                            <div class="gradient-border-wrapper inline-block">
                                <div class="blog-item">
                                    <div
                                        class="w-full bg-cover bg-center bg-no-repeat rounded-[10px] h-[200px] mb-[33px]"
                                        style="background-image: url('{{ $articleTop->image }}')"
                                    ></div>
                                    <h2 class="text-[35px] mb-[22px] lg:text-[30px] text-center lg:mb-[16px]">{{ $articleTop->name }} </h2>
                                    <p
                                        class="text-white mb-[54px] lg:mb-[33px] font-raleway font-normal not-italic text-[18px] leading-none tracking-normal text-center lg:text-[14px]"
                                    >
                                        {{ $articleTop->preview_description }}
                                    </p>
                                    <a class="button" href="{{ route('article.show', ['slug' => $articleTop->slug]) }}"
                                       style="font-size: 16px; padding: 13px 53px">ЧИТАТЬ</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @foreach($articles as $article)
                    <div class="gradient-border-wrapper inline-block">
                        <div class="blog-item">
                            <div
                                class="w-full bg-cover bg-center bg-no-repeat rounded-[10px] h-[200px] mb-[33px] sm:h-[128px]"
                                style="background-image: url({{ $article->image }})"
                            ></div>
                            <h2 class="text-[35px] lg:text-[30px] mb-[22px] text-center lg:mb-[16px]">{{ $article->name }}</h2>
                            <p
                                class="text-white mb-[54px] lg:mb-[33px] font-raleway font-normal not-italic text-[18px] leading-none tracking-normal text-center lg:text-[14px]"
                            >
                                {{ $article->preview_description }}
                            </p>
                            <a class="button" href="{{ route('article.show', ['slug' => $article->slug]) }}"
                               style="font-size: 16px; padding: 13px 53px">ЧИТАТЬ</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('assets/js/blog.js') }}"></script>
@endpush
