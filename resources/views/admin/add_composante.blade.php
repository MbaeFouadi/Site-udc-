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
    @include('admin.include.sideMenu')

    <!--Side menu and right menu -->

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Ajouter une composante</h2>
                <!-- <small class="text-muted">Composante</small> -->
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Composante</h2>
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
                            <form action="{{route('composantes.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        @error('code_comp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="code_comp" placeholder="Code composante">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        @error('design_comp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="design_comp" required placeholder="Nom composante">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">

                                                <textarea name="description" id="" cols="30" rows="10" required class="form-control no-resize" rows="4" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        @error('lieu')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="lieu" class="form-control" required placeholder="Lieu et adresse">
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
                                                <option value=""> Îles</option>
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
                                            <input name="img_comp" type="file" required multiple />
                                        </div>

                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-raised g-bg-blush3" value="Ajouter">

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
    @include('admin.include.js')

</body>

</html>