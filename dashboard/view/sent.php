	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
   <div class="section-header text-center">
    <h1 class="title">Sent</h1>
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

              <a class="dropdown-item "  href="../../dashboard/controllers/inbox-controller.php" >Inbox</a>
              <a class="dropdown-item active"  href="../../dashboard/controllers/sent-controller.php" >Sent</a>
              <a class="dropdown-item"  href="../../dashboard/controllers/delete-controller.php" >Delete</a>

            </div>
          </div>
        </div>
        <!----page sidebar mobile  menu end--->


        <!----page sidebar web menu--->
        <div class="d-none d-lg-block" >
          <h2 class="sub-title ml-3">Messages</h2>
          <ul class="list-unstyled nav flex-column nav-pills navbar-inner ">
            <li><a class="nav-link "  href="../../dashboard/controllers/inbox-controller.php">Inbox</a></li>
            <li><a class="nav-link active"  href="../../dashboard/controllers/sent-controller.php">Sent</a></li>
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
           <a href="website-languages.php" class="btn btn-grd">Add</a>
         </div> -->
         <table class="table table-bordered table-sm table-striped">
          <thead>
           <tr>
             <!--  <th class="no-sort d-none">hidden</th> -->
             <th class="no-sort">Action by</th>
             <th class="no-sort">Date </th>
             <th class="no-sort">To</th>
             <th class="no-sort">E-mail</th>
             <th class="no-sort">Phone</th>
             <th class="no-sort">Message</th>
             <th class="no-sort" width="">Action</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td class="">
              Alexonder
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