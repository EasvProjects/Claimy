	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
   <div class="section-header text-center">
    <h1 class="title">Employees</h1>
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
                          <a class="dropdown-item" href="../../dashboard/controllers/gdpr-controller.php">GDPR</a>
                          <a class="dropdown-item active" href="../../dashboard/controllers/about-us-controller.php">About us</a>
                          <a class="dropdown-item ml-2" href="../../dashboard/controllers/team-controller.php">- Team</a>
                          <a class="dropdown-item ml-2" href="../../dashboard/controllers/about-us-controller.php">- About us</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/news-list-controller.php">News</a>
                          <a class="dropdown-item active" href="../../dashboard/controllers/employees-list-controller.php">Employees</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/system-log-controller.php">System log</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/global-controller.php">Global</a>
                          <a class="dropdown-item ml-2" href="../controllers/countries-controller.php">- Supported
                              Countries</a>
                          <a class="dropdown-item ml-2" href="../../dashboard/controllers/language-controller.php">- Website Languages</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/maintenance-controller.php">Offline mode </a>

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
                      <li><a class="nav-link active" href="../../dashboard/controllers/employees-list-controller.php">Employees</a></li>
                      <li><a class="nav-link" href="../../dashboard/controllers/system-log-controller.php">System log</a></li>
                      <li><a class="nav-link" href="../../dashboard/controllers/global-controller.php">Global</a>
                          <ul class="list-unstyled ">
                              <li><a class="nav-link" href="../controllers/countries-controller.php">- Supported
                                      Countries</a></li>
                              <li><a class="nav-link" href="../../dashboard/controllers/language-controller.php">- Website Languages</a></li>
                          </ul>
                      </li>
                      <li><a class="nav-link" href="../../dashboard/controllers/maintenance-controller.php">Offline mode </a></li>
                  </ul>

              </div>
              <!----page sidebar web menu end------>

       </div>
        <!----page sidebar menu end--->
       <div class="col col-content">
        <div>
          <div class="table-header text-lg-right mb-3">
           <a href="../../dashboard/controllers/employees-controller.php" class="btn btn-grd">Add</a>
          </div>
          <table class="table table-bordered table-sm table-striped">
            <thead>
             <tr>
               <!--  <th class="no-sort d-none">hidden</th> -->
               <th class="no-sort">Action</th>
               <th class="no-sort">Title</th>
               <th class="no-sort">Fullname</th>
               <th class="no-sort">Create date</th>
               <th class="no-sort">Edit</th>
               <th class="no-sort">Active?</th>
             </tr>
           </thead>
           <tbody>
             <tr>
              <td>
                 <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2"></label>
                </div>
              </td>
              <td>Title 1</td>
              <td>Wisam</td>
              <td>25.11.2019</td>
              <td class="text-center">
               <a href="#" class="" data-toggle="tooltip" data-placement="top"  title="edit">
                <svg version="1.1" width="20" xmlns="http://www.w3.org/2000/svg"  width="16" height="16" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 383.947 383.947" style="enable-background:new 0 0 383.947 383.947;" xml:space="preserve">
                  <linearGradient id="theme-grd" gradientUnits="userSpaceOnUse" x1="0" y1="258" x2="512" y2="258" gradientTransform="matrix(1 0 0 -1 0 514)">
                    <stop offset="0" style="stop-color:#1488cc"></stop>
                    <stop offset="0.293" style="stop-color:#0d65bf"></stop>
                    <stop offset="0.554" style="stop-color:#1c4cb9"></stop>
                    <stop offset="0.796" style="stop-color:#1c4cb9"></stop>
                    <stop offset="1" style="stop-color:#2b32b2"></stop>
                  </linearGradient>
                  <g style="fill:url(#theme-grd);">
                    <polygon points="0,303.947 0,383.947 80,383.947 316.053,147.893 236.053,67.893"></polygon>
                    <path d="M377.707,56.053L327.893,6.24c-8.32-8.32-21.867-8.32-30.187,0l-39.04,39.04l80,80l39.04-39.04
                    C386.027,77.92,386.027,64.373,377.707,56.053z"></path>
                  </g>
                </svg> 
              </a>
            </td>
            <td>
              <a href="#">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1"></label>
                </div>
              </a>
            </td>
          </tr>

          <tr>
              <td>
                 <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3"></label>
                </div>
              </td>
              <td>Title 2</td>
              <td>Kim</td>
              <td>25.11.2019</td>
              <td class="text-center">
               <a href="#" class="" data-toggle="tooltip" data-placement="top"  title="edit">
                <svg version="1.1" width="20" xmlns="http://www.w3.org/2000/svg"  width="16" height="16" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 383.947 383.947" style="enable-background:new 0 0 383.947 383.947;" xml:space="preserve">
                  <linearGradient id="theme-grd" gradientUnits="userSpaceOnUse" x1="0" y1="258" x2="512" y2="258" gradientTransform="matrix(1 0 0 -1 0 514)">
                    <stop offset="0" style="stop-color:#1488cc"></stop>
                    <stop offset="0.293" style="stop-color:#0d65bf"></stop>
                    <stop offset="0.554" style="stop-color:#1c4cb9"></stop>
                    <stop offset="0.796" style="stop-color:#1c4cb9"></stop>
                    <stop offset="1" style="stop-color:#2b32b2"></stop>
                  </linearGradient>
                  <g style="fill:url(#theme-grd);">
                    <polygon points="0,303.947 0,383.947 80,383.947 316.053,147.893 236.053,67.893"></polygon>
                    <path d="M377.707,56.053L327.893,6.24c-8.32-8.32-21.867-8.32-30.187,0l-39.04,39.04l80,80l39.04-39.04
                    C386.027,77.92,386.027,64.373,377.707,56.053z"></path>
                  </g>
                </svg> 
              </a>
            </td>
            <td>
              <a href="#">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck4">
                  <label class="custom-control-label" for="customCheck4"></label>
                </div>
              </a>
            </td>
          </tr>
           <tr>
              <td>
                 <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck5">
                  <label class="custom-control-label" for="customCheck5"></label>
                </div>
              </td>
              <td>Title 3</td>
              <td>Kim</td>
              <td>25.11.2019</td>
              <td class="text-center">
               <a href="#" class="" data-toggle="tooltip" data-placement="top"  title="edit">
                <svg version="1.1" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 383.947 383.947" width="16" height="16" style="enable-background:new 0 0 383.947 383.947;" xml:space="preserve">
                  <linearGradient id="theme-grd" gradientUnits="userSpaceOnUse" x1="0" y1="258" x2="512" y2="258" gradientTransform="matrix(1 0 0 -1 0 514)">
                    <stop offset="0" style="stop-color:#1488cc"></stop>
                    <stop offset="0.293" style="stop-color:#0d65bf"></stop>
                    <stop offset="0.554" style="stop-color:#1c4cb9"></stop>
                    <stop offset="0.796" style="stop-color:#1c4cb9"></stop>
                    <stop offset="1" style="stop-color:#2b32b2"></stop>
                  </linearGradient>
                  <g style="fill:url(#theme-grd);">
                    <polygon points="0,303.947 0,383.947 80,383.947 316.053,147.893 236.053,67.893"></polygon>
                    <path d="M377.707,56.053L327.893,6.24c-8.32-8.32-21.867-8.32-30.187,0l-39.04,39.04l80,80l39.04-39.04
                    C386.027,77.92,386.027,64.373,377.707,56.053z"></path>
                  </g>
                </svg> 
              </a>
            </td>
            <td>
              <a href="#">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck6">
                  <label class="custom-control-label" for="customCheck6"></label>
                </div>
              </a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
    <div class="form-actions form-group">
      <button type="button" class="btn btn-grd">Save</button>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>

    <?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="../../dashboard/view/assets/js/popper.min.js" ></script>
<script src="../../dashboard/view/assets/js/bootstrap.min.js" ></script><!--
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.checkboxes.js"></script> 
<script src="assets/js/dataTables.bootstrap4.min.js"></script> -->
<script src="../../dashboard/view/assets/js/custom.js"></script>

</body>
</html>