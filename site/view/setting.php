	<!DOCTYPE html>
  <html>

    <?php include 'inc/header-account.php'; ?>

  <section class="section-padding">
   <div class="container">
    <div class="section-header text-center">
      <h2 class="title">My <span class="font-regular">Account</span></h2>
    </div>
    <!--setting navabar-->
    <div class="mb-3 ">
     <ul class="nav nav-pills navbar-inner justify-content-center">
      <li class="nav-item">
        <a class="nav-link " href="../../site/controllers/myaccount-controller.php">My cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="../../site/controllers/setting-controller.php">User setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../site/controllers/index-controller.php">logout</a>
      </li>
    </ul>
  </div>
  <!--setting navabar end-->
  <!---user setting form------>
      <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between py-3">
        <div class="card-body">
          <form class="row">
            <div class="col-md-10 offset-md-1">
            <div class="form-group row">
               <label for="name" class="col-sm-3 col-md-2 col-form-label">Name</label>
                <div class="col-sm-9 col-md-10">

              <input type="text" class="form-control" placeholder="Name" value="wisam swaidan" id="name">
            </div>
            </div>
             <div class="form-group row">

               <label for="country" class="col-sm-3 col-md-2 col-form-label">Country</label>
               <div class="col-sm-9 col-md-10">
              <!-- <option disabled="">Select country</option>--->
               <input type="text" class="form-control" placeholder="Country" value="Danmark" id="Country">
           </div>
            </div>
             <div class="form-group row">
               <label for="Address" class="col-sm-3 col-md-2 col-form-label">Address</label>
                <div class="col-sm-9 col-md-10">
              <input type="text" class="form-control" placeholder="Address" value="Dæmningen 42A, 7100Vejle" id="Address">
            </div>
            </div>
             <div class="form-group row">
              <label for="Phone" class="col-sm-3 col-md-2 col-form-label">Phone No.</label>
                <div class="col-sm-9 col-md-10">
              <input type="text" class="form-control" placeholder="Phone No." value="1234567890" id="Phone">
            </div>
            </div>
             <div class="form-group row">
               <label for="E-mail" class="col-sm-3 col-md-2 col-form-label">E-mail</label>
               <div class="col-sm-9 col-md-10">
              <input type="email" class="form-control" placeholder="E-mail" value="wisamswaidan@gmail.com" id="E-mail">
            </div>
            </div>
           <div class="form-actions form-group">
            <button type="button" class="btn btn-grd" data-toggle="modal" data-target="#saveacc">Save</button>
               <a href="../../site/controllers/myaccount-controller.php" class="btn btn-alt">Back to dashboard</a>
<!--               <button type="submit" class="btn btn-alt">Back to dashboard</button>-->
<!--               -->
<!--               -->
<!--               <a href="../../../site/controllers/claim-controller.php" class="btn btn-primary my-4">Start your claim</a>-->
          </div>
               <div class="">
                <small>Would you like to delete your account?<a href="#" class="pl-2" data-toggle="modal" data-target="#deleteacc">Delete</a></small>
              </div>
          </div>
          </form>
        </div>
      </div>
     <!---user setting form end------>
</div>
</section>
</div>

      <?php include 'inc/footer.php'; ?>

</div>


<!-- Modal -->
<div class="modal fade" id="deleteacc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body py-5 text-center">
    Are you sure you want to delete your account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-grd">Yes</button>
        <button type="button" class="btn btn-alt" data-dismiss="modal">No</button>

      </div>
    </div>
  </div>
</div><!------>
<!-- Modal -->
<div class="modal fade" id="saveacc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body py-5 text-center">
    We have just changed your account
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-grd">Yes</button> -->
        <button type="button" class="btn btn-grd" data-dismiss="modal">Ok</button>

      </div>
    </div>
  </div>
</div><!------>
<script type="text/javascript" src="../../assets/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/js/popper.min.js" ></script>
<script src="../../assets/js/bootstrap.min.js" ></script>
<script src="../../assets/js/owl.carousel.js"></script>
<script src="../../assets/js/custom.js"></script>

</body>
</html>
