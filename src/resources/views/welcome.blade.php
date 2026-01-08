<x-app-layout>
    <main class="overflow-x-hidden">
        <!-- Hero Section -->
        <section class="relative">
            <div class="xl:block hidden absolute top-28 right-[34.3%]">
                <img src="{{ asset('images/hero_dot1.svg') }}" alt="">
            </div>
            <div class="lg:hidden block absolute right-3.5 top-16">
                <img src="{{ asset('images/hero_dot1_sp.svg') }}" alt="">
            </div>
            <div class="flex flex-col lg:pl-31 pl-6 md:pt-37.2 pt-103">
                <h1 class="md:text-2xl text-xs font-bold text-primary_main">大学生向けプログラミング学習コミュニティ「POSSE」</h1>
                <p class="font-black md:pt-6 pt-2 lg:leading-1.3 leading-1.3 lg:text-7xl md:text-56 text-32 md:-tracking-0.18 -tracking-0.075 text-black">プログラミング学習を<br class="block sm:hidden md:block">コミュニティの力で。</p>
            </div>
            <div class="sm:block hidden absolute top-38.3% left-10.2">
                <img src="{{ asset('images/hero_dot2.svg') }}" alt="">
            </div>
            <div class="sm:hidden block absolute top-61.5% left-0">
                <img src="{{ asset('images/hero_dot2_sp.svg') }}" alt="">
            </div>
            <div class="md:pt-13 pt-8 flex items-end md:justify-between justify-end">
                <div class="sm:flex hidden items-start pl-8.52">
                    <div>
                        <img src="{{ asset('images/scroll_bar.svg') }}" alt="" class="lg:block hidden">
                    </div>
                    <div class="xl:block hidden rotate-90 pt-10.48 font-Urbanist leading-1.4 text-sm tracking-tight font-bold text-black_light">SCROLL</div>
                </div>
                <img src="{{ asset('images/hero.png') }}" alt="" class="md:block hidden w-full object-contain">
                <img src="{{ asset('images/hero_sp.png') }}" alt="" class="md:hidden block w-91% object-contain">
            </div>
            <div class="md:block hidden absolute right-4.56 z-10 top-96.5%">
                <img src="{{ asset('images/hero_dot3.svg') }}" alt="">
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Image Gallery Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="overflow-hidden">
                    <div id="sliderContent" class="flex gap-4 md:gap-6 pb-4 animate-slide">
                        <!-- First set of images -->
                        <img src="http://localhost/images/slide-01.png" 
                             alt="POSSEの活動風景1" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-02.png" 
                             alt="POSSEの活動風景2" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-03.png" 
                             alt="POSSEの活動風景3" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-04.png" 
                             alt="POSSEの活動風景4" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-05.png" 
                             alt="POSSEの活動風景5" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        
                        <!-- Duplicate set for infinite loop -->
                        <img src="http://localhost/images/slide-01.png" 
                             alt="POSSEの活動風景1" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-02.png" 
                             alt="POSSEの活動風景2" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-03.png" 
                             alt="POSSEの活動風景3" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-04.png" 
                             alt="POSSEの活動風景4" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="http://localhost/images/slide-05.png" 
                             alt="POSSEの活動風景5" 
                             class="flex-shrink-0 w-40 md:w-48 lg:w-56 h-28 md:h-36 lg:h-40 rounded-xl md:rounded-2xl object-cover shadow-lg hover:shadow-xl transition-shadow duration-300">
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Gallery Section End -->

        <!-- About Us Section -->
        <section id="about-us" class="relative py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <!-- Background Text -->
                <div class="absolute inset-0 flex items-center justify-end overflow-hidden pointer-events-none pr-8">
                    <p aria-hidden="true" class="text-8xl md:text-9xl lg:text-[10rem] xl:text-[12rem] text-gray-100 font-bold font-Poppins select-none opacity-60">
                        POSSE
                    </p>
                </div>
                
                <!-- Content -->
                <div class="relative z-10 max-w-2xl">
                    <h2 class="font-Poppins text-3xl md:text-4xl lg:text-5xl font-bold text-primary_main mb-4 tracking-tight">
                        About us
                    </h2>
                    <p class="font-Inter text-sm md:text-base font-semibold text-black_light mb-6 tracking-wide">
                        POSSEとは
                    </p>
                    <div class="space-y-4">
                        <p class="font-Inter text-base md:text-lg leading-relaxed text-gray-800">
                            POSSEは、株式会社アンチパターンが運営する<span class="font-semibold text-primary_main">"大学生向けプログラミング学習コミュニティ"</span>です。関東圏の大学生約150名が3つのグループに分かれ活動しています。
                        </p>
                        <p class="font-Inter text-sm text-gray-600 text-right">
                            ※2025年5月現在
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->

        <!-- News AWS Section -->
        <section id="newsAws" class="py-16 md:py-20 bg-gray-100">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-5xl mx-auto">
                    <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
                        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/news-aws.png') }}" 
                                     class="w-64 md:w-80 lg:w-96 h-auto object-contain rounded-xl" 
                                     alt="AWS Startupブログ掲載記事のイメージ">
                            </div>
                            <div class="flex-1 text-left">
                                <h3 class="font-Poppins text-lg md:text-xl lg:text-2xl font-bold text-gray-800 leading-relaxed mb-6">
                                    POSSEについての記事を<br>AWS Startupブログに掲載いただきました！
                                </h3>
                                <div class="flex justify-start">
                                    <a href="https://aws.amazon.com/jp/blogs/startup/posse-community-interview-2025/" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="inline-flex items-center gap-2 bg-primary_main hover:bg-primary_main/90 text-white px-6 py-3 rounded-full text-sm font-Inter font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                                        <span>AWS公式サイトで見る</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News AWS Section End -->

        <!-- Configuration Section -->
        <section id="configuration" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="font-Poppins text-3xl md:text-4xl lg:text-5xl font-bold text-primary_main mb-2 tracking-tight">
                        Configuration
                    </h2>
                    <p class="font-Inter text-sm md:text-base text-gray-600 font-medium">
                        メンバーの構成
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-6 max-w-6xl mx-auto">
                    <!-- Gender Statistics -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-bubble_blue text-white px-4 py-2 rounded-full text-sm font-Inter font-semibold tracking-wide">
                                性別
                            </span>
                        </div>
                        <div class="pt-6 text-center">
                            <p class="font-Inter text-primary_main font-medium mb-2">プログラミングだけど</p>
                            <div class="flex items-center justify-center gap-2 mb-6">
                                <p class="font-Poppins text-2xl md:text-3xl font-bold text-primary_gray">
                                    女性<span class="text-4xl md:text-5xl ml-1">4</span><span class="text-xl">割</span>
                                </p>
                                <img src="{{ asset('images/configuration_up.png') }}" 
                                     width="31" height="29" 
                                     alt="上昇トレンドアイコン" 
                                     class="flex-shrink-0">
                            </div>
                            <img src="{{ asset('images/configuration_sex.png') }}" 
                                 width="216" height="76" 
                                 alt="性別構成グラフ" 
                                 class="mx-auto max-w-full h-auto">
                        </div>
                    </div>

                    <!-- Department Statistics -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-bubble_blue text-white px-4 py-2 rounded-full text-sm font-Inter font-semibold tracking-wide">
                                学部別
                            </span>
                        </div>
                        <div class="pt-6 text-center">
                            <p class="font-Inter text-primary_main font-medium mb-2">プログラミングだけど</p>
                            <div class="flex items-center justify-center gap-2 mb-6">
                                <p class="font-Poppins text-2xl md:text-3xl font-bold text-primary_gray">文系が多い</p>
                                <img src="{{ asset('images/configuration_up.png') }}" 
                                     width="31" height="29" 
                                     alt="上昇トレンドアイコン" 
                                     class="flex-shrink-0">
                            </div>
                            <img src="{{ asset('images/configuration-bar-chart.svg') }}" 
                                 alt="学部別構成バーチャート" 
                                 class="mx-auto max-w-full h-auto">
                        </div>
                    </div>

                    <!-- University Statistics -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-bubble_blue text-white px-4 py-2 rounded-full text-sm font-Inter font-semibold tracking-wide">
                                大学別
                            </span>
                        </div>
                        <div class="pt-6 text-center">
                            <div class="mb-6">
                                <p class="font-Poppins text-lg md:text-xl font-bold text-primary_gray leading-relaxed">
                                    早稲田 慶應 明治 <span class="text-base font-medium">が大多数</span>
                                </p>
                            </div>
                            <img src="{{ asset('images/configuration-donut-chart.svg') }}" 
                                 alt="大学別構成ドーナツチャート" 
                                 class="mx-auto max-w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Configuration Section End -->

        <!-- POSSE Goal Section -->
        <section id="goal" class="py-16 md:py-20 bg-gradient-to-br from-light_blue to-blue-100 relative overflow-hidden">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="font-Poppins text-2xl md:text-3xl lg:text-4xl font-bold text-primary_main mb-2 tracking-tight">
                        POSSEの目指すところ
                    </h2>
                </div>
                
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 md:gap-8 max-w-6xl mx-auto mb-12">
                    <!-- Goal 1 -->
                    <div class="bg-gradient-to-r from-primary_main to-blue-600 rounded-2xl p-6 md:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-center gap-6">
                            <div class="text-white font-bold text-4xl md:text-5xl lg:text-6xl font-Poppins flex-shrink-0">
                                01
                            </div>
                            <p class="font-Inter text-white text-sm md:text-lg lg:text-xl font-semibold leading-relaxed">
                                挫折率90%とも言われるプログラミング学習をコミュニティの力で楽しくやり遂げること
                            </p>
                        </div>
                    </div>

                    <!-- Goal 2 -->
                    <div class="bg-gradient-to-r from-primary_main to-blue-600 rounded-2xl p-6 md:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-center gap-6">
                            <div class="text-white font-bold text-4xl md:text-5xl lg:text-6xl font-Poppins flex-shrink-0">
                                02
                            </div>
                            <p class="font-Inter text-white text-sm md:text-lg lg:text-xl font-semibold leading-relaxed">
                                チーム活動を通して人格力を学び、単なる友達ではなく、生涯の仲間を得ること
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Community Focus -->
                <div class="text-center max-w-4xl mx-auto">
                    <p class="font-Inter text-primary_main text-base md:text-lg lg:text-xl font-semibold mb-2">
                        POSSEは、講義形式ではなく、
                    </p>
                    <p class="font-Inter text-primary_main text-base md:text-lg lg:text-xl font-semibold">
                        学生同士が教え合い励まし合いながら学ぶ
                        <span class="font-Poppins text-xl md:text-2xl lg:text-3xl font-bold bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent border-b-4 border-orange-400">
                            コミュニティ形式
                        </span>
                        を重視しています。
                    </p>
                </div>
            </div>
            
            <!-- Decorative bottom border -->
            <div class="absolute bottom-0 left-0 w-full">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-12 md:h-20 fill-white">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
                </svg>
            </div>
        </section>
        <!-- POSSE Goal Section End -->

        <!-- Flow of Learning Section -->
        <section id="flow-of-learning" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="font-Poppins text-3xl md:text-4xl lg:text-5xl font-bold text-primary_main mb-2 tracking-tight">
                        Flow of learning
                    </h2>
                    <p class="font-Inter text-sm md:text-base text-gray-600 font-medium">
                        学習の流れ
                    </p>
                </div>
                
                <div class="max-w-6xl mx-auto">
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-6 md:p-12 shadow-lg">
                        <img src="{{ asset('images/flow-of-learning.svg') }}" 
                             alt="学習の流れ図" 
                             class="mx-auto object-contain lg:block hidden max-w-full h-auto">
                        <img src="{{ asset('images/flow-of-learning-sp.svg') }}" 
                             alt="学習の流れ図（スマートフォン版）" 
                             class="mx-auto object-contain lg:hidden block max-w-full h-auto">
                    </div>
                </div>
            </div>
        </section>
        <!-- Flow of Learning Section End -->

        <!-- Feature Section -->
        <section id="feature" class="py-16 md:py-20 bg-gradient-to-br from-light_blue to-blue-100 relative overflow-hidden">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="font-Poppins text-3xl md:text-4xl lg:text-5xl font-bold text-primary_main mb-2 tracking-tight">
                        Feature
                    </h2>
                    <p class="font-Inter text-sm md:text-base text-gray-600 font-medium">
                        POSSEの特徴
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8 max-w-6xl mx-auto">
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-gradient-to-r from-primary_main to-blue-600 w-12 h-12 flex items-center justify-center rounded-xl shadow-lg">
                                <img src="{{ asset('images/01.svg') }}" alt="01" class="w-6 h-6">
                            </div>
                            <h3 class="font-Poppins text-lg md:text-xl font-bold text-primary_gray">
                                教えることは教わること
                            </h3>
                        </div>
                        <p class="font-Inter text-sm md:text-base text-gray-700 leading-relaxed">
                            POSSEでは、汎用性の高いプログラミング言語を独自のカリキュラムで週10時間、同期や先輩後輩と共に学びます。「教えることは教わること」という文化が根付き、先輩後輩間での教え合いが活発です。
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-gradient-to-r from-primary_main to-blue-600 w-12 h-12 flex items-center justify-center rounded-xl shadow-lg">
                                <img src="{{ asset('images/02.svg') }}" alt="02" class="w-6 h-6">
                            </div>
                            <h3 class="font-Poppins text-lg md:text-xl font-bold text-primary_gray">
                                有給インターンシップ
                            </h3>
                        </div>
                        <p class="font-Inter text-sm md:text-base text-gray-700 leading-relaxed">
                            外部企業との提携でハッカソンやチーム開発など実践的な機会を提供し、個人とチームでPDCAを回せる環境を整えています。メンバーは有給インターンシップで実践経験も積めます。
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-gradient-to-r from-primary_main to-blue-600 w-12 h-12 flex items-center justify-center rounded-xl shadow-lg">
                                <img src="{{ asset('images/03.svg') }}" alt="03" class="w-6 h-6">
                            </div>
                            <h3 class="font-Poppins text-lg md:text-xl font-bold text-primary_gray">
                                自己理解を深める
                            </h3>
                        </div>
                        <p class="font-Inter text-sm md:text-base text-gray-700 leading-relaxed">
                            POSSEは『7つの習慣』を活動軸に、技術だけでなくチームとして動ける人材の育成を重視。毎週の振り返りや本音のフィードバックで自己理解を深める機会を提供しています。
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Decorative bottom border -->
            <div class="absolute bottom-0 left-0 w-full">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-12 md:h-20 fill-white">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
                </svg>
            </div>
        </section>
        <!-- Feature Section End -->

        <!-- Yearly Schedule Section -->
        <section id="yearly-schedule" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="font-Poppins text-3xl md:text-4xl lg:text-5xl font-bold text-primary_main mb-2 tracking-tight">
                        Yearly schedule
                    </h2>
                    <p class="font-Inter text-sm md:text-base text-gray-600 font-medium">
                        年間スケジュール
                    </p>
                </div>
                <!-- Schedule Grid - First Row (5月-10月) -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6 mb-8">
                    <!-- 5月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-may.webp') }}" 
                             alt="入学式" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            5<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="font-Inter text-xs md:text-sm font-semibold text-black_light leading-tight">入学式</p>
                    </div>

                    <!-- 6月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-june.webp') }}" 
                             alt="新人ハッカソン/夏のレクリエーション" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            6<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="font-Inter text-xs md:text-sm font-semibold text-black_light leading-tight">新人ハッカソン</p>
                        <p class="font-Inter text-xs md:text-sm font-semibold text-black_light leading-tight">夏のレクリエーション</p>
                    </div>

                    <!-- 7月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-july.webp') }}" 
                             alt="カリキュラム巻き返しweek" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            7<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">カリキュラム巻き返し</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">week</p>
                    </div>

                    <!-- 8月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-august.webp') }}" 
                             alt="カリキュラム巻き返しweek/プログラミングイベント（3泊4日）" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            8<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">カリキュラム巻き返し</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">week</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">プログラミングイベント</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">（3泊4日）</p>
                    </div>

                    <!-- 9月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-september.webp') }}" 
                             alt="新歓イベント/卒業制作最終発表" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            9<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">新歓イベント</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">卒業制作最終発表</p>
                    </div>

                    <!-- 10月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-october.webp') }}" 
                             alt="カリキュラム巻き返しweek/後期入学式" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            10<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">カリキュラム巻き返し</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">week</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">後期入学式</p>
                    </div>
                </div>

                <!-- Schedule Grid - Second Row (11月-4月) -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6 max-w-5xl mx-auto">
                    <!-- 11月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-november.webp') }}" 
                             alt="後期入学者新人ハッカソン" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            11<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">後期入学者新人</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">ハッカソン</p>
                    </div>

                    <!-- 12月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-december.webp') }}" 
                             alt="カリキュラム巻き返しweek" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            12<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">カリキュラム巻き返し</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">week</p>
                    </div>

                    <!-- 1-2月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-january.webp') }}" 
                             alt="チーム開発キックオフ/チーム開発合宿" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            1-2<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">チーム開発キックオフ</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">チーム開発合宿</p>
                    </div>

                    <!-- 3月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-march.webp') }}" 
                             alt="チーム開発予選、決勝" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            3<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">チーム開発予選、決勝</p>
                    </div>

                    <!-- 4月 -->
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset('images/yearly-schedule-april.webp') }}" 
                             alt="新歓交流会/入学式/先輩引退式" 
                             class="w-full h-24 md:h-32 lg:h-40 object-cover rounded-lg mb-2 shadow-md">
                        <div class="font-Poppins text-2xl md:text-3xl font-bold text-bubble_blue mb-1">
                            4<span class="text-base md:text-lg">月</span>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">新歓交流会</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">入学式</p>
                        <p class="text-xs md:text-sm font-bold text-black_light leading-tight">先輩引退式</p>
                    </div>
                </div>
                        </div>
                        </section>

                        <!-- Yearly schedule End -->

                        <!-- Programming event Start -->
                        <section id="programming-event" class="w-5/6 xs:w-327 2xs:w-3/4 md:w-2/3 lg:w-11/12 2lg:w-1116 mx-auto">
                        <div class="xl:pt-104 pt-16 mx-auto w-full md:pb-14 sm:pb-4">
                            <h2 class="text-left text-primary_main md:text-42 lg:-tracking-0.07 font-Urbanist text-32 font-bold">
                            Programming event
                            </h2>
                            <p class="text-left lg:mt-1 mt-1.5 text-sm font-bold text-black_light">
                            実践型プログラミングイベント
                            </p>
                            <div class="flex xl:flex-row flex-col items-center lg:gap-15 gap-4.5 lg:mt-12.5 mt-8.5">
                            <img src="{{ asset('images/programming-event-01.webp') }}" alt="programming-event" class="object-contain rounded-lg h-auto">
                            <div>
                                <h3 class="text-primary_main font-bold lg:text-2xl text-lg lg:leading-1.4 leading-1.4">
                                ハッカソン
                                </h3>
                                <p class="lg:mt-2 mt-0 font-Urbanist font-bold lg:text-base text-xs lg:leading-1.2 leading-1.2 text-gray_lighter">
                                Hackathon
                                </p>
                                <p class="lg:mt-4 mt-2 font-bold text-black_light lg:text-base text-sm lg:leading-1.7 leading-1.7">
                                2泊3日程度で行うチームでのプロダクト開発イベント。お題は提携企業様又はPOSSE内の運営メンバーが決め、Webページの制作などを行います。<br class="lg:hidden block">(年2回)
                                </p>
                            </div>
                            </div>
                            <div class="flex xl:flex-row flex-col-reverse items-center lg:gap-14.5 gap-4 lg:mt-16 mt-8">
                            <div>
                                <h3 class="text-primary_main font-bold lg:text-2xl text-lg lg:leading-1.4 leading-1.4">
                                チーム開発
                                </h3>
                                <p class="mt-2 font-Urbanist font-bold lg:text-base text-xs lg:leading-1.2 leading-1.2 text-gray_lighter">
                                Team development
                                </p>
                                <p class="lg:mt-4 mt-2 font-bold text-black_light lg:text-base text-sm lg:leading-1.7 leading-1.7 lg:pr-1.5 pr-0">
                                約2ヶ月かけて行うチームでのプロダクト開発イベント。ヒアリングを元に要件定義から設計・開発・テスト・発表まで行います。<br class="lg:hidden block">(年1回)
                                </p>
                            </div>
                            <img src="{{ asset('images/programming-event-02.webp') }}" alt="programming-event" class="object-contain rounded-lg h-auto">
                            </div>
                        </div>
                        <div class="md:mx-auto lg:mt-1 mt-8 border-2 lg:max-w-175 md:max-w-130 border-primary_lighter rounded-lg lg:px-7.5 lg:py-7.75 pl-2.75 pr-3.25 py-5.75">
                            <p class="text-center lg:text-2xl text-base lg:leading-1.4 leading-1.4 font-bold text-primary_main">
                            実際に得られるもの
                            </p>
                            <ul class="lg:mt-6 mt-4 flex flex-col lg:gap-3 gap-2.5">
                            <li class="flex lg:items-center items-start lg:gap-2 gap-1.5">
                                <img src="{{ asset('images/icon-check.svg') }}" alt="check" class="w-5.75 h-5.75 lg:w-auto lg:h-auto">
                                <p class="lg:text-lg text-sm lg:leading-1.4 leading-1.4 font-bold text-black_light">
                                発案から完成まで、一気通貫で学ぶモノづくりのプロセスやノウハウ
                                </p>
                            </li>
                            <li class="flex items-center lg:gap-2 gap-1">
                                <img src="{{ asset('images/icon-check.svg') }}" alt="check" class="w-5.75 h-5.75 lg:w-auto lg:h-auto">
                                <p class="lg:text-lg text-sm lg:leading-1.4 leading-1.4 font-bold text-black_light">
                                社会人視点での実践型フィードバック
                                </p>
                            </li>
                            <li class="flex items-center lg:gap-2 gap-1">
                                <img src="{{ asset('images/icon-check.svg') }}" alt="check" class="w-5.75 h-5.75 lg:w-auto lg:h-auto">
                                <p class="lg:text-lg text-sm lg:leading-1.4 leading-1.4 font-bold text-black_light">
                                自己理解と自己変革目標
                                </p>
                            </li>
                            </ul>
                        </div>
                        </section>
                        <!-- Programming event End -->

                        <!-- Benefit Start -->
                        <section id="benefit" class="w-5/6 xs:w-327 2xs:w-3/4 md:w-2/3 lg:w-11/12 2lg:w-1116 mx-auto">
                        <div class="mx-auto w-full pt-25.6 md:pb-14 sm:pb-4">
                            <h2 class="text-left text-primary_main md:text-40 font-Urbanist text-32 font-bold md:leading-1.2 leading-1.2">
                            Benefit
                            </h2>
                            <p class="lg:mt-2.5 mt-2 text-sm leading-1.8 font-black text-black_light">
                            プログラミング学習コミュニティPOSSEで<br class="lg:hidden block">活動するメリット
                            </p>
                            <div class="flex flex-col gap-4 w-full">
                            <div class="bg-primary_lighter lg:pl-8 lg:pr-5 lg:pt-8 lg:pb-6.25 pt-3.5 px-4 pb-3.5 rounded-lg lg:mt-9.25 mt-6">
                                <div class="flex lg:flex-row flex-col xl:items-start items-center lg:gap-11 gap-1.5 flex-shrink-0">
                                <div class="lg:w-1/2 w-full">
                                    <div class="flex items-center gap-4">
                                    <img src="{{ asset('images/icon-community-space.svg') }}" alt="">
                                    <p class="text-primary_main xl:text-xl text-base font-bold xl:leading-1.4 leading-1.4">
                                        コミュニティスペースが<br class="lg:hidden block">24時間利用可能
                                    </p>
                                    </div>
                                    <p class="lg:mt-4 mt-3 xl:text-base text-sm font-medium xl:leading-1.7 leading-1.7 text-black_dark">
                                    株式会社アンチパターンが運営するエンジニア向けコミュニティスペース、「HarborS表参道」
                                    <span>
                                        がPOSSE生は365日24時間利用可能です。
                                    </span>
                                    </p>
                                    <ul class="lg:mt-4.5 mt-3 xl:text-sm text-xs xl:leading-1.7 leading-1.7 font-normal text-black_dark">
                                    <li class="flex items-start">
                                        ※
                                        <span class="lg:ml-1.5">
                                        本来1ヶ月利用料55,000円(フリー無制限プラン)がPOSSE会員であれば無料
                                        </span>
                                    </li>
                                    <li class="lg:mt-5 mt-0 flex items-start">
                                        ※
                                        <p>
                                        <span class="lg:ml-1.5">
                                            表参道駅から徒歩3分、24時間利用可能、
                                        </span>
                                        <span class="-tracking-0.025">
                                            Wi-Fi・充電完備
                                        </span>
                                        </p>
                                    </li>
                                    </ul>
                                </div>
                                <div class="grid grid-cols-2 grid-rows-2 lg:gap-2 gap-1">
                                    <img src="{{ asset('images/community-space-01.png') }}" alt="community-space" class="object-cover">
                                    <img src="{{ asset('images/community-space-02.png') }}" alt="community-space" class="object-cover col-start-1 row-start-2 xl:mt-0.25 lg:-mt-0.75 sm:mt-1.25 mt-0.15">
                                    <img src="{{ asset('images/community-space-03.png') }}" alt="community-space" class="object-cover row-span-2 col-start-2 row-start-1">
                                </div>
                                </div>
                            </div>

                            <div class="bg-primary_lighter lg:px-8 pl-4 pr-4 lg:py-8 pt-3.5 pb-3.5 rounded-lg lg:mt-4.5 mt-0.5">
                                <div class="flex lg:flex-row flex-col xl:items-start items-center lg:gap-11 gap-6 flex-shrink-0">
                                <div class="lg:w-53% w-full">
                                    <div class="flex items-center gap-4">
                                    <img src="{{ asset('images/icon-job-hunting.svg') }}" alt="">
                                    <p class="text-primary_main xl:text-xl text-base font-bold leading-1.4">
                                        就活がPOSSEの活動で<br class="lg:hidden block">完結します
                                    </p>
                                    </div>
                                    <p class="lg:mt-4 mt-3 xl:text-base text-sm font-medium xl:leading-1.7 leading-1.7 text-black_dark lg:pr-1">
                                    POSSEではメンバーの就職活動を応援する仕組みを設けております。<br class="lg:block hidden">POSSE内にて、就活対策イベント(就活講座や面接対策会など)POSSE生限定逆求人就活イベント(外部企業人事担当者との面談)を設けております。<br class="lg:block hidden">また、POSSE就活生1人につき2名のキャリアコンサルタントがメンバーと就活を並走します。
                                    </p>
                                    <p class="lg:block hidden mt-4 font-normal text-11 leading-1.7 text-black_dark">
                                    POSSEは創立4年目を迎えますが、その1期生と2期生の内定実績になります。POSSE卒業生は就職活動において、チームで動け、かつ実践的なIT知識のある"IT人材"として評価していただいております。卒業生のキャリアとして、アプリ開発者等の"ITエンジニア"はもちろん、コンサルタントや商社、IT系のセールスなど幅広い領域に進んでおります。
                                    </p>
                                </div>
                                <div class="w-47% bg-white rounded-lg pt-6 pr-4 pb-9 pl-9 xl:flex flex-col gap-8 hidden">
                                    <p class="text-center mr-5.5 text-base font-bold leading-1.7 text-black_dark">
                                    内定実績（2023年11月時点）
                                    </p>
                                    <div class="flex gap-4 text-sm font-bold leading-1.4 items-start text-black_light mt-1">
                                    <ul class="flex flex-col gap-2">
                                        <li>
                                        アマゾンジャパン
                                        </li>
                                        <li>
                                        アマゾンウェブサービス
                                        </li>
                                        <li>
                                        サントリー
                                        </li>
                                        <li>
                                        ヤフー
                                        </li>
                                        <li>
                                        チームラボ
                                        </li>
                                        <li>
                                        シスコシステムズ
                                        </li>
                                        <li>
                                        じげん
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col gap-2">
                                        <li>
                                        三井物産
                                        </li>
                                        <li>
                                        アクセンチュア
                                        </li>
                                        <li>
                                        ネオキャリア
                                        </li>
                                        <li>
                                        日本TCS
                                        </li>
                                        <li>
                                        GAテクノロジーズ
                                        </li>
                                        <li>
                                        ランサーズ
                                        </li>
                                        <li>
                                        freee
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col gap-2">
                                        <li>
                                        博報堂
                                        </li>
                                        <li>
                                        日本IBM
                                        </li>
                                        <li>
                                        ブレインパッド
                                        </li>
                                        <li>
                                        Sansan
                                        </li>
                                        <li>
                                        エブリー
                                        </li>
                                        <li>
                                        CARTA
                                        </li>
                                    </ul>
                                    </div>
                                </div>

                                <div class="w-full sm:w-1/2 bg-white rounded-lg pt-3.5 pr-4 pb-5 pl-4 xl:hidden flex-col gap-1.5 flex">
                                    <p class="text-center text-sm font-bold leading-1.7 text-black_dark">
                                    内定実績（2023年11月時点）
                                    </p>
                                    <div class="flex gap-6 text-xs font-bold leading-1.4 items-start text-black_light mt-0.5">
                                    <ul class="flex flex-col gap-2">
                                        <li>
                                        アマゾンジャパン
                                        </li>
                                        <li>
                                        アマゾンウェブサービス
                                        </li>
                                        <li>
                                        サントリー
                                        </li>
                                        <li>
                                        ヤフー
                                        </li>
                                        <li>
                                        チームラボ
                                        </li>
                                        <li>
                                        三井物産
                                        </li>
                                        <li>
                                        アクセンチュア
                                        </li>
                                        <li>
                                        ネオキャリア
                                        </li>
                                        <li>
                                        日本TCS
                                        </li>
                                        <li>
                                        GAテクノロジーズ
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col gap-2">
                                        <li>
                                        博報堂
                                        </li>
                                        <li>
                                        日本IBM
                                        </li>
                                        <li>
                                        ブレインパッド
                                        </li>
                                        <li>
                                        Sansan
                                        </li>
                                        <li>
                                        エブリー
                                        </li>
                                        <li>
                                        シスコシステムズ
                                        </li>
                                        <li>
                                        ランサーズ
                                        </li>
                                        <li>
                                        CARTA
                                        </li>
                                        <li>
                                        じげん
                                        </li>
                                        <li>
                                        freee
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                                <p class="lg:hidden block mt-2 font-normal text-xs leading-1.7 text-black_dark">
                                POSSEは創立4年目を迎えますが、その1期生と2期生の内定実績になります。<br>POSSE卒業生は就職活動において、チームで動け、かつ実践的なIT知識のある"IT人材"として評価していただいております。<br>卒業生のキャリアとして、アプリ開発者等の"ITエンジニア"はもちろん、コンサルタントや商社、IT系のセールスなど幅広い領域に進んでおります。
                                </p>
                            </div>

                            <div class="bg-primary_lighter lg:px-6 lg:py-6 pt-3.5 px-4 pb-4.5 rounded-lg lg:mt-4.5 mt-0.5">
                                <div class="flex lg:flex-row flex-col lg:items-start items-center lg:gap-6 gap-3.5 flex-shrink-0">
                                <div class="lg:w-50% w-full">
                                    <div class="flex items-center gap-4">
                                    <img src="{{ asset('images/icon-lecture.svg') }}" alt="">
                                    <p class="text-primary_main xl:text-xl text-base font-bold xl:leading-1.4 leading-1.4">
                                        月1回 社会人による<br class="lg:hidden block">講演会の開催
                                    </p>
                                    </div>
                                    <p class="lg:mt-4 mt-3 xl:text-base text-sm font-medium xl:leading-1.7 leading-1.7 text-black_dark lg:pr-1 pr-0.2">
                                    POSSEでは月1回定例会にて、<br>社会で活躍されている方にお越しいただきPOSSE生に向けて講演をしていただいております。<br>大学生のうちに社会人の視点とキャリアについての理解を深められます。
                                    </p>
                                </div>
                                <div class="lg:w-50% w-full flex justify-center bg-white rounded-lg">
                                    <img src="{{ asset('images/career-map.webp') }}" alt="" class="object-contain w-full h-80 md:h-96 lg:h-112">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
                        <!-- Benefit End -->

                        <!-- Interview Start -->
                        <section id="interview">
                        <div class="pt-16 sm:pt-10.5 w-5/6 xs:w-327 2xs:w-3/4 md:w-2/3 lg:w-11/12 2lg:w-1116 mx-auto">
                            <div>
                            <h2 class="text-primary_main text-32 sm:text-40 font-Urbanist leading-1.2">Interview</h2>
                            <p class="text-sm leading-1.8 text-black_light font-bold mt-2">POSSE生直撃インタビュー</p>
                            </div>
                            <div class="flex lg:flex-row flex-col justify-center lg:gap-6 gap-4 items-stretch lg:mt-8 mt-8">
                            <div class="flex lg:flex-col flex-row">
                                <img src="{{ asset('images/interview-01.png') }}" alt="三木晴加" class="lg:block hidden object-contain">
                                <img src="{{ asset('images/interview-01-sp.png') }}" alt="三木晴加" class="lg:hidden block object-contain">
                                <div class="lg:border-b lg:border-x lg:border-t-0 border-t border-b border-r bg-white border-gray_light lg:rounded-b-lg lg:rounded-tr-none rounded-tr-lg rounded-br-lg lg:px-5.75 pl-4 pr-3.75 pt-4.25 lg:pb-4.5 pb-4 flex-1">
                                <div class="flex flex-col lg:gap-3 gap-2 justify-start">
                                    <div class="font-bold lg:text-base text-sm lg:leading-1.6 leading-1.6 text-black_light">
                                    <p class="font-PlusJakartaSans">
                                        1期生
                                    </p>
                                    <p>
                                        シスコシステムズ入社
                                    </p>
                                    </div>
                                    <p class="font-bold lg:text-sm text-xs lg:leading-1.8 leading-1.8 text-primary_main">
                                    慶應義塾大学商学部卒
                                    </p>
                                </div>
                                <div class="flex justify-between lg:items-end items-center lg:mt-1 mt-0">
                                    <p class="font-bold lg:text-2xl text-lg lg:leading-1.8 leading-1.8 text-black_dark">三木晴加</p>
                                    <button type="button" id="open-dialog-01" class="bg-primary_main hover:opacity-70 lg:-mt-0.5 lg:w-10 lg:h-10 w-8 h-8 rounded-full flex items-center justify-center transition-opacity duration-200">
                                    <img src="{{ asset('images/icon-plus-white.svg') }}" alt="詳細を見る" class="object-contain w-4 h-4">
                                    </button>
                                </div>
                                </div>
                            </div>

                            <div class="flex lg:flex-col flex-row">
                                <img src="{{ asset('images/interview-02.png') }}" alt="西川航平" class="lg:block hidden object-contain">
                                <img src="{{ asset('images/interview-02-sp.png') }}" alt="西川航平" class="lg:hidden block object-contain">
                                <div class="lg:border-b lg:border-x lg:border-t-0 border-t border-b border-r bg-white border-gray_light lg:rounded-b-lg lg:rounded-tr-none rounded-tr-lg rounded-br-lg lg:px-5.75 pl-4 pr-3.75 pt-4.25 lg:pb-4.5 pb-4 flex-1">
                                <div class="flex flex-col lg:gap-3 gap-2 justify-start">
                                    <div class="font-bold lg:text-base text-sm lg:leading-1.6 leading-1.6 text-black_light">
                                    <p class="font-PlusJakartaSans">
                                        2期生
                                    </p>
                                    <p>
                                        アマゾンジャパン入社予定
                                    </p>
                                    </div>
                                    <p class="font-bold lg:text-sm text-xs lg:leading-1.8 leading-1.8  text-primary_main">
                                    慶應義塾大学経済学部4年
                                    </p>
                                </div>
                                <div class="flex justify-between lg:items-end items-center lg:mt-1 mt-0">
                                    <p class="font-bold lg:text-2xl text-lg lg:leading-1.8 leading-1.8 text-black_dark">西川航平</p>
                                    <button type="button" id="open-dialog-02" class="bg-primary_main hover:opacity-70 lg:w-10 lg:h-10 w-8 h-8 rounded-full flex items-center justify-center transition-opacity duration-200">
                                    <img src="{{ asset('images/icon-plus-white.svg') }}" alt="詳細を見る" class="object-contain w-4 h-4">
                                    </button>
                                </div>
                                </div>
                            </div>

                            <div class="flex lg:flex-col flex-row">
                                <img src="{{ asset('images/interview-03.png') }}" alt="鋪屋瑠美" class="lg:block hidden object-contain">
                                <img src="{{ asset('images/interview-03-sp.png') }}" alt="鋪屋瑠美" class="lg:hidden block object-contain">
                                <div class="lg:border-b lg:border-x lg:border-t-0 border-t border-b border-r bg-white border-gray_light lg:rounded-b-lg lg:rounded-tr-none rounded-tr-lg rounded-br-lg lg:px-5.75 pl-4 pr-3.75 pt-4.25 lg:pb-4.5 pb-4 flex-1">
                                <div class="flex flex-col lg:gap-3 gap-2 justify-start">
                                    <p class="font-PlusJakartaSans font-bold lg:text-base text-sm lg:leading-1.6 leading-1.6 text-black_light">
                                    4期生
                                    </p>
                                    <p class="font-bold lg:mt-1 lg:text-sm text-xs lg:leading-1.8 leading-1.8 text-primary_main">
                                    東京慈恵会医科大学医学部2年
                                    </p>
                                </div>
                                <div class="flex justify-between lg:items-start items-center lg:mt-1">
                                    <p class="font-bold mt-1 lg:text-2xl text-lg lg:leading-1.8 leading-1.8 text-black_dark">鋪屋瑠美</p>
                                    <button type="button" id="open-dialog-03" class="bg-primary_main hover:opacity-70 lg:mt-5 mt-6 lg:w-10 lg:h-10 w-8 h-8 rounded-full flex items-center justify-center transition-opacity duration-200">
                                    <img src="{{ asset('images/icon-plus-white.svg') }}" alt="詳細を見る" class="object-contain w-4 h-4">
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Modal-01 Start -->
                        <dialog id="dialog-01" class="backdrop:bg-black backdrop:bg-opacity-30 lg:rounded-2xl rounded-lg sm:mx-auto mx-6">
                            <!-- <div class="mx-6"> -->
                            <div class="relative w-full max-w-680 min-h-webkit-fit-content max-h-full bg-white sm:p-10 px-4 pt-4 pb-18">
                            <button type="button" id="close-dialog-01" class="bg-primary_main w-10 h-10 rounded-full flex items-center justify-center sm:absolute fixed sm:right-4 right-10 sm:top-4 bottom-10 hover:opacity-70 transition-opacity duration-200">
                                <img src="{{ asset('images/icon-close-white.svg') }}" alt="閉じる" class="w-4 h-4">
                            </button>
                            <div class="flex flex-shrink-0 items-center sm:gap-8 gap-4 pb-5 border-b-2 border-b-gray_light">
                                <!-- 画像を拡大する必要があるのでbackground-imageを使用 -->
                                <div class="lg:w-31 lg:h-124 w-100 h-100 rounded-full bg-cover bg-top bg-130" style="background-image: url({{ asset('images/interview-01.png') }});"></div>
                                <div class="flex flex-col lg:gap-1.5 gap-2">
                                <div class="font-bold text-sm leading-1.6 text-black_light">
                                    <p class="font-PlusJakartaSans">
                                    1期生
                                    </p>
                                    <p class="lg:text-sm text-xs">
                                    シスコシステムズ入社
                                    </p>
                                </div>
                                <div>
                                    <p class="font-bold mt-1 text-xs leading-1.8 text-primary_main">
                                    慶應義塾大学商学部卒
                                    </p>
                                    <p class="font-bold text-lg leading-1.8 text-black_dark">三木晴加</p>
                                </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-6">
                                <div class="lg:mt-6 mt-6.5">
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    なぜプログラミングを学ぼうと思ったのですか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 lg:mt-2 mt-1.5">
                                    ただの大学生にはなりたくなかったからです。何もしなくとも大学の4年間なんて終わってしまうし、その中で一歩先に視野を広げれば今後様々な機会が得られると思いました。POSSE入会の際は他の活動とも迷いましたが、プログラミングが大学生のうちにやることに意味があると思いました。過去に一度プログラミングを独学で挑み挫折した際に、一人ではできない仲間と学ばないとできないものだと思い大学で挑戦してみました。
                                </p>
                                </div>
                                <div>
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    4年間のPOSSEの活動の中で最も印象に残っていることは何ですか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 mt-2">
                                    チーム開発の優勝者発表にて、負けたチームが悔し泣きをしている光景です。仲間のチーム開発に対する熱量が垣間見え、「POSSEらしい」と感じて嬉しかったです。
                                </p>
                                </div>
                                <div>
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    POSSEにはどのような学生が向いていると思いますか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 mt-2">
                                    思い切り大学生活をやり切りたい人です。ひとりではなく仲間と高みを目指して、後悔ないように過ごしたいと考えている人は向いていると思います。
                                </p>
                                </div>
                            </div>
                            </div>
                            <!-- </div> -->
                        </dialog>
                        <!-- Modal-01 End -->
                        <!-- Modal-02 Start -->
                        <dialog id="dialog-02" class="backdrop:bg-black backdrop:bg-opacity-30 sm:rounded-2xl rounded-lg sm:mx-auto mx-6">
                            <div class="relative w-full min-h-webkit-fit-content max-w-680 max-h-full bg-white sm:p-10 px-4 pt-4 pb-18">
                            <button type="button" id="close-dialog-02" class="bg-primary_main w-10 h-10 rounded-full flex items-center justify-center sm:absolute fixed sm:right-4 right-10 sm:top-4 bottom-10 hover:opacity-70 transition-opacity duration-200">
                                <img src="{{ asset('images/icon-close-white.svg') }}" alt="閉じる" class="w-4 h-4">
                            </button>
                            <div class="flex flex-shrink-0 items-center sm:gap-8 gap-4 pb-5 border-b-2 border-b-gray_light">
                                <!-- 画像を拡大する必要があるのでbackground-imageを使用 -->
                                <div class="lg:w-31 lg:h-124 w-100 h-100 rounded-full bg-cover bg-top bg-135" style="background-image: url({{ asset('images/interview-02.png') }});"></div>
                                <div class="flex flex-col lg:gap-1.5 gap-2">
                                <div class="font-bold text-sm leading-1.6 text-black_light">
                                    <p class="font-PlusJakartaSans">
                                    2期生
                                    </p>
                                    <p class="lg:text-sm text-xs">
                                    アマゾンジャパン入社予定
                                    </p>
                                </div>
                                <div>
                                    <p class="font-bold mt-1 text-xs leading-1.8 text-primary_main">
                                    慶應義塾大学経済学部4年
                                    </p>
                                    <p class="font-bold text-lg leading-1.8 text-black_dark">西川航平</p>
                                </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-6">
                                <div class="mt-6">
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    就活においてPOSSEは役に立ちましたか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 mt-2">
                                    就活において大事なことは、「自分に対する解像度が高いこと」と「学生時代一生懸命何かに取り組んだ経験があること」の2点だと思います。POSSEでは普段友達とは話さないような価値観や信念の話をしてきましたし、本音で思いを言い合う機会が沢山あるので自分に対する理解がとても深まったと感じています。就職する企業の最終面接で話した内容はほとんどがPOSSEでの経験です！
                                </p>
                                </div>
                                <div>
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    プログラミングを学んで特に良かったと思うことは何ですか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 mt-2">
                                    1つ目はウェブサービスやソフトウェアの動作の仕組みを学べたことです。今後も更なる発達が予想されるウェブサービスの開発プロセスを理解しておくことは将来仕事の中で必ず役に立つと思います。2つ目はエンジニアの重要性を肌で実感できたことです。プログラミングの可能性を理解したからこそ、エンジニアに対する尊敬の気持ちが強く芽生えました。生意気ではありますが、今後仕事で関わることがあればエンジニアの辛さや偉大さを理解し、寄り添える人間でいたいと思えていることが嬉しいです。
                                </p>
                                </div>
                            </div>
                            </div>
                        </dialog>
                        <!-- Modal-02 End -->
                        <!-- Modal-03 Start -->
                        <dialog id="dialog-03" class="backdrop:bg-black backdrop:bg-opacity-30 lg:rounded-2xl rounded-lg sm:mx-auto mx-6">
                            <div class="relative w-full max-w-680 min-h-webkit-fit-content max-h-full bg-white sm:p-10 px-4 pt-4 pb-18">
                            <button type="button" id="close-dialog-03" class="bg-primary_main w-10 h-10 rounded-full flex items-center justify-center sm:absolute fixed sm:right-4 right-10 sm:top-4 bottom-10 hover:opacity-70 transition-opacity duration-200">
                                <img src="{{ asset('images/icon-close-white.svg') }}" alt="閉じる" class="w-4 h-4">
                            </button>
                            <div class="flex flex-shrink-0 items-center sm:gap-8 gap-4 pb-5 border-b-2 border-b-gray_light">
                                <!-- 画像を拡大する必要があるのでbackground-imageを使用 -->
                                <div class="lg:w-31 lg:h-124 w-100 h-100 rounded-full bg-cover bg-top bg-130" style="background-image: url({{ asset('images/interview-03.png') }});"></div>
                                <div class="flex flex-col gap-1.5">
                                <p class="font-PlusJakartaSans font-bold text-sm leading-1.6 text-black_light">
                                    4期生
                                </p>
                                <div>
                                    <p class="font-bold mt-1 text-xs leading-1.8 text-primary_main">
                                    東京慈恵会医科大学医学部2年
                                    </p>
                                    <p class="font-bold text-lg leading-1.8 text-black_dark">鋪屋瑠美</p>
                                </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-6">
                                <div class="mt-6">
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    POSSEに入会しようと思った理由は何ですか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 mt-2">
                                    1つ目は視野を広げたいと思ったからです。単科大で同級生が少ないということと、医学しか勉強できないかもしれないという懸念を抱いていました。知り合いの紹介もあり、様々な大学の人と関われると思って飛び込みました。2つ目は医学以外のスキルが欲しかったからです。以前からただの医者にはなりたくないと思っていました。プログラミングを学んで損はないし、将来の幅が広がると信じて入ることにしました。
                                </p>
                                </div>
                                <div>
                                <p class="text-primary_main text-sm leading-1.8 font-bold">
                                    医学部の学業とPOSSEは両立可能ですか？
                                </p>
                                <p class="text-black text-sm leading-1.8 font-350 mt-2">
                                    優先順位を明確にすれば大丈夫だと思います。私は全てを100%で取り組むのではなく、全体を見渡して優先順位をつけています。学業を疎かにはせず、それ以外の自分のやりたいことはそれぞれどのくらい時間をかけられるか考えながら進めています。また無駄な時間を作らないように隙間時間を活用したりすれば大丈夫だと思います。
                                </p>
                                </div>
                            </div>
                            </div>
                        </dialog>
                        <!-- Modal-03 End -->
                        </section>
                        <!-- Interview End -->

                        <!-- Weekly Schedule Start -->
                        <section id="weekly-schedule" class="py-16 md:py-24 bg-gray-50">
                            <div class="container mx-auto px-6 lg:px-8">
                                <div class="text-center mb-12 md:mb-16">
                                    <h2 class="font-Poppins text-3xl md:text-4xl lg:text-5xl font-bold text-primary_main mb-2 tracking-tight">Weekly Schedule</h2>
                                    <p class="font-Inter text-sm md:text-base text-gray-600 font-medium">POSSE生の1週間スケジュール</p>
                                </div>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
                                    <!-- Profile 1 -->
                                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg">
                                        <div class="flex items-start gap-4 mb-6">
                                            <img src="{{ asset('images/weekly-schedule-icon-01.svg') }}" 
                                                 class="w-16 h-16 md:w-20 md:h-20 rounded-full object-cover shadow-md" 
                                                 alt="山田夏寧さんのプロフィール写真">
                                            <div class="flex-1">
                                                <h3 class="font-Poppins text-lg md:text-xl font-bold text-black_light mb-2">
                                                    山田夏寧<span class="text-sm font-medium">さん</span>
                                                </h3>
                                                <p class="font-Inter text-sm md:text-base text-gray-600 mb-1">4期生</p>
                                                <p class="font-Inter text-sm md:text-base text-primary_main font-semibold">青山学院大学経済学部2年</p>
                                                <p class="font-Inter text-xs md:text-sm text-gray-600 mt-2">POSSEで週17時間のインターン中</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap-4 mb-4">
                                            <div class="flex items-center gap-2">
                                                <div class="w-4 h-4 bg-weekly_schedule_orange rounded-full"></div>
                                                <p class="font-Inter text-xs md:text-sm font-semibold text-black_light">プログラミング</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <div class="w-4 h-4 bg-primary_main rounded-full"></div>
                                                <p class="font-Inter text-xs md:text-sm font-semibold text-black_light">インターン</p>
                                            </div>
                                            <p class="ml-auto font-Inter text-xs text-gray-600">1年度時点</p>
                                        </div>
                                        <img src="{{ asset('images/weekly-schedule-01.png') }}" 
                                             class="w-full h-auto rounded-lg shadow-md" 
                                             alt="山田夏寧さんの週間スケジュール">
                                    </div>
                                    <!-- Profile 2 -->
                                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg">
                                        <div class="flex items-start gap-4 mb-6">
                                            <img src="{{ asset('images/weekly-schedule-icon-02.svg') }}" 
                                                 class="w-16 h-16 md:w-20 md:h-20 rounded-full object-cover shadow-md" 
                                                 alt="小野媛乃さんのプロフィール写真">
                                            <div class="flex-1">
                                                <h3 class="font-Poppins text-lg md:text-xl font-bold text-black_light mb-2">
                                                    小野媛乃<span class="text-sm font-medium">さん</span>
                                                </h3>
                                                <p class="font-Inter text-sm md:text-base text-gray-600 mb-1">3期生</p>
                                                <p class="font-Inter text-sm md:text-base text-primary_main font-semibold">慶應義塾大学理工学部3年</p>
                                                <p class="font-Inter text-xs md:text-sm text-gray-600 mt-2">POSSEで週20時間のインターン中</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap-4 mb-4">
                                            <div class="flex items-center gap-2">
                                                <div class="w-4 h-4 bg-weekly_schedule_orange rounded-full"></div>
                                                <p class="font-Inter text-xs md:text-sm font-semibold text-black_light">プログラミング</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <div class="w-4 h-4 bg-primary_main rounded-full"></div>
                                                <p class="font-Inter text-xs md:text-sm font-semibold text-black_light">インターン</p>
                                            </div>
                                            <p class="ml-auto font-Inter text-xs text-gray-600">2年度時点</p>
                                        </div>
                                        <img src="{{ asset('images/weekly-schedule-02.png') }}" 
                                             class="w-full h-auto rounded-lg shadow-md" 
                                             alt="小野媛乃さんの週間スケジュール">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- Weekly Schedule End -->

                        <!-- Membership Fee Start -->
                        <section id="membership-fee" class="mt-16 sm:mt-28 py-12 bg-primary_main">
                        <div class="text-white flex flex-col items-start sm:items-center gap-2 mx-6">
                            <h2 class="text-32 sm:text-40 leading-1.2 font-Urbanist">
                            Membership Fee
                            </h2>
                            <p class="text-sm font-bold leading-1.8">
                            会費について
                            </p>
                        </div>

                        <div class="flex flex-col items-center gap-4 mt-8 mx-6 sm:mx-0">
                            <div class="bg-white rounded-lg flex justify-between w-full sm:w-524 p-4 items-center gap-2">
                            <div class="text-primary_main text-17 leading-1.5 font-bold">
                                入会金
                            </div>
                            <span class="flex flex-1 font-bold h-0.5 bg-dot bg-repeat-space"></span>
                            <div class="flex font-bold items-center text-primary_gray">
                                <span class="font-Urbanist leading-1.2">
                                27,500
                                </span>
                                <span class="text-xs leading-1.4">
                                円 (税込)
                                </span>
                            </div>
                            </div>
                            <div class="bg-white rounded-lg w-full sm:w-524 p-4 flex flex-col gap-4">
                            <div class="text-primary_main text-17 leading-1.5 font-bold">
                                会費
                            </div>
                            <div class="flex flex-col gap-2.5 sm:gap-4">
                                <div class="flex flex-col gap-2.5 text-primary_gray">
                                <div class="flex justify-between items-center gap-2">
                                    <div class="text-xs sm:text-sm leading-1.7 sm:leading-1.7">
                                    前期フェーズ（5 ~ 9月）
                                    </div>
                                    <span class="flex flex-1 font-bold h-0.5 bg-dot bg-repeat-space"></span>
                                    <div class="flex font-bold items-center">
                                    <span class="font-Urbanist leading-1.2">
                                        27,500
                                    </span>
                                    <span class="text-xs leading-1.4">
                                        円/月 (税込)
                                    </span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center gap-2">
                                    <div class="text-xs sm:text-sm leading-1.7 sm:leading-1.7">
                                    後期フェーズ（10 ~ 3月）
                                    </div>
                                    <span class="flex flex-1 font-bold h-0.5 bg-dot bg-repeat-space"></span>
                                    <div class="flex font-bold items-center">
                                    <span class="font-Urbanist leading-1.2">
                                        27,500
                                    </span>
                                    <span class="text-xs leading-1.4">
                                        円/月 (税込)
                                    </span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center gap-2">
                                    <div class="text-xs sm:text-sm leading-1.7 sm:leading-1.7">
                                    チーム開発フェーズ(3 ~ 4月)
                                    </div>
                                    <span class="flex flex-1 font-bold h-0.5 bg-dot bg-repeat-space"></span>
                                    <div class="flex font-bold items-center">
                                    <span class="font-Urbanist leading-1.2">
                                        27,500
                                    </span>
                                    <span class="text-xs leading-1.4">
                                        円/月 (税込)
                                    </span>
                                    </div>
                                </div>
                                </div>
                                <div class="border border-primary_lighter p-4 flex flex-col gap-2 text-black_light">
                                <div class="text-sm leading-1.7 font-bold">
                                    会費内訳
                                </div>
                                <ul class="flex flex-wrap sm:gap-y-2 gap-x-6 text-sm sm:text-xs leading-1.7 sm:leading-1.7 list-none list-inside">
                                    <li class="sm:w-65.5">
                                    ・会場費（ハッカソン等のイベントにて）
                                    </li>
                                    <li>
                                    ・カリキュラム作成費用
                                    </li>
                                    <li class="sm:w-65.5">
                                    ・コミュニティスペース（HarborS）の利用費用
                                    </li>
                                    <li>
                                    ・講演会セッティング費用
                                    </li>
                                    <li class="sm:w-65.5">
                                    ・その他コミュニティ運用諸費用
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="text-primary_main text-13 font-bold leading-1.4 bg-primary_lighter py-2 px-4 rounded-lg">
                                会費が全額免除となる奨学生制度を用意しております。詳しくは説明会にてご確認ください。
                            </div>
                            </div>
                            <div class="bg-white rounded-lg w-full sm:w-524 p-4 flex flex-col gap-4">
                            <div class="text-primary_main text-17 leading-1.5 font-bold">
                                その他自己負担費用
                            </div>
                            <div class="flex justify-between text-primary_gray items-center gap-2">
                                <div class="text-xs sm:text-sm leading-1.5">
                                月額教材費用目安
                                </div>
                                <span class="flex flex-1 font-bold h-0.5 bg-dot bg-repeat-space"></span>
                                <div class="flex font-bold">
                                <span class="text-xs leading-1.6">
                                    約
                                </span>
                                <span class="font-Urbanist leading-1.1">
                                    500
                                </span>
                                <span class="text-xs leading-1.6">
                                    円/月 (税込)
                                </span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="text-xs leading-1.4 text-black_light flex gap-1">
                                <div>※</div>
                                <p>
                                    学習のためパソコンとネット環境、その他環境設定費用はご負担ください。
                                </p>
                                </div>
                                <div class="text-xs leading-1.4 text-black_light flex gap-1">
                                <div>※</div>
                                <p>
                                    教材費用はあくまでも目安です。場合によっては必要な本などが出てくる可能性もあります。
                                </p>
                                </div>
                                <div class="text-xs leading-1.4 text-black_light flex gap-1">
                                <div>※</div>
                                <p>
                                    別途イベント費用（リアルイベント，ハッカソン等）が発生します。
                                </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
                        <!-- Membership Fee End -->

                        <!-- FAQ Start -->
                        <section id="faq" class="mx-6 md:mx-0 mb-16 md:mb-104 pt-74.4">
                        <h2 class="font-bold text-primary_main md:text-42 text-32 font-Urbanist md:leading-1.2 text-center mb-6 md:mb-10">
                            FAQ
                            <span class="flex justify-center text-primary_gray font-bold mt-3 md:mt-2.5 text-sm font-notoSansJP" aria-hidden="true">よくある質問</span>
                        </h2>

                        <!-- Q&A 1問目 -->
                        <details class="cursor-pointer bg-primary_light md:w-5/6 lg:w-800 md:rounded-40 rounded-2xl mx-auto mb-4 border-border_lighter border-2 hover:bg-border_lighter relative">
                            <summary class="list-none mx-6 md:mx-8 py-6 relative font-bold text-base text-primary_gray gap-6 flex justify-between items-center">
                            <span class="md:w-688 xs:w-auto w-239 font-bold">
                                文系・プログラミング初心者でも活動についていけますか？
                            </span>
                            <span class="w-6 h-6 relative">
                                <span class="w-5 h-1 bg-primary_main block rounded absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></span>
                                <span class="w-5 h-1 bg-primary_main block rounded closed absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 -rotate-90"></span>
                            </span>
                            </summary>
                            <div class="xs:mx-8 mx-6 answer w-auto">
                            <p class="md:text-16 text-primary_gray text-sm leading-1.8 pb-6 font-normal">
                                文系の方でも問題なく参加可能です！POSSEメンバーの9割はプログラミング初心者で、メンバーの6割以上が文系の方になっています。今POSSE内エンジニアインターンをしている学生の約半分も文系です。<br>また、プログラミング学習環境が整っていて、週に1回2時間程度先輩に聞けたり、エンジニアにいつでも質問できたりするグループもあります。
                            </p>
                            </div>
                        </details>
                        <!-- Q&A 1問目 -->

                        <!-- Q&A 2問目 -->
                        <details class="cursor-pointer bg-primary_light md:w-5/6 lg:w-800 md:rounded-40 rounded-2xl mx-auto mb-4 border-border_lighter border-2 hover:bg-border_lighter relative">
                            <summary class="list-none mx-6 md:mx-8 py-6 relative font-bold text-base text-primary_gray gap-6 flex justify-between items-center">
                            <span class="md:w-688 xs:w-auto w-239 font-bold">
                                大学やバイトとの両立はできますか？
                            </span>
                            <span class="w-6 h-6 relative">
                                <span class="w-5 h-1 bg-primary_main block rounded absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></span>
                                <span class="w-5 h-1 bg-primary_main block rounded closed absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 -rotate-90"></span>
                            </span>
                            </summary>
                            <div class="xs:mx-8 mx-6 answer w-auto">
                            <p class="md:text-16 text-primary_gray text-sm leading-1.8 pb-6 font-normal">
                                大学やバイトとの両立は十分に可能です！POSSEでは、大学との両立を重視しており、試験前は活動が停止されます。また、メンバーの大半がバイトをしており、約4割が週20時間程のインターンと両立しながら活動しており、医学部生の参加者もいます。
                            </p>
                            </div>
                        </details>
                        <!-- Q&A 2問目 -->

                        <!-- Q&A 3問目 -->
                        <details class="cursor-pointer bg-primary_light md:w-5/6 lg:w-800 md:rounded-40 rounded-2xl mx-auto mb-4 border-border_lighter border-2 hover:bg-border_lighter relative">
                            <summary class="list-none mx-6 md:mx-8 py-6 relative font-bold text-base text-primary_gray gap-6 flex justify-between items-center">
                            <span class="md:w-688 xs:w-auto w-239 font-bold">
                                入会が可能な時期はいつですか？
                            </span>
                            <span class="w-6 h-6 relative">
                                <span class="w-5 h-1 bg-primary_main block rounded absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></span>
                                <span class="w-5 h-1 bg-primary_main block rounded closed absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 -rotate-90"></span>
                            </span>
                            </summary>
                            <div class="xs:mx-8 mx-6 answer w-auto">
                            <p class="md:text-16 text-primary_gray text-sm leading-1.8 pb-6 font-normal">
                                入会時期は春(5月)と秋(10月)の年2回、大学1年生を対象に入会を受け付けております。春入会が可能な方は春入会を強くお勧めしております。<br>※同期の人数も多く、カリキュラム面も余裕があるため
                            </p>
                            </div>
                        </details>
                        <!-- Q&A 3問目 -->
                        </section>
                        <!-- FAQ End -->

                        <!-- Line Start -->
                        <section class="lg:w-800 sm:w-11/12 xs:w-327 2xs:w-11/12 w-auto mx-4 py-8 sm:py-14 z-10 bg-line_gray xs:mx-auto md:rounded-24 rounded-3xl font-notoSansJP font-bold text-primary_gray">
                        <h2 class="text-center text-2xl font-Urbanist leading-120 font-bold" aria-hidden="true">
                            Official LINE
                            <span class="flex justify-center font-Urbanist text-primary_line w-ful mt-1 text-sm font-bold" aria-hidden="false">
                            公式LINE
                            </span>
                        </h2>
                        <div class="flex justify-center items-center text-center mt-1 mx-auto sm:w-auto w-182">
                            <p class="font-normal lg:text-xl md:text-lg text-sm mt-3">
                            最新情報は公式LINEから！お気軽に友達追加ください。
                            </p>
                        </div>
                        <a href="https://line.me/R/ti/p/@651htnqp?from=page" class="flex mx-auto rounded-64 justify-start pl-6 gap-1 bg-primary_line w-5/6 xs:w-252 leading-140 mt-4 md:h-14 h-11 text-center items-center text-sm font-bold text-white hover:opacity-50" target="_blank">
                            <img class="w-10 h-10" src="{{ asset('images/icon-line.svg') }}" alt="">
                            LINEを友だち追加する
                        </a>
                        </section>
                        <!-- Line End -->
                    </main>
</x-app-layout>