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
    <section class="content home" style="padding-bottom: 35%;">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Tableau de bord</h2>
                <!-- <small class="text-muted">Welcome to Swift application</small> -->
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h3>50.5 Gb</h3>
                            <p class="text-muted">Traffic this month</p>
                            <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope"
                                value="68" type="success">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <span class="text-small">4% higher than last month</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h3>26.8%</h3>
                            <p class="text-muted">Server Load</p>
                            <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope"
                                value="68" type="danger">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <span class="text-small">4% higher than last month</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h3>$ 14,500</h3>
                            <p class="text-muted">Total Sale</p>
                            <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope"
                                value="68" type="warning">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <span class="text-small">15% higher than last month</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h3>1,600</h3>
                            <p class="text-muted">Total Feedbacks</p>
                            <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope"
                                value="68" type="info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <span class="text-small">10% higher than last month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> <br> <br>
    <!-- main content -->

    <div class="color-bg">

    </div>

    <!-- Jquery Core Js -->
  @include('admin.include.js')
</body>

</html>