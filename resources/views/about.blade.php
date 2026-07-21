@extends('layouts.app')

@section('title', 'Tentang SeminarKu - Platform Seminar Terpercaya')

@section('content')


<main>
    <!-- Hero Section -->
    <section class="relative bg-primary-container py-24 md:py-32 overflow-hidden">
        <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
            <h1 class="font-headline-xl text-headline-xl text-on-tertiary-container mb-6">Tentang SeminarKu</h1>
            <p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl mx-auto">
                Menghubungkan aspirasi dengan inspirasi melalui platform seminar digital yang terorganisir dan berkelas dunia.
            </p>
        </div>
    </section>

    <!-- Apa itu SeminarKu? -->
    <section class="py-20 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-8 border-l-4 border-on-tertiary-container pl-6">Apa itu SeminarKu?</h2>
                    <div class="font-body-lg text-body-lg text-on-surface-variant space-y-6">
                        <p>SeminarKu adalah ekosistem digital revolusioner yang dirancang khusus untuk memfasilitasi pertukaran ilmu pengetahuan bagi para profesional, akademisi, dan antusias pembelajaran di seluruh Indonesia. Kami menyediakan ekosistem lengkap yang mencakup manajemen acara yang efisien, pendaftaran peserta yang terintegrasi, hingga penerbitan sertifikat otomatis.</p>
                        <p>Didirikan pada tahun 2024, kami telah bermitra dengan ratusan institusi terkemuka untuk menghadirkan seminar, workshop, dan konferensi yang tidak hanya informatif, tetapi juga transformatif bagi karir dan pengembangan diri setiap individu melalui akses informasi berkualitas yang kredibel.</p>
                    </div>
                </div>
                <div class="order-1 md:order-2 rounded-[24px] overflow-hidden shadow-xl">
                    <img class="w-full h-[400px] object-cover" data-alt="A professional and modern workspace environment with high-end tech equipment, soft daylight streaming through large windows, and a clean minimalist aesthetic. The image features a palette of deep navy and bright teal accents, reflecting a corporate yet innovative atmosphere for a tech seminar platform." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8mz5yRt2bCtCaqc1D4gsCKM6IKGSpK-6tAHewYSvZ9MP6xJQznAUmDRaZtPvmonQran_hQIJtQcLS64iOk6dUf6KnE3J2vUPnubN6YpzGRQJrYzXKtC8caVlF8qYt68Gkj9W3oh-MKuzWgDy4TUCyEpWk3_6gv2S5b2Xa8_93Dgwb6Iv0a9k2rbuS8FPgeNnN-IACzyImdeNmT-2MwZQncC7uJYIO7915GLfT7oof-1A_aN7FNIt2sw">
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="py-20 bg-surface-container-low">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Visi -->
                <div class="bento-card bg-surface-container-lowest p-10 rounded-[24px] border border-outline-variant transition-all duration-700 opacity-100 translate-y-0">
                    <div class="w-16 h-16 bg-on-tertiary-container/10 rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-on-tertiary-container text-4xl">visibility</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Visi</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Menjadi platform agregator seminar nomor satu di Asia Tenggara yang mendemokratisasi akses terhadap pendidikan berkualitas melalui inovasi teknologi dan kolaborasi strategis.
                    </p>
                </div>
                <!-- Misi -->
                <div class="bento-card bg-surface-container-lowest p-10 rounded-[24px] border border-outline-variant transition-all duration-700 opacity-100 translate-y-0">
                    <div class="w-16 h-16 bg-secondary-container rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-secondary text-4xl">rocket_launch</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Misi</h3>
                    <ul class="font-body-md text-body-md text-on-surface-variant space-y-3">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-on-tertiary-container mt-1">check_circle</span>Menyediakan antarmuka pendaftaran yang mulus dan aman bagi seluruh peserta.</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-on-tertiary-container mt-1">check_circle</span>Mendukung penyelenggara acara dengan alat manajemen seminar yang komprehensif, mulai dari manajemen peserta hingga verifikasi pembayaran.</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-on-tertiary-container mt-1">check_circle</span>Mempercepat proses apresiasi peserta melalui sistem pembuatan sertifikat otomatis yang kredibel.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tim Kami -->
    <section class="py-20 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Tim Kami</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Para inovator di balik layar SeminarKu</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Ahmad Syahrul -->
                <div class="group transition-all duration-700 opacity-100 translate-y-0">
                    <div class="relative h-96 rounded-[24px] overflow-hidden mb-6">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A professional portrait of a male tech leader, Ahmad Syahrul, looking confident in a smart-casual blazer. The background is a blurred high-tech office with teal and navy lighting. Clean, sharp photography style focusing on professional reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrauUa177iQB_-0iudeVNRQoz1yTzFoonwNMsL6mwxOhrzcPPnum_x-WvJENwsVbKluCCo8PtoYXbu_tU3fc0lsMQc0d4ATwlfWFAH68BYQ307SDb1pOYRwjPAqq55XI-zV8zk_NiJii9FJjPn_FN2qxRZL6P0V1tXOp1prjieAD3ncvtPbdiqptTIQoFBB4rBMsq9mMDPJ-brKKLnSMpU-H5TvSOc9gyDvwfxTgRru-yFG9oKiX9aIg">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-8">
                            <span class="text-white font-bold text-xl">AS</span>
                        </div>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary">Ahmad Syahrul</h4>
                    <p class="text-on-secondary-container font-label-lg">Chief Executive Officer</p>
                </div>
                <!-- Nadia Rahma -->
                <div class="group transition-all duration-700 opacity-100 translate-y-0">
                    <div class="relative h-96 rounded-[24px] overflow-hidden mb-6">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A professional portrait of a female creative director, Nadia Rahma, in a modern, brightly lit studio. She wears a seafoam colored professional outfit. The atmosphere is academic and innovative. Cinematic lighting with subtle navy shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDU_-sVXjE_q1BgfTiejT-Ci4lb3dVWPdFfysD5B1Gv_Y8G6p3BBPeDdnKs0qkqFR8av2gQhwznv0wfmZwKIsdzfLJRFOtN80ol2pwgVMvSzzdYGh2nMy8pQN_F2B0Py_8SXZfTxFRLcsqTtWWS6D8zGa18pSnMJ2PvP4_jZr1-qTiQITFxrwnXjqKwx2iS9_P9zq1DvsuNvpbOPzGZvxD3TJIevjsEtHffBttkDQ7cXLZvFe8mX45_mw">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-8">
                            <span class="text-white font-bold text-xl">NR</span>
                        </div>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary">Nadia Rahma</h4>
                    <p class="text-on-secondary-container font-label-lg">Chief Operating Officer</p>
                </div>
                <!-- Bagas Firmansyah -->
                <div class="group transition-all duration-700 opacity-100 translate-y-0">
                    <div class="relative h-96 rounded-[24px] overflow-hidden mb-6">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A sharp professional portrait of a male CTO, Bagas Firmansyah, in a contemporary workspace with geometric architectural elements. Deep navy and teal color palette with soft backlight. Focused and visionary expression." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2Eoye9G1AEPxTtznV_TdB4olhzWYFSy4xk2ZM21GdbN66BYLA3Fq0EsrlBjP4epdEsWx1mT4tAZiZ1NAm-8cqCeEcCdTL65r_pIWWgHj66h3mTDIpem3dnd8M8HkYDK0H5rT3kXHjpiZpDTnWZHjoHRrs-2OG8rWaR69wePjUsmrWCd6YsOrKdbKh-nno05lb_79mBUdNiE4gVmPjXhEpjAuNQPC2X3I_KY_l8q4jOE4vd8aPs9Gb8Q">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-8">
                            <span class="text-white font-bold text-xl">BF</span>
                        </div>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary">Bagas Firmansyah</h4>
                    <p class="text-on-secondary-container font-label-lg">Technology Lead</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section class="py-20 bg-primary-container text-on-tertiary">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="bg-surface-container-highest/10 p-12 rounded-[32px] backdrop-blur-sm border border-white/10 flex flex-col md:flex-row justify-between items-center gap-12">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-tertiary-container mb-4">Hubungi Kami</h2>
                    <p class="font-body-lg text-body-lg text-on-primary-container">Punya pertanyaan? Kami siap membantu perjalanan belajar Anda.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-6 w-full md:w-auto">
                    <a class="flex items-center gap-4 bg-surface-container-lowest text-primary px-8 py-4 rounded-xl hover:bg-secondary-container transition-all group shadow-lg duration-700 opacity-100 translate-y-0" href="mailto:info@seminarku.com">
                        <span class="material-symbols-outlined text-on-tertiary-container group-hover:scale-110 transition-transform">mail</span>
                        <span class="font-label-lg">info@seminarku.com</span>
                    </a>
                    <a class="flex items-center gap-4 bg-on-tertiary-container text-white px-8 py-4 rounded-xl hover:opacity-90 transition-all group shadow-lg duration-700 opacity-100 translate-y-0" href="#">
                        <span class="material-symbols-outlined group-hover:scale-110 transition-transform">alternate_email</span>
                        <span class="font-label-lg">@seminarku_id</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
