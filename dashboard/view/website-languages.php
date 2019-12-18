	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
   <div class="section-header text-center">
    <h1 class="title">Global</h1>
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
                          <a class="dropdown-item" href="../../dashboard/controllers/about-us-controller.php">About us</a>
                          <a class="dropdown-item ml-2" href="../../dashboard/controllers/team-controller.php">- Team</a>
                          <a class="dropdown-item ml-2" href="../../dashboard/controllers/about-us-controller.php">- About us</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/news-controller.php">News</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/employees-list-controller.php">Employees</a>
                          <a class="dropdown-item" href="../../dashboard/controllers/system-log-controller.php">System log</a>
                          <a class="dropdown-item active" href="../../dashboard/controllers/global-controller.php">Global</a>
                          <a class="dropdown-item ml-2" href="../../dashboard/controllers/coutries-controller.php">- Supported
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
                      <li><a class="nav-link " href="../../dashboard/controllers/about-us-controller.php">About us</a>
                          <ul class="list-unstyled ">
                              <li><a class="nav-link " href="../../dashboard/controllers/team-controller.php">- Team</a></li>
                              <li><a class="nav-link " href="../../dashboard/controllers/about-us-controller.php">- About us</a></li>
                          </ul>
                      </li>
                      <li><a class="nav-link" href="../../dashboard/controllers/news-controller.php">News</a></li>
                      <li><a class="nav-link" href="../../dashboard/controllers/employees-list-controller.php">Employees</a></li>
                      <li><a class="nav-link" href="../../dashboard/controllers/system-log-controller.php">System log</a></li>
                      <li><a class="nav-link active" href="../../dashboard/controllers/global-controller.php">Global</a>
                          <ul class="list-unstyled ">
                              <li><a class="nav-link" href="../../dashboard/controllers/coutries-controller.php">- Supported
                                      Countries</a></li>
                              <li><a class="nav-link text-primary" href="../../dashboard/controllers/language-controller.php">- Website Languages</a></li>
                          </ul>
                      </li>
                      <li><a class="nav-link" href="../../dashboard/controllers/maintenance-controller.php">Offline mode </a></li>
                  </ul>

              </div>
              <!----page sidebar web menu end------>

      </div>
      <!----page sidebar menu end--->
      <div class="col col-content">
        <div class="section-header">
          <h3 class="sub-title">
          Website Languages
          </h3>
        </div>
        <div class="form-group">
          <label class=" col-form-label">Language</label>
           <input type="text" name="" class="form-control" value="Swedish">
       </div><!------>

        <div class="form-group">
    <form id="form1">
     <div class="d-flex align-items-center">
      <div class="card card-body text-center">
        <small class="text-secondary">Language flag</small>
        <span class="file-wrapper mt-2">
          <input type="file" name="photo" id="imgInp" class="uploader" />
          <span class="btn btn-grd mt-md-0 mt-2">Upload</span>
        </span>
      </div>
      <div class="pl-3">
       <img id="img-uploaded" src="../../dashboard/view/assets/images/flag.png" alt="" width="80" />
     </div>
   </div>
 </form>
</div><!------>
<div>
  <table class="table table-bordered table-striped ">
    <thead>
      <tr>
        <th>String</th>
        <th>String new</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          This is string 1(pre-defined/can not be changed)
        </td>
        <td>
          This is the translation (the field here should be open for typing)
        </td>
      </tr>
      <tr>
        <td>
          This is string 2 
        </td>
        <td>
          This is the translation
        </td>
      </tr>
      <tr>
        <td>
          This is string 3 
        </td>
        <td>
          This is the translation
        </td>
      </tr>
      <tr>
        <td>
          This is string 4 
        </td>
        <td>
          This is the translation
        </td>
      </tr>
      <tr>
        <td>
          This is string 5 
        </td>
        <td>
          This is the translation
        </td>
      </tr>
      <tr>
        <td>
          This is string 6 
        </td>
        <td>
          This is the translation
        </td>
      </tr>
    </tbody>
  </table>
</div>
     
<div class="form-actions form-group">
  <a href="../../dashboard/controllers/language-controller.php" class="btn btn-alt">Cancel</a>
  <a href="../../dashboard/controllers/language-controller.php" class="btn btn-grd">Add</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

    <?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="../../dashboard/view/assets/js/jquery-3.3.1.min.js"></script>
<script src="../../dashboard/view/assets/js/popper.min.js" ></script>
<script src="../../dashboard/view/assets/js/bootstrap.min.js" ></script>
<script src="../../dashboard/view/assets/js/custom.js"></script>

</body>
</html>