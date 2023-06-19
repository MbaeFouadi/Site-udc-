@extends('layout/app')

  @section('page-contenu')
<!-- header-end -->
<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fal fa-times"></i></span>
        <form role="search" method="get" id="searchform"   class="searchform" action="https://wpdemo.zcubethemes.com/qeducato/">
            <input type="text" name="s" id="search" value="" placeholder="Search"  />
            <button><i class="fal fa-search"></i></button>
        </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
        <div id="cssmenu-2" class="menu-our-links-container"><ul id="menu-our-links" class="menu"><li id="menu-item-2837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2837"><a href="../../index.html">Home</a></li>
<li id="menu-item-2839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839"><a href="../../about-us/index.html">About Us</a></li>
<li id="menu-item-2841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841"><a href="../../our-courses/index.html">Courses</a></li>
<li id="menu-item-2838" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-2838"><a href="../../blog/index.html">Blog</a></li>
<li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"><a href="../../contact/index.html">Contact</a></li>
</ul></div>     </div>
     <div id="cssmenu2" class="menu-one-page-menu-container">
          <ul id="menu-one-page-menu-1" class="menu">
                       
            <li class="menu-item menu-item-type-custom menu-item-object-custom"> 
              <span>Email Now</span>                                             
              <strong><a href="mailto:info@example.com"> info@example.com  </a></strong>                      
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
                  <h3>La mutuelle de santé</h3>
                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore voluptatibus illo, autem animi delectus officia vero, pariatur doloribus, deleniti est quibusdam distinctio accusamus. Nihil facere ullam quos quas reiciendis.</p>
                 
                </div>
              </div>
              <!-- BLOC DES PROGRAMMES -->
            
            </div>
          </div>
        </div>
      </section>
      <!--End Project Detail --> </div><!-- #content -->
@endsection