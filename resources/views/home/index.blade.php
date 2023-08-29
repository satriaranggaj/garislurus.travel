@extends('layouts.landing')


@section('content')
    {{-- Jumbotron --}}
    <section id="jumbotron">
        <div class="jumbotron d-flex flex-col" style="padding-top:74px;">
            <div class="grow d-flex flex-col justify-content-end align-items-end w-100 py-5">
                <div class="w-100">
                    <div class="container text-center">
                        <h1 class="fs-[34px] fs-md-[48px] text-uppercase text-white font-heading mb-3 lh-base">
                            Mantapkan hati & luruskan niat ibadah umroh bersama garislurus
                        </h1>
                        <h2 class="text-white fs-5 fs-md-4 fw-normal text-secondary lh-base mb-5">
                            Telah melayani ribuan jamaah haji & umroh sejak tahun 2008,<br class="d-none d-md-inline" /> yang
                            terintegrasi langsung oleh
                            kerajaan Saudi Arabia.
                        </h2>

                        <button type="button" class="btn btn-primary btn-lg text-white">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Warning Scam/Fraud --}}

    <section id="warning-scam">
        <div class="container">
            <div class="title">
                <center>
                    <h1 class="font-heading">
                        WASPADA, JANGAN TERTIPU!
                    </h1>
                </center>
            </div>
            <div class="warning-content">
                <div class="desc-pict">
                    <div class="desc">
                        <p>
                            Travel Umroh Berkedok Biaya Murah Dengan Iming-iming Fasilitas Mewah
                        </p>
                    </div>
                    <div class="pict">
                        <img src="img/200jamaahumroh.webp" alt="thumbnail penipuan">
                    </div>
                </div>
                <div class="just-pict">
                    <div class="pict">
                        <img src="img/alamakumroh.webp" alt="thumbnail penipuan">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- cause of fail --}}

    <section id="cause-of-fail">
        <div class="container">
            <div class="title-desc">
                <div class="title">
                    <h2 class="font-heading">
                        3 PENYEBAB JAMAAH UMROH GAGAL BERANGKAT KE BAITULLAH
                    </h2>
                </div>
                <div class="list-desc">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffcc00}</style><path d="M400 0c5 0 9.8 2.4 12.8 6.4c34.7 46.3 78.1 74.9 133.5 111.5l0 0 0 0c5.2 3.4 10.5 7 16 10.6c28.9 19.2 45.7 51.7 45.7 86.1c0 28.6-11.3 54.5-29.8 73.4H221.8c-18.4-19-29.8-44.9-29.8-73.4c0-34.4 16.7-66.9 45.7-86.1c5.4-3.6 10.8-7.1 16-10.6l0 0 0 0C309.1 81.3 352.5 52.7 387.2 6.4c3-4 7.8-6.4 12.8-6.4zM288 512V440c0-13.3-10.7-24-24-24s-24 10.7-24 24v72H192c-17.7 0-32-14.3-32-32V352c0-17.7 14.3-32 32-32H608c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32H560V440c0-13.3-10.7-24-24-24s-24 10.7-24 24v72H448V454c0-19-8.4-37-23-49.2L400 384l-25 20.8C360.4 417 352 435 352 454v58H288zM70.4 5.2c5.7-4.3 13.5-4.3 19.2 0l16 12C139.8 42.9 160 83.2 160 126v2H0v-2C0 83.2 20.2 42.9 54.4 17.2l16-12zM0 160H160V296.6c-19.1 11.1-32 31.7-32 55.4V480c0 9.6 2.1 18.6 5.8 26.8c-6.6 3.4-14 5.2-21.8 5.2H48c-26.5 0-48-21.5-48-48V176 160z"/></svg>
                            <p>Travel haji belum mengantongi izin dan legalitas resmi dari pemerintah.</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffcc00}</style><path d="M400 0c5 0 9.8 2.4 12.8 6.4c34.7 46.3 78.1 74.9 133.5 111.5l0 0 0 0c5.2 3.4 10.5 7 16 10.6c28.9 19.2 45.7 51.7 45.7 86.1c0 28.6-11.3 54.5-29.8 73.4H221.8c-18.4-19-29.8-44.9-29.8-73.4c0-34.4 16.7-66.9 45.7-86.1c5.4-3.6 10.8-7.1 16-10.6l0 0 0 0C309.1 81.3 352.5 52.7 387.2 6.4c3-4 7.8-6.4 12.8-6.4zM288 512V440c0-13.3-10.7-24-24-24s-24 10.7-24 24v72H192c-17.7 0-32-14.3-32-32V352c0-17.7 14.3-32 32-32H608c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32H560V440c0-13.3-10.7-24-24-24s-24 10.7-24 24v72H448V454c0-19-8.4-37-23-49.2L400 384l-25 20.8C360.4 417 352 435 352 454v58H288zM70.4 5.2c5.7-4.3 13.5-4.3 19.2 0l16 12C139.8 42.9 160 83.2 160 126v2H0v-2C0 83.2 20.2 42.9 54.4 17.2l16-12zM0 160H160V296.6c-19.1 11.1-32 31.7-32 55.4V480c0 9.6 2.1 18.6 5.8 26.8c-6.6 3.4-14 5.2-21.8 5.2H48c-26.5 0-48-21.5-48-48V176 160z"/></svg>
                            <p>Travel tidak terintegrasi langsung dengan kerajaan Saudi Arabia.</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffcc00}</style><path d="M400 0c5 0 9.8 2.4 12.8 6.4c34.7 46.3 78.1 74.9 133.5 111.5l0 0 0 0c5.2 3.4 10.5 7 16 10.6c28.9 19.2 45.7 51.7 45.7 86.1c0 28.6-11.3 54.5-29.8 73.4H221.8c-18.4-19-29.8-44.9-29.8-73.4c0-34.4 16.7-66.9 45.7-86.1c5.4-3.6 10.8-7.1 16-10.6l0 0 0 0C309.1 81.3 352.5 52.7 387.2 6.4c3-4 7.8-6.4 12.8-6.4zM288 512V440c0-13.3-10.7-24-24-24s-24 10.7-24 24v72H192c-17.7 0-32-14.3-32-32V352c0-17.7 14.3-32 32-32H608c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32H560V440c0-13.3-10.7-24-24-24s-24 10.7-24 24v72H448V454c0-19-8.4-37-23-49.2L400 384l-25 20.8C360.4 417 352 435 352 454v58H288zM70.4 5.2c5.7-4.3 13.5-4.3 19.2 0l16 12C139.8 42.9 160 83.2 160 126v2H0v-2C0 83.2 20.2 42.9 54.4 17.2l16-12zM0 160H160V296.6c-19.1 11.1-32 31.7-32 55.4V480c0 9.6 2.1 18.6 5.8 26.8c-6.6 3.4-14 5.2-21.8 5.2H48c-26.5 0-48-21.5-48-48V176 160z"/></svg>
                            <p>Visa yang keluar ilegal atau tidak menggunakan visa resmi haji furoda.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pict-desc">
                <div class="pict">
                    <img src="img/kerjasama.webp" alt="thumbnail kerjasama">
                </div>
                <div class="desc">
                    <center>
                    <p>
                        Garislurus telah bekerjasama dengan Muasasah WFOOD Albait
                    </p>
                    </center>
                </div>
            </div>
        </div>
    </section>

@endsection
