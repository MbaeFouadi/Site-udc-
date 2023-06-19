<!DOCTYPE html>
<html>
@include('admin.include.head')

<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>S'il vous plaît, attendez ...</p>
    </div>
</div>
<!-- #END# Page Loader --> 
 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars --> 

<!-- Morphing Search  -->

<!-- Top Bar -->

<!-- #Top Bar -->

<!--Side menu and right menu -->
@include('admin.include.sideMenu')
<!--Side menu and right menu -->

<!-- main content -->
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Tous les composantes</h2>
            <small class="text-muted">Composantes</small>
        </div>
        
        <div class="row clearfix">
        @foreach ($composantes as $composante)

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card all-patients">
                    <div class="body">
                        <div class="row">
                                
                            <div class="col-lg-4 col-md-12 m-b-0">
                                <a href="#" class="p-profile-pix"><img src="{{asset('assets/admin/assets/images/student/random-avatar3.jpg')}}" alt="user" class="img-thumbnail img-fluid"></a>
                            </div>
                            <div class="col-lg-8 col-md-12 m-b-0">
                                <h5 class="m-b-0">{{$composante->design_comp}}
                                    <a href="{{ route('composantes.show',$composante->slug) }}" class="edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>

                                    <a href="{{ route('composantes.edit',$composante->id_comp) }}" class="edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                </h5> 
                                <small></small>


                                <address class="m-t-10 m-b-0">
                                {{$composante->ile}}<br>
                                    <!-- <abbr title="Phone">Téléphone:</abbr> (+269) XXX XX XX -->
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
        
           
        
          
          
          
        </div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
@include('admin.include.js')
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>
</html>