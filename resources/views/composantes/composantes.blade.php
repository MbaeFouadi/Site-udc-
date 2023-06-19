@extends('layout/app')

@section('page-contenu')
<!-- offcanvas-area -->
<div class="offcanvas-menu">
  <span class="menu-close"><i class="fal fa-times"></i></span>
  <form role="search" method="get" id="searchform" class="searchform" action="https://wpdemo.zcubethemes.com/qeducato/">
    <input type="text" name="s" id="search" value="" placeholder="Search" />
    <button><i class="fal fa-search"></i></button>
  </form>
  <div id="cssmenu3" class="menu-one-page-menu-container">
    <div id="cssmenu-2" class="menu-our-links-container">
      <ul id="menu-our-links" class="menu">
        <li id="menu-item-2837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2837"><a href="../index.html">Home</a></li>
        <li id="menu-item-2839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839"><a href="../about-us/index.html">About Us</a></li>
        <li id="menu-item-2841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841"><a href="../our-courses/index.html">Courses</a></li>
        <li id="menu-item-2838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2838"><a href="../blog/index.html">Blog</a></li>
        <li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840"><a href="../contact/index.html">Contact</a></li>
      </ul>
    </div>
  </div>
  <div id="cssmenu2" class="menu-one-page-menu-container">
    <ul id="menu-one-page-menu-1" class="menu">

      <li class="menu-item menu-item-type-custom menu-item-object-custom">
        <span>Email Now</span> <strong><a href="mailto:info@example.com"> info@example.com </a></strong>
      </li>

      <li class="menu-item menu-item-type-custom menu-item-object-custom">
        <span>Call Now !</span> <strong><a href="tel:+917052101786">+91 7052 101 786</a></strong>
      </li>
    </ul>
  </div>


</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-area:end -->

<div id="content" class="site-content">
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area d-flex  p-relative align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12">
          <div class="breadcrumb-wrap text-left">
            <div class="breadcrumb-title">
              <h2>{{$composante->design_comp}}</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumb-wrap2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.html">Université</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$composante->code_comp}}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb-area-end --><!-- Project Detail -->
  <section class="project-detail">
    <div class="container">
      <!-- Lower Content -->
      <div class="lower-content">
        <div class="row">
          <div class="text-column col-lg-9 col-md-9 col-sm-12">
            <div class="upper-box">
              <div class="single-item-carousel owl-carousel owl-theme">
                <figure class="image"> <img width="1180" height="664" src="../assets/uploads/2023/03/couress-img-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" /> </figure>
              </div>
            </div>
            <div class="inner-column">
              <div class="course-meta2 review style2 clearfix mb-30">
                <ul class="left">
                  <li>
                    <div class="author">
                      <div class="thumb">

                        <img src="../assets/uploads/2023/02/testi_avatar.png" alt="https://wpdemo.zcubethemes.com/qeducato/assets/uploads/2023/02/testi_avatar.png">
                      </div>
                      <div class="text">
                        <span> @isset($chefComp)
                          {{$chefComp->nom}} {{$chefComp->prenom}}
                          @endisset </span>
                        <p></p>
                      </div>
                    </div>
                  </li>
                  <!-- <li class="categories">
                        <div class="author">
                          <div class="text">
                            <span> Biochemistry Class </span>
                            <p> Biochemistry </p>
                          </div>
                        </div>
                      </li> -->
                </ul>
                <ul class="right">
                  <li class="price">Responsable</li>
                </ul>
              </div>
              <h3>ADMINISTRATION</h3>
              <p style="text-align:text-justify;">{{$composante->description}}.</p>

              <!-- <h4>LES RESPONSABLES</h4> -->

              <!-- <ul class="pr-ul">
                    <li>
                      <div class="icon"><i class="fal fa-check"></i></div>
                      <div class="text">Abdou Salami Mohamed    (Droit)</div>
                    </li>
                    <li>
                      <div class="icon"><i class="fal fa-check"></i></div>
                      <div class="text">Roumayssoiou AMIR MOILIM  (Sciences Economiques)</div>
                    </li>
                    <li>
                      <div class="icon"><i class="fal fa-check"></i></div>
                      <div class="text">Bakar Nomane Mohamed  (Administration Economique et Sociale -AES)</div>
                    </li>
                    <li>
                      <div class="icon"><i class="fal fa-check"></i></div>
                      <div class="text"><strong>Fahardine Ali Islam</strong> <br> <strong>APGC</strong> : <br>

                        Option : Décentralisation et déconcentration juridique
                        
                          Option : Economie des Institutions       
                        
                        Ali Ahamada  (Droit des Affaires et des Fiscalités)            
                        
                        Abdullah Ben Said Hasssane  (Banque et Finance)
                        
                        LES </div>
                    </li>
                  </ul> -->
              <h4>Les Formations</h4>
              <table class="table table-bordered mb-40">
                <thead>
                  <tr>
                    <th>Départements</th>
                    <th>Diplôme préparés</th>
                    <th>Responsables</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($departements as $departement )
                  <tr>
                    <td>{{$departement->designa_depart}}</td>
                    <td>{{$departement->design_diplome}}</td>
                    <td>{{$departement->nom}} {{$departement->prenom}}</td>

                  </tr>
                  @endforeach


                </tbody>
              </table>

              <!-- <h4>LES MASTERS:</h4>
                  <table class="table table-bordered mb-40">
                    <thead>
                      <tr>
                        <th>Masters</th>
                        <th>départements</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Master 1</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Master 2</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>

                  <h4>LES MASTERS PROFESSIONNELS:</h4>
                  <table class="table table-bordered mb-40">
                    <thead>
                      <tr>
                        <th>Masters</th>
                        <th>départements</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Master 1</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>Master 2</td>
                        <td>Banque et Finance</td>
                      </tr>
                    </tbody>
                  </table> -->

              <!-- <h3>SCOLARITE</h3>
                  <p>La scolarité de la Faculté de Droit se tient à disposition pour :</p>
                  <p>
                    – tout renseignement sur vos démarches administratives (inscription, transfert, changement d’orientation, régimes spéciaux … ) <br>
                    – l’accompagnement de tout étudiant dans sa scolarité au sein de la Faculté de Droit.
                  </p>
                  <div class="faq-wrap pt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0"><button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">MODALITE DE CANDIDATURE</button></h2>
                        </div>
                        <div id="collapseThree" class="collapse show" data-bs-parent="#accordionExample">
                          <div class="card-body">Les modalités de candidature aux diplômes de la Faculté de Droit dépendent de votre niveau d’étude et de votre statut.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0"><button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">CONTACT</button></h2>
                        </div>
                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">Pour les questions de scolarité, les étudiants doivent contacter en priorité  l’adresse scolarité générique correspondant à leur diplôme (Capacité, D.U./D.I.U, Licence ou Master). Les étudiants en Licence générale doivent utiliser l’adresse générique correspondant à leur année d’étude (Licence 1, Licence 2, Licence3).</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
            <!-- BLOC DES PROGRAMMES -->
            <!-- <div class="col-lg-3">
                <aside class="sidebar-widget info-column">
                  <div class="inner-column3">
                    <h3> Programmes </h3>
                    <ul class="project-info clearfix">
                      <li>
                        <div class="priceing">
                          <strong> xxxxx </strong>
                          <sub> xxxxx</sub>
                          <span class="discont"> xxxxx</span>
                        </div>
                      </li>
                      <li>
                        <span class="icon fal fa-home-lg-alt"></span> <strong>Instructor:</strong> <span>Eleanor Fant</span>                </li>
                      <li>
                        <span class="icon fal fa-book"></span> <strong>Lectures:</strong> <span>111</span>                </li>
                      <li>
                        <span class="icon fal fa-clock"></span> <strong>Duration: </strong> <span>6 Semaine</span>                </li>
                      <li>
                        <span class="icon fal fa-user"></span> <strong>Enrolled: </strong> <span>200 Etudiants</span>                </li>
                      <li>
                        <span class="icon fal fa-globe"></span> <strong>Language: </strong> <span>English</span>                </li>
                      <li>
                        <div class="slider-btn">
                          <a href="../contact/index.html" class="btn ss-btn smoth-scroll"> Enroll <i class="fal fa-long-arrow-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </aside>
              </div> -->
          </div>
        </div>
      </div>
  </section>
  <!--End Project Detail -->
</div>
<!-- #content -->
@endsection