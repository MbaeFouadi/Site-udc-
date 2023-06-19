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

    <!-- #Top Bar -->

    <!--Side menu and right menu -->
    @include('admin.include.sideMenu')
    <!--Side menu and right menu -->

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Ajouter un département</h2>
                <!-- <small class="text-muted">Welcome to Swift application</small> -->
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Département</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('formations.store')}}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="code_depart" placeholder="code département">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="designa_depart" class="form-control" placeholder="Nom département">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <!-- <input type="text" class="form-control" placeholder="Diplôme préparé"> -->
                                                <select name="diplome_id" id="" class="form-control">

                                                    <option value="">-- Diplôme préparé -- </option>
                                                    @foreach ($diplomes as $diplome )
                                                    <option value="{{$diplome->id}}">{{$diplome->design_diplome}} </option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="id_comp" id="" class="form-control">
                                                    <option value="">-- Composantes-- </option>
                                                    @foreach ($composantes as $composante)
                                                    <option value="{{$composante->id_comp}}">{{$composante->design_comp}} </option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Course Description"></textarea>
                                    </div>
                                </div>
                            </div> -->
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-raised waves-effect g-bg-blush2" value="Enregistrer">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content -->

    <div class="color-bg"></div>

    <!-- Jquery Core Js -->
    @include('admin.include.js')
</body>

</html>