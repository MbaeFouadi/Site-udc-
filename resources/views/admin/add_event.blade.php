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
@include("admin.include.sideMenu")
<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Ajouter un nouveau événement</h2>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="header">
						<h2>Ajouter un nouveau <small>événement</small> </h2>
						<!-- <ul class="header-dropdown">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul> -->
					</div>
					<div class="body">
                        <form action="{{route('evenements.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="titre" class="form-control" placeholder="Titre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="description" class="form-control" placeholder="Description">
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
                                        <input name="img" type="file" multiple />
                                    </div>
                            
                            </div>
                        </div>
                        <div class="row clearfix">                            
                          
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Publie</button>
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