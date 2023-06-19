@extends('layout/app')

  @section('page-contenu')
  <!-- header-end -->
  <!-- offcanvas-area -->
  <div class="offcanvas-menu">
    <span class="menu-close"><i class="fal fa-times"></i></span>
    <form role="search" method="get" id="searchform" class="searchform"
      action="https://wpdemo.zcubethemes.com/qeducato/">
      <input type="text" name="s" id="search" value="" placeholder="Search" />
      <button><i class="fal fa-search"></i></button>
    </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
      <div id="cssmenu-2" class="menu-our-links-container">
        <ul id="menu-our-links" class="menu">
          <li id="menu-item-2837"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2837"><a
              href="../index.html">Home</a></li>
          <li id="menu-item-2839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839"><a
              href="../about-us/index.html">About Us</a></li>
          <li id="menu-item-2841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841"><a
              href="../our-courses/index.html">Courses</a></li>
          <li id="menu-item-2838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2838"><a
              href="../blog/index.html">Blog</a></li>
          <li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"><a
              href="../contact/index.html">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="cssmenu2" class="menu-one-page-menu-container">
      <ul id="menu-one-page-menu-1" class="menu">

        <li class="menu-item menu-item-type-custom menu-item-object-custom">
          <span>Email Now</span> <strong><a href="mailto:info@example.com"> info@example.com </a></strong>
        </li>

        <li class="menu-item menu-item-type-custom menu-item-object-custom">
          <span>Call Now !</span> <strong><a href="tel:+917052101786">+91 7052 101 786</a></strong>
        </li>
      </ul>
    </div>


  </div>
  <div class="offcanvas-overly"></div>
  <!-- offcanvas-area:end -->

  <div id="content" class="site-content">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-12 col-lg-12">
            <div class="breadcrumb-wrap text-left">
              <div class="breadcrumb-title">
                <h2>Partenariats</h2>
              </div>
            </div>
          </div>
          <div class="breadcrumb-wrap2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Université</a></li>
                <li class="breadcrumb-item active" aria-current="page">Partenariats</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <article id="post-102" class="post-102 page type-page status-publish hentry">
      <div class="pages-content">
        <div data-elementor-type="wp-page" data-elementor-id="102" class="elementor elementor-102"
          data-elementor-settings="[]">
          <div class="elementor-section-wrap">
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-eec9401 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
              data-id="eec9401" data-element_type="section">
              <div class="elementor-container elementor-column-gap-no">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92eb996"
                  data-id="92eb996" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                      class="elementor-element elementor-element-b23847e elementor-widget elementor-widget-Elementor-portfolio-widget"
                      data-id="b23847e" data-element_type="widget"
                      data-widget_type="Elementor-portfolio-widget.default">
                      <div class="elementor-widget-container">
                        <!-- gallery-area -->
                        <section id="portfolio" class="pt-60">
                          <div class="container">
                            <div class="portfolio ">
                              <div class="row align-items-end">
                                <div class="col-lg-12">
                                  <div class="my-masonry text-center wow fadeInDown  animated"
                                    data-animation="fadeInDown" data-delay=".4s">
                                    <div class="button-group filter-button-group ">
                                      <button data-filter=".business">PROJETS</button>
                                      <h2 class="active" data-filter="*">Projets avec les partenaires</h2>
                                    </div>
                                      <section class="event p-relative fix">
                                          <div class="animations-06">
                                            <img decoding="async"
                                              src="../assets/uploads/2023/03/an-img-06.png"
                                              alt="../assets/uploads/2023/03/an-img-06.png">
                                          </div>
                                          <div class="animations-07"><img decoding="async"
                                              src="../assets/uploads/2023/03/an-img-07.png"
                                              alt="../assets/uploads/2023/03/an-img-06.png">
                                          </div>
                                          <div class="animations-08"><img decoding="async"
                                              src="../assets/uploads/2023/03/an-img-08.png"
                                              alt="../assets/uploads/2023/03/an-img-06.png">
                                          </div>
                                          <div class="animations-09"><img decoding="async"
                                              src="../assets/uploads/2023/03/an-img-09.png"
                                              alt="../assets/uploads/2023/03/an-img-06.png">
                                          </div>
                                          <div class="container">
                                            <div class="row">
                                              @foreach ($partenaires as $partenaire )
                                              <div class="col-lg-4 col-md-6  wow fadeInUp animated"
                                                data-animation="fadeInUp" data-delay=".4s">
                                                <div class="event-item mb-30 hover-zoomin">
                                                  <div class="thumb">
                                                    <a href="{{route('projets.show',$partenaire->slug)}}"><img loading="lazy" width="1180" height="787"
                                                        src="../assets/uploads/2023/03/evn-img-1.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="" decoding="async" /></a>
                                                  </div>
                                                  <div class="event-content">
                                                    <!-- <div class="date"><strong>20</strong> March, 2023</div> -->
                                                    <h3><a href="{{route('projets.show',$partenaire->slug)}}">{{$partenaire->titre}}</a></h3>
                                                    <p>{{$partenaire->contenu}}</p>
                                                    <!-- <div class="time">20 March, 2023 <i class="fal fa-long-arrow-right"></i> <strong>12/A, NewYork Sydney City</strong></div> -->
                                                  </div>
                                                </div>
                                              </div>
                                              @endforeach
                                             
                                              <!-- <div class="col-lg-4 col-md-6  wow fadeInUp animated"
                                                data-animation="fadeInUp" data-delay=".4s">
                                                <div class="event-item mb-30 hover-zoomin">
                                                  <div class="thumb">
                                                    <a href="projet.html"><img width="1180" height="787"
                                                        src="../assets/uploads/2023/03/evn-img-2.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /></a>
                                                  </div>
                                                  <div class="event-content">
                                                   
                                                    <h3><a href="projet.html">Digital Education Market Briefing: Minnesota
                                                        2023</a></h3>
                                                    <p>Seamlessly visualize quality ellectual capital without superior
                                                      collaboration and idea tically</p>
                                                   
                                                  </div>
                                                </div>
                                              </div> -->
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
            <!-- gallery-area-end -->
          </div>
        </div>
      </div>
  </div>
  </div>
  </section>
  <section
    class="elementor-section elementor-top-section elementor-element elementor-element-8eb336c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="8eb336c" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4143efe"
        data-id="4143efe" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-4765abf elementor-widget elementor-widget-Elementor-brand-widget"
            data-id="4765abf" data-element_type="widget" data-widget_type="Elementor-brand-widget.default">
            <div class="elementor-widget-container">
              <!-- brand-area -->
              <div class="brand-area pt-60 pb-60">
                <div class="container">
                  <div class="row brand-active">
                    <div class="col-xl-2">
                      <div class="single-brand">
                        <img decoding="async" src="../assets/uploads/2023/03/téléchargement (1).jpg" alt="">
                      </div>
                    </div>
                    <div class="col-xl-2">
                      <div class="single-brand">
                             <img decoding="async" src="../assets/uploads/2023/03/téléchargement (1).jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                    <div class="single-brand">
                             <img decoding="async" src="../assets/uploads/2023/03/b-logo3.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                    <div class="single-brand">
                             <img decoding="async" src="../assets/uploads/2023/03/b-logo4.png" alt="">
                        </div>
                    </div> 
                    <div class="col-xl-2">
                      <div class="single-brand">
                        <img decoding="async" src="../assets/uploads/2023/03/b-logo5.png"
                          alt="">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!-- brand-area-end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  </div>
  </div><!-- .entry-content -->
  </article><!-- #post-2655 -->
  </div><!-- #content -->
  @endsection