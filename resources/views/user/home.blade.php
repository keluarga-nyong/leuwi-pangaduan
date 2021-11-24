@extends('layouts.user.new-app')

@section('content')

        <div class="main-features ">
            <div class="container">
                <div class="row">
                   <h1 style="color: #fff;">SEJARAH</h1>
                </div>
            </div>
        </div>
       
        <!-- SEJARAH -->
        <section>
            <div class="container" style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h1  class="section-heading">SEJARAH LEUWI PANGADUAN</h1 >
                        <p class="justify" style="font-size:15px">Leuwi adalah bahasa Sunda yang berarti lubuk atau curug. Leuwi Pangaduan pun 
                            mempunyai makna tersendiri. Konon, air terjun rendah ini dahulu dimanfaatkan sebagai 
                            tempat mengadu masyarakat sekitar saat gundah gulana. Kesan mistis juga terukir di 
                            objek wisata ini, dahulu sering ada suara tangis seorang perempuan yang entah asalnya 
                            dari mana.
                        </p>
                        <p class="justify" style="font-size:15px">Leuwi Pangaduan merupakan salah satu objek wisata alam terbaru di Bogor 
                            tepatnya berada di daerah Bojong Koneng, Babakan Madang. Terletak di tengah hutan 
                            yang asri dan teduh, tentunya memiliki suasana yang asri nan meneduhkan. Sebuah Air 
                            Terjun yang memiliki aliran air yang rendah dengan suguhan pemandangan hutan tentu 
                            akan menjadi daya tarik tersendiri bagi wisatawan.
                        </p>
                        <p class="justify" style="font-size:15px">Fasilitas dan keindahan panorama gerbang masuk Leuwi Pangaduan cukup unik, 
                            terbuat dari bambu yang disusun sejajar membentuk rumah kayu.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('user/assets/img/leuwi.jpg') }}"  alt="Image Intro" style="width:400px;">
                    </div>
                </div>
            </div>
        </section>
        <!-- END SEJARAH -->

        <div class="main-features ">
            <div class="container">
                <div class="row">
                   <h1 style="color: #fff;">FASILITAS</h1>
                </div>
            </div>
        </div>
            
        <section>
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade in active text-center" id="tab-bottom1">
                        <img src="{{ asset('user/assets/img/fasilitas/parkir.png') }}" class="img-responsive center-block margin-bottom-30px" alt="Ultra Responsive">
                        <h3 class="text-accent-color">AREA PARKIR</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, reprehenderit eum cum laboriosam nulla tenetur! Corrupti, consequatur! Consectetur ab quae atque, consequatur ullam accusantium nesciunt magni reiciendis necessitatibus vero nihil?</p>
                    </div>
                    <div class="tab-pane fade text-center" id="tab-bottom2">
                        <img src="{{ asset('user/assets/img/fasilitas/toliet.png') }}" class="img-responsive center-block margin-bottom-30px" alt="Easy to Customize">
                        <h3 class="text-accent-color">TOILET</h3>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium facere eaque ea fuga accusamus, excepturi ad quidem dicta similique natus officiis totam officia rerum reiciendis, consequatur quia ab? Ut, error?</p>
                    </div>
                    <div class="tab-pane fade text-center" id="tab-bottom3">
                        <img src="{{ asset('user/assets/img/fasilitas/mushola.png') }}" class="img-responsive center-block margin-bottom-30px" alt="Clean and Elegant Design">
                        <h3 class="text-accent-color">MUSHOLA</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor ab esse ex veniam ut quae recusandae, voluptatibus nemo velit ea corporis! Sit, labore sint aut perspiciatis pariatur quaerat accusamus!</p>
                    </div>
                    <div class="tab-pane fade text-center" id="tab-bottom4">
                        <img src="{{ asset('user/assets/img/fasilitas/gazebo.png') }}" class="img-responsive center-block margin-bottom-30px" alt="Free Updates and Support">
                        <h3 class="text-accent-color">GAZEBO &amp; SAUNG</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia autem, iure animi consectetur odio aperiam at consequuntur impedit quasi. Rem beatae magnam alias corrupti veritatis vero. Vitae ea ad voluptatem!</p>
                    </div>
                    <div class="tab-pane fade text-center" id="tab-bottom5">
                        <img src="{{ asset('user/assets/img/fasilitas/instagram.png') }}" class="img-responsive center-block margin-bottom-30px" alt="Free Updates and Support">
                        <h3 class="text-accent-color">SPOT FOTO INSTAGRAMABLE</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vel debitis illum ullam nisi numquam ut amet nemo temporibus blanditiis, officiis exercitationem commodi sint. Quam consequatur officia praesentium repudiandae dolorum?</p>
                    </div>
                    <div class="tab-pane fade text-center" id="tab-bottom6">
                        <img src="{{ asset('user/assets/img/fasilitas/camping.png') }}" class="img-responsive center-block margin-bottom-30px" alt="Free Updates and Support">
                        <h3 class="text-accent-color">CAMPING GROUND</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam repudiandae, enim tenetur illum dolorum et non, corporis quasi impedit eum laboriosam delectus. Fuga beatae repellendus, similique corporis numquam quod natus?</p>
                    </div>
                </div>
                <div class="custom-tabs-line tabs-line-top">
                    <ul class="nav" role="tablist">
                        <li class="active"><a href="#tab-bottom1" role="tab" data-toggle="tab">Area Parkir</a></li>
                        <li><a href="#tab-bottom2" role="tab" data-toggle="tab">Toilet</a></li>
                        <li><a href="#tab-bottom3" role="tab" data-toggle="tab">Mushola</a></li>
                        <li><a href="#tab-bottom4" role="tab" data-toggle="tab">Gazebo dan Saung</a></li>
                        <li><a href="#tab-bottom5" role="tab" data-toggle="tab">Spot Foto Instagramable</a></li>
                        <li><a href="#tab-bottom6" role="tab" data-toggle="tab">Camping Ground</a></li>
                    </ul>
                </div>
            </div>
        </section>
       
@endsection('content')
        