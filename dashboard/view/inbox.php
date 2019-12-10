<!DOCTYPE html>
<html>

<?php include 'inc/header.php'; ?>

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

                                    <a class="dropdown-item active"  href="../../dashboard/controllers/inbox-controller.php" >Inbox</a>
                                    <a class="dropdown-item"  href="../../dashboard/controllers/sent-controller.php" >Sent</a>
                                    <a class="dropdown-item"  href="../../dashboard/controllers/delete-controller.php" >Delete</a>

                                </div>
                            </div>
                        </div>
                        <!----page sidebar mobile  menu end--->


                        <!----page sidebar web menu--->
                        <div class="d-none d-lg-block" >
                            <h2 class="sub-title ml-3">Messages</h2>
                            <ul class="list-unstyled nav flex-column nav-pills navbar-inner ">
                                <li><a class="nav-link active"  href="../../dashboard/controllers/inbox-controller.php">Inbox</a></li>
                                <li><a class="nav-link"  href="../../dashboard/controllers/sent-controller.php">Sent</a></li>
                                <li><a class="nav-link"  href="../../dashboard/controllers/delete-controller.php">Delete</a></li>

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
                              <a href="website-languages.html" class="btn btn-grd">Add</a>
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
                                            <a href="../../dashboard/controllers/read-controller.php">
                                                <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 488.85 488.85" style="enable-background:new 0 0 488.85 488.85;" xml:space="preserve">
              <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2
              s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025
              c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3
              C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7
              c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"/>
            </svg>
                                            </a>
                                            <a href="../../dashboard/controllers/reply-controller.php">
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
                                            <a href="../../dashboard/controllers/delete-controller.php">
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

<?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="../../dashboard/view/assets/js/jquery-3.3.1.min.js"></script>
<script src="../../dashboard/view/assets/js/popper.min.js" ></script>
<script src="../../dashboard/view/assets/js/bootstrap.min.js" ></script>
<script src="../../dashboard/view/assets/js/gijgo.min.js" ></script>
<!--
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.checkboxes.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script> -->
<script src="../../dashboard/view/assets/js/custom.js"></script>

</body>
</html>