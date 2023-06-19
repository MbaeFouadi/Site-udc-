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
    @include('admin.include.sideMenu')
    <!-- #Top Bar -->

    <!--Side menu and right menu -->

    <!--Side menu and right menu -->

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Modification</h2>
                <small class="text-muted">chef de composantes</small>
            </div>
            <section class="section blog-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="left-box">
                                <div class="card">
                                    <div class="header">
                                        <h2>Chef de composantes</h2>
                                    </div>
                                    <div class="body">
                                        <form action="{{route('chefComposantes.update',$chef_departements->id_chef_comp)}}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="nom" class="form-control" value="{{ $chef_departements->nom}}" placeholder="Nom">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="prenom" class="form-control" value="{{ $chef_departements->prenom}}" placeholder="Prénom">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="adress" class="form-control" value="{{ $chef_departements->adress}}" placeholder="Adresse">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="telephone" class="form-control" value="{{ $chef_departements->telephone}}" placeholder="Téléphone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="id_comp" id="" class="form-control">
                                                                <option value="{{ $chef_departements->id_comp}}">{{ $chef_departements->id_comp}} </option>
                                                               
                                                         
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-raised ">Mettre à jour</button>
                                                    <!-- <button type="submit" class="btn btn-raised btn-default">Annuler</button> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                       
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- main content -->

    <div class="color-bg"></div>
    <!-- Jquery Core Js -->
    @include("admin.include.js")
</body>

</html>