<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $page->title ?? '404' }}</title>
    <meta name="description" content="{{ $page->description ?? '404' }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/output.css') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    />
    <link rel="canonical" href="https://mobiscar-krasnodar.ru{{ request()->getPathInfo() }}">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/x-icon">
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
        <form id="application-form" action="{{ route('application.send') }}" method="post">
            @csrf
            <input
                type="text"
                name="website"
                tabindex="-1"
                autocomplete="off"
                aria-hidden="true"
                style="position:absolute;left:-9999px;top:-9999px;height:1px;width:1px;opacity:0;"
            />

            <input type="hidden" name="hp_time" id="hp_time" value="">
            <input
                type="text"
                name="name"
                required
                placeholder="Ваше имя"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] text-[#686868] placeholder:text-[#686868] mb-[17px] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />

            <input
                id="phone-input"
                type="text"
                name="phone"
                required
                placeholder="Ваш ТЕЛЕФОН"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] mb-[17px] text-[#686868] placeholder:text-[#686868] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />
            <input type="hidden" name="context_type" id="context_type" value="general">
            <input type="hidden" name="context_id" id="context_id" value="">
            <input type="hidden" name="context_title" id="context_title" value="">
            <input type="hidden" name="context_url" id="context_url" value="">
            <input type="hidden" name="referrer" id="referrer" value="">
            <input type="hidden" name="utm_source" id="utm_source" value="">
            <input type="hidden" name="utm_medium" id="utm_medium" value="">
            <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
            <input type="hidden" name="utm_content" id="utm_content" value="">
            <input type="hidden" name="utm_term" id="utm_term" value="">

            <div class="flex gap-[16px] mb-[44px] w-full justify-start lg:mb-[26px]">
                <input required id="privacy-checkbox" type="checkbox" class="checkbox-custom"/>
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

<div id="becomePartnerModal" class="request-modal-overlay modal-wrapper">
    <div class="request-modal modal-content relative">
        <button
            type="button"
            class="closeBtn absolute top-[10px] right-[10px] w-[40px] h-[40px] before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:w-[20px] before:h-[1px] before:bg-white before:rotate-45 before:-translate-x-1/2 before:-translate-y-1/2 after:content-[''] after:absolute after:top-1/2 after:left-1/2 after:w-[20px] after:h-[1px] after:bg-white after:-rotate-45 after:-translate-x-1/2 after:-translate-y-1/2 hover:before:bg-gray-200 hover:after:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2"
        ></button>

        <h2 class="mb-[17px] lg:text-[25px] text-center">
            ЗАПОЛНИТЕ ЗАЯВКУ ЧТОБЫ <br class="inline"/>СТАТЬ ПАРТНЁРОМ
        </h2>

        <p class="text-white text-center text-usual text-[22px] lg:text-[12px] mb-[48px] lg:mb-[29px]">
            Наши менеджеры свяжутся с вами
        </p>

        <form id="partner-form" action="{{ route('application.send') }}" method="post">
            @csrf

            <input
                type="text"
                name="website"
                tabindex="-1"
                autocomplete="off"
                aria-hidden="true"
                style="position:absolute;left:-9999px;top:-9999px;height:1px;width:1px;opacity:0;"
            />

            <input type="hidden" name="hp_time" class="hp-time" value="">
            <input type="hidden" name="context_type" value="partner">

            <input
                type="text"
                name="name"
                required
                placeholder="Ваше имя"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] text-[#686868] placeholder:text-[#686868] mb-[17px] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />

            <input
                id="partner-phone-input"
                type="tel"
                inputmode="numeric"
                autocomplete="tel"
                name="phone"
                required
                placeholder="Ваш телефон"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] mb-[17px] text-[#686868] placeholder:text-[#686868] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />

            <input
                type="text"
                name="activity_type"
                required
                placeholder="Вид деятельности"
                class="outline-0 pt-[22px] pb-[19px] pl-[28px] mb-[17px] text-[#686868] placeholder:text-[#686868] lg:mb-[10px] w-full rounded-[10px] lg:text-[14px] lg:py-[14px] lg:pl-[15px] border border-[#363636] font-bebas font-normal not-italic text-[22px] leading-none tracking-[0.03em] placeholder:font-bebas placeholder:font-normal placeholder:not-italic placeholder:text-[22px] lg:placeholder:text-[14px] placeholder:leading-none placeholder:tracking-[0.03em]"
            />

            <div class="flex gap-[16px] mb-[44px] w-full justify-start lg:mb-[26px]">
                <input
                    id="partner-privacy-checkbox"
                    required
                    type="checkbox"
                    class="checkbox-custom"
                />

                <p class="font-raleway text-[#686868] font-normal not-italic text-[12px] leading-none tracking-[0.05em] lg:text-[10px] max-w-[429px] lg:max-w-[200px]">
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
<div id="app-popup"
     style="
        display: none;
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: #3B87D5;
        color: white;
        padding: 14px 26px;
        border-radius: 10px;
        font-family: 'Bebas Neue', sans-serif;
        font-size: 22px;
        z-index: 99999;
        box-shadow: 0 4px 20px rgba(0,0,0,0.25);
        opacity: 0;
        transition: opacity 0.3s ease;
     ">
</div>

<!-- privacy policy modal -->
<div id="privacyPolicyModal" class="request-modal-overlay modal-wrapper bg-black">
    <button
        class="closeBtn z-10 absolute top-[20px] right-[20px] w-[40px] h-[40px] before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:w-[20px] before:h-[1px] before:bg-white before:rotate-45 before:-translate-x-1/2 before:-translate-y-1/2 after:content-[''] after:absolute after:top-1/2 after:left-1/2 after:w-[20px] after:h-[1px] after:bg-white after:-rotate-45 after:-translate-x-1/2 after:-translate-y-1/2 hover:before:bg-gray-200 hover:after:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2"
    ></button>
    <div class="modal modal-content relative max-h-[100%] overflow-auto">
        <h2 class="mb-[17px] lg:text-[25px] text-center pt-[8px]">
            ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ ПЕРСОНАЛЬНЫХ ДАННЫХ
        </h2>

        <h3 class="mb-[8px] text-left w-full">1. Определение терминов</h3>
        <ol class="text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Настоящая Политика конфиденциальности персональных данных действует в отношении всей информации, которую
                сайт Автосервис Мобискар, расположенный на доменном имени mobiscar-krasnodar.ru, а также его субдоменах,
                может получить о Пользователе во время использования сайта, его программ и продуктов.
            </li>
            <li>
                «Администрация сайта» — уполномоченные сотрудники на управление сайтом Автосервис Мобискар, действующие
                от имени ИП Дрынкин С. И., которые организуют и/или осуществляют обработку персональных данных, а также
                определяют цели обработки персональных данных, состав персональных данных, подлежащих обработке,
                действия
                совершаемые с персональными данными.
            </li>
            <li>
                «Персональные данные» — любая информация, относящаяся к прямо или косвенно определенному или
                определяемому физическому лицу.
            </li>
            <li>
                «Обработка персональных данных» — любое действие или совокупность действий, совершаемых с использованием
                средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись,
                систематизацию, накопление, хранение, уточнение, извлечение, использование, передачу, обезличивание,
                блокирование, удаление и уничтожение персональных данных.
            </li>
            <li>
                «Конфиденциальность персональных данных» — обязательное для соблюдения Оператором или иным получившим
                доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта
                персональных данных или наличия иного законного основания.
            </li>
            <li>
                «Сайт Автосервис Мобискар» — совокупность связанных между собой веб-страниц, размещенных в сети Интернет
                по адресу: mobiscar-krasnodar.ru, а также его субдоменах.
            </li>
            <li>
                «Субдомены» — страницы или совокупность страниц, расположенные на доменах третьего уровня, принадлежащие
                сайту Автосервис Мобискар, а также другие временные страницы, внизу которых указана контактная
                информация
                Администрации.
            </li>
            <li>
                «Пользователь» — лицо, имеющее доступ к сайту Автосервис Мобискар посредством сети Интернет и
                использующее информацию, материалы и продукты сайта.
            </li>
            <li>
                «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере Пользователя.
            </li>
            <li>
                «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, через который Пользователь получает
                доступ на Сайт.
            </li>
            <li>
                «Товар» — продукт, который Пользователь заказывает на сайте и оплачивает через платежные системы.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">2. Общие положения</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Использование сайта Автосервис Мобискар Пользователем означает согласие с настоящей Политикой
                конфиденциальности и условиями обработки персональных данных Пользователя.
            </li>
            <li>
                В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование
                сайта Автосервис Мобискар.
            </li>
            <li>
                Настоящая Политика конфиденциальности применяется к сайту Автосервис Мобискар. Сайт не контролирует и не
                несет ответственность за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным
                на сайте Автосервис Мобискар.
            </li>
            <li>
                Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">3. Предмет политики конфиденциальности</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Настоящая Политика конфиденциальности устанавливает обязательства Администрации по неразглашению и
                обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по
                запросу Администрации при регистрации на сайте Автосервис Мобискар, при подписке на информационную
                e-mail рассылку или при оформлении заказа.
            </li>
            <li>
                Персональные данные, разрешенные к обработке в рамках настоящей Политики конфиденциальности,
                предоставляются Пользователем путем заполнения форм на сайте Автосервис Мобискар и включают в себя
                следующую информацию:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        фамилию, имя, отчество Пользователя;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        контактный телефон Пользователя;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        адрес электронной почты;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        место жительства Пользователя при необходимости.
                    </li>
                </ul>
            </li>
            <li>
                Сайт защищает данные, которые автоматически передаются при посещении страниц:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        IP-адрес;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        информация из cookies;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        информация о браузере;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        время доступа;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        реферер — адрес предыдущей страницы.
                    </li>
                </ul>
            </li>
            <li>
                Отключение cookies может повлечь невозможность доступа к частям сайта, требующим авторизации.
            </li>
            <li>
                Сайт осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация используется с
                целью предотвращения, выявления и решения технических проблем.
            </li>
            <li>
                Любая иная персональная информация, неоговоренная выше, подлежит надежному хранению и нераспространению,
                за исключением случаев, предусмотренных настоящей Политикой конфиденциальности.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">4. Цели сбора персональной информации Пользователя</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                идентификации Пользователя для авторизации, оформления заказа и других действий;
            </li>
            <li>
                предоставления Пользователю доступа к персонализированным данным сайта Автосервис Мобискар;
            </li>
            <li>
                установления с Пользователем обратной связи, включая направление уведомлений, запросов, оказание услуг и
                обработку заявок;
            </li>
            <li>
                определения места нахождения Пользователя для обеспечения безопасности и предотвращения мошенничества;
            </li>
            <li>
                подтверждения достоверности и полноты персональных данных, предоставленных Пользователем;
            </li>
            <li>
                создания учетной записи, если Пользователь дал согласие на создание учетной записи;
            </li>
            <li>
                уведомления Пользователя по электронной почте;
            </li>
            <li>
                предоставления технической поддержки при возникновении проблем, связанных с использованием сайта;
            </li>
            <li>
                предоставления Пользователю с его согласия специальных предложений, информации о ценах, новостной
                рассылки и иных сведений от имени сайта Автосервис Мобискар;
            </li>
            <li>
                осуществления рекламной деятельности с согласия Пользователя.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">5. Способы и сроки обработки персональной информации</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Обработка персональных данных Пользователя осуществляется без ограничения срока любым законным способом,
                в том числе в информационных системах персональных данных с использованием средств автоматизации или без
                использования таких средств.
            </li>
            <li>
                Пользователь соглашается с тем, что Администрация вправе передавать персональные данные третьим лицам, в
                частности курьерским службам, организациям почтовой связи, операторам электросвязи, исключительно в
                целях
                выполнения заказа Пользователя, оформленного на сайте Автосервис Мобискар.
            </li>
            <li>
                Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти
                Российской Федерации только по основаниям и в порядке, установленным законодательством Российской
                Федерации.
            </li>
            <li>
                При утрате или разглашении персональных данных Администрация вправе не информировать Пользователя об
                утрате или разглашении персональных данных.
            </li>
            <li>
                Администрация принимает необходимые организационные и технические меры для защиты персональной
                информации
                Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования,
                копирования,
                распространения, а также от иных неправомерных действий третьих лиц.
            </li>
            <li>
                Администрация совместно с Пользователем принимает все необходимые меры по предотвращению убытков или
                иных
                отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">6. Права и обязанности сторон</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Пользователь вправе:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        принимать свободное решение о предоставлении своих персональных данных, необходимых для
                        использования сайта, и давать согласие на их обработку;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        обновить или дополнить предоставленную информацию о персональных данных в случае изменения
                        данной
                        информации;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        получать у Администрации информацию, касающуюся обработки его персональных данных, если такое
                        право не ограничено федеральными законами;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        требовать от Администрации уточнения, блокирования или уничтожения персональных данных, если они
                        являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми
                        для заявленной цели обработки.
                    </li>
                </ul>
            </li>
            <li>
                Администрация обязана:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        использовать полученную информацию исключительно для целей, указанных в настоящей Политике;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного
                        письменного разрешения Пользователя, за исключением случаев, предусмотренных настоящей
                        Политикой;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с
                        момента обращения или запроса Пользователя, его законного представителя либо уполномоченного
                        органа по защите прав субъектов персональных данных на период проверки.
                    </li>
                </ul>
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">7. Ответственность сторон</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Администрация, не исполнившая свои обязательства, несет ответственность за убытки, понесенные
                Пользователем в связи с неправомерным использованием персональных данных, в соответствии с
                законодательством Российской Федерации.
            </li>
            <li>
                В случае утраты или разглашения конфиденциальной информации Администрация не несет ответственность, если
                данная конфиденциальная информация:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        стала публичным достоянием до ее утраты или разглашения;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        была получена от третьей стороны до момента ее получения Администрацией;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        была разглашена с согласия Пользователя.
                    </li>
                </ul>
            </li>
            <li>
                Пользователь несет полную ответственность за соблюдение требований законодательства Российской
                Федерации, в том числе законов о рекламе, о защите авторских и смежных прав, об охране товарных знаков и
                знаков обслуживания.
            </li>
            <li>
                Пользователь признает, что ответственность за любую информацию, к которой он может иметь доступ как к
                части сайта Автосервис Мобискар, несет лицо, предоставившее такую информацию.
            </li>
            <li>
                Администрация не несет ответственности перед Пользователем за любой убыток или ущерб, понесенный
                Пользователем в результате удаления, сбоя или невозможности сохранения какого-либо содержимого и иных
                коммуникационных данных, содержащихся на сайте Автосервис Мобискар или передаваемых через него.
            </li>
            <li>
                Администрация не несет ответственности за любые прямые или косвенные убытки, произошедшие из-за
                использования либо невозможности использования сайта или отдельных сервисов, несанкционированного
                доступа
                к коммуникациям Пользователя, заявления или поведения любого третьего лица на сайте.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">8. Разрешение споров</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                До обращения в суд с иском по спорам, возникающим из отношений между Пользователем и Администрацией,
                обязательным является предъявление претензии.
            </li>
            <li>
                Получатель претензии в течение 30 календарных дней со дня получения претензии письменно или в
                электронном виде уведомляет заявителя претензии о результатах рассмотрения претензии.
            </li>
            <li>
                При недостижении соглашения спор будет передан на рассмотрение Арбитражного суда г. Краснодар.
            </li>
            <li>
                К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией применяется
                действующее законодательство Российской Федерации.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">9. Дополнительные условия</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Администрация вправе вносить изменения в настоящую Политику конфиденциальности без согласия
                Пользователя.
            </li>
            <li>
                Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте Автосервис Мобискар,
                если иное не предусмотрено новой редакцией Политики.
            </li>
            <li>
                Все предложения или вопросы касательно настоящей Политики конфиденциальности следует сообщать по адресу:
                mobi@mobiscar-krasnodar.ru
            </li>
            <li>
                Действующая Политика конфиденциальности размещена на странице по адресу:
                https://mobiscar-krasnodar.ru/
            </li>
            <li>
                Обновлено: 28.08.2018
            </li>
            <li>
                г. Краснодар, ИП Дрынкин С. И.
            </li>
        </ol>
    </div>
</div>

<!-- personal data modal -->
<div id="personalDataModal" class="request-modal-overlay modal-wrapper bg-black">
    <button
        class="closeBtn z-10 absolute top-[20px] right-[20px] w-[40px] h-[40px] before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:w-[20px] before:h-[1px] before:bg-white before:rotate-45 before:-translate-x-1/2 before:-translate-y-1/2 after:content-[''] after:absolute after:top-1/2 after:left-1/2 after:w-[20px] after:h-[1px] after:bg-white after:-rotate-45 after:-translate-x-1/2 after:-translate-y-1/2 hover:before:bg-gray-200 hover:after:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2"
    ></button>
    <div class="modal modal-content relative max-h-[100%] overflow-auto">
        <h2 class="mb-[17px] lg:text-[25px] text-center pt-[8px]">СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</h2>

        <h3 class="mb-[8px] text-left w-full">1. Общие условия</h3>
        <ol class="text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Настоящая Политика определяет порядок обработки и защиты Индивидуальным предпринимателем Дрынкиным
                Вячеславом
                Павловичем (Далее ИП Дрынкин В. П.) информации о физических лицах (далее – Пользователь), которая может
                быть
                получена ИП Дрынкиным В. П при использовании Пользователем услуг/товаров, неисключительной лицензии
                предоставляемых
                в том числе посредством сайта, сервисов, служб, программ используемых ИП Дрынкиным В.П (далее – Сайт,
                Сервисы).
            </li>
            <li>
                Целью настоящей Политики является обеспечение надлежащей защиты персональной информации которую
                Пользователь
                предоставляет о себе самостоятельно при использовании Сайта, Сервисов или в процессе регистрации
                (создании учетной
                записи), для приобретения товаров/услуг, неисключительной лицензии от несанкционированного доступа и
                разглашения.
            </li>
            <li>
                Отношения, связанные со сбором, хранением, распространением и защитой информации предоставляемой
                Пользователем,
                регулируются настоящей Политикой, иными официальными документами ИП Дрынкина В. П и действующим
                законодательством
                Российской Федерации.
            </li>
            <li>
                Регистрируясь на Сайте и используя Сайт и Сервисы Пользователь выражает свое полное согласие с условиями
                настоящей
                Политики.
            </li>
            <li>
                В случае несогласия Пользователя с условиями настоящей Политики использование Сайта и/или каких-либо
                Сервисов
                доступных при использовании Сайта должно быть немедленно прекращено.
            </li>
            <li>
                В случае не согласия Пользователя в получении информации от ИП Дрынкина В. П Пользователь может
                отписаться от
                рассылки:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        кликнув по ссылке Отписаться внизу письма
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        путем направления уведомления на электронную почту mobi@mobiscar-krasnodar.ru или при телефонном
                        обращении в
                        контакт-центр.
                    </li>
                </ul>
            </li>
        </ol>
        <p class="text-white font-raleway mt-[10px] leading-[1.4] text-[16px] lg:text-[12px]">
            При поступлении уведомлений на электронную почту mobi@mobiscar-krasnodar.ru или при телефонном обращении в
            контакт-центр в
            специальном программном обеспечении для учета действий по соответствующему Пользователю, создается обращение
            по итогам
            полученной от Пользователя информации. Обращение обрабатывается максимум в течение 24 часов. В результате
            информация о
            Пользователе не включается в сегмент рассылок по соответствующему региону.
        </p>
        <h3 class="mb-[8px] mt-[17px] text-left w-full">
            2. Цели сбора, обработки и хранения информации предоставляемой пользователями Сайта
        </h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Обработка персональных данных Пользователя осуществляется в соответствии с законодательством Российской
                Федерации.
                ИП Дрынкин В. П. обрабатывает персональные данные Пользователя в целях:
                <ul class="ml-[20px]">
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        идентификации стороны в рамках соглашений и договоров заключаемых с ИП Дрынкиным В. П.;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        предоставления Пользователю товаров/услуг, неисключительной лицензии, доступа к Сайту, Сервисам;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        связи с Пользователем, направлении Пользователю транзакционных писем в момент получения заявки
                        регистрации на
                        Сайте или получении оплаты от Пользователя, разово, если Пользователь совершает эти действия,
                        направлении
                        Пользователю уведомлений, запросов;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        направлении Пользователю сообщений рекламного и/или информационного характера — не более 1
                        сообщения в день;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        проверки, исследования и анализа таких данных, позволяющих поддерживать и улучшать сервисы и
                        разделы Сайта, а
                        также разрабатывать новые сервисы и разделы Сайта;
                    </li>
                    <li
                        class="flex gap-2 before:shrink-0 items-start list-none before:content-[''] before:inline-block before:w-2 before:h-2 before:rounded-full before:mt-2 before:bg-white before:border before:border-gray-500"
                    >
                        проведение статистических и иных исследований на основе обезличенных данных.
                    </li>
                </ul>
            </li>
        </ol>
        <h3 class="mb-[8px] mt-[17px] text-left w-full">
            3. Условия обработки персональной информации предоставленной Пользователем и ее передачи третьим лицам
        </h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                ИП Дрынкин В. П. принимает все необходимые меры для защиты персональных данных Пользователя от
                неправомерного
                доступа, изменения, раскрытия или уничтожения.
            </li>
            <li>
                ИП Дрынкин В. П. предоставляет доступ к персональным данным Пользователя только тем работникам,
                подрядчикам и
                Аффилированным лицам которым эта информация необходима для обеспечения функционирования Сайта, Сервисов
                и оказания
                Услуг, продажи товаров, получении неисключительной лицензии Пользователем.
            </li>
            <li>
                ИП Дрынкин В. П. вправе использовать предоставленную Пользователем информацию, в том числе персональные
                данные, в
                целях обеспечения соблюдения требований действующего законодательства Российской Федерации (в том числе
                в целях
                предупреждения и/или пресечения незаконных и/или противоправных действий Пользователей). Раскрытие
                предоставленной
                Пользователем информации может быть произведено лишь в соответствии с действующим законодательством
                Российской
                Федерации по требованию суда, правоохранительных органов, а равно в иных предусмотренных
                законодательством
                Российской Федерации случаях.
            </li>
            <li>
                ИП Дрынкин В. П. не проверяет достоверность информации предоставляемой Пользователем и исходит из того,
                что
                Пользователь в рамках добросовестности предоставляет достоверную и достаточную информацию, заботится о
                своевременности внесения изменений в ранее предоставленную информацию при появлении такой необходимости,
                включая но
                не ограничиваясь изменение номера телефона
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">4. Условия пользования Сайтом, Сервисами</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Пользователь при пользовании Сайтом, подтверждает, что:
                <ul>
                    <li>
                        обладает всеми необходимыми правами, позволяющими ему осуществлять регистрацию (создание учетной
                        записи) и
                        использовать Услуги сайта;
                    </li>
                    <li>
                        указывает достоверную информацию о себе в объемах, необходимых для пользования Услугами Сайта,
                        обязательные для
                        заполнения поля для дальнейшего предоставления Услуг сайта помечены специальным образом, вся
                        иная информация
                        предоставляется пользователем по его собственному усмотрению.
                    </li>
                    <li>
                        осознает, что информация на Сайте, размещаемая Пользователем о себе, может становиться доступной
                        для третьих лиц
                        не оговоренных в настоящей Политике и может быть скопирована и распространена ими;
                    </li>
                    <li>
                        ознакомлен с настоящей Политикой, выражает свое согласие с ней и принимает на себя указанные в
                        ней права и
                        обязанности. Ознакомление с условиями настоящей Политики и проставление галочки под ссылкой на
                        данную Политику
                        является письменным согласием Пользователя на сбор, хранение, обработку и передачу третьим лицам
                        персональных
                        данных предоставляемых Пользователем.
                    </li>
                </ul>
            </li>
            <li>
                ИП Дрынкин В. П. не проверяет достоверность получаемой (собираемой) информации о Пользователях, за
                исключением
                случаев, когда такая проверка необходима в целях исполнения обязательств перед Пользователем.
            </li>
        </ol>

        <h3 class="mb-[8px] mt-[17px] text-left w-full">
            5. В рамках настоящей Политики под «персональной информацией Пользователя» понимаются:
        </h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Данные предоставленные Пользователем самостоятельно при пользовании Сайтом, Сервисами включая но, не
                ограничиваясь:
                имя, фамилия, пол, номер мобильного телефона и/или адрес электронной почты, семейное положение, дата
                рождения,
                родной город, родственные связи, домашний адрес, информация об образовании, о роде деятельности.
            </li>
            <li>
                Данные, которые автоматически передаются Сервисам в процессе их использования с помощью установленного
                на устройстве
                Пользователя программного обеспечения, в том числе IP-адрес, информация из cookie, информация о браузере
                пользователя (или иной программе, с помощью которой осуществляется доступ к Сервисам), время доступа,
                адрес
                запрашиваемой страницы.
            </li>
            <li>
                Иная информация о Пользователе, сбор и/или предоставление которой определено в Регулирующих документах
                отдельных
                Сервисов ИП Дрынкина В. П.
            </li>
        </ol>
        <h3 class="mb-[8px] mt-[17px] text-left w-full">6. Изменение и удаление персональных данных</h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им персональную
                информацию или её
                часть, а также параметры её конфиденциальности, воспользовавшись функцией редактирования персональных
                данных в
                разделе, либо в персональном разделе соответствующего Сервиса. Пользователь обязан заботится о
                своевременности
                внесения изменений в ранее предоставленную информацию, ее актуализации, в противном случае ИП Дрынкин В.
                П. не несет
                ответственности за неполучение уведомлений, товаров/услуг и т.п.
            </li>
            <li>
                Пользователь также может удалить предоставленную им в рамках определенной учетной записи персональную
                информацию.
                При этом удаление аккаунта может повлечь невозможность использования некоторых Сервисов.
            </li>
        </ol>
        <h3 class="mb-[8px] mt-[17px] text-left w-full">
            7. Изменение Политики конфиденциальности. Применимое законодательство
        </h3>
        <ol class="*:text-white font-raleway pl-[32px] text-[16px] lg:text-[12px] lg:pl-[20px]">
            <li>
                ИП Дрынкин В. П. имеет право вносить изменения в настоящую Политику конфиденциальности. При внесении
                изменений в
                актуальной редакции указывается дата последнего обновления. Новая редакция Политики вступает в силу с
                момента ее
                размещения, если иное не предусмотрено новой редакцией Политики. Действующая редакция всегда находится
                на странице
                по адресу https://mobiscar-krasnodar.ru/
            </li>
            <li>
                К настоящей Политике и отношениям между Пользователем и ИП Дрынкиным В. П. возникающим в связи с
                применением
                Политики конфиденциальности, подлежит применению право Российской Федерации.
            </li>
        </ol>
        <h3 class="mb-[8px] mt-[17px] text-left w-full">8. Обратная связь. Вопросы и предложения</h3>
        <p class="text-white font-raleway leading-[1.4] text-[16px] lg:text-[12px]">
            Все предложения или вопросы по поводу настоящей Политики следует сообщать в Службу поддержки ИП Дрынкина В.
            П. по
            электронной почте mobi@mobiscar-krasnodar.ru или по телефону +7 (861) 275-88-00 или путем направления
            корреспонденции по
            адресу: 350059, г. Краснодар, ул. Васнецова,20
        </p>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/assets/js/shared.js') }}?date={{ now() }}"></script>
<script>
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.requestBtn');
        if (!btn) return;

        // контекст (service/partner/general)
        const type = btn.getAttribute('data-ctx-type') || 'general';
        const id = btn.getAttribute('data-ctx-id') || '';
        const title = btn.getAttribute('data-ctx-title') || '';
        const url = btn.getAttribute('data-ctx-url') || window.location.href;

        const setVal = (id, val) => {
            const el = document.getElementById(id);
            if (el) el.value = val;
        };

        setVal('context_type', type);
        setVal('context_id', id);
        setVal('context_title', title);
        setVal('context_url', url);

        // маркетинг
        fillMarketingFields();
        setHpTime();
    });

    function setHpTime() {
        const el = document.getElementById('hp_time');
        if (el) el.value = String(Date.now());
    }

    function getQueryParam(name) {
        const url = new URL(window.location.href);
        return url.searchParams.get(name) || '';
    }

    function fillMarketingFields() {
        const setVal = (id, val) => {
            const el = document.getElementById(id);
            if (el) el.value = val;
        };

        setVal('referrer', document.referrer || '');

        setVal('utm_source', getQueryParam('utm_source'));
        setVal('utm_medium', getQueryParam('utm_medium'));
        setVal('utm_campaign', getQueryParam('utm_campaign'));
        setVal('utm_content', getQueryParam('utm_content'));
        setVal('utm_term', getQueryParam('utm_term'));
    }

    document.addEventListener("DOMContentLoaded", () => {
        setHpTime();
        const popup = document.getElementById("app-popup");

        const requestModal = document.getElementById("requestModal");
        const partnerModal = document.getElementById("becomePartnerModal");

        const requestForm = document.getElementById("application-form");
        const partnerForm = document.getElementById("partner-form");

        function showPopup(message, isSuccess = true) {
            if (!popup) return;

            popup.textContent = message;
            popup.style.background = isSuccess ? "#3B87D5" : "#D53939";
            popup.style.display = "block";

            requestAnimationFrame(() => {
                popup.style.opacity = "1";
            });

            setTimeout(() => {
                popup.style.opacity = "0";

                setTimeout(() => {
                    popup.style.display = "none";
                }, 300);
            }, 5000);
        }

        function closeModal(modal) {
            if (!modal) return;

            modal.classList.remove("active");
        }

        function maskPhone(input) {
            if (!input) return;

            input.addEventListener("input", () => {
                let v = input.value.replace(/\D/g, "");

                if (!v.startsWith("7")) v = "7" + v;

                let r = "+7";

                if (v.length > 1) r += " (" + v.substring(1, 4);
                if (v.length >= 4) r += ")";
                if (v.length >= 5) r += " " + v.substring(4, 7);
                if (v.length >= 7) r += "-" + v.substring(7, 9);
                if (v.length >= 9) r += "-" + v.substring(9, 11);

                input.value = r;
            });
        }

        function validPhone(phone) {
            return phone.replace(/\D/g, "").length === 11;
        }

        function initForm(form, modal) {
            if (!form) return;

            const phoneInput = form.querySelector('input[name="phone"]');
            const checkbox = form.querySelector('input[type="checkbox"]');
            const hpTime = form.querySelector('input[name="hp_time"]');

            if (hpTime) {
                hpTime.value = String(Date.now());
            }

            maskPhone(phoneInput);

            form.addEventListener("submit", async (e) => {
                e.preventDefault();

                if (checkbox && !checkbox.checked) {
                    showPopup("Вы должны согласиться с политикой!", false);
                    return;
                }

                if (!phoneInput || !validPhone(phoneInput.value)) {
                    showPopup("Введите корректный номер телефона!", false);
                    return;
                }

                const fd = new FormData(form);
                fd.set("phone", phoneInput.value.replace(/\D/g, ""));

                try {
                    const response = await fetch(form.action, {
                        method: "POST",
                        body: fd,
                        headers: {
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    });

                    const data = await response.json();

                    showPopup(data.msg, data.success);

                    if (data.success) {
                        form.reset();

                        if (hpTime) {
                            hpTime.value = String(Date.now());
                        }

                        closeModal(modal);
                    }
                } catch (error) {
                    console.error(error);
                    showPopup("Ошибка отправки. Попробуйте позже.", false);
                }
            });
        }

        initForm(requestForm, requestModal);
        initForm(partnerForm, partnerModal);
    });
</script>
@stack('scripts')
</body>
</html>
