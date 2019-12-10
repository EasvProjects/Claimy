	<!DOCTYPE html>
  <html>

    <?php include 'inc/header.php'; ?>

<section class="main-section section-padding">
  <div class="container">
   <div class="section-header text-center">
    <h1 class="title"> All cases</h1>
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

              <a class="dropdown-item active"  href="../../dashboard/controllers/index-controller.php" >All</a>
              <a class="dropdown-item"  href="../../dashboard/controllers/customers-controller.php" >Customers</a>
              <a class="dropdown-item"  href="#" >Retsinformation</a>

            </div>
          </div>
        </div>
        <!----page sidebar mobile  menu end--->


        <!----page sidebar web menu--->
        <div class="d-none d-lg-block">
          <h2 class="sub-title ml-3">All cases</h2>
          <ul class="list-unstyled nav flex-column nav-pills navbar-inner ">
            <li><a class="nav-link active"  href="../../dashboard/controllers/index-controller.php">All</a></li>
            <li><a class="nav-link"  href="../../dashboard/controllers/customers-controller.php">Customers</a></li>
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

       <div class="form-group  col-lg-3">
         <label class=" col-form-label">Status</label>
         <select class="form-control">
           <option>All</option>
           <option>All</option>
           <option>All</option>
         </select>
       </div>
       <div class="form-group  col-lg-3">
         <label class=" col-form-label">Country</label>
         <select  class="form-control">
           <option>All</option>
           <option>India</option>
           <option>Denmark</option>
         </select>
       </div>
       <div class="form-group  col-lg-3">
         <label class=" col-form-label">Parking company</label>
         <select  class="form-control">
           <option>Select country first</option>
           <option>All</option>
           <option>All</option>
         </select>
       </div>

       <div class="form-group  col-lg-3">
         <label class=" col-form-label">Reason</label>
         <select  class="form-control">
           <option>Select country first</option>
           <option>All</option>
           <option>All</option>
         </select>
       </div>

       <div class="form-group  col-md-3">
        <label class=" col-form-label">Case id</label>
        <div class="">
         <input type="text" name=""  class="form-control" value="" placeholder="">
       </div>
     </div><!------>
     <div class="form-group  col-md-3">
      <label class=" col-form-label">Ticket address</label>
      <div class="">
       <input type="text" name=""  class="form-control" value="" placeholder="">
     </div>
   </div><!------>
   <div class="form-group  col-md-3">
    <label class=" col-form-label">Postal code</label>
    <div class="">
     <input type="text" name=""  class="form-control" value="" placeholder="">
   </div>
 </div><!------>
 <div class="form-group  col-md-3">
  <label class=" col-form-label">Car reg. no.</label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="form-group  col-md-3">
  <label class=" col-form-label">Action by</label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="form-group  col-md-3">
  <label class=" col-form-label">Customer id </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="form-group  col-md-3">
  <label class=" col-form-label">Customer phone </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="form-group  col-md-3">
  <label class=" col-form-label">Customer name </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>
<div class="col-md-6">
  <label class="col-form-label">Customer address </label>
  <div class="">
   <input type="text" name=""  class="form-control" value="" placeholder="">
 </div>
</div><!------>

<div class="col-md-6">
  <label class="col-form-label invisible">Customer address </label>
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
    <label class="custom-control-label" for="check1">Status</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check2">
    <label class="custom-control-label" for="check2">Customer id</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check3">
    <label class="custom-control-label" for="check3">Customer country</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check4">
    <label class="custom-control-label" for="check4">Ticket price</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check5">
    <label class="custom-control-label" for="check5">Car reg.no</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check6">
    <label class="custom-control-label" for="check6">Last action date</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check7">
    <label class="custom-control-label" for="check7">Customer name</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check8">
    <label class="custom-control-label" for="check8">Ticket country</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check9">
    <label class="custom-control-label" for="check9">Ticket date/time</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check10">
    <label class="custom-control-label" for="check10">Car</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check11">
    <label class="custom-control-label" for="check11">Action by</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check12">
    <label class="custom-control-label" for="check12">Customer address</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check13">
    <label class="custom-control-label" for="check13">Parking company</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check14">
    <label class="custom-control-label" for="check14">Ticket due date</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check15">
    <label class="custom-control-label" for="check15">Attachments</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check16">
    <label class="custom-control-label" for="check16">Case id</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check17">
    <label class="custom-control-label" for="check17">Customer phone</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check18">
    <label class="custom-control-label" for="check18">Reason</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check19">
    <label class="custom-control-label" for="check19">Ticket address</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check20">
    <label class="custom-control-label" for="check20">Comments</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check21">
    <label class="custom-control-label" for="check21">Recieve date</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check22">
    <label class="custom-control-label" for="check22">Customer e-mail</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check23">
    <label class="custom-control-label" for="check23">Ticket no</label>
  </div>
   <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="check24">
    <label class="custom-control-label" for="check24">Ticket Postal code and city</label>
  </div>
  
</div>
</div>
<!---table search filter--->
<div class="divider"></div>
<!-- <div class="w-100" style="overflow-x:auto"> -->
  <div class="table-export">
    <button class=" d-flex btn btn-alt float-right" type="button">
      <svg width="16" height="16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 60.903 60.903" style="enable-background:new 0 0 60.903 60.903;" xml:space="preserve">

  <path d="M49.561,16.464H39.45v6h10.111c3.008,0,5.341,1.535,5.341,2.857v26.607c0,1.321-2.333,2.858-5.341,2.858H11.34
    c-3.007,0-5.34-1.537-5.34-2.858V25.324c0-1.322,2.333-2.858,5.34-2.858h10.11v-6H11.34C4.981,16.466,0,20.357,0,25.324v26.605
    c0,4.968,4.981,8.857,11.34,8.857h38.223c6.357,0,11.34-3.891,11.34-8.857V25.324C60.902,20.355,55.921,16.464,49.561,16.464z"/>
  <path d="M39.529,29.004c-0.768,0-1.535,0.294-2.121,0.88l-3.756,3.755V20.612v-6V3.117c0-1.656-1.343-3-3-3s-3,1.344-3,3v11.494v6
    v13.23l-3.959-3.958c-0.586-0.586-1.354-0.88-2.121-0.88s-1.535,0.294-2.121,0.88c-1.172,1.17-1.172,3.07,0,4.241l8.957,8.957
    c0.586,0.586,1.354,0.877,2.12,0.877c0.008,0,0.016,0,0.023,0s0.015,0,0.022,0c0.768,0,1.534-0.291,2.12-0.877l8.957-8.957
    c1.172-1.171,1.172-3.071,0-4.241C41.064,29.298,40.298,29.004,39.529,29.004z"/>
</svg>
<span class="ml-2">Export</span>
    </button>
  </div>
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
              <td>
                <div class="action d-flex justify-content-between">
            <a href="../../dashboard/controllers/case-controller.php">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 488.85 488.85" style="enable-background:new 0 0 488.85 488.85;" xml:space="preserve">
              <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2
              s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025
              c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3
              C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7
              c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"></path>
            </svg>
          </a>
          
        </div>
              </td>
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
<!-- <script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
 -->
<script src="../../dashboard/view/assets/js/custom.js"></script>

</body>
</html>