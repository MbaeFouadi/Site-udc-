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
                <h2>Nouveau enregistrement</h2>
                <small class="text-muted">chef de département</small>
            </div>
            <section class="section blog-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <div class="left-box">
                                <div class="card">
                                    <div class="header">
                                        <h2>Département</h2>
                                    </div>
                                    <div class="body">
                                        <form action="{{route('store_chef_departement')}}" method="POST">
                                            @csrf
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
                                                            <input type="text" name="adress" class="form-control" placeholder="Adresse">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="id_comp" id="" class="form-control">
                                                                <option value="">-- Composantes-- </option>
                                                                @foreach ($composantes as $composante )
                                                                <option value="{{$composante->id_comp}}">{{$composante->design_comp}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select name="id_depart" id="" class="form-control">
                                                                <option value="">Départements </option>
                                                                @foreach ($departements as $departement )
                                                                <option value="{{$departement->id_depart}}">{{$departement->designa_depart}}</option>
                                                                @endforeach
                                                              
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-raised ">Enregistrer</button>
                                                    <!-- <button type="submit" class="btn btn-raised btn-default">Annuler</button> -->
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="left-box">
                                <div class="card">
                                    <div class="header">
                                        <h2>Liste des chefs de départements</h2>
                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom</th>
                                                    <th>Prénom</th>
                                                    <th>Adresse</th>
                                                    <th>Téléphone</th>
                                                    <th>Composante</th>
                                                    <th>Département</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($chef_departs as $chef_depart )
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{$chef_depart->nom}}</td>
                                                    <td>{{$chef_depart->prenom}}</td>
                                                    <td>{{$chef_depart->adress}}</td>
                                                    <td>{{$chef_depart->telephone}}</td>
                                                    <td>{{$chef_depart->design_comp}}</td>
                                                    <td>{{$chef_depart->designa_depart}}</td>
                                                    <td class="text-center">
                                                        <a href="edite-departemnent.html" class="edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>

                                                        <a href="detail-composante.html" class="delete">
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