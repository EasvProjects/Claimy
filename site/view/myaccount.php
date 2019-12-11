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
        <a class="nav-link active" href="../../site/controllers/myaccount-controller.php">My cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../site/controllers/setting-controller.php">User setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../site/controllers/index-controller.php">logout</a>
      </li>
    </ul>
  </div>
  <!--setting navabar end-->
  <div class="row">
    <div class="col-12">
      <!--sorting-->
      <div class="sorting mb-4 d-flex align-items-center
      "><div class=" mr-2"><div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by: ID
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">1</a>
    <a class="dropdown-item" href="#">2</a>
    <a class="dropdown-item" href="#">3</a>
  </div>
</div> <span class="flaticon-sorting"></span></div>
      </div>
      <!--sorting end-->
    </div>
    <div class="col-12">
      <!---claim card---->
      <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
       <div class="claim-box  d-flex justify-content-between">
        <div class="">

          <ul class="list-unstyled claim-table">
            <li>
              <span class="case-header">Case id:</span>
              <span class="case-value">1234</span>
            </li>
            <li>
              <span class="case-header">Received:</span>
              <span class="case-value">14:32 - 13/11/2019</span>
            </li>
            <li>
              <span class="case-header">Status:</span>
              <span class="case-value">Under process</span>
            </li>
          </ul>

        </div>
        <div class="">
          <a href="../../site/controllers/reject-controller.php" class="btn btn-primary btn-grd">View Claim</a>
        </div>
      </div>
      <div class="claim-status text-center ">
       <!--   <span>Claim Status</span> -->
       <ul class="btn-group nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Sent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../../site/controllers/reject-controller.php" >Under Process</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Info req.</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Won</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Rejected</a>
        </li>
      </ul>
<!-- <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-grd">Sent</button>
  <button type="button" class="btn btn-secondary">Under Process</button>
  <button type="button" class="btn btn-secondary">Info req.</button>
  <button type="button" class="btn btn-secondary">Won</button>
  <button type="button" class="btn btn-secondary">Rejected</button>
</div> -->
</div>
</div>
<!---claim card end---->
<!---claim card---->
<div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
 <div class="claim-box  d-flex justify-content-between">
  <div>

    <ul class="list-unstyled claim-table">
      <li>
        <span class="case-header">Case id:</span>
        <span class="case-value">1234</span>
      </li>
      <li>
        <span class="case-header">Received:</span>
        <span class="case-value">14:32 - 12/11/2019</span>
      </li>
      <li>
        <span class="case-header">Status:</span>
        <span class="case-value">Under process</span>
      </li>
    </ul>

  </div>
  <div class="">
    <a href="../../site/controllers/reject-controller.php" class="btn btn-primary btn-grd">View Claim</a>
  </div>
</div>
<div class="claim-status text-center ">
 <!--   <span>Claim Status</span> -->
 <ul class="btn-group nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Sent</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Under Process</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Info req.</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  active" href="../../site/controllers/reject-controller.php">Won</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Rejected</a>
  </li>
</ul>
<!-- <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-grd">Sent</button>
  <button type="button" class="btn btn-secondary">Under Process</button>
  <button type="button" class="btn btn-secondary">Info req.</button>
  <button type="button" class="btn btn-secondary">Won</button>
  <button type="button" class="btn btn-secondary">Rejected</button>
</div> -->
</div>
</div>
<!---claim card end---->
<!---claim card---->
<div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
 <div class="claim-box  d-flex justify-content-between">
  <div>

    <ul class="list-unstyled claim-table">
      <li>
        <span class="case-header">Case id:</span>
        <span class="case-value">1234</span>
      </li>
      <li>
        <span class="case-header">Received:</span>
        <span class="case-value">14:32 - 12/11/2019</span>
      </li>
      <li>
        <span class="case-header">Status:</span>
        <span class="case-value">Under process</span>
      </li>
    </ul>

  </div>
  <div class="">
    <a href="../../site/controllers/reject-controller.php" class="btn btn-primary btn-grd">View Claim</a>
  </div>
</div>
<div class="claim-status text-center ">
 <!--   <span>Claim Status</span> -->
 <ul class="btn-group nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Sent</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Under Process</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Info req.</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Won</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="../../site/controllers/reject-controller.php">Rejected</a>
  </li>
</ul>
<!-- <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-grd">Sent</button>
  <button type="button" class="btn btn-secondary">Under Process</button>
  <button type="button" class="btn btn-secondary">Info req.</button>
  <button type="button" class="btn btn-secondary">Won</button>
  <button type="button" class="btn btn-secondary">Rejected</button>
</div> -->
</div>
</div>
<!---claim card end---->
</div>
</div>
</div>
</section>
</div>

      <?php include 'inc/footer.php'; ?>

</div>
<script type="text/javascript" src="../../assets/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/js/popper.min.js" ></script>
<script src="../../assets/js/bootstrap.min.js" ></script>
<script src="../../assets/js/owl.carousel.js"></script>
<script src="../../assets/js/custom.js"></script>

</body>
</html>
