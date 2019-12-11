	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
   <div class="section-header text-center">
    <h1 class="title">Customers</h1>
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
              <a class="dropdown-item"  href="../../dashboard/controllers/index-controller.php">All</a>
              <a class="dropdown-item active"  href="../../dashboard/controllers/customers-controller.php">Customers</a>
              <a class="dropdown-item"  href="#" >Retsinformation</a>
            </div>
          </div>
        </div>
        <!----page sidebar mobile  menu end--->


        <!----page sidebar web menu--->
        <div class="d-none d-lg-block">
          <h2 class="sub-title ml-3">All cases</h2>
          <ul class="list-unstyled nav flex-column nav-pills navbar-inner">
            <li><a class="nav-link"  href="../../dashboard/controllers/index-controller.php">All</a></li>
            <li><a class="nav-link active"  href="../../dashboard/controllers/customers-controller.php">Customers</a></li>
            <li><a class="nav-link"  href="#">Retsinformation</a></li>
          </ul>
        </div>
        <!----page sidebar web menu end------>

      </div>
      <!----page sidebar menu end--->
      <div class="col col-content">
        <!---table search filter--->
        <div class="table-filter form-row">
          <div class="form-group col-md-6">
            <label class=" col-form-label">From</label>
            <div class="">
             <input type="text" name=""  class="form-control" id="startDate" value="" placeholder="DD-MM-YYYY">
           </div>
         </div><!------>
         <div class="form-group  col-md-6">
          <label class=" col-form-label">To</label>
          <div class="">
           <input type="text" name=""  class="form-control" id="endDate" value="" placeholder="DD-MM-YYYY">
         </div>
       </div><!------>

<div class="form-group  col-md-4">
  <label class=" col-form-label">Customer id </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="form-group  col-md-4">
  <label class=" col-form-label">Customer phone </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="form-group  col-md-4">
  <label class=" col-form-label">Customer name </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="col-md-8">
  <label class="col-form-label">Customer address </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>

<div class="col-md-4">
  <label class="col-form-label invisible">hidden</label>
  <div class="">
   <button type="button" class="btn btn-grd">Search</button>
   <button type="button" class="btn btn-alt">Reset</button>
 </div>
</div>
</div>
<div class="divider"></div>
<div>
 <h6 class="form-group">Show fields</h6>
 <div class="d-flex flex-wrap checkboxes-field">
   <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check1">
    <label class="custom-control-label" for="check1">Customer id</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check2">
    <label class="custom-control-label" for="check2">Signup date</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check3">
    <label class="custom-control-label" for="check3">Last login</label>
  </div>
   <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check15">
    <label class="custom-control-label" for="check15">IP address</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check4">
    <label class="custom-control-label" for="check4">Customer name</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check5">
    <label class="custom-control-label" for="check5">Customer address</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check6">
    <label class="custom-control-label" for="check6">Customer phone</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check7">
    <label class="custom-control-label" for="check7">Customer e-mail</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check8">
    <label class="custom-control-label" for="check8">Customer country</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check9">
    <label class="custom-control-label" for="check9">No. of tickets</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check10">
    <label class="custom-control-label" for="check10">New tickets</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check11">
    <label class="custom-control-label" for="check11">Under Process</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check12">
    <label class="custom-control-label" for="check12">Information req.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check13">
    <label class="custom-control-label" for="check13">Won</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check14">
    <label class="custom-control-label" for="check14">Rejected</label>
  </div>
 
</div>
</div>
<!---table search filter--->
<div class="divider"></div>
<!-- <div class="w-100" style="overflow-x:auto"> -->
<table id="case_grid" class="table table-striped table-bordered table-responsive table-xs">
 <thead>
      <tr>
          <th>Status</th>
          <th>Last action date</th>
          <th>Action by</th>
          <th>Case id</th>
          <th>Receival date</th>
          <th>Customer id</th>
          <th>Customer name</th>
          <th>Customer Address</th>
          <th>Customer phone</th>
          <th>Customer e-mail</th>
          <th>Customer country</th>
          <th>Ticket country</th>
          <th>Parking company</th>
          <th>Reason</th>
          <th>Ticket no.</th>
          <th>Ticket price/currency</th>
          <th>Ticket date/time</th>
          <th>Ticket Payment due date</th>
          <th>Ticket address </th>
          <th>Ticket postalcode and city</th>
          <th>Car reg. no.</th>
          <th>Car</th>
          <th>Attachments</th>
          <th>Comments</th>
          <th>Action</th>
      </tr>
</thead> 
 <tbody>
            <tr>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
              <td>New</td>
            </tr>
 </tbody>
</table>
<!-- </div> -->
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
<script src="../../dashboard/view/assets/js/jquery.dataTables.min.js"></script>
<script src="../../dashboard/view/assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../../dashboard/view/assets/js/custom.js"></script>

</body>
</html>