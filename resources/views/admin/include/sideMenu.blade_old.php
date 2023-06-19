<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Université des Comores</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->

            <!-- #END# Notifications -->
            <!-- #END# Tasks -->

        </ul>
    </div>
</nav>
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="{{asset('assets/admin/assets/images/random-avatar7.jpg')}}" alt=""> </div>
            <div class="admin-action-info"> <span>Bienvenue</span>
                <h3>Mm Djawuda</h3>
                <ul>
                    <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.html"><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">NAVIGATION PRINCIPALE</li>
                <li class="active open"><a href="{{route('accueil')}}"><i class="zmdi zmdi-home"></i><span>Tableau de
                            bord</span></a></li>
                <!-- <li><a href="events.html"><i class="zmdi zmdi-calendar-check"></i><span>Gestion des
                                événements</span> </a></li> -->
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Composantes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_composante')}}">Ajouter une composante</a></li>
                        <li><a href="{{route('show_composante')}}">Liste des composantes</a></li>

                        <li><a href="{{route('add_chef_composante')}}">Ajouter un chef de composante</a></li>
                        <!-- <li><a href="students-profile.html">list des Composantes</a></li> -->
                        <!-- <li><a href="students-invoice.html">Students Invoice</a></li> -->
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Département</span> </a>
                    <ul class="ml-menu">

                        <li><a href="{{route('add_departement')}}">Ajouter un département</a></li>
                        <li><a href="{{route('show_departement')}}">Liste des départements</a></li>
                        <li><a href="{{route('add_chef_departement')}}">Ajouter un chef de département</a></li>
                        <!-- <li><a href="students-profile.html">list des Composantes</a></li> -->
                        <!-- <li><a href="students-invoice.html">Students Invoice</a></li> -->
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-camera-roll"></i><span>Actualités</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_actualite')}}">Ajouter une actualité</a></li>
                        <li><a href="{{route('show_actualite')}}">Toutes les actualités</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Evénements</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_event')}}">Ajouter un événement</a></li>
                        <li><a href="{{route('show_event')}}">Tous les événements</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder-star-alt"></i><span>Projets</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_projet')}}">Ajouter un projet</a></li>
                        <li><a href="{{route('show_projet')}}">Tous les projets</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-alt"></i><span>Partenaires</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_partner')}}">Ajouter un partenaire</a></li>
                        <li><a href="{{route('show_partner')}}">Tous les partenaires</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Flash
                            infos</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_flash_info')}}">Ajouter un flash info</a></li>
                        <li><a href="{{route('show_flash_info')}}">Flash info</a></li>

                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Utilisateurs</span> </a>
                    <ul class="ml-menu">
                        <li><a href="utilisateur.html">Liste des utilisateurs</a></li>
                        <li><a href="ajoute-utilisateur.html">Ajouter un utilisateur</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->

</section>