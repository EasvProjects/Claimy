  <!DOCTYPE html>
  <html>

  <?php include 'inc/header-account.php'; ?>

  <section class="section-padding">
   <div class="container">
    <div class="section-header text-center">
      <h2 class="title">My <span class="font-regular">Cases</span></h2>
    </div>
    <!--setting navabar-->
    <div class="mb-3 ">
     <ul class="nav nav-pills navbar-inner">
      <li class="nav-item">
        <a class="nav-link active" href="../../site/controllers/myaccount-controller.php">My cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../site/controllers/setting-controller.php">User setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../site/controllers/signup-controller.php">logout</a>
      </li>
    </ul>
  </div>
  <!--setting navabar end-->
  <div class="row">
    <div class="col-12">
      <!--sorting-->

      <!--sorting end-->
    </div>
    <div class="col-12">
      <!---claim card---->

      <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">

         <div class="sad-img-div"><img src="../../assets/images/sad.svg" alt="" title="" class=""/>
          </div>
       <div class="claim-box justify-content-between">
        <div class="">

          <ul class="list-unstyled claim-table under-process-table">
             <li>
              <span class="case-header">Case id:</span>
              <label class="case-value">1234</label>
            </li>
            <li>
              <span class="case-header">Status:</span>
              <label class="case-value">We are sorry, your case has been rejected by Q-Park</label>
            </li>
            <li>
              <span class="case-header">History:</span>
              <label class="case-value"></label>
            </li>
               <li>
              <span class="case-header">Date:</span>
              <label class="case-value">10:40 - 10/11/2019</label>
            </li>
               <li class="mb-md-5">
              <span>Q-Park has rejected the claim. This means you have to pay the ticket to Q-Park within 10 days. You are not supposed to pay anything to Claimy. If you cannot accept it, please get in touch with government office responsible for the parking tickets. </span>
            </li>

              <li>
              <span class="case-header">Date:</span>
              <label class="case-value">8:31 - 14/11/2019</label>
            </li>
              <li class="mb-5">
              <span>We have sent a e-mail to Q-Park informing about the claim. </span>
            </li>
             <li>
              <span class="case-header">Date:</span>
              <label class="case-value">22:44 - 12/11/2019</label>
            </li>

              <li>
              <span class="case-header">By:</span>
              <label class="case-value">Wisam Swaidan</label>
            </li>
              <li>
              <span class="case-header">Phone no.:</span>
              <label class="case-value">+4561856583</label>
            </li>
              <li>
              <span class="case-header">E-mail:</span>
              <label class="case-value">email@email.dk</label>
            </li>
            <li>
              <span class="case-header">Country:</span>
              <label class="case-value">Denmark</label>
            </li>
            <li>
              <span class="case-header">Parking ticket company:</span>
              <label class="case-value">Q-Park</label>
            </li>
             <li>
              <span class="case-header">Reason:</span>
              <label class="case-value">"This is the predefined reason"</label>
            </li>
             <li>
              <span class="case-header">Ticket no.:</span>
              <label class="case-value">1234</label>
            </li>
             <li>
              <span class="case-header">Ticket date:</span>
              <label class="case-value">12/11/2019</label>
            </li>
              <li>
              <span class="case-header">Ticket time:</span>
              <label class="case-value">14:31</label>
            </li>
             <li>
              <span class="case-header">Ticket payment due date:</span>
              <label class="case-value">22/11/2019</label>
            </li>
            <li>
             <span class="case-header">Ticket fee:</span>
             <label class="case-value">750 DDK</label>
           </li>
                <li>
              <span class="case-header">Ticket issued on the following address:</span>
              <label class="case-value">Aision 2, 6400 sønderborg</label>
            </li>
             <li>
              <span class="case-header">Car reg no.:</span>
              <label class="case-value">XY12345</label>
            </li>
             <li>
              <span class="case-header">Car brand:</span>
              <label class="case-value">Mercedes</label>
            </li>
             <li>
              <span class="case-header">Car model:</span>
              <label class="case-value">C320</label>
            </li>
               <li>
              <span class="case-header">Your comments:</span>
              <label class="case-value ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut</label>
            </li>
              <li class="attachments">
              <span class="case-header">Attachments:</span>
              <label class="case-value "><img src="https://via.placeholder.com/50

C/O https://placeholder.com/"/><img src="https://via.placeholder.com/50

C/O https://placeholder.com/"/><img src="https://via.placeholder.com/50

C/O https://placeholder.com/"/></label>
            </li>
              <li><a href="../../site/controllers/myaccount-controller.php" class="btn btn-alt">Back to cases</a></li>
          </ul>

        </div>

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
