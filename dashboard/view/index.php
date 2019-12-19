doc	<!DOCTYPE html>
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

          <div class="search field">
              <input type="text" placeholder="Search.." size="50*50">
              <input class="btn btn-primary" type="submit" value="Submit">
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
          <th>Case id</th>
          <th>Reason</th>
          <th>Ticket no.</th>
          <th>Ticket price</th>
          <th>Ticket Payment due date</th>
          <th>Ticket address </th>
          <th>Ticket zip code</th>
          <th>Car reg. no.</th>
      </tr>
</thead> 
 <tbody>
 <?php
 foreach($apiData as $key=>$value){

 ?>

 <tr>
     <td><?php echo $value['fld_ClaimID'] ?></td>
     <td><?php echo $value['fld_ReasonID'] ?></td>
     <td><?php echo $value['fld_TicketNo']?></td>
     <td><?php echo $value['fld_TicketFee']?></td>
     <td><?php echo $value['fld_TicketDueDate'] ?></td>
     <td><?php echo $value['fld_TicketStreetName']?></td>
     <td><?php echo $value['fld_ZipCode'] ?></td>
     <td><?php echo $value['fld_CarRegNo'] ?></td>
     <td>
         <div class="action d-flex justify-content-between">
             <a href="../../dashboard/controllers/case-controller.php">
                 <button type="button" class="btn btn-info" >Info</button>
             </a>
         </div>
     </td>
 </tr>
 <?php  } ?>

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