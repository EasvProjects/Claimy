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
          <div class="table-header text-lg-right mb-3">
           <a href="../../dashboard/controllers/inbox-controller.php" class="btn btn-alt">Back</a>
           <a href="../../dashboard/controllers/reply-controller.php" class="btn btn-grd">Replay</a>
           <a href="../../dashboard/controllers/delete-controller.php" class="btn btn-danger">Delete</a>
         </div>
        <ul class="list-unstyled claim-table under-process-table">
           <li>
              <span class="case-header">Date</span>
              <label class="case-value">10.11.2019 </label>
            </li>
            <li>
              <span class="case-header">From</span>
              <label class="case-value">Wisam</label>
            </li>
             <li>
              <span class="case-header">E-mail</span>
              <label class="case-value">e-mail@e-mail.com</label>
            </li>
             <li>
              <span class="case-header">Phone</span>
              <label class="case-value">12345678</label>
            </li>
             <li>
              <span class="case-header">Message</span>
              <label class="case-value">Hey how was your day today? </label>
            </li>
          
          </ul>
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