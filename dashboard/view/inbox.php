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
 <!--   <link rel="stylesheet" href="assets/css/dataTables.checkboxes.css">
   <link href="assets/css/dataTables.bootstrap4.min.css" type="text/css" rel="stylesheet" /> -->
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
          <a class="nav-link" href="index.php">All cases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">New messages</a>
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
    <h1 class="title">Inbox</h1>
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
              Messages
            </a>
            <div class="dropdown-menu navbar-inner shadow border-0 w-100 py-0" aria-labelledby="navbarDropdown">

              <a class="dropdown-item active"  href="inbox.php" >Inbox</a>
              <a class="dropdown-item"  href="sent.php" >Sent</a>
              <a class="dropdown-item"  href="delete.php" >Delete</a>

            </div>
          </div>
        </div>
        <!----page sidebar mobile  menu end--->


        <!----page sidebar web menu--->
        <div class="d-none d-lg-block" >
          <h2 class="sub-title ml-3">Messages</h2>
          <ul class="list-unstyled nav flex-column nav-pills navbar-inner ">
            <li><a class="nav-link active"  href="inbox.php">Inbox</a></li>
            <li><a class="nav-link"  href="sent.php">Sent</a></li>
            <li><a class="nav-link"  href="delete.php">Delete</a></li>

          </ul>

        </div>
        <!----page sidebar web menu end------>

      </div>
      <!----page sidebar menu end--->
      <div class="col col-content">
        <!-- <div class="section-header">
          <h3 class="sub-title">
          Website Languages
          </h3>
        </div> -->
        <div>
         <!--  <div class="table-header text-lg-right mb-3">
           <a href="website-languages.php" class="btn btn-grd">Add</a>
         </div> -->
         <table class="table table-bordered table-sm table-striped">
          <thead>
           <tr>
             <!--  <th class="no-sort d-none">hidden</th> -->
             <th class="no-sort" width="80">Selection</th>
             <th class="no-sort">Date </th>
             <th class="no-sort">From</th>
             <th class="no-sort">E-mail</th>
             <th class="no-sort">Phone</th>
             <th class="no-sort">Message</th>
             <th class="no-sort" width="100">Action</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td class="">
              <div class="d-flex justify-content-between align-items-center">
                <a href="#">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1"></label>
                  </div>
                </a>
                <span>
                  <svg height="16" width="16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  width="511.626px" height="511.626px" viewBox="0 0 511.626 511.626" style="enable-background:new 0 0 511.626 511.626;"
                  xml:space="preserve">
                  <path d="M49.106,178.729c6.472,4.567,25.981,18.131,58.528,40.685c32.548,22.554,57.482,39.92,74.803,52.099
                  c1.903,1.335,5.946,4.237,12.131,8.71c6.186,4.476,11.326,8.093,15.416,10.852c4.093,2.758,9.041,5.852,14.849,9.277
                  c5.806,3.422,11.279,5.996,16.418,7.7c5.14,1.718,9.898,2.569,14.275,2.569h0.287h0.288c4.377,0,9.137-0.852,14.277-2.569
                  c5.137-1.704,10.615-4.281,16.416-7.7c5.804-3.429,10.752-6.52,14.845-9.277c4.093-2.759,9.229-6.376,15.417-10.852
                  c6.184-4.477,10.232-7.375,12.135-8.71c17.508-12.179,62.051-43.11,133.615-92.79c13.894-9.703,25.502-21.411,34.827-35.116
                  c9.332-13.699,13.993-28.07,13.993-43.105c0-12.564-4.523-23.319-13.565-32.264c-9.041-8.947-19.749-13.418-32.117-13.418H45.679
                  c-14.655,0-25.933,4.948-33.832,14.844C3.949,79.562,0,91.934,0,106.779c0,11.991,5.236,24.985,15.703,38.974
                  C26.169,159.743,37.307,170.736,49.106,178.729z"/>
                  <path d="M483.072,209.275c-62.424,42.251-109.824,75.087-142.177,98.501c-10.849,7.991-19.65,14.229-26.409,18.699
                  c-6.759,4.473-15.748,9.041-26.98,13.702c-11.228,4.668-21.692,6.995-31.401,6.995h-0.291h-0.287
                  c-9.707,0-20.177-2.327-31.405-6.995c-11.228-4.661-20.223-9.229-26.98-13.702c-6.755-4.47-15.559-10.708-26.407-18.699
                  c-25.697-18.842-72.995-51.68-141.896-98.501C17.987,202.047,8.375,193.762,0,184.437v226.685c0,12.57,4.471,23.319,13.418,32.265
                  c8.945,8.949,19.701,13.422,32.264,13.422h420.266c12.56,0,23.315-4.473,32.261-13.422c8.949-8.949,13.418-19.694,13.418-32.265
                  V184.437C503.441,193.569,493.927,201.854,483.072,209.275z"/>
                </svg>

              </span>
            </div>
          </td>
          <td>
            11.11.2019
          </td>
          <td>
           Quickpay
         </td>
         <td>
          quickpay@quickpay.dk
        </td>
        <td>
          12345678
        </td>
        <td>Hey regarding case id: 1234 - what is the status</td>
        <td>
          <div class="action d-flex justify-content-between">
            <a href="read.php">
              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 488.85 488.85" style="enable-background:new 0 0 488.85 488.85;" xml:space="preserve">
              <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2
              s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025
              c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3
              C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7
              c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"/>
            </svg>
          </a>
          <a href="reply.php">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;"
   xml:space="preserve">

  <path d="M496.5,233.842c-30.841-76.706-114.112-115.06-249.823-115.06h-63.953V45.693c0-4.952-1.809-9.235-5.424-12.85
    c-3.617-3.617-7.896-5.426-12.847-5.426c-4.952,0-9.235,1.809-12.85,5.426L5.424,179.021C1.809,182.641,0,186.922,0,191.871
    c0,4.948,1.809,9.229,5.424,12.847L151.604,350.9c3.619,3.613,7.902,5.428,12.85,5.428c4.947,0,9.229-1.814,12.847-5.428
    c3.616-3.614,5.424-7.898,5.424-12.848v-73.094h63.953c18.649,0,35.349,0.568,50.099,1.708c14.749,1.143,29.413,3.189,43.968,6.143
    c14.564,2.95,27.224,6.991,37.979,12.135c10.753,5.144,20.794,11.756,30.122,19.842c9.329,8.094,16.943,17.7,22.847,28.839
    c5.896,11.136,10.513,24.311,13.846,39.539c3.326,15.229,4.997,32.456,4.997,51.675c0,10.466-0.479,22.176-1.428,35.118
    c0,1.137-0.236,3.375-0.715,6.708c-0.473,3.333-0.712,5.852-0.712,7.562c0,2.851,0.808,5.232,2.423,7.136
    c1.622,1.902,3.86,2.851,6.714,2.851c3.046,0,5.708-1.615,7.994-4.853c1.328-1.711,2.561-3.806,3.71-6.283
    c1.143-2.471,2.43-5.325,3.854-8.562c1.431-3.237,2.43-5.513,2.998-6.848c24.17-54.238,36.258-97.158,36.258-128.756
    C511.63,291.039,506.589,259.344,496.5,233.842z"/>
</svg>
          </a>
          <a href="delete.php">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="459px" height="459px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">

  <g id="delete">
    <path d="M76.5,408c0,28.05,22.95,51,51,51h204c28.05,0,51-22.95,51-51V102h-306V408z M408,25.5h-89.25L293.25,0h-127.5l-25.5,25.5
      H51v51h357V25.5z"/>
  </g>
</svg>
          </a>
        </div>
      </td>
    </tr>

  </tbody>
</table>
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
<!-- 
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.checkboxes.js"></script> 
<script src="assets/js/dataTables.bootstrap4.min.js"></script> -->
<script src="assets/js/custom.js"></script>

</body>
</html>