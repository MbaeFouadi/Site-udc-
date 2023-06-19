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
                <h2>Nouveau enregistrement</h2>
                <small class="text-muted">Utilisateur</small>
            </div>
            <section class="section blog-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg- col-md-12">
                            <div class="left-box">
                                <div class="card">
                                    <div class="header">
                                        <h2>Utilisateur</h2>
                                    </div>
                                    <div class="body">
                                        <form action="">
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="email" name="email" class="form-control" placeholder="Adresse email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="password" name="pass1" class="form-control" placeholder="Mot de passe">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                        <input type="password" name="pass2" class="form-control" placeholder="Confirmez votre mot de passe ">
                                                         
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-raised ">Enregistrer</button>
                                                    <button type="submit" class="btn btn-raised btn-default">Annuler</button>
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