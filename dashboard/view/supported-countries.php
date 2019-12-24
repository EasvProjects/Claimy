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
                              <li><a class="nav-link text-primary" href="../../dashboard/controllers/coutries-controller.php">- Supported
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
        <div class="section-header">
          <h3 class="sub-title">
          Supported countries
          </h3>
        </div>
        <div class="">
          <label class=" col-form-label">Country</label>
           <input type="text" name="" class="form-control" value="India">
       </div><!------>
       <div class="divider"></div>

       <div class="form-group">
        <h5>Parking company</h5>
        </div><!------>
        <div class="">
         <table class="table table-xs">
           <tr>
             <td >
               <div class="form-group">
                <label class=" col-form-label">Cvr no.</label>
                <div class="">
                 <input type="text" name="" class="form-control" value="123456">
               </div>
             </div><!------>
           </td>
           <td >
             <div class="form-group">
              <label class=" col-form-label">Name</label>
              <div class="">
               <input type="text" name="" class="form-control" value="Q-Park">
             </div>
           </div><!------>
         </td>
         <td >
           <div class="form-group">
            <label class=" col-form-label">Address</label>
            <div class="">
             <input type="text" name="" class="form-control" value="Alsion 2, 6400 Sønderborg">
           </div>
         </div><!------>
       </td>
       <td>
         <div class="form-group">
          <label class=" col-form-label">E-mail</label>
          <div class="">
           <input type="text" name="" class="form-control" value="Q-Park@Q-Park.dk">
         </div>
       </div><!------>
     </td>
     <td>
       <div class="form-group">
        <label class=" col-form-label">Phone</label>
        <div class="">
         <input type="text" name="" class="form-control" value="45123">
       </div>
     </div><!------>
   </td>

 </tr>
 <!---->
 <tr>
   <td>
     <div class="form-group">
      <label class=" col-form-label">Cvr no.</label>
      <div class="">
       <input type="text" name="" class="form-control" value="123456">
     </div>
   </div><!------>
 </td>
 <td>
   <div class="form-group">
    <label class=" col-form-label">Name</label>
    <div class="">
     <input type="text" name="" class="form-control" value="Q-Park">
   </div>
 </div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">Address</label>
  <div class="">
   <input type="text" name="" class="form-control" value="Alsion 2, 6400 Sønderborg">
 </div>
</div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">E-mail</label>
  <div class="">
   <input type="text" name="" class="form-control" value="Q-Park@Q-Park.dk">
 </div>
</div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">Phone</label>
  <div class="">
   <input type="text" name="" class="form-control" value="45123">
 </div>
</div><!------>
</td>

</tr>
<tr>
 <td>
   <div class="form-group">
    <label class=" col-form-label">Cvr no.</label>
    <div class="">
     <input type="text" name="" class="form-control" value="123456">
   </div>
 </div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">Name</label>
  <div class="">
   <input type="text" name="" class="form-control" value="Q-Park">
 </div>
</div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">Address</label>
  <div class="">
   <input type="text" name="" class="form-control" value="Alsion 2, 6400 Sønderborg">
 </div>
</div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">E-mail</label>
  <div class="">
   <input type="text" name="" class="form-control" value="Q-Park@Q-Park.dk">
 </div>
</div><!------>
</td>
<td>
 <div class="form-group">
  <label class=" col-form-label">Phone</label>
  <div class="">
   <input type="text" name="" class="form-control" value="45123">
 </div>
</div><!------>
</td>

</tr>
</table>
<div class="form-group">
  <button type="button" class="btn btn-grd">Add more companies</button>
</div>
</div>

<div class="divider"></div>
<h5>Ticket reasons</h5>

<div class="form-group">
<label class=" col-form-label">Reason</label>
 <input type="text" name="" class="form-control" value="123456">
</div>

<div class="form-group ">
<label class=" col-form-label">Reason</label>
 <input type="text" name="" class="form-control" value="123456">
</div>
<div class="form-group">
  <button type="button" class="btn btn-grd">Add reason</button>
</div>
 <div class="divider"></div>
<div class="form-actions form-group">
  <a href="../../dashboard/controllers/global-controller.php" class="btn btn-alt">Cancel</a>
  <a href="../../dashboard/controllers/global-controller.php" class="btn btn-grd" onclick="addCountry()">Add</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

    <?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js" ></script>
<script src="assets/js/bootstrap.min.js" ></script>
<script src="assets/js/custom.js"></script>

</body>
</html>