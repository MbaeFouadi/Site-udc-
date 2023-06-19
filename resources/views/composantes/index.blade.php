@extends('layout/app')

@section('page-contenu')
<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fal fa-times"></i></span>
        <form role="search" method="get" id="searchform"   class="searchform" action="https://wpdemo.zcubethemes.com/qeducato/">
            <input type="text" name="s" id="search" value="" placeholder="Search"  />
            <button><i class="fal fa-search"></i></button>
        </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
        <div id="cssmenu-2" class="menu-our-links-container"><ul id="menu-our-links" class="menu"><li id="menu-item-2837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2837"><a href="../index.html">Home</a></li>
<li id="menu-item-2839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839"><a href="../about-us/index.html">About Us</a></li>
<li id="menu-item-2841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841"><a href="../our-courses/index.html">Courses</a></li>
<li id="menu-item-2838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2838"><a href="../blog/index.html">Blog</a></li>
<li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"><a href="../contact/index.html">Contact</a></li>
</ul></div>     </div>
     <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-1" class="menu">
                       
            <li class="menu-item menu-item-type-custom menu-item-object-custom"> 
                  <span>Email Now</span>                                             <strong><a href="mailto:info@example.com"> info@example.com  </a></strong>                      </li>
                          
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                  <span>Call Now !</span>                                             <strong><a href="tel:+917052101786">+91 7052 101 786</a></strong>                                      </li>
                    </ul>
    </div>       

     
</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-area:end -->
            
  <div id="content" class="site-content">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center ">
        <div class="container"  >
          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
              <div class="breadcrumb-wrap text-left">
                <div class="breadcrumb-title">
                  <h2>Composantes</h2>   
                </div>
              </div>
            </div>
            <div class="breadcrumb-wrap2">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/">Université</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Composantes</li>
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
								    <div class="elementor-element elementor-element-f75cd75 elementor-widget elementor-widget-Elementor-events-widget"    data-id="f75cd75" data-element_type="widget" data-widget_type="Elementor-events-widget.default">
				              <div class="elementor-widget-container">
                        <!-- event-area -->
                        <section class="event pt-120 pb-90 p-relative fix">
                            <div class="animations-06"><img decoding="async" src="../assets/uploads/2023/03/an-img-06.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-06.png"></div>
                            <div class="animations-07"><img decoding="async" src="../assets/uploads/2023/03/an-img-07.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-07.png"></div>
                            <div class="animations-08"><img decoding="async" src="../assets/uploads/2023/03/an-img-08.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-08.png"></div>
                            <div class="animations-09"><img decoding="async" src="../assets/uploads/2023/03/an-img-09.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/03/an-img-09.png"></div>
                            <div class="container">
                                <div class="row">   
                                            
                                                 
                                    
                                  @foreach ($composantes as $composante )
              
                                  <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                    <div class="event-item mb-30 hover-zoomin">
                                      <div class="thumb">
                                          <a href="{{ route('composantes.show',$composante->slug) }}"><img width="1180" height="787" src="../assets/uploads/2023/03/evn-img-3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" /></a>
                                      </div>
                                      <div class="event-content"> 
                                          <h3>
                                            <a href="{{ route('composantes.show',$composante->slug) }}">
                                              {{$composante->design_comp}}
                                            </a>
                                          </h3>
                                          <div class="time">{{$composante->ile}}<i class="fal fa-long-arrow-right"></i> <strong>{{$composante->lieu}}</strong></div>
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