	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
         <div class="section-header text-center">
      <h1 class="title">Links</h1>
    </div>
  
   
        <div class="card border-0 bg-white form-wizard">
          <div class="card-body">
            <div class="row">
               <!----page sidebar menu--->
                <!----page sidebar mobile  menu end--->
            <div class="col col-sidebar">
             <div class="d-block d-lg-none mb-3">
            <div class="nav-item dropdown corner-radius">
              <a class="nav-link btn  dropdown-toggle bg-grd text-white text-left " href="#" id="sidenav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </a>
                <div class="dropdown-menu navbar-inner shadow border-0 w-100 py-0" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item active"  href="../../dashboard/controllers/company-details.php" >Company details</a>
                    <a class="dropdown-item" href="../../dashboard/controllers/links-controller.php" >Links</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/third-party-controller.php" >Third Party</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/cookies-controller.php" >Cookies</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/terms-of-service-controller.php" >Terms of service</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/gdpr-controller.php" >GDPR</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/about-us-controller.php" >About us</a>
                    <a class="dropdown-item ml-2"  href="../../dashboard/controllers/team-controller.php" >- Team</a>
                    <a class="dropdown-item ml-2"  href="../../dashboard/controllers/about-us-controller.php" >- About us</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/news-list-controller.php" >News</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/employees-list-controller.php" >Employees</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/system-log-controller.php" >System log</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/global-controller.php" >Global</a>
                    <a class="dropdown-item ml-2"  href="../controllers/countries-controller.php" >- Supported Countries</a>
                    <a class="dropdown-item ml-2"  href="../../dashboard/controllers/language-controller.php" >- Website Languages</a>
                    <a class="dropdown-item"  href="../../dashboard/controllers/maintenance-controller.php" >Offline mode </a>

              </div>
            </div>
          </div>
           <!----page sidebar mobile  menu end--->


           <!----page sidebar web menu--->
          <div class="d-none d-lg-block" >
            <h2 class="sub-title ml-3">Settings</h2>
            <ul class="list-unstyled nav flex-column nav-pills navbar-inner ">
              <li>
                <a class="nav-link "  href="company-details.php" >Company details</a>
              </li>
              <li><a class="nav-link active"  href="../../dashboard/controllers/links-controller.php" >Links</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/third-party-controller.php" >Third Party</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/cookies-controller.php" >Cookies</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/terms-of-service-controller.php" >Terms of service</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/gdpr-controller.php"" >GDPR</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/about-us-controller.php" >About us</a>
                  <ul class="list-unstyled ">
                    <li><a class="nav-link "  href="../../dashboard/controllers/team-controller.php">- Team</a></li>
                    <li><a class="nav-link "  href="../../dashboard/controllers/about-us-controller.php">- About us</a></li>
                  </ul>
                </li>
              <li><a class="nav-link"  href="../../dashboard/controllers/news-list-controller.php" >News</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/employees-list-controller.php" >Employees</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/system-log-controller.php" >System log</a></li>
              <li><a class="nav-link"  href="../../dashboard/controllers/global-controller.php" >Global</a>
                  <ul class="list-unstyled ">
                    <li><a class="nav-link"  href="../controllers/countries-controller.php">- Supported Countries</a></li>
                    <li><a class="nav-link"  href="../../dashboard/controllers/language-controller.php">- Website Languages</a></li>
                  </ul>
                </li>
              <li><a class="nav-link"  href="../../dashboard/controllers/maintenance-controller.php" >Offline mode </a></li>
            </ul>
           
         </div>
          <!----page sidebar web menu end------>

       </div>
        <!----page sidebar menu end--->
       <div class="col col-content">
                   <div class="form-group">
                      <label class=" col-form-label">Facebook link</label>
                      <div class="">
                       <input type="text" name="" class="form-control" value="facebook.com">
                      </div>
                      </div><!------>
                        <div class="form-group">
                      <label class=" col-form-label">Twitter link</label>
                      <div class="">
                       <input type="text" name="" class="form-control" value="twitter.com">
                      </div>
                      </div><!------>
                       <div class="form-group">
                      <label class=" col-form-label">Instagram link</label>
                      <div class="">
                       <input type="text" name="" class="form-control" value="instagram.com">
                      </div>
                      </div><!------>
                       <div class="form-group">
                      <label class=" col-form-label">Linkedin Link</label>
                      <div class="">
                       <input type="text" name="" class="form-control" value="Linkedin.com">
                      </div>
                      </div><!------>
                      <div class="form-actions form-group">
                      <button type="button" class="btn btn-grd">Update</button>
                       </div>
        </div>
      </div>
      </div>
  </div>
</div>
</section>

<footer class="footer text-center text-md-left">

 <div class="footer-bottom py-2 py-md-3">
  <div class="container">
    <div class="copyright font-medium ">Claimy.dk - <span class="address">Address</span> - <span>Cvr. no</span> - <span><a href="#">e-mail</a></span> - @ Copyright</div>
  </div>
</div>
</footer>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js" ></script>
<script src="assets/js/bootstrap.min.js" ></script>
<script src="assets/js/custom.js"></script>

</body>
</html>