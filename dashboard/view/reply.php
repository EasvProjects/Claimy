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
               <div class="form-group">
                     <textarea name="editor1"></textarea>
                     <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>     
             </div><!------>
                 <div class="form-actions form-group">
        <a href="../../dashboard/controllers/read-controller.php" class="btn btn-alt">Cancel</a>
        <a href="../../dashboard/controllers/sent-controller.php" class="btn btn-grd">Send</a>
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