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
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Recherche..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit"></button>
        </div>
    </form>
    <div class="morphsearch-content">
        <div class="dummy-column">
            <h2>People</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar2.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar4.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
        <div class="dummy-column">
            <h2>Popular</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar5.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar2.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar1.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> </div>
        <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar2.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar4.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/sm/avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
    </div>
    <!-- /morphsearch-content --> 
    <span class="morphsearch-close"></span>
</div>

<!-- Top Bar -->
@include('admin.include.sideMenu')
<!-- #Top Bar -->

<!--Side menu and right menu -->

<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>FACULTÉ DE DROIT ET SCIENCES ECONOMIQUES</h2>
            <!-- <small class="text-muted">Composante</small> -->
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Modification</h2>
					</div>
					<div class="body">
                            <form action="{{route('composantes.update',$composantes->id_comp)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        @error('code_comp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="code_comp" value="{{ $composantes->code_comp }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        @error('design_comp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="design_comp" required value="{{ $composantes->design_comp }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        @error('lieu')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="lieu" class="form-control" value="{{ $composantes->lieu }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">

                                                <textarea name="description" id="" cols="30" rows="10" required class="form-control" rows="4">{{ $composantes->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        @error('ile')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group drop-custum">
                                            <select class="form-control show-tick" name="ile" required>
                                                <option value="{{ $composantes->ile }}">{{ $composantes->ile }}</option>
                                                <option value="Grand Comore">Grand Comores</option>
                                                <option value="Anjouan">Anjouan</option>
                                                <option value="Mohéli">Mohéli</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        @error('img_comp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                            <h3>Déposez une image ici ou cliquez pour télécharger.</h3>
                                        </div>
                                        <div class="fallback">
                                            <input name="img_comp" type="file" multiple />
                                        </div>

                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-raised g-bg-blush3" value="Mettre à jour">

                                    </div>
                                </div>
                            </form>
                        </div>
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