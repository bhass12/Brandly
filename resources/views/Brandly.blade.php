<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandly</title>
    @vite('resources/css/app.css')

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

    <script>
        document.documentElement.classList.add('js');
    </script>
</head>
<body>
<!--Nav bar-->
    <div class="fixed top-0 left-0 w-full z-50 flex justify-between items-center py-5 px-10 bg-white shadow-md" data-reveal="down" style="--reveal-delay: 0ms">
        <div class="logo">
            <a href="#home">
                <img src="{{ asset('img/logo.png') }}" class="w-25 h-8 object-contain" alt="Logo">
            </a>
        </div>
        <ul class="flex gap-10 items-center text-[16px]">
            <li> <a href="#home" class="nav-link relative transition duration-300 text-gray-600 hover:text-black" data-reveal style="--reveal-delay: 80ms">
                Home</a></li>
            <li> <a href="#about" class="nav-link relative transition duration-300 text-gray-600 hover:text-black" data-reveal style="--reveal-delay: 140ms">
                About</a>
            </li>
            <li> <a href="#product" class="nav-link relative transition duration-300 text-gray-600 hover:text-black" data-reveal style="--reveal-delay: 200ms">
                Products</a></li>
            <li> <a href="#gallery" class="nav-link relative transition duration-300 text-gray-600 hover:text-black" data-reveal style="--reveal-delay: 260ms">
                Gallery</a></li>
            <li> <a href="#testimonials" class="nav-link relative transition duration-300 text-gray-600 hover:text-black" data-reveal style="--reveal-delay: 320ms">
                Testimonials</a>
            </li>
            <li> <a href="#footer" class="bg-black text-white px-5 py-3 rounded-lg text-base transition duration-300 hover:bg-gray-800 hover:scale-105" data-reveal style="--reveal-delay: 320ms">
                Contact Us</a>
            </li>
        </ul>
    </div>

<!--Home-->
    <section id="home" class="min-h-screen bg-linear-to-r from-white via-[#fffdf7] to-[#f8f0dc]">
        <div class="min-h-screen flex items-center justify-between ">
            <div class="p-7 w-1/2">
                <h3 class="text-[16px] text-[#B58757] pt-20 font-semibold mb-2 tracking-wider" data-reveal style="--reveal-delay: 100ms">BUILD YOUR BRAND</h3>
                <h1 class="text-[70px] font-bold max-w-[550px] leading-[80px] mb-4" data-reveal style="--reveal-delay: 200ms">Elevate Your Brand Identity</h1>
                <p class="text-[20px] max-w-[450px] mb-16" data-reveal style="--reveal-delay: 320ms"> We help you create memorable experiences through innovative products and exceptional design. </p>
                <div class="btn flex gap-6" data-reveal style="--reveal-delay: 440ms">
                    <a href="#join" class="bg-black text-white px-5 py-3 rounded-lg text-base transition duration-300 hover:bg-[#000000d0] hover:border-1 border-black hover:scale-105">Get Started</a>
                    <a href="#product" class="bg-white text-black border-1 border-black px-5 py-3 rounded-lg transition duration-300 hover:bg-[#000000d0] hover:text-white hover:scale-105">View Products</a>
                </div>
            </div>
            <div class="flex justify-end self-end w-1/2">
                <img src="{{ asset('img/hero.png') }}" data-reveal="zoom" style="--reveal-delay: 250ms">
            </div>
        </div>
    </section>

<!-- 50 -->
    <section class="max-h-[50vh] bg-[#F8F6F0]">
        <div class="about-cnt  pt-10 flex flex-col items-center" data-reveal>
            <h3 class="text-[#B58757] font-semibold text-[20px] tracking-wider">WHY CHOOSE US</h3>
            <h1 class="text-[32px] font-bold mb-10">Quality You Can Trust</h1>
        </div>
        <div class="card  flex p-5 pb-40 gap-8">
            <div class="crd1 flex gap-4" data-reveal style="--reveal-delay: 0ms">
                <div class="icon bg-[#F2E7DA] rounded-lg text-6xl max-h-fit " >
                    <iconify-icon icon="boxicons:medal-alt" class="w-20 h-20 p-4 flex items-center justify-center"></iconify-icon>
                </div>
                <div class="text">
                    <h2 class="text-[18px] font-bold">Quality</h2>
                    <p class="text-[14px] text-[#6D6F74] font-medium">We use the finest materials to ensure premium Quality</p>
                </div>
            </div>
            <div class="crd2  flex gap-4" data-reveal style="--reveal-delay: 120ms">
                <div class="icon  bg-[#F2E7DA] rounded-lg text-6xl max-h-fit">
                    <iconify-icon icon="hugeicons:ai-idea" class="w-20 h-20 p-4 flex items-center justify-center"></iconify-icon>
                </div>
                <div class="text">
                    <h2 class="text-[18px] font-bold">Innovation</h2>
                    <p class="text-[14px] text-[#6D6F74] font-medium">Constantly innovating to bring you the best solutions.</p>
                </div>
            </div>
            <div class="crd3  flex gap-4" data-reveal style="--reveal-delay: 240ms">
                <div class="icon bg-[#F2E7DA] rounded-lg text-6xl max-h-fit">
                    <iconify-icon icon="carbon:security" class="w-20 h-20 p-4 flex items-center justify-center"></iconify-icon>    
                </div>
                <div class="text">
                    <h2 class="text-[18px] font-bold">Trusted</h2>
                    <p class="text-[14px] text-[#6D6F74] font-medium">Trusted by thousands of customer worldwide.</p>
                </div>
            </div>
            <div class="crd4  flex gap-4" data-reveal style="--reveal-delay: 360ms">
                <div class="icon bg-[#F2E7DA] rounded-lg text-6xl max-h-fit">
                    <iconify-icon icon="ant-design:customer-service-filled" class="w-20 h-20 p-4 flex items-center justify-center"></iconify-icon>
                </div>
                <div class="text">
                    <h2 class="text-[18px] font-bold">Premium Service</h2>
                    <p class="text-[14px] text-[#6D6F74] font-medium">We are here to provide the best service for you.</p>
                </div>
            </div>
        </div>
    </section>

<!--About-->

    <section id="about" class="min-h-screen px-5 py-10 bg-[#FAF9F7]">
        <div class="about-cnt pt-10 flex flex-col items-center" data-reveal>
            <h3 class="text-[#B58757] font-semibold text-[20px] tracking-wider">ABOUT US</h3>
            <h1 class="text-[32px] font-bold mb-8">Rooted in Nature</h1>
        </div>
        <div class="content p-7 flex items-center gap-30 mb-10">
            <div class="text">
                <p class="pb-10 text-[20px] font-medium text-[#6D6F74] max-w-[750px] tracking-wide leading-[32px]" data-reveal="left" style="--reveal-delay: 0ms">We craft high-quality, natural products designed to elevate your everyday moments. From skincare to home essentials, we believe in ingredients that work in harmony with your skin and the planet.</p>
                <p class="text-[20px] font-medium text-[#6D6F74] max-w-[800px] tracking-wide leading-[32px]" data-reveal="left" style="--reveal-delay: 180ms">Our journey began with a simple idea: to create formulas that feel like a ritual, not a routine. We source responsibly, formulate with care, and test with intention — so you can trust what you put on your skin and in your home.</p>
            </div>
            <div class="img " data-reveal="right" style="--reveal-delay: 150ms">
                <img src="{{ asset('img/about.png') }}" class="w-120 h-100 rounded-xl" alt="">
            </div>
        </div>
    </section>
    
    <section class="min-h-screen px-10 py-15 bg-white">
        <div class="heading2" data-reveal>
            <h3 class="text-[#B58757] font-semibold text-[16px] tracking-wider">ETHICAL BOTANICAL ROOTS</h3>
            <h1 class="text-[28px] font-bold mb-8">Phytonutrient Ingredients Spotlight</h1>
        </div>
        <div class="flexcrd flex gap-20 items-center justify-center">
            <div class="ing-card card1 border border-[#6d6f749c] bg-[#FAF9F7] rounded-lg " data-reveal style="--reveal-delay: 0ms">
                <div class="ing-card__media">
                    <img src="{{ asset('img/prancis.png') }}" class="rounded-t-lg h-50 w-full object-cover" alt="">
                </div>
                <div class="cnt p-4">
                    <div class="wrap flex items-center gap-2 mb-3">
                        <iconify-icon icon="charm:circle-tick" class="text-[#B58757] text-[20px] flex items-center"></iconify-icon>
                        <span class="font-semibold text-[12px]">Rich in Omegas 3, 6 & 9</span>
                    </div>
                    <h1 class="text-[24px] font-semibold mb-2">French Rosehip Seed</h1>
                    <p class="text-[15px] text-[#6D6F74] max-w-[320px] tracking-wide mb-8">Bursting with all-trans retinoic acid and provitamin A. Promotes natural cellular turnover, softens post-inflammatory marks, and boosts elasticity.</p>
                    <span class="text-[12px] text-[#8A502A] font-semibold">PROVENCE, FRANCE</span>
                </div>
            </div>

            <div class="ing-card card2 border border-[#6d6f749c] bg-[#FAF9F7] rounded-lg " data-reveal style="--reveal-delay: 140ms">
                <div class="ing-card__media">
                    <img src="{{ asset('img/maroko.png') }}" class="rounded-t-lg h-50 w-full object-cover" alt="">
                </div>
                 <div class="cnt p-4">
                    <div class="wrap flex items-center gap-2 mb-3">
                        <iconify-icon icon="charm:circle-tick" class="text-[#B58757] text-[20px] flex items-center"></iconify-icon>
                        <span class="font-semibold text-[12px]">Potent Chamazulene Bioactive</span>
                    </div>
                    <h1 class="text-[24px] font-semibold mb-2">Wild Blue Tansy</h1>
                    <p class="text-[15px] text-[#6D6F74] max-w-[320px] tracking-wide mb-8">Distilled with chamazulene, an extraordinary indigo bioactive compound that rapidly calms inflamed redness, blemishes, and reactive barrier flare-ups.</p>
                    <span class="text-[12px] text-[#8A502A] font-semibold">MOROCCO VALLEYS</span>
                </div>
            </div>

            <div class="ing-card card3 border border-[#6d6f749c] bg-[#FAF9F7] rounded-lg " data-reveal style="--reveal-delay: 280ms">
                <div class="ing-card__media">
                    <img src="{{ asset('img/austra.png') }}" class="rounded-t-lg h-50 w-full object-cover" alt="">
                </div>
                 <div class="cnt p-4">
                    <div class="wrap flex items-center gap-2 mb-3">
                        <iconify-icon icon="charm:circle-tick" class="text-[#B58757] text-[20px] flex items-center"></iconify-icon>
                        <span class="font-semibold text-[12px]">Intense Osmotic Hydration</span>
                    </div>
                    <h1 class="text-[24px] font-semibold mb-2">Tasmanian Sea Kelp</h1>
                    <p class="text-[15px] text-[#6D6F74] max-w-[320px] tracking-wide mb-8">Harvested sustainably from cool pristine waters. Packed with 60+ trace ocean minerals that bind water to skin tissue and defend against oxidative free radicals.</p>
                    <span class="text-[12px] text-[#8A502A] font-semibold">TASMAN SEA, AUSTRALIA</span>
                </div>
            </div>
        </div>
    </section>

<!--Product-->
    <section id="product" class="min-h-screen px-10 py-10 bg-[#FAF9F7]">
        <div class="about-cnt  pt-10 flex flex-col items-center" data-reveal>
            <h3 class="text-[#B58757] font-semibold text-[20px] tracking-wider">PRODUCTS</h3>
            <h1 class="text-[32px] font-bold mb-8">Products We’re  Proud Of</h1>
        </div>

        <div class="flexcrd flex justify-between px-8">
            <div class="card1" data-reveal="left" style="--reveal-delay: 0ms">
                <img src="{{ asset('img/oil.png') }}" class="rounded-2xl h-80 w-150 mb-6" alt="">
                <span class="text-[12px] font-semibold text-[#8A502A]">FACE CARE • 30ML </span>
                <h1 class="text-[36px] font-bold">Botanical Elixir Face Oil</h1>
                <p class="text-[15px] text-[#6D6F74] max-w-[550px] mb-6">Organic French Rosehip seed extract and pure CoQ10 specially formulated to restore elasticity, stimulate natural cellular regeneration, and intensively lock in lipid moisture.</p>
                <hr class="py-1 border-[#6d6f7435] max-w-160">
                <h3 class="text-[20px] font-semibold ">$ 48.00</h3>
            </div>
            <div class="card2" data-reveal="right" style="--reveal-delay: 180ms">
                <img src="{{ asset('img/mois.png') }}" class="rounded-2xl h-80 w-100 mb-4" alt="">
                <span class="text-[12px] font-semibold text-[#8A502A]">MOISTURIZER • 50ML </span>
                <h1 class="text-[24px] font-bold mb-1">Deep Moisture Barrier Cream</h1>
                <p class="text-[13px] text-[#6D6F74] max-w-[350px] mb-4">Pure Ceramide NP blended with cold-pressed olive squalane to strengthen the deepest skin barrier walls without pore-clogging residue.</p>
                <hr class="py-1 border-[#6d6f7435] max-w-160">
                <h3 class="text-[20px] font-semibold ">$ 52.00</h3>
            </div>
        </div>
        <div class="3card flex justify-between py-14">
            <div class="card" data-reveal style="--reveal-delay: 0ms">
                <img src="{{ asset('img/serum.png') }}" class="h-90 w-85 mb-4" alt="">
                <span class="text-[12px] font-semibold text-[#8A502A]">SERUM • 30ML</span>
                <h1 class="text-[24px] font-bold mb-1">Bakuchiol Renewal Serum</h1>
                <p class="text-[13px] text-[#6D6F74] max-w-[250px] mb-4">Clinically tested 2% botanical retinol alternative that smooths skin texture and fine lines without irritation.</p>
                <hr class="py-1 border-[#EFEEEB] max-w-80">
                <h3 class="text-[20px] font-semibold ">$ 44.00</h3>
            </div>
            <div class="card" data-reveal style="--reveal-delay: 130ms">
                <img src="{{ asset('img/candle.png') }}" class="h-90 w-85 mb-4" alt="">
                <span class="text-[12px] font-semibold text-[#8A502A]">AROMATHERAPY • 220G</span>
                <h1 class="text-[24px] font-bold mb-1">Sandalwood & Neroli Candle</h1>
                <p class="text-[13px] text-[#6D6F74] max-w-[250px] mb-4">Renewable soy and coconut candle hand-poured with Mysore essential oil and bitter neroli orange.</p>
                <hr class="py-1 border-[#EFEEEB] max-w-80">
                <h3 class="text-[20px] font-semibold ">$ 28.00</h3>
            </div>
            <div class="card" data-reveal style="--reveal-delay: 260ms">
                <img src="{{ asset('img/balm.png') }}" class="h-90 w-85 mb-4" alt="">
                <span class="text-[12px] font-semibold text-[#8A502A]">BALM CARE • 75ML</span>
                <h1 class="text-[24px] font-bold mb-1">Hand & Cuticle Balm</h1>
                <p class="text-[13px] text-[#6D6F74] max-w-[250px] mb-4">Unrefined natural shea butter blended with triple-molecular hyaluronic acid to nourish tired hands.</p>
                <hr class="py-1 border-[#EFEEEB] max-w-80">
                <h3 class="text-[20px] font-semibold ">$ 24.00</h3>
            </div>
        </div>
        <div id="join" class="cta scroll-mt-[40vh] flex items-center justify-between px-14 bg-[#EFEEEB] rounded-2xl p-8" data-reveal="zoom">
            <div class="text">
                <h1 class="text-[22px] font-semibold">Interested in the Brandly Skincare Collection?</h1>
                <p class="text-[14px] text-[#6D6F74] max-w-200">Visit our official boutiques and pharmacies for direct orders, personal consultations with our formulators, or browse product availability at nearby partner stores.</p>
            </div>
            <a href="" class="flex items-center bg-black rounded-2xl px-3 py-6 gap-2">
                <iconify-icon icon="bx:shopping-bag" class="text-[20px] text-white"></iconify-icon>
                <span class="text-[14px] text-white">Shop at the official store.</span>
            </a>
        </div>
    </section>

<!--Galery-->
    <section id="gallery" class="min-h-screen scroll-mt-[70px]">
        <div class="toptxt flex items-center justify-between p-10" data-reveal>
            <div class="kiri">
                <h3 class="text-[#B58757] font-semibold text-[20px] tracking-wider">OUR GALLERY</h3>
                <h1 class="text-[32px] font-semibold mb-8">Rooted in Nature, Made for Care </h1>
            </div>
            <div class="kanan flex items-center gap-1 ">
                <iconify-icon icon="uim:instagram" class="text-[32px] text-[#8A502A]"></iconify-icon>
                <span class="text-[#8A502A]">@brandlybotanicals</span>
            </div>
        </div>

    <div class="mx-auto m-w-screen overflow-hidden mask-[linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]">
    <div class="flex w-max animate-scroll hover:[animation-play-state:paused]">

    
        <div class="flex gap-5 pr-5">
            <img src="{{ asset('img/img1.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img2.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img3.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img4.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img5.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img6.png') }}" class="h-80 shrink-0" alt="">
        </div>

        <!-- Duplikat untuk infinite scroll -->
        <div class="flex gap-5 pr-5">
            <img src="{{ asset('img/img1.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img2.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img3.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img4.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img5.png') }}" class="h-80 shrink-0" alt="">
            <img src="{{ asset('img/img6.png') }}" class="h-80 shrink-0" alt="">
        </div>
    </div>
    </div>
    </section>
    <style>
        @keyframes scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }

        .animate-scroll {
            animation: scroll 80s linear infinite;
        }
    </style>

<!--Tesnimoni-->
    <section id="testimonials" class="bg-[#FAF9F7] min-h-screen pt-16">
        <div class="toptxt flex flex-col items-center pt-8 mb-4" data-reveal>
            <h3 class="text-[#B58757] font-semibold text-[20px] tracking-wider">TESTIMONIALS</h3>
            <h1 class="text-[32px] font-semibold mb-8">What Our Customers Say</h1>
        </div>
        <!-- Carousel: 3 slide, masing-masing 2 card testimoni, ganti via fade -->
        <div class="px-8" data-tsm role="region" aria-roledescription="carousel" aria-label="Customer testimonials" data-reveal>
            <div class="tsm">
            <button type="button" class="tsm__nav kiri bg-white rounded-full p-4 shadow-md text-[#8A502A]" data-tsm-prev
                    aria-controls="tsm-track" aria-label="Previous testimonials">
                <iconify-icon icon="akar-icons:arrow-left" class="text-[32px]" aria-hidden="true"></iconify-icon>
            </button>

            <div class="tsm__viewport" id="tsm-track" data-tsm-viewport aria-live="polite" aria-atomic="true">

                <!-- Slide 1 -->
                <article class="tsm__slide is-active" data-tsm-slide role="group" aria-roledescription="slide" aria-label="1 of 3">
                    <div class="tsm__pair">
                        <div class="card max-w-110 w-full bg-white p-8 rounded-xl relative shadow-lg">
                            <div class="star flex items-center justify-center left-1/2 -translate-x-1/2 gap-3 absolute top-4">
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                            </div>
                            <p class="text-[16px] font-medium pt-8 mb-8">“Amazing quality and beautiful design. This brand is truly impressive!”</p>
                            <div class="user flex gap-2">
                                <img src="{{ asset('img/user1.png') }}" class="h-14 " alt="">
                                <div class="txt flex flex-col justify-center">
                                    <span class="font-bold">Sarah Williams</span>
                                    <span class="text-[14px] text-[#6D6F74]">Verified Buyer</span>
                                </div>
                            </div>
                        </div>

                        <div class="card max-w-110 w-full bg-white p-8 rounded-xl relative shadow-lg">
                            <div class="star flex items-center justify-center left-1/2 -translate-x-1/2 gap-3 absolute top-4">
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                            </div>
                            <p class="text-[16px] font-medium pt-8 mb-8">“Excellent service and fast delivery. Highly recommended!”</p>
                            <div class="user flex gap-2">
                                <img src="{{ asset('img/user2.png') }}" class="h-14 " alt="">
                                <div class="txt flex flex-col justify-center">
                                    <span class="font-bold">James Anderson</span>
                                    <span class="text-[14px] text-[#6D6F74]">Verified Buyer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Slide 2 -->
                <article class="tsm__slide" data-tsm-slide role="group" aria-roledescription="slide" aria-label="2 of 3" aria-hidden="true" inert>
                    <div class="tsm__pair">
                        <div class="card max-w-110 w-full bg-white p-8 rounded-xl relative shadow-lg">
                            <div class="star flex items-center justify-center left-1/2 -translate-x-1/2 gap-3 absolute top-4">
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                            </div>
                            <p class="text-[16px] font-medium pt-8 mb-8">“The facial oil is unbelievably gentle. Hydrated without any heaviness, and the rosehip scent is subtle and natural.”</p>
                            <div class="user flex gap-2">
                                <img src="{{ asset('img/user1.png') }}" class="h-14 " alt="">
                                <div class="txt flex flex-col justify-center">
                                    <span class="font-bold">Emily Rodriguez</span>
                                    <span class="text-[14px] text-[#6D6F74]">Verified Buyer</span>
                                </div>
                            </div>
                        </div>

                        <div class="card max-w-110 w-full bg-white p-8 rounded-xl relative shadow-lg">
                            <div class="star flex items-center justify-center left-1/2 -translate-x-1/2 gap-3 absolute top-4">
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                            </div>
                            <p class="text-[16px] font-medium pt-8 mb-8">“Three weeks with the barrier cream and the flakiness around my nose is completely gone. Worth every penny.”</p>
                            <div class="user flex gap-2">
                                <img src="{{ asset('img/user2.png') }}" class="h-14 " alt="">
                                <div class="txt flex flex-col justify-center">
                                    <span class="font-bold">Michael Chen</span>
                                    <span class="text-[14px] text-[#6D6F74]">Verified Buyer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Slide 3 -->
                <article class="tsm__slide" data-tsm-slide role="group" aria-roledescription="slide" aria-label="3 of 3" aria-hidden="true" inert>
                    <div class="tsm__pair">
                        <div class="card max-w-110 w-full bg-white p-8 rounded-xl relative shadow-lg">
                            <div class="star flex items-center justify-center left-1/2 -translate-x-1/2 gap-3 absolute top-4">
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                            </div>
                            <p class="text-[16px] font-medium pt-8 mb-8">“The candle and the elixir together make the perfect evening routine. It feels like a small luxury ritual.”</p>
                            <div class="user flex gap-2">
                                <img src="{{ asset('img/user1.png') }}" class="h-14 " alt="">
                                <div class="txt flex flex-col justify-center">
                                    <span class="font-bold">Aisha Rahma</span>
                                    <span class="text-[14px] text-[#6D6F74]">Verified Buyer</span>
                                </div>
                            </div>
                        </div>

                        <div class="card max-w-110 w-full bg-white p-8 rounded-xl relative shadow-lg">
                            <div class="star flex items-center justify-center left-1/2 -translate-x-1/2 gap-3 absolute top-4">
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                                <iconify-icon icon="ant-design:star-filled" class="text-[22px] text-yellow-500" aria-hidden="true"></iconify-icon>
                            </div>
                            <p class="text-[16px] font-medium pt-8 mb-8">“Packaging is beautiful, shipping was fast, and the order even included a handwritten note. Ten out of ten.”</p>
                            <div class="user flex gap-2">
                                <img src="{{ asset('img/user2.png') }}" class="h-14 " alt="">
                                <div class="txt flex flex-col justify-center">
                                    <span class="font-bold">Daniel Foster</span>
                                    <span class="text-[14px] text-[#6D6F74]">Verified Buyer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <button type="button" class="tsm__nav kanan bg-white rounded-full p-4 shadow-md text-[#8A502A]" data-tsm-next
                    aria-controls="tsm-track" aria-label="Next testimonials">
                <iconify-icon icon="akar-icons:arrow-right" class="text-[32px]" aria-hidden="true"></iconify-icon>
            </button>
            </div>

            <div class="tsm__foot mt-8 mb-12">
                <div class="tsm__dots flex items-center justify-center gap-2" data-tsm-dots role="tablist" aria-label="Pilih slide testimoni"></div>
                <p class="text-center text-[13px] font-medium text-[#6D6F74] tracking-[0.4em] mt-4" data-tsm-counter>01 / 03</p>
            </div>
        </div>

        <div class="cta p-20" data-reveal>
            <div class="wrap h-38 bg-black rounded-xl flex gap-30 justify-center items-center p-10" data-reveal="zoom" style="--reveal-delay: 120ms">
            <img src="{{ asset('img/image.png') }}" class="h-20" alt="">
            <div class="txt">
                <h1 class="text-white text-[28px] font-bold mb-4">Ready to Experience  Our Brand?</h1>
                <p class="text-white text-[16px]">Join thousands of satisfied customers and elevate your lifestyle.</p>
            </div>
            <a href="" class="bg-[#EDDCC7] p-4 rounded-lg w-40 flex items-center justify-center">Contact Us</a>
            </div>
        </div>
    </section>

<!--Footer-->
    <footer class="flex items-start justify-around min-h-[50vh] p-7 pt-14" id="footer">
        <div class="kanan" data-reveal style="--reveal-delay: 0ms">
            <img src="{{ asset('img/footer.png') }}" class="h-8 mb-10" alt="">
            <p class="text-[16px] font-semibold text-[#6D6F74] max-w-80">We create high-quality products that elevate your everyday life with style and purpose.</p>
        </div>
        <div class="link flex flex-col" data-reveal style="--reveal-delay: 120ms">
            <h1 class="font-bold text-[18px] mb-3">Quick Links</h1>
            <a href="#home" class="text-[16px] font-semibold text-[#6D6F74] mb-2">Home</a>
            <a href="#about" class="text-[16px] font-semibold text-[#6D6F74] mb-2">About</a>
            <a href="#product" class="text-[16px] font-semibold text-[#6D6F74] mb-2">Product</a>
            <a href="#gallery" class="text-[16px] font-semibold text-[#6D6F74] mb-2">Gallery</a>
            <a href="#testimonials" class="text-[16px] font-semibold text-[#6D6F74]">Testimonials</a>
        </div>
        <div class="sosmed flex flex-col gap-4" data-reveal style="--reveal-delay: 240ms">
            <h1 class="font-bold text-[18px] mb-3">Follow Us</h1>
            <div class="wrap flex items-center gap-2">
                <iconify-icon icon="uim:instagram" class="text-[20px] bg-[#D9D9D9] p-2 rounded-full"></iconify-icon>
                <span class="text-[16px] font-medium">brandlybotanicals</span>
            </div>
            <div class="wrap flex items-center gap-2">
                <iconify-icon icon="uim:instagram" class="text-[20px] bg-[#D9D9D9] p-2 rounded-full"></iconify-icon>
                <span class="text-[16px] font-medium">brandlycare</span>
            </div>
            <div class="wrap flex items-center gap-2">
                <iconify-icon icon="uim:instagram" class="text-[20px] bg-[#D9D9D9] p-2 rounded-full"></iconify-icon>
                <span class="text-[16px] font-medium">BrandlyForYou</span>
            </div>
        </div>
        <div class="contact" data-reveal style="--reveal-delay: 360ms">
            <h1 class="font-bold text-[18px] mb-3">Contact Us</h1>
            <p class="max-w-70 text-[#6B716D] text-[14px] leading-[1.6] font-medium mb-6">Receive ritual guides and an immediate 15% voucher for your first collection order.</p>
            <form class="flex items-center w-[320px] h-[55px] bg-[#F8F7F4] border-[3px] border-white rounded-full p-[3px] shadow-[0_0_0_1px_#D5D5D5]">
                <input type="mail" placeholder="Enter your mail..." class="flex-1 min-w-0 h-full bg-transparent outline-none border-none px-5 text-[14px] text-[#333] placeholder:text-[#777]">
                <button type="button" class="h-full px-6 bg-[#001B10] text-white text-[14px] font-medium rounded-full whitespace-nowrap hover:bg-[#06291B] transition-colors duration-300">Submit</button>
            </form>
        </div>
    </footer>

    <script>
        (function () {
            var items = document.querySelectorAll('[data-reveal]');

            if (!('IntersectionObserver' in window)) {
                items.forEach(function (el) { el.classList.add('reveal-in'); });
                return;
            }

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -60px 0px'
            });

            items.forEach(function (el) { observer.observe(el); });
        })();

        /* =========================================================
           Testimonial Carousel — fade out / fade in + translateY
           ========================================================= */
        (function () {
            var LOCK_MS = 460;
            var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

            document.querySelectorAll('[data-tsm]').forEach(function (root) {
                var viewport = root.querySelector('[data-tsm-viewport]');
                var slides = Array.prototype.slice.call(root.querySelectorAll('[data-tsm-slide]'));
                var prevBtn = root.querySelector('[data-tsm-prev]');
                var nextBtn = root.querySelector('[data-tsm-next]');
                var counter = root.querySelector('[data-tsm-counter]');
                var dotsWrap = root.querySelector('[data-tsm-dots]');

                if (!viewport || slides.length === 0 || !prevBtn || !nextBtn) return;

                var index = 0;
                var locked = false;

                function pad(n) { return n < 10 ? '0' + n : String(n); }

                // Bangun titik indikator
                if (dotsWrap && !dotsWrap.children.length) {
                    slides.forEach(function (_, i) {
                        var dot = document.createElement('button');
                        dot.type = 'button';
                        dot.className = 'tsm__dot';
                        dot.setAttribute('role', 'tab');
                        dot.setAttribute('aria-label', 'Go to testimonials ' + (i + 1));
                        dot.dataset.tsmDot = String(i);
                        dotsWrap.appendChild(dot);
                    });
                    dotsWrap.addEventListener('click', function (event) {
                        var dot = event.target.closest('[data-tsm-dot]');
                        if (!dot) return;
                        goTo(Number(dot.dataset.tsmDot));
                    });
                }

                var dots = dotsWrap ? Array.prototype.slice.call(dotsWrap.children) : [];

                function render() {
                    slides.forEach(function (slide, i) {
                        var active = i === index;
                        slide.classList.toggle('is-active', active);
                        slide.setAttribute('aria-hidden', active ? 'false' : 'true');
                        if (active) {
                            slide.removeAttribute('inert');
                        } else {
                            slide.setAttribute('inert', '');
                        }
                    });

                    dots.forEach(function (dot, i) {
                        dot.setAttribute('aria-selected', i === index ? 'true' : 'false');
                    });

                    var total = pad(slides.length);
                    var prevIndex = index === 0 ? slides.length : index;
                    var nextIndex = index === slides.length - 1 ? 1 : index + 2;

                    viewport.setAttribute('aria-label', 'Testimonials ' + (index + 1) + ' of ' + total);
                    prevBtn.setAttribute('aria-label', 'Previous testimonials, goes to ' + pad(prevIndex) + ' of ' + total);
                    nextBtn.setAttribute('aria-label', 'Next testimonials, goes to ' + pad(nextIndex) + ' of ' + total);

                    if (counter) counter.textContent = pad(index + 1) + ' / ' + total;
                }

                function go(step) {
                    if (locked || slides.length < 2 || step === 0) return;
                    locked = true;

                    // Arah menentukan offset translateY slide yang akan masuk
                    root.style.setProperty('--tsm-from', reducedMotion.matches ? '0px' : (step > 0 ? '10px' : '-10px'));

                    // Navigasi berulang: modulo membuat last -> first dan first -> last
                    index = (index + step + slides.length) % slides.length;
                    render();

                    window.setTimeout(function () {
                        locked = false;
                    }, reducedMotion.matches ? 40 : LOCK_MS);
                }

                function goTo(target) {
                    var step = target - index;
                    var half = slides.length / 2;
                    // Ambil arah terpendek
                    if (step > half) step -= slides.length;
                    if (step < -half) step += slides.length;
                    go(step);
                }

                prevBtn.addEventListener('click', function () { go(-1); });
                nextBtn.addEventListener('click', function () { go(1); });

                // Navigasi keyboard: Arrow kiri/kanan saat fokus di dalam carousel
                root.addEventListener('keydown', function (event) {
                    if (event.altKey || event.ctrlKey || event.metaKey) return;

                    var target = event.target;
                    var tag = target.tagName;
                    if (tag === 'INPUT' || tag === 'TEXTAREA' || target.isContentEditable) return;

                    switch (event.key) {
                        case 'ArrowLeft':
                            event.preventDefault();
                            go(-1);
                            break;
                        case 'ArrowRight':
                            event.preventDefault();
                            go(1);
                            break;
                        case 'Home':
                            event.preventDefault();
                            goTo(0);
                            break;
                        case 'End':
                            event.preventDefault();
                            goTo(slides.length - 1);
                            break;
                    }
                });

                render();
            });
        })();



        document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav-link");

    const sections = document.querySelectorAll(
        "#home, #about, #product, #gallery, #testimonials"
    );

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const activeId = entry.target.id;

                    navLinks.forEach((link) => {
                        const isActive =
                            link.getAttribute("href") === `#${activeId}`;

                        link.classList.toggle("active", isActive);

                        if (isActive) {
                            link.setAttribute("aria-current", "location");
                        } else {
                            link.removeAttribute("aria-current");
                        }
                    });
                }
            });
        },
        {
            rootMargin: "-30% 0px -60% 0px",
            threshold: 0
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
});
    </script>

</body>
</html>