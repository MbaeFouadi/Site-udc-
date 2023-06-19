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

<!-- #Top Bar -->

<!--Side menu and right menu -->
@include("admin.include.sideMenu")
<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Mettre à jour</h2>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="header">
						<h2> <small>projet</small> </h2>
					</div>
					<div class="body">
                        <form action="{{route('projets.update', $projets->id_projet)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $projets->titre }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="contenu" class="form-control" placeholder="Contenu" value="{{ $projets->contenu }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Déposez une image ici ou cliquez pour télécharger.</h3>
                                        </div>
                                    <div class="fallback">
                                        <input name="img_projet" type="file"  />
                                    </div>
                              
                            </div>
                        </div>
                        <div class="row clearfix">                            
                          
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Mettre à jour la publication</button>
                                <button type="submit" class="btn btn-raised btn-default">Annuller</button>
                            </div>
                        </div>
                    </div>
                </form>
				</div>
			</div>
		</div>      
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
@include("admin.include.js")
</body>
</html>