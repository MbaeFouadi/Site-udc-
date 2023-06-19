<?php 

use Illuminate\Support\Facades\DB;

?>
@extends('layout/app')

@section('page-contenu')
<!-- offcanvas-area -->

<div class="offcanvas-overly"></div>
<!-- offcanvas-area:end -->
<section class="cta-area cta-bg pt-50 pb-50" style="background-color: #032E3F">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
          <h2 class="text-center"> <i> FORMATIONS </h2>
          <!-- <p> At Estuidar University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts.</p> -->
        </div>

      </div>
      <!-- <div class="col-lg-4 text-right"> 
                    <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                      <a href="#" class="btn ss-btn smoth-scroll">Financial Aid  <i class="fal fa-long-arrow-right"></i></a>	
                    </div>
                </div> -->

    </div>
  </div>
</section>
<div id="content" class="site-content">

  <section class="project-detail">
    <div class="container">
      <!-- Lower Content -->
      <div class="lower-content">
        <div class="row">
          <div class="text-column col-lg-9 col-md-9 col-sm-12">
            <!-- <div class="upper-box">
                  <div class="single-item-carousel owl-carousel owl-theme">
                    <figure class="image"> <img width="1180" height="664" src="../assets/uploads/2023/03/couress-img-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy" /> </figure>
                  </div>
                </div> -->
            <div class="inner-column">
              <h3>OFFRE DE FORMATION</h3>
              <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tempore voluptatibus illo, autem animi delectus officia vero, pariatur doloribus, deleniti est quibusdam distinctio accusamus. Nihil facere ullam quos quas reiciendis.</p>

              <div class="faq-wrap pt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                <div class="accordion" id="accordionExample">
                  @foreach ($formations as $formation )
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#{{$formation->code_comp}}">
                          {{$formation->design_comp}} ({{$formation->code_comp}})
                          <?php
                          $deps=DB::table("departements")
                          ->join("diplomes","departements.diplome_id","diplomes.id")
                          ->select("departements.*","diplomes.*")
                          ->where("statut",1)
                          ->where("id_comp",$formation->id_comp)
                          ->get();
                           ?>
                        </button>
                      </h2>
                    </div>
                    <div id="{{$formation->code_comp}}" class="collapse " data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-bordered mt-2">
                          <thead>
                            <tr>
                              <th>Domaines</th>
                              <th>Diplôme préparé</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($deps as $dep )
                            <tr>
                              <td><strong>{{$dep->designa_depart}}</strong> </td>
                              <td><strong>{{$dep->design_diplome}}</strong></td>
                            </tr>
                            @endforeach
      
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                  <!-- <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#two">
                          FACULTÉ DE LETTRES ET DES SCIENCES HUMAINES (FLSH) </button>
                      </h2>
                    </div>
                    <div id="two" class="collapse " data-bs-parent="#accordionExample">
                      <table class="table table-bordered mt-2">
                        <thead>
                          <tr>
                            <th>Domaines</th>
                            <th>Diplôme préparé</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lettres Modernes Françaises <strong>(LMF)</strong></td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Langues Etrangères Appliquées <strong>(LEA)</strong></td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Langue Chinoise</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Langue et Littérature Anglaises</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Histoire</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Géographie</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Archivistique et Documentation</td>
                            <td> Licence professionnelle</td>
                          </tr>

                          <tr>
                            <td>Histoire</td>
                            <td>Master <strong>(M1)</strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#one">
                          FACULTÉ IMAM CHAFIOU DES LETTRES ARABES ET SCIENCES ISLAMIQUES </button>
                      </h2>
                    </div>
                    <div id="one" class="collapse " data-bs-parent="#accordionExample">
                   
                      <table class="table table-bordered mt-2">
                        <thead>
                          <tr>
                            <th>Domaines</th>
                            <th>Diplôme préparé</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lettres Arabes</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Sciences Islamiques</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Etudes coraniques et formation des Imams</td>
                            <td> Licence professionnelle</td>
                          </tr>
                          <tr>
                            <td>Juridiction Islamique</td>
                            <td> Licence professionnelle</td>
                          </tr>
                          <tr>
                            <td>Droit Islamique</td>
                            <td>Master (M1 et M2)</td>
                          </tr>
                          <tr>
                            <td>Enseignement de la Langue Arabe</td>
                            <td>Master Professionnel (M1, M2)</td>
                          </tr>
                        </tbody>
                      </table>
                     
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#one1">
                          FACULTE DES SCIENCE ET TECHNIQUES (FST) </button>
                      </h2>
                    </div>
                    <div id="one1" class="collapse " data-bs-parent="#accordionExample">
                     
                      <table class="table table-bordered mt-2">
                        <thead>
                          <tr>
                            <th>Domaines</th>
                            <th>Diplôme préparé</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Sciences de la Vie (SV) </td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Sciences de la Terre et de l'Environnement (STE)</td>
                            <td>Licence</td>
                          </tr>
                          <tr>
                            <td>Sciences Marines</td>
                            <td>Licence professionnelle (L3)</td>
                          </tr>
                          <tr>
                            <td>Mathématique</td>
                            <td>Licence </td>
                          </tr>
                          <tr>
                            <td>Physique-Chimie (PC)</td>
                            <td>Licence </td>
                          </tr>
                          <tr>
                            <td>Gestion des ressources halieutiques</td>
                            <td>Master </td>
                          </tr>
                          <tr>
                            <td>Probabilité, Analyse et Statistique Appliquées (PASA)</td>
                            <td>Master </td>
                          </tr>

                        </tbody>
                      </table>
                     
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#threes">
                          INSTITUT UNIVERSITAIRE DE TECHNOLOGIE (IUT)
                        </button>
                      </h2>
                    </div>
                    <div id="threes" class="collapse " data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-bordered mt-2">
                          <thead>
                            <tr>
                              <th>Domaines</th>
                              <th>Diplôme préparé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Gestion des Entreprises et des Administrations <strong>(GEA)</strong></td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Commerce</td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Tourisme et Hôtellerie </td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Génie Informatique </td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Habitat et son Environnement</td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Statistique</td>
                              <td>DUT</td>
                            </tr>

                            <tr>
                              <td>Mathématique, Statistique et Informatique <br> Décisionnelle <strong>(MSID)</strong></td>
                              <td>Licence <br> <strong>Professionnelle (Licence 3)</strong></td>
                            </tr>
                            <tr>
                              <td>Informatique : <br>
                                <strong>Option</strong>: Parcours Administration et sécurité des systèmes d’information <br>
                                <strong>Option</strong>: Parcours Administration et sécurité des réseaux
                              </td>
                              <td>
                                <br>
                                <br>
                                Licence <br>
                                Professionnelle <strong>(Licence 3)</strong>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#four">
                          INSTITUT DE FORMATION DES ENSEIGNANTS ET DES RECHERCHE EN EDUCATION (IFERE)
                        </button>
                      </h2>
                    </div>
                    <div id="four" class="collapse " data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-bordered mt-2">
                          <thead>
                            <tr>
                              <th>Domaines</th>
                              <th>Diplôme préparé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Formation de Professeur des Ecoles </td>
                              <td>Licence Professionnelle</td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#five">
                          ECOLE DE MEDECINE ET DE SANTE PUBLIQUE (EMSP)
                        </button>
                      </h2>
                    </div>
                    <div id="five" class="collapse " data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-bordered mt-2">
                          <thead>
                            <tr>
                              <th>Domaines</th>
                              <th>Diplôme préparé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Soins Infirmiers </td>
                              <td>Licence Professionnelle</td>
                            </tr>
                            <tr>
                              <td>Soins Obstétricaux </td>
                              <td>Licence Professionnelle</td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#six">
                          CENTRE UNIVERSITAIRE DE PATSY (CUP)

                        </button>
                      </h2>
                    </div>
                    <div id="six" class="collapse " data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-bordered mt-2">
                          <thead>
                            <tr>
                              <th>Domaines</th>
                              <th>Diplôme préparé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Droit </td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Sciences économiques </td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Administration Economique et Sociale (AES)</td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Lettres Modernes Françaises </td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Langues Etrangères Appliquées (LEA) </td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Géographie</td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Lettres Arabes </td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Science de la Vie (SV) </td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Sciences de la Terre et de l'Environnement (STE)</td>
                              <td>Licence</td>
                            </tr>
                            <tr>
                              <td>Gestion des Entreprises et des Administrations (GEA) </td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Formation de Professeur des Ecoles </td>
                              <td>Licence professionnelle </td>
                            </tr>
                            <tr>
                              <td>Gestion des Ressources Humaines (GRH)</td>
                              <td>Licence professionnelle (L3)</td>
                            </tr>
                            <tr>
                              <td>Développement durable et conservation de la biodiversité </td>
                              <td>Master 1</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button class="faq-btn " type="button" data-bs-toggle="collapse" data-bs-target="#seven">
                          CENTRE UNIVERSITAIRE DE MOHELI(CUM)

                        </button>
                      </h2>
                    </div>
                    <div id="seven" class="collapse " data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-bordered mt-2">
                          <thead>
                            <tr>
                              <th>Domaines</th>
                              <th>Diplôme préparé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Gestion des Entreprises et des Administrations (GEA) </td>
                              <td>DUT</td>
                            </tr>
                            <tr>
                              <td>Formation de Professeur des Ecoles</td>
                              <td>Licence Professionnelle</td>
                            </tr>
                            <tr>
                              <td>Administration Economique et Sociale (AES)</td>
                              <td>Licence</td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div> -->

                </div>
              </div>
            </div>
          </div>
          <!-- BLOC DES PROGRAMMES -->
          <div class="col-lg-3">
            <aside class="sidebar-widget info-column">
              <div class="inner-column3">
                <h3 class="text-center"> Scolarité </h3>
                <ul class="project-info clearfix">
                  <li>
                    <!-- <div class="priceing">
                          <strong> xxxxx </strong>
                          <sub> xxxxx</sub>
                          <span class="discont"> xxxxx</span>
                        </div> -->
                  </li>
                  <li>
                    <span class="icon fal fa-user"></span>
                    <h5 class="text-center "> <a href="admissions"><strong>Admission</strong></a>
                  </li>
                  </h4>
                  <li>
                    <span class="icon fal fa-book"></span>
                    <h6> <a href="inscriptions"> <strong> Inscription et Ré-inscription </strong></a></h6>
                  </li>
                  <li>

                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Project Detail -->
</div><!-- #content -->
@endsection