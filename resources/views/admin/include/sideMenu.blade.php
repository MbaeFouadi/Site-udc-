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
                <h3>User</h3>
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
                <li class="active open"><a href="{{route('accueil')}}"><i class="zmdi zmdi-home"></i><span>Tableau du bord</span></a></li>
                <!-- <li><a href="events.html"><i class="zmdi zmdi-calendar-check"></i><span>Event Management</span> </a></li> -->
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Composantes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_composante')}}">Ajouter une composante</a></li>
                        <li><a href="{{route('show_composante')}}">Liste des composantes</a></li>
                        <li><a href="{{route('add_chef_composante')}}">Ajouter un chef de composante</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Départements</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_departement')}}">Ajouter un département</a></li>
                        <li><a href="{{route('show_departement')}}">Liste des départements</a></li>
                        <li><a href="{{route('add_chef_departement')}}">Ajouter un chef de département</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-camera-roll"></i><span>Actualités</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_actualite')}}">Ajouter une actualité</a></li>
                        <li><a href="{{route('show_actualite')}}">Toutes les actualités</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-book"></i><span>Evénements</span> </a>
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

                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Flash infos</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('add_flash_info')}}">Ajouter un flash info</a></li>
                        <li><a href="{{route('show_flash_info')}}">Flash info</a></li>
                    </ul>
                </li>
                <li ><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Utilisateurs</span> </a>
                    <ul class="ml-menu">
                    <li><a href="{{route('add_user')}}">Ajouter un utilisateur</a></li>
                        <li><a href="{{route('show_user')}}">Liste des utilisateurs</a></li>
                    </ul>
                </li> <br> <br> <br> <br> <br>
             
<!--                
                <li class="header">LABELS</li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span></a></li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span></a></li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span></a></li> -->
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                    <li data-theme="blush" class="active">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <li class="online">
                            <div class="media">
                                <a role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>