<?php
use Illuminate\Support\Str;
?>
@extends('layout/app')
@section('page-contenu')
<!-- offcanvas-area:end -->

<div id="content" class="site-content">
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area d-flex p-relative align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12">
          <div class="breadcrumb-wrap text-left">
            <div class="breadcrumb-title">
              <h2>Nos actualités</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumb-wrap2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="../index.html">Accueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Nos actualités
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end -->
  <article id="post-100" class="post-100 page type-page status-publish hentry">
    <div class="pages-content">
      <div data-elementor-type="wp-page" data-elementor-id="100" class="elementor elementor-100" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
          <section class="elementor-section elementor-top-section elementor-element elementor-element-e52485b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="e52485b" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c511688" data-id="c511688" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-f75cd75 elementor-widget elementor-widget-Elementor-events-widget" data-id="f75cd75" data-element_type="widget" data-widget_type="Elementor-events-widget.default">
                    <div class="elementor-widget-container">
                      <!-- event-area -->
                      <section class="event pt-120 pb-90 p-relative fix">
                        <div class="animations-06">
                          <img decoding="async" src="../assets/uploads/2023/03/an-img-06.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-06.png" />
                        </div>
                        <div class="animations-07">
                          <img decoding="async" src="../assets/uploads/2023/03/an-img-07.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-07.png" />
                        </div>
                        <div class="animations-08">
                          <img decoding="async" src="../assets/uploads/2023/03/an-img-08.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-08.png" />
                        </div>
                        <div class="animations-09">
                          <img decoding="async" src="../assets/uploads/2023/03/an-img-09.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-09.png" />
                        </div>
                        <div class="container">
                          <div class="row">
                            @foreach ($actualites as $actualite )
                            <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                              <div class="event-item mb-30 hover-zoomin">
                                <div class="thumb">
                                  <a href="{{route('actualites.show',$actualite->slug)}}"><img loading="lazy" width="1180" height="787" src="../assets/uploads/2023/03/evn-img-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" /></a>
                                </div>
                                <div class="event-content">
                                  <div class="date">
                                    <strong>20</strong>{{\Carbon\Carbon::parse($actualite->date)->translatedFormat('j F Y')}}

                                  </div>
                                  <h3>
                                    <a href="{{route('actualites.show',$actualite->slug)}}"><?php  $titre=Str::limit($actualite->titre,30);?>{{$titre}}</a>
                                  </h3>
                                  <p>
                                  <?php  $contenu=Str::limit($actualite->contenu,100);?>{{$contenu}}
                                  </p>
                                  <div class="time">
                                  {{\Carbon\Carbon::parse($actualite->date)->translatedFormat('j F Y')}}
                                    <i class="fal fa-long-arrow-right"></i>
                                    <strong>{{$actualite->lieu}}</strong>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </section>
                      <!-- courses-area -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- .entry-content -->
  </article>
  <!-- #post-163 -->
</div>
<!-- #content -->
@endsection