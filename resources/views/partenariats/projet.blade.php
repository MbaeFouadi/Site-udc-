@extends('layout/app')

@section('page-contenu')

<div id="content" class="site-content">

  <!-- breadcrumb-area -->
  <section class="breadcrumb-area d-flex  p-relative align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12">
          <div class="breadcrumb-wrap text-left">
            <div class="breadcrumb-title">
              <h2>{{$projet->titre}}</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumb-wrap2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.html">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$projet->titre}}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end --><!-- Project Detail -->
  <section class="project-detail">
    <div class="container">
      <!-- Upper Box -->
      <div class="upper-box">
        <div class="single-item-carousel owl-carousel owl-theme">
          <figure class="image"> <img width="1180" height="787" src="../assets/uploads/2023/03/evn-img-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" /></figure>
        </div>
      </div>

      <!-- Lower Content -->
      <div class="lower-content2">
        <div class="row">
          <div class="text-column col-lg-9 col-md-12 col-sm-12">
            <div class="s-about-content wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">
              <br />
              <h2>{{$projet->titre}}</h2>
              <p>{{$projet->contenu}}</p>


              <div class="two-column mt-30">
                <div class="row aling-items-center">
                  <div class="image-column col-xl-6 col-lg-12 col-md-12">

                  </div>
                  <div class="text-column col-xl-6 col-lg-12 col-md-12 text-right"> </div>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div id="content" class="site-content"> 

    <section class="project-detail">
      <div class="container">
        <!-- Lower Content -->
        <div class="lower-content">
          <div class="row">
            <div class="text-column col-lg-9 col-md-9 col-sm-12">
              <!-- <div class="upper-box">
                <div class="single-item-carousel owl-carousel owl-theme">
                  <figure class="image"> <img width="1180" height="664" src="../assets/uploads/2023/03/couress-img-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" /> </figure>
                </div>
              </div> -->
              <div class="inner-column">

                <div class="faq-wrap pt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                  <h3>Activité du projet :</h3>

                  <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header">
                          <h2 class="mb-0">
                              <button class="faq-btn " type="button" data-bs-toggle="collapse"
                                  data-bs-target="#two"  >
                                  Realisations Phares                              </button>
                          </h2>
                      </div>
                      <div id="two" class="collapse " data-bs-parent="#accordionExample">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit corporis autem doloremque dolor nulla minima commodi, magnam odit numquam nobis ut! Doloribus modi corrupti maxime cupiditate. In ullam qui facere?</p> 
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header">
                          <h2 class="mb-0">
                              <button class="faq-btn " type="button" data-bs-toggle="collapse"
                                  data-bs-target="#two2"  >
                                  Activités en cours                                    </button>
                          </h2>
                      </div>
                      <div id="two2" class="collapse " data-bs-parent="#accordionExample">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit corporis autem doloremque dolor nulla minima commodi, magnam odit numquam nobis ut! Doloribus modi corrupti maxime cupiditate. In ullam qui facere?</p> 
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header">
                          <h2 class="mb-0">
                              <button class="faq-btn " type="button" data-bs-toggle="collapse"
                                  data-bs-target="#two3"  >
                                  Activités en préparation                                   </button>
                          </h2>
                      </div>
                      <div id="two3" class="collapse " data-bs-parent="#accordionExample">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit corporis autem doloremque dolor nulla minima commodi, magnam odit numquam nobis ut! Doloribus modi corrupti maxime cupiditate. In ullam qui facere?</p> 
                      </div>
                  </div>
                  
          
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- BLOC DES PROGRAMMES -->
       
          </div>
        </div>
      </div>
    </section>
    <!--End Project Detail --> 
</div>
    </div>
  </section>
  <!--End Project Detail -->

</div><!-- #content -->
<!-- footer -->

@endsection

<!-- Mirrored from wpdemo.zcubethemes.com/qeducato/events/basic-ui-ux-design-for-new-development/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2023 08:37:35 GMT -->