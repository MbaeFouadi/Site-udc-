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
=

<!-- Top Bar -->

<!-- #Top Bar -->

<!--Side menu and right menu -->
@include('admin.include.sideMenu')
<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>NOS DEPARTEMENTS</h2>
            <small class="text-muted">Facultés</small>
        </div>
        <div class="row clearfix">  
            @foreach ($composantes as $composante )
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="thumbnail card">
                    <img src="/assets/admin/assets/images/course-3.jpg" alt=""  class="img-fluid">
                    <div class="caption  body">
                        <h3>{{$composante->design_comp}}</h3>
                        <p>Doyen: <strong></strong></p>
                        <p>Nombre de département:<strong class="col-green"></strong></p>
                        <!-- <br> -->
                        <a href="{{ route('detail_comp',$composante->id_comp) }}" class="btn  btn-raised btn-info waves-effect" role="button">Voir départements</a>
                    </div>
                </div>
            </div>
            @endforeach          
            <!-- <div class="col-sm-12 text-center">
                <a href="#" class="btn btn-raised waves-effect g-bg-blush2" role="button">Load more</a>
            </div> -->
        </div>
        
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
@include('admin.include.js')
</body>
</html>