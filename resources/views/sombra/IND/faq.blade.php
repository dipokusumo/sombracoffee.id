@extends('layouts.appsombra_ind')
@section('title', 'Tentang')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('faq') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('faq_en') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; ">EN</a>
    </p>
</li>
@endsection

@section('css')
@endsection

@section('content')
<section class="FAQ" style="padding-bottom: 40px; padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: brown; font-weight: bolder;  font-family: 'Alatsi', sans-serif;">FAQ
                        </h5>
                        <hr style="color: orange;">
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Apa itu prosess Fullwashed Dalam kopi ?
                        </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Proses fullwash merupakan tahapan dimana masuk kepada proses
                            sortasi menggunakan pulper. Kemudian dilakukan proses perendaman dari 12-34 jam tergantung
                            akan faktor lain seperti kelembapan dan faktor lingkungan. Proses peredaman hanya dilakukan
                            1 kali saja. Setelah itu, dilakukan proses pengeringan untuk mengurangi kadar air hingga
                            dalam rasio 10-12 %. Setelah kering, biji disimpan dan didiamkan. Kemudian di tahap
                            terakhir, biji kopi dimasukan kedalam huller untuk menghilangkan kulit tanduk.
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Apa Itu Produk Arabica Bajawa Fullwashed
                            Sombra Coffee ? </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Produk Kopi Arabica Bajawa Fullwashed merupakan salah satu
                            dedikasi yang diberikan Sombra Coffee terhadap konsumen untuk dapat merasakan kenikmatan
                            kopi Arabica Bajawa dengan cita rasa coklat, buah dan gula merah. </p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Apa Itu Produk Arabica Bajawa Premium
                            Fullwashed Sombra Coffee ? </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Produk kopi Arabica Bajawa Premium Fullwashed merupakan salah
                            satu dedikasi yang diberikan Sombra Coffee terhadap konsumen untuk dapat merasakan
                            kenikmatan kopi Arabica Bajawa dengan kualitas premium yang menggunakan biji kopi tingkat I.
                            Cita rasa yang diberikan yaitu Chocolate, Jasmine, Nutty.
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Apa Itu Produk Modhe Blend dari Sombra
                            Coffee ? </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Sombra Coffee menghadirkan variant kopi Modhe Blend dengan
                            mencampurkan kopi Arabica Bajawa dan Robusta Manggarai dengan cita rasa yang chocolate,
                            caramel, brown sugar pas untuk dicampur dan dijadikan bahan dasar minuman kopi yang
                            bervarias dengan base espresso, seperti café latte dan lain-lain. </p><br>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Apa Perbedaan Arabica Bajawa dan Arabica
                            Bajawa Premium ?
                        </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Perbedaanya lebih kepada penggunakan tingkat biji kopi dan cita
                            rasa yang dihasilkan dari kopi itu sendiri. Ketika sudah dalam bentuk roasted bean yaitu
                            untuk arabica bajawa lebih kepada rasa coklat, buah dan gula merah. Kemudian terkait kopi
                            Sombra Arabica Bajawa Premium menggunakan biji kopi tingkat 1, serta memiliki cita rasa
                            seperti bunga jasmine dengan aroma coklat dan nutty. Tentunya hasil cita rasa ini setelah
                            dilakukan uji terhadap cita rasa kopi oleh seorang Q-grader yang memiliki keahlian dalam
                            bidang tersebut.</p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">
                            Apa perbedaan Arabica Bajawa dan Arabica Bajawa Premium dengan Modhe Blend ?
                        </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Tentu setiap kopi memiliki cita rasanya sendiri, seperti Modhe
                            Blend memiliki cita rasa yang pas untuk dicampur dan dijadikan bahan dasar minuman kopi
                            espresso yang bervariasi, seperti dijadikan cafe latte dan lain-lain, untuk Arabica Bajawa
                            premium cocok untuk para penikmat kopi yang suka dengan aroma dan rasa kopi yang strong
                            untuk manual brew, dan Arabica Bajawa menjadi pilihan menarik untuk penikmat kopi tubruk.
                            <br>
                            Walaupun kebanyakan kopi memiliki tingkat keasaman yang tinggi, kopi Arabica Bajawa tidak
                            begitu asam dan tidak perih di lambung,sehingga aman bagi yang memiliki gangguan pada
                            lambung. Kemudian biji kopi ini juga mengandung dua kali lebih banyak gula dibandingkan
                            Robusta, dan aman dikonsumsi dalam sehari 2-3 cangkir di pagi/siang hari.
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Produk Arabica Bajawa Premium Cocok untuk
                            minuman kopi seperti apa?
                        </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Arabica Bajawa Premium cocok untuk manual brew, bagi anda yang
                            suka dengan aroma kopi yang kuat dan rasa yang kompleks arabica bajawa premium menjadi
                            pilihan terbaik untuk anda </p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <h6 style="font-weight: bold;  font-family: 'Alatsi', sans-serif;">Bagaimana Cara pengiriman produk Sombra
                            Coffee?
                        </h6>
                        <p style=" font-family: 'Alatsi', sans-serif; text-align: justify;">Sombra coffee sudah tersedia di Tokopedia dan juga Shopee.
                            Untuk pemesanan dalam kota Kupang, bisa melalui Grab dan Maxim. Kopi sombra juga menyediakan
                            coffee supply bagi pemilik usaha tanpa dikenakan biaya pengantaran. Dan untuk di luar kota
                            Kupang, pengiriman bisa dilakukan dengan JNE, Si Cepat dan Lion Parcel. </p>
                    </div>
                </div>



            <div class="col-sm-1"></div>
        </div>
    </div>
</section>
@endsection

@section('footerarticle')
    <ul class="nav flex-column">
        @foreach($footerarticle as $f)
            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
                <a href="{{ route('article_detail', $f->judul_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('script')
@endsection
