<?php include 'inc/header.php'; ?>


<section class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">My <span class="font-regular">Cases</span></h2>
        </div>
        <!--setting navabar-->
        <div class="mb-3 ">
            <ul class="nav nav-pills navbar-inner">
                <li class="nav-item">
                    <a class="nav-link active" href="myaccount.php">My cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting.php">User setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php">logout</a>
                </li>
            </ul>
        </div>
        <!--setting navabar end-->
        <div class="row">
            <div class="col-12">
                <!--sorting-->
                <div class="sorting">Sort by: ID <span class="flaticon-sorting"></span>(Here we got sort by 10. Under
                    proeess, Info req., Rejected, Won)
                </div>
                <!--sorting end-->
            </div>
            <div class="col-12">
                <!---claim card---->
                <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
                    <div class="claim-box  d-flex justify-content-between">
                        <div class="">

                            <ul class="list-unstyled claim-table">
                                <li>
                                    <span class="case-header">Case id:</span>
                                    <span class="case-value">1234</span>
                                </li>
                                <li>
                                    <span class="case-header">Received:</span>
                                    <span class="case-value">14:32 - 12/11/2019</span>
                                </li>
                                <li>
                                    <span class="case-header">Status:</span>
                                    <span class="case-value">Under process</span>
                                </li>
                            </ul>

                        </div>
                        <div class="">
                            <a href="#" class="btn btn-primary btn-grd">View Claim</a>
                        </div>
                    </div>
                    <div class="claim-status text-center ">
                        <!--   <span>Claim Status</span> -->
                        <ul class="btn-group nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link " href="#">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Under Process</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Info req.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Won</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Rejected</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
                    <div class="claim-box  d-flex justify-content-between">
                        <div>

                            <ul class="list-unstyled claim-table">
                                <li>
                                    <span class="case-header">Case id:</span>
                                    <span class="case-value">1234</span>
                                </li>
                                <li>
                                    <span class="case-header">Received:</span>
                                    <span class="case-value">14:32 - 12/11/2019</span>
                                </li>
                                <li>
                                    <span class="case-header">Status:</span>
                                    <span class="case-value">Under process</span>
                                </li>
                            </ul>

                        </div>
                        <div class="">
                            <a href="#" class="btn btn-primary btn-grd">View Claim</a>
                        </div>
                    </div>
                    <div class="claim-status text-center ">
                        <!--   <span>Claim Status</span> -->
                        <ul class="btn-group nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Under Process</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Info req.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  active" href="#">Won</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Rejected</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
                    <div class="claim-box  d-flex justify-content-between">
                        <div>

                            <ul class="list-unstyled claim-table">
                                <li>
                                    <span class="case-header">Case id:</span>
                                    <span class="case-value">1234</span>
                                </li>
                                <li>
                                    <span class="case-header">Received:</span>
                                    <span class="case-value">14:32 - 12/11/2019</span>
                                </li>
                                <li>
                                    <span class="case-header">Status:</span>
                                    <span class="case-value">Under process</span>
                                </li>
                            </ul>

                        </div>
                        <div class="">
                            <a href="#" class="btn btn-primary btn-grd">View Claim</a>
                        </div>
                    </div>
                    <div class="claim-status text-center ">
                        <!--   <span>Claim Status</span> -->
                        <ul class="btn-group nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Under Process</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Info req.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Won</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Rejected</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</div>

<?php include 'inc/footer.php'; ?>
