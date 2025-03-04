	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
         <div class="section-header text-center">
      <h1 class="title">Offline mode</h1>
    </div>
        <div class="card border-0 bg-white form-wizard">
          <div class="card-body">
            <div class="row">
                <!----page sidebar menu--->
                <!----page sidebar mobile  menu end--->
                <div class="col col-sidebar">
                    <div class="d-block d-lg-none mb-3">
                        <div class="nav-item dropdown corner-radius">
                            <a class="nav-link btn  dropdown-toggle bg-grd text-white text-left " href="#"
                               id="sidenav" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Settings
                            </a>
                            <div class="dropdown-menu navbar-inner shadow border-0 w-100 py-0"
                                 aria-labelledby="sidenav">
                                <a class="dropdown-item" href="../../dashboard/controllers/company-details.php">Company details</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/links-controller.php">Links</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/third-party-controller.php">Third Party</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/cookies-controller.php">Cookies</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/terms-of-service-controller.php">Terms of service</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/employees-list-controller.php">GDPR</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/about-us-controller.php">About us</a>
                                <a class="dropdown-item ml-2" href="../../dashboard/controllers/team-controller.php">- Team</a>
                                <a class="dropdown-item ml-2" href="../../dashboard/controllers/about-us-controller.php">- About us</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/news-list-controller.php">News</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/employees-controller.php">Employees</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/system-log-controller.php">System log</a>
                                <a class="dropdown-item" href="../../dashboard/controllers/global-controller.php">Global</a>
                                <a class="dropdown-item ml-2" href="../controllers/countries-controller.php">- Supported
                                    Countries</a>
                                <a class="dropdown-item ml-2" href="../../dashboard/controllers/language-controller.php">- Website Languages</a>
                                <a class="dropdown-item active" href="../../dashboard/controllers/maintenance-controller.php">Offline mode </a>

                            </div>
                        </div>
                    </div>
                    <!----page sidebar mobile  menu end--->


                    <!----page sidebar web menu--->
                    <div class="d-none d-lg-block">
                        <h2 class="sub-title ml-3">Settings</h2>
                        <ul class="list-unstyled nav flex-column nav-pills navbar-inner ">
                            <li>
                                <a class="nav-link" href="../../dashboard/controllers/company-details.php">Company details</a>
                            </li>
                            <li><a class="nav-link" href="../../dashboard/controllers/links-controller.php">Links</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/third-party-controller.php">Third Party</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/cookies-controller.php">Cookies</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/terms-of-service-controller.php">Terms of service</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/gdpr-controller.php">GDPR</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/about-us-controller.php">About us</a>
                                <ul class="list-unstyled ">
                                    <li><a class="nav-link " href="../../dashboard/controllers/team-controller.php">- Team</a></li>
                                    <li><a class="nav-link text-primary" href="../../dashboard/controllers/about-us-controller.php">- About us</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="../../dashboard/controllers/news-list-controller.php">News</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/employees-list-controller.php">Employees</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/system-log-controller.php">System log</a></li>
                            <li><a class="nav-link" href="../../dashboard/controllers/global-controller.php">Global</a>
                                <ul class="list-unstyled ">
                                    <li><a class="nav-link" href="../controllers/countries-controller.php">- Supported
                                            Countries</a></li>
                                    <li><a class="nav-link" href="../../dashboard/controllers/language-controller.php">- Website Languages</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link active" href="../../dashboard/controllers/maintenance-controller.php">Offline mode </a></li>
                        </ul>

                    </div>
                    <!----page sidebar web menu end------>

       </div>
        <!----page sidebar menu end--->
       <div class="col col-content">
                   <div class="form-group d-flex align-items-center">
                      <label class=" col-form-label mr-3">Offline-mode</label>
                     <div class="toggle-btn ">
  <input type="checkbox"  class="cb-value" />
  <span class="round-btn"></span>
</div>

                      </div><!------>
               
        </div>
      </div>
      </div>
  </div>
</div>
</section>

    <?php include 'inc/footer.php'; ?>

<!-- Modal -->
<div class="modal fade" id="offmode" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body py-5 text-center">
    Are you sure you want to set website offline?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-grd" id="offmode-yes">Yes</button>
        <button type="button" class="btn btn-alt" id="modal-close">No</button>
        
      </div>
    </div>
  </div>
</div><!------>
<script type="text/javascript" src="../../dashboard/view/assets/js/jquery-3.3.1.min.js"></script>
<script src="../../dashboard/view/assets/js/popper.min.js" ></script>
<script src="../../dashboard/view/assets/js/bootstrap.min.js" ></script>
<script src="../../dashboard/view/assets/js/custom.js"></script>
</body>
</html>