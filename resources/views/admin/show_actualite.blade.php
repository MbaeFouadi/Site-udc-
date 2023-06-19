<!DOCTYPE html>
<html>
@include("admin.include.head")

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
@include("admin.include.sideMenu")
<!-- #Top Bar -->

<!--Side menu and right menu -->

<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Nos actualités </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Actualités</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Titre</th>
                                    <th>date</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                @foreach ($actualites as $actualite )
                                <tr>
                                    <!-- <td>1</td> -->
                                    <td>{{$actualite->titre}}</td>
                                    <td>{{$actualite->date}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('actualites.edit', $actualite->id_actualite) }}" class="edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
    
                                        <a href="{{ route('delete_actualite', $actualite->id_actualite) }}" class="delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                              
                             
                               
                              
                               
                               
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>

<div class="color-bg"></div>
@include("admin.include.js")
</body>
</html>