  <!DOCTYPE html>
  <html>
  <head>
    <title>
     Claimy
   </title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" /> 
   <link href="assets/css/gijgo.css" type="text/css" rel="stylesheet" /> 
   <link href="assets/css/dataTables.bootstrap4.min.css" type="text/css" rel="stylesheet" />
   <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
 </head>
 <body>

  <header class="bg-grd">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
         <!--  <img src="assets/images/logo.png" class="logo" alt=""> -->
         <svg 
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         width="116px" height="24px">
         <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
         d="M115.645,0.992 L111.138,11.556 C110.495,13.057 109.789,13.853 108.962,14.190 L108.962,22.488 C108.962,22.825 108.686,23.101 108.348,23.101 L103.351,23.101 C103.014,23.101 102.769,22.825 102.769,22.488 L102.769,14.190 C101.941,13.853 101.236,13.057 100.592,11.556 L96.085,0.992 C96.054,0.869 96.024,0.778 96.024,0.747 C96.024,0.471 96.177,0.349 96.453,0.349 L102.002,0.349 C102.339,0.349 102.493,0.594 102.615,0.931 L105.559,9.045 C105.651,9.260 105.743,9.352 105.865,9.352 C105.988,9.352 106.080,9.260 106.172,9.045 L109.115,0.931 C109.238,0.594 109.391,0.349 109.728,0.349 L115.277,0.349 C115.553,0.349 115.706,0.471 115.706,0.747 C115.706,0.778 115.676,0.869 115.645,0.992 ZM91.672,23.101 L86.644,23.101 C86.399,23.101 86.184,22.825 86.184,22.488 L86.184,11.250 C86.184,11.036 86.153,10.944 86.092,10.944 C86.061,10.944 86.031,10.975 86.000,11.005 L85.969,11.005 C85.877,11.005 85.785,11.281 85.693,11.403 L83.241,15.476 C82.995,15.874 82.689,16.058 82.352,16.058 L80.236,16.058 C79.899,16.058 79.592,15.874 79.347,15.476 L76.833,11.281 C76.741,11.158 76.710,11.005 76.619,11.005 L76.588,11.005 C76.557,10.975 76.527,10.944 76.496,10.944 C76.404,10.944 76.373,11.036 76.373,11.250 L76.373,22.488 C76.373,22.825 76.189,23.101 75.944,23.101 L70.885,23.101 C70.640,23.101 70.395,23.070 70.395,22.733 L70.395,1.482 C70.395,0.869 70.916,0.349 71.529,0.349 L74.932,0.349 C75.699,0.349 76.159,0.686 76.496,1.268 L80.941,9.015 C81.095,9.260 81.187,9.382 81.279,9.382 C81.371,9.382 81.493,9.260 81.646,9.015 L86.092,1.268 C86.429,0.686 86.889,0.349 87.656,0.349 L91.059,0.349 C91.672,0.349 92.193,0.869 92.193,1.482 L92.193,22.733 C92.193,23.070 91.917,23.101 91.672,23.101 ZM64.570,23.101 L59.542,23.101 C59.205,23.101 58.929,22.825 58.929,22.488 L58.929,0.931 C58.929,0.594 59.205,0.349 59.542,0.349 L64.570,0.349 C64.907,0.349 65.183,0.594 65.183,0.931 L65.183,22.488 C65.183,22.825 64.907,23.101 64.570,23.101 ZM54.638,23.101 L49.304,23.101 C48.966,23.101 48.783,22.856 48.691,22.519 L47.832,18.263 L42.375,18.263 L41.516,22.519 C41.425,22.856 41.241,23.101 40.903,23.101 L35.599,23.101 C35.262,23.101 35.078,22.948 35.078,22.611 C35.078,22.519 35.109,22.550 35.109,22.458 L39.217,3.717 C39.892,0.655 42.222,0.073 45.104,0.073 C47.985,0.073 50.315,0.655 50.990,3.717 L55.098,22.458 C55.098,22.550 55.129,22.580 55.129,22.611 C55.129,22.948 54.976,23.101 54.638,23.101 ZM45.441,5.585 L45.349,5.279 C45.318,5.187 45.257,5.157 45.104,5.157 C44.950,5.157 44.889,5.187 44.858,5.279 L44.766,5.585 L43.264,13.363 L46.943,13.363 L45.441,5.585 ZM27.139,23.377 C23.215,23.377 19.260,22.488 19.260,16.517 L19.260,0.961 C19.260,0.624 19.566,0.349 19.903,0.349 L24.901,0.349 C25.238,0.349 25.514,0.624 25.514,0.961 L25.514,16.517 C25.514,17.711 25.882,18.048 26.986,18.048 L31.952,18.048 C32.289,18.048 32.565,18.324 32.565,18.661 L32.565,22.397 C32.565,22.733 32.351,22.948 31.952,23.009 C30.879,23.254 28.764,23.377 27.139,23.377 ZM9.910,23.377 C4.299,23.377 0.467,20.314 0.467,13.302 L0.467,10.148 C0.467,3.135 4.299,0.073 9.910,0.073 C11.872,0.073 13.374,0.349 14.202,0.624 C14.692,0.778 14.876,0.839 14.876,1.298 L14.876,5.218 C14.876,5.616 14.692,5.800 14.325,5.800 L14.233,5.800 C12.976,5.677 11.688,5.524 9.940,5.524 C8.316,5.524 6.783,6.228 6.783,10.148 L6.783,13.302 C6.783,17.130 8.254,17.926 9.940,17.926 C11.688,17.926 12.976,17.773 14.233,17.650 L14.325,17.650 C14.692,17.650 14.876,17.834 14.876,18.232 L14.876,22.152 C14.876,22.550 14.692,22.672 14.202,22.825 C13.374,23.101 11.872,23.377 9.910,23.377 Z"/>
       </svg>
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <img src="assets/fonts/icons/menu.svg" width="20">
     </button>

     <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link active" href="index.php">All cases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="inbox.php">New messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="company-details.php">Settings</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Wisam
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="myaccount.php">My account</a>
            <a class="dropdown-item" href="signin.php">Logout</a>
          </div>
        </li>
      </ul>
      <!--  <a href="signin.php" class="btn btn-primary btn-login d-none d-lg-block">Login</a> -->
    </div>
  </nav>
</div>
</header>
<section class="main-section section-padding">
  <div class="container">
   <div class="section-header text-center">
    <h1 class="title">All cases</h1>
  </div>
  <div class="card border-0 bg-white form-wizard">
    <div class="card-body">
      <div class="row">
       <!----page sidebar menu--->
       <!----page sidebar mobile  menu end--->
       <div class="col col-sidebar">
         <div class="d-block d-lg-none mb-3">
          <div class="nav-item dropdown corner-radius">
            <a class="nav-link btn  dropdown-toggle bg-grd text-white text-left " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              All cases
            </a>
            <div class="dropdown-menu navbar-inner shadow border-0 w-100 py-0" aria-labelledby="navbarDropdown">
              <a class="dropdown-item active"  href="index.php">All</a>
              <a class="dropdown-item"  href="customers.php">Customers</a>
              <a class="dropdown-item"  href="#" >Retsinformation</a>
            </div>
          </div>
        </div>
        <!----page sidebar mobile  menu end--->


        <!----page sidebar web menu--->
        <div class="d-none d-lg-block">
          <h2 class="sub-title ml-3">All cases</h2>
          <ul class="list-unstyled nav flex-column nav-pills navbar-inner">
            <li><a class="nav-link active"  href="index.php">All</a></li>
            <li><a class="nav-link"  href="customers.php">Customers</a></li>
            <li><a class="nav-link"  href="#">Retsinformation</a></li>
          </ul>
        </div>
        <!----page sidebar web menu end------>

      </div>
      <!----page sidebar menu end--->
      <div class="col col-content">
        <div class="table-filter form-row">
          <div class="form-group col-md-6">
            <label class=" col-form-label">Status</label>
            <div class="">
             <select class="form-control">
               <option>Under Process</option>
               <option>Information required</option>
               <option>Rejected</option>
               <option>Won</option>
               
             </select>
           </div>
         </div><!------>


       </div>

       <div class="form-group">
         <a href="#" class="btn btn-alt">Back</a>
         <a href="#" class="btn btn-grd" data-toggle="modal"   data-target="#email_to_client">Send to client</a>
         <a href="#" class="btn btn-grd" data-toggle="modal" data-target="#email_to_parking">Send to parking</a>
       </div>
       <div class="divider"></div>
       <div>
        <ul class="list-unstyled claim-table under-process-table">
         <li>
          <span class="case-header">Case id</span>
          <label class="case-value">1234</label>
        </li>
         <li>
          <span class="case-header">Date</span>
          <label class="case-value">22:44 - 26/11/2019</label>
        </li>
        <li>
          <span class="case-header">Action by</span>
          <label class="case-value">Wisam</label>
        </li>
        <li>
          <span class="case-header">Status</span>
          <label class="case-value">Information Required</label>
        </li>
        <li>
          <span class="case-header">Message</span>
          <label class="case-value">The ticket is in complain with §5 that says: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit, metus vel vehicula rutrum, nulla ligula bibendum risus, in sodales neque mogna pellentesque ipsum. Vestibulum volutpat tincidunt hendrerit. Proin vel luctus nisl. Praesent vel volutøat urna. In varius et nisl sit amet auctor. Vivamus tempor nunc consequat diam bibendum porttitor. Aenean pharetra metus a lectus facilisis, vitae condimentum tortor placerat. Nullam gravida, sem vitae iaculis elementum, augue urna mollis lorem,</label>
        </li>
        <li class="divider"></li>
        
         <li>
          <span class="case-header">Date</span>
          <label class="case-value">22:44 - 19/11/2019</label>
        </li>
        <li>
          <span class="case-header">Status</span>
          <label class="case-value">new</label>
        </li>
        <li>
          <span class="case-header">By</span>
          <label class="case-value">Wisam Swaidan</label>
        </li>
        <li>
          <span class="case-header">Phone no.</span>
          <label class="case-value">+4561856583</label>
        </li>
        <li>
          <span class="case-header">E-mail</span>
          <label class="case-value">email@email.dk</label>
        </li>
        <li>
          <span class="case-header">Country</span>
          <label class="case-value">Denmark</label>
        </li>
        <li>
          <span class="case-header">Parking ticket company</span>
          <label class="case-value">Q-Park</label>
        </li>
        <li>
          <span class="case-header">Reason</span>
          <label class="case-value">"This is the predefined reason"</label>
        </li>
        <li>
          <span class="case-header">Ticket no.</span>
          <label class="case-value">1234</label>
        </li>
        <li>
          <span class="case-header">Ticket date</span>
          <label class="case-value">12/11/2019</label>
        </li>
        <li>
          <span class="case-header">Ticket time</span>
          <label class="case-value">14:31</label>
        </li>
        <li>
          <span class="case-header">Ticket payment due date</span>
          <label class="case-value">22/11/2019</label>
        </li>
        <li>
          <span class="case-header">Ticket issued on the following address</span>
          <label class="case-value">Aision 2, 6400 sønderborg</label>
        </li>
        <li>
          <span class="case-header">Car reg no.</span>
          <label class="case-value">XY12345</label>
        </li>
        <li>
          <span class="case-header">Car brand</span>
          <label class="case-value">Mercedes</label>
        </li>
        <li>
          <span class="case-header">Car model</span>
          <label class="case-value">C320</label>
        </li>
        <li>
          <span class="case-header">Your comments</span>
          <label class="case-value ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut</label>
        </li>
        <li class="attachments">
          <span class="case-header">Attachments</span>
          <label class="case-value "><img src="https://via.placeholder.com/50C/O https://placeholder.com/"><img src="https://via.placeholder.com/50C/O https://placeholder.com/"><img src="https://via.placeholder.com/50C/O https://placeholder.com/"></label>
        </li>

      </ul>
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
<script src="assets/js/gijgo.min.js" ></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/custom.js"></script>

<!-- Modal -->
<div class="modal fade" id="email_to_client" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center">
      <div class="modal-body">
         <h6 class="form-group" >You are just about to send e-mail to the customer, would you like to add more information to the e-mail?</h6>
        <div class="form-group">
          <textarea class="form-control height-auto" rows="3"> Can you please send us some more pictures of the parking ticket? </textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-alt" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-grd" id="sent_to_client_btn">Send</button>
      </div>
    </div>
  </div>
</div><!------>

<!-- Modal -->
<div class="modal fade" id="email_to_parking" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center">
      <div class="modal-body">
          <h6 class="form-group" >you are just about to send e-mail to the Parking company, would you like to add more information to the e-mail?  </h6>
         <div class="form-group">
          <textarea class="form-control height-auto" rows="5">The ticket is in complain with §5 that says: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit, metus vel vehicula rutrum, nulla ligula bibendum risus, in sodales neque mogna pellentesque ipsum. Vestibulum volutpat tincidunt hendrerit. Proin vel luctus nisl. Praesent vel volutøat urna. In varius et nisl sit amet auctor. Vivamus tempor nunc consequat diam bibendum porttitor. Aenean pharetra metus a lectus facilisis, vitae condimentum tortor placerat. Nullam gravida, sem vitae iaculis elementum, augue urna mollis lorem, </textarea>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-alt" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-grd" id="sent_to_parking_btn" >Send</button>
        
      </div>
    </div>
  </div>
</div><!------>


<!-- Modal -->
<div class="modal fade" id="sent1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content  text-center">
      <div class="modal-header">
        <h6 class="" >E-mail sent to customer</h6>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-alt">Back to cases</a>
        <a href="updated-case.php" class="btn btn-grd">Show case</a>
        
      </div>
    </div>
  </div>
</div><!------>



<!-- Modal -->
<div class="modal fade" id="sent2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h6 class="" >E-mail sent to Parking company</h6>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-alt">Back to cases</a>
        <a href="updated-case-parking-company.php" class="btn btn-grd">Show case</a>
        
      </div>
    </div>
  </div>
</div><!------>
</body>
</html>