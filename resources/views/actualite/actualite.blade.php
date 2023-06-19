@extends('layout/app')
@section('page-contenu')
    <div class="offcanvas-menu">
      <span class="menu-close"><i class="fal fa-times"></i></span>
      <form
        role="search"
        method="get"
        id="searchform"
        class="searchform"
        action="https://wpdemo.zcubethemes.com/qeducato/"
      >
        <input type="text" name="s" id="search" value="" placeholder="Search" />
        <button><i class="fal fa-search"></i></button>
      </form>
      <div id="cssmenu3" class="menu-one-page-menu-container">
        <div id="cssmenu-2" class="menu-our-links-container">
          <ul id="menu-our-links" class="menu">
            <li
              id="menu-item-2837"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2837"
            >
              <a href="../index.html">Home</a>
            </li>
            <li
              id="menu-item-2839"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839"
            >
              <a href="../about-us/index.html">About Us</a>
            </li>
            <li
              id="menu-item-2841"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841"
            >
              <a href="../our-courses/index.html">Courses</a>
            </li>
            <li
              id="menu-item-2838"
              class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-2838"
            >
              <a href="../blog/index.html">Blog</a>
            </li>
            <li
              id="menu-item-2840"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"
            >
              <a href="../contact/index.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-1" class="menu">
          <li class="menu-item menu-item-type-custom menu-item-object-custom">
            <span>Email Now</span>
            <strong
              ><a href="mailto:info@example.com"> info@example.com </a></strong
            >
          </li>

          <li class="menu-item menu-item-type-custom menu-item-object-custom">
            <span>Call Now !</span>
            <strong><a href="tel:+917052101786">+91 7052 101 786</a></strong>
          </li>
        </ul>
      </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-area:end -->

    <div id="content" class="site-content">
      <!-- breadcrumb-area -->
      <section class="breadcrumb-area d-flex p-relative align-items-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
              <div class="breadcrumb-wrap text-left">
                <div class="breadcrumb-title">
                  <h2>{{$actualite->titre}}</h2>
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
                  {{$actualite->titre}}
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumb-area-end -->
      <div class="inner-blog b-details-p pt-120 pb-120 blog-deatails-box02">
        <div class="container">
          <div class="row">
            <!-- .blog -->
            <div class="col-sm-12 col-md-12 col-lg-8">
              <div class="blog-deatails-box single">
                <article
                  id="post-2293"
                  class="post-2293 post type-post status-publish format-gallery has-post-thumbnail hentry category-branding category-economics category-finance tag-design tag-web-design tag-wordpress post_format-post-format-gallery"
                >
                  <div class="bsingle__post mb-50">
                    <div class="bsingle__post-thumb blog-active">
                      <div class="slide-post">
                        <img
                          src="../assets/uploads/2022/01/inner_b1.jpg"
                          alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2022/01/inner_b1.jpg"
                        />
                      </div>
                     
                    </div>
                    <div class="bsingle__content">
                      <div class="meta-info">
                        <ul>
                          <!-- <li><i class="far fa-user"></i> By admin</li> -->
                          <li>
                            <i class="fal fa-calendar-alt"></i> {{\Carbon\Carbon::parse($actualite->date)->translatedFormat('j F Y')}}
                          </li>
                          <!-- <li><i class="far fa-comments"></i> No Comments</li> -->
                        </ul>
                      </div>

                      <h2 >
                      {{$actualite->titre}}
                      </h2>

                      <p>
                      {{$actualite->contenu}}
                      </p>
                      <div class="two-column mb-25">
                        <div class="row">
                          <div class="image-column col-xl-6 col-lg-12 col-md-6">
                            <div class="image">
                             
                            </div>
                          </div>
                          <div class="text-column col-xl-6 col-lg-12 col-md-6">
                            <div class="image">
                             
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      
                    
                     
                    
                    
                    </div>
                  </div>
                </article>
               
          
                <!-- #comments -->
              </div>
            </div>
            <!-- #right side -->
            <div class="col-sm-12 col-md-12 col-lg-4">
              <aside class="sidebar-widget">
           
                <section
                  id="custom_html-4"
                  class="widget_text widget widget_custom_html"
                >
                  <h2 class="widget-title">Suivez-nous</h2>
                  <div class="textwidget custom-html-widget">
                    <div class="textwidget custom-html-widget">
                      <div class="widget-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-wordpress"></i></a>
                      </div>
                    </div>
                  </div>
                </section>
                <section
                  id="recent-posts-widget-with-thumbnails-1"
                  class="widget recent-posts-widget-with-thumbnails"
                >
                  <div
                    id="rpwwt-recent-posts-widget-with-thumbnails-1"
                    class="rpwwt-widget"
                  >
                    <h2 class="widget-title">Publication recente</h2>
                    <ul>
                      @foreach ($actualites as $actualite )
                      <li>
                        <a
                          href="{{route('actualites.show',$actualite->slug)}}"
                          ><img
                            width="100"
                            height="68"
                            src="../assets/uploads/2023/03/inner_b8.jpg"
                            class="attachment-100x75 size-100x75 wp-post-image"
                            alt=""
                            decoding="async"
                            loading="lazy"
                          /><span class="rpwwt-post-title"
                            >{{$actualite->titre}}</span
                          ></a
                        >
                        <div class="rpwwt-post-date">{{\Carbon\Carbon::parse($actualite->date)->translatedFormat('j F Y')}}</div>
                      </li>
                      @endforeach
                     
                     
                    </ul>
                  </div>
                  <!-- .rpwwt-widget -->
                </section>
                <section
                  id="custom_html-5"
                  class="widget_text widget widget_custom_html"
                >
                 
                </section>
               
          
              </aside>
            </div>
            <!-- #right side end -->
          </div>
        </div>
      </div>
    </div>
    <!-- #content -->
    @endsection
