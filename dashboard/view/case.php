	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

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
              <a class="dropdown-item active"  href="../../dashboard/controllers/index-controller.php">All</a>
              <a class="dropdown-item"  href="../../dashboard/controllers/customers-controller.php">Customers</a>
              <a class="dropdown-item"  href="#" >Retsinformation</a>
            </div>
          </div>
        </div>
        <!----page sidebar mobile  menu end--->


        <!----page sidebar web menu--->
        <div class="d-none d-lg-block">
          <h2 class="sub-title ml-3">All cases</h2>
          <ul class="list-unstyled nav flex-column nav-pills navbar-inner">
            <li><a class="nav-link active"  href="../../dashboard/controllers/index-controller.php">All</a></li>
            <li><a class="nav-link"  href="../../dashboard/controllers/customers-controller.php">Customers</a></li>
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
         <a href="../../dashboard/controllers/index-controller.php" class="btn btn-alt">Back</a>
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
          <label class="case-value">10:40 - 19/11/2019</label>
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

    <?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="../../dashboard/view/assets/js/popper.min.js" ></script>
<script src="../../dashboard/view/assets/js/bootstrap.min.js" ></script>
<script src="../../dashboard/view/assets/js/gijgo.min.js" ></script>
<script src="../../dashboard/view/assets/js/jquery.dataTables.min.js"></script>
<script src="../../dashboard/view/assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../../dashboard/view/assets/js/custom.js"></script>

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
        <a href="../../dashboard/controllers/index-controller.php" class="btn btn-alt">Back to cases</a>
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
        <a href="../../dashboard/controllers/index-controller.php" class="btn btn-alt">Back to cases</a>
        <a href="updated-case-parking-company.php" class="btn btn-grd">Show case</a>
        
      </div>
    </div>
  </div>
</div><!------>
</body>
</html>