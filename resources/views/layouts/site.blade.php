<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $page->title ?? '404' }}</title>
    <meta name="description" content="{{ $page->description ?? '404' }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/output.css') }}"/>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/assets/js/shared.js') }}"></script>
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
        const form = document.getElementById("application-form");
        const popup = document.getElementById("app-popup");
        const modal = document.getElementById("requestModal");
        const checkbox = document.getElementById("privacy-checkbox");
        const phoneInput = document.getElementById("phone-input");

        if (!form) {
            console.error("❌ Форма не найдена (#application-form)");
            return;
        }

        // ------------------------ ПОПАП ------------------------
        function showPopup(message, isSuccess = true) {
            if (!popup) return;

            popup.textContent = message;

            popup.style.background = isSuccess ? "#3B87D5" : "#D53939";
            popup.style.display = "block";

            // Плавное появление
            requestAnimationFrame(() => {
                popup.style.opacity = "1";
            });

            // Скрытие через 2.5 сек
            setTimeout(() => {
                popup.style.opacity = "0";

                setTimeout(() => {
                    popup.style.display = "none";
                }, 300);

            }, 5000);
        }

        // ------------------------ ЗАКРЫТИЕ МОДАЛКИ ------------------------
        function closeModal() {
            if (!modal) return;

            modal.classList.add("opacity-0");

            setTimeout(() => {
                modal.classList.add("hidden");
            }, 200);
        }

        // ------------------------ МАСКА ТЕЛЕФОНА ------------------------
        phoneInput.addEventListener("input", () => {
            let v = phoneInput.value.replace(/\D/g, "");

            if (!v.startsWith("7")) v = "7" + v;

            let r = "+7";

            if (v.length > 1) r += " (" + v.substring(1, 4);
            if (v.length >= 4) r += ")";
            if (v.length >= 5) r += " " + v.substring(4, 7);
            if (v.length >= 7) r += "-" + v.substring(7, 9);
            if (v.length >= 9) r += "-" + v.substring(9, 11);

            phoneInput.value = r;
        });

        function validPhone(phone) {
            return phone.replace(/\D/g, "").length === 11;
        }

        // ------------------------ SUBMIT ------------------------
        form.addEventListener("submit", async (e) => {
            e.preventDefault();

            if (!checkbox.checked) {
                showPopup("Вы должны согласиться с политикой!", false);
                return;
            }

            if (!validPhone(phoneInput.value)) {
                showPopup("Введите корректный номер телефона!", false);
                return;
            }

            const fd = new FormData(form);
            fd.set("phone", phoneInput.value.replace(/\D/g, ""));

            try {
                const response = await fetch(form.action, {
                    method: "POST",
                    body: fd,
                    headers: {"X-Requested-With": "XMLHttpRequest"}
                });

                const data = await response.json();

                showPopup(data.msg, data.success);

                if (data.success) {
                    form.reset();
                    closeModal();
                }

            } catch (error) {
                console.error(error);
                showPopup("Ошибка отправки. Попробуйте позже.", false);
            }
        });
    });
</script>
@stack('scripts')
</body>
</html>
