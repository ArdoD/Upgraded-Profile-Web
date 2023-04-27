<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('layouts.header')
    <!-- Main Content -->

    <!-- Section 1 -->
    <div id="aboutme" class="section-box-1">
        <div class="flex-container1">
            <div class="dodo-image-container" data-aos="fade-right">
                <img class="dodo-image" src="img/dodo.png">
            </div>
            <div class="section1-description" data-aos="fade-left">
                <h1>Ardo Damarjati</h1>
                <div class="line-in-section1"></div>
                <p>Saya adalah seorang pemuda sederhana yang menyukai alam namun tidak sanggup hidup di alam. Saya lahir
                    di Klaten pada tanggal 30 Juni 2003. Saya memiliki sifat yang unik yaitu sifat pantang menyerah dan membenci kegagalan.
                    Tidak hanya sifat yang unik, saya juga memiliki hobi yang unik yaitu mengisi waktu luang dengan kesendirian
                    sembari membaca buku yang berkaitan dengan sejarah. Saat ini saya sedang menekuni tanggung jawab sebagai mahasiswa penerima
                    beasiswa PPTI BCA angkatan ke 12. Sebagai bagian dari PPTI 12, tentunya saya terus berusaha untuk mengembangkan kemampuan Saya
                    dalam bidang Informasi Teknologi, salah satunya dibidang Web Development dan Database Management .
                </p>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div id="principle" class="section-box-2">
        <div class="flex-container2" data-aos="fade-up">
            <div class="card" style="width: 20rem;"  >
                <img src="img/mission.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mission</h5>
                    <p class="card-text">Menjadi pribadi unggul dengan penuh kompetensi sehingga mampu
                        memberikan dampak positif kepada masyarakat luas.
                    </p>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="img/vision.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vision</h5>
                    <p class="card-text">Menjadi pribadi yang dapat bermanfaat bagi orang lain dan dapat membawa perubahan positif kepada masyarakat luas
                    </p>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="img/value.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Value</h5>
                    <p class="card-text">Berpegang teguh pada hati nurani serta
                        menghindari segala tindakan yang menyimpang dari aturan dan tata krama.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section-box-3">
        <div class="flex-container3">
            <div class="text-in-section3">
                <h1 data-aos="fade-left">My Favorite Quotes in Javanesse</h1>
                <p data-aos="fade-right">"Ojo Dadi Uwong Sing Rumongso Iso lan Rumangsa Pinter,<br>Nanging Dadiyo Uwong Sing Iso lan Pinter Rumangsa"</p>
            </div>
        </div>
    </div>

    <!-- section 4 -->
    <div id="education" class="section-box-4">
            <div class="flex-container4">
                <div class="img-section4" data-aos="fade-right">
                    <img class="dodo3-img" src="img/dodo3.png">
                </div>
                <div class="education-text" data-aos="fade-up">
                    <section id="resume" class="resume">
                      <div class="container" data-aos="fade-up">
                        <div class="row">
                            <h3 class="resume-title">Education</h3>
                            <div class="resume-item">
                              <h4>Binus University x PPTI BCA</h4>
                              <h5>2021 - Now</h5>
                            </div>
                            <div class="resume-item">
                              <h4>SMA Negeri 7 Kota Tangerang Selatan</h4>
                              <h5>2018 - 2021</h5>
                            </div>
                            <div class="resume-item">
                              <h4>SMP Stella Maris BSD</h4>
                              <h5>2015 - 2018</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                </div>
            </div>
    </div>

    <!-- section 5 -->
    <div id="achievement" class="section-box-5">
        <div class="flex-container5">
            <div class="achievement-text">
                <section id="resume1" class="resume1">
                    <div class="container1" data-aos="fade-up">
                        <div class="row1">
                            <h3 class="resume-title1">Achievement</h3>
                            <div class="resume-item1">
                              <h4>Penerima Beasiswa PPTI BCA</h4>
                              <h5>2021-Now</h5>
                            </div>
                            <div class="resume-item1">
                              <h4>Lulusan Terbaik SMAN 7 Kota Tangerang Selatan</h4>
                              <h5>2021</h5>
                            </div>
                            <div class="resume-item1">
                              <h4>Juara 2 LCC 4 Pilar Tingkat Kota Tangerang Selatan</h4>
                              <h5>2018</h5>
                            </div>
                            <div class="resume-item1">
                              <h4>Juara 2 LCC 4 Pilar Trikabta</h4>
                              <h5>2018</h5>
                            </div>
                            <div class="resume-item1">
                              <h4>Juara 1 DUVICTION LCC 4 Pilar Kebangsaan</h4>
                              <h5>2018</h5>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="img-section4" data-aos="fade-left">
                <img class="dodo4-img" src="img/dodo4 (2).png">
            </div>
        </div>
    </div>

    <!-- Section 6 -->
    <div id="skills" class="section-box-6">
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content" class="content-container">
                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill" style="font-size: 1vw;">HTML <i class="val"></i></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;height:1vw; background:#8dc97f;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill" style="font-size: 1vw;">CSS <i class="val"></i></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;height:1vw;background:#8dc97f;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="progress" >
                            <span class="skill" style="font-size: 1vw;">MySQL <i class="val"></i></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%; height:1vw;background:#8dc97f;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65% </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill" style="font-size: 1vw;">C Proggramming Language<i class="val"></i></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;height:1vw;background:#8dc97f;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill" style="font-size: 1vw;">Python<i class="val"></i></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;height:1vw;background:#8dc97f;" aria-valuenow="50" aria-valuemin="50" aria-valuemax="50">50%</div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill" style="font-size: 1vw;">Filmora<i class="val"></i></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;height:1vw;background:#8dc97f;" aria-valuenow="60" aria-valuemin="60" aria-valuemax="60">60%</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- special --}}
    <div id="device" class="special">
        <div class="special-title" data-aos="fade-up">
            <div class="section-title-special">
                <h2>My Device</h2>
            </div>
        </div>
        <div class="button-container" data-aos="fade-up">
            <div class="wrapper">
                <a href="/device">Go to My Device</a>
            </div>
        </div>
    </div>

    <!-- Section 7 -->
    <div id="contact" class="section-box-7">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Sentul, Bogor</p>
                            </div>

                            <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>damarjatiardo@gmail.com</p>
                            </div>

                            <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 3891690775</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Facebook</h4>
                            <p>Ardo Damarjati</p>
                            </div>

                            <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Instagram:</h4>
                            <p>@ardodamarjati</p>
                            </div>

                            <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Twitter</h4>
                            <p>ardodamarjati</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>GitHub</h4>
                            <p>ArdoD</p>
                            </div>

                            <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Line</h4>
                            <p>ardodamarjati</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="copyright-box">
                <p class="copyright">&copy; Copyright <strong>Ardo-Damarjati</strong>. All Rights Reserved</p>
                <div class="credits">
                Designed by Djati_ardo</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="js/app.js"></script>

    <script>
        var header = document.querySelector('header');

        window.addEventListener('scroll', function(){
            if(window.pageYOffset > 100){
                header.classList.add('bg-black','shadow')
            } else{
                header.classList.remove('bg-black', 'shadow')
            }
        })
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>
</html>
