	<!DOCTYPE html>
  <html>

    <?php include 'inc/claim-header.php'; ?>



  <section class="section-padding">
   <div class="container">
    <div class="section-header text-center">
      <h2 class="title">Claim</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card border-0 bg-white form-wizard">
          <!----------form wizard start------->

          <!----------form wizard tab------->
          <div class="stepwizard offset-md-2 col-md-8">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-grd btn-circle">1</a>

                <!-- <p>Start your claim</p> -->
              </div>
              <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-light btn-circle" disabled="disabled">2</a>

                  <!--  <p>Contact Detail</p> -->
              </div>
              <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-lignt btn-circle" disabled="disabled">3</a>

                  <!--  <p>Finish</p> -->
              </div>
            </div>
          </div>
          <!----------form wizard tab end------->

          <!----------form wizard form start------->
          <form role="form" action="<?= $_SERVER['PHP_SELF'];?>" method="post" >
            <!----------form wizard step1------->
            <div class="row setup-content" id="step-1">
              <div class="offset-md-2 col-md-8">
                <h5 class="mb-4">Start your claim</h5>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <form id="form1">
                       <div class="d-flex align-items-center">
                        <div class="card card-body text-center">
                          <small class="text-secondary">Take a picture of your parking ticket</small>
                          <span class="file-wrapper mt-4">
                            <input type="file" name="photo" id="imgInp" class="uploader" />
                            <span class="btn btn-grd">Add</span>
                          </span>
                        </div>
                        <div class="pl-3">
                         <img id="img-uploaded" src="https://via.placeholder.com/100

C/O https://placeholder.com/" alt="your image" width="100" />
                       </div>
                     </div>
                   </form>
                 </div>

                      <!-- Country selector --->
                 <div class="form-group row">
                   <label for="country" class="col-sm-12 col-form-label">Country where the ticket was issued</label>
                   <div class="col-sm-12">

                     <select class="form-control" id="country" name="country" >
                         <?php foreach($arrayOfCountries as $key=>$value): ?>
                                     <option value="<?php echo $value; ?>">
                                         <?php  echo $value;  ?>
                                     </option>
                         <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                      <!-- Parking ticket company selector--->
                <div class=" row">
                 <label class="col-sm-12 col-form-label">Parking ticket company</label>
                 <div class="col-md-6 form-group">
                   <select class="form-control" name="company" id="parkingCompany" >
                       <?php foreach($arrayOfCompanies as $key=>$value): ?>
                           <option value="<?php echo $value; ?>">
                               <?php  echo $value;  ?>
                           </option>
                       <?php endforeach; ?>
                   </select>
                 </div>

                    <!-- Parking ticket company textfield if user choose "other" option in selector--->
                 <div class="col-md-6 form-group">
                  <input type="text" name="other" class="form-control">
                </div>
              </div>

                      <!-- Ticket reason selector--->
              <div class="row">
               <label  class="col-sm-12 col-form-label">Reason</label>
               <div class="col-md-6 form-group">
                 <select class="form-control" name="reason" id="reason"  >
                     <?php foreach($arrayOfReasons as $key=>$value): ?>
                         <option value="<?php echo $value; ?>">
                             <?php  echo $value;  ?>
                         </option>
                     <?php endforeach; ?>
                 </select>
               </div>

                  <!-- ticket reason textfield if user choose "other" option in selector--->
               <div class="col-md-6 form-group">
                <input type="text" name="new_reason" class="form-control">
              </div>
            </div>
                      <!-- Ticket number text field--->
            <div class="form-group row">
              
             <label class="col-sm-12 col-form-label">Ticket no.</label>
             <div class="col-sm-12">
              <input type="text" name="ticketNo" class="form-control" id="ticketNo" >

            </div>
          </div>

                      <!-- Ticket date picker--->
          <div class="form-group row">
           <label class="col-sm-12 col-form-label">Ticket date</label>
           <div class="col-sm-12">
            <input type="date" name="ticketDate" class="form-control " id="ticketDate" min="2019-01-01" >
          </div>
        </div>

                      <!-- Ticket time picker--->
        <div class="form-group row">
         <label class="col-sm-12 col-form-label">Ticket time</label>
         <div class="col-sm-12">
          <input type="time" name="ticketTime" class="form-control" id="ticketTime" >
        </div>
      </div>

                      <!-- Ticket payment due date picker--->
      <div class="form-group row">
       <label class="col-sm-12 col-form-label">Ticket Payment due date</label>
       <div class="col-sm-12">
        <input type="date" name="ticketDueDate" class="form-control" id="due_date" min="2019-12-12" >
      </div>
    </div>

                      <!-- Ticket fee text field --->
		<div class="form-group row">
		 <label class="col-sm-12 col-form-label">Ticket fee</label>
		 <div class="col-sm-4">
			<input type="text" name="ticketFee" class="form-control" id="ticketFee" >

		</div>

            <!-- Ticket currency field--->
		<div class="col-sm-2">
		 <input type="text" name="" class="form-control" id="">
	 </div>
	</div>

                      <!-- Ticket address text field--->
    <div class="form-group row" >
     <label class="col-sm-12 col-form-label">Address where the ticket was issued</label>
     <div class="col-sm-12">
      <input type="text" name="ticketStreetName" class="form-control" id="ticketStreetName" >

    </div>
  </div>

                      <!-- car license plate text field--->
  <div class="form-group row" >
   <label class="col-sm-12 col-form-label">Car reg. no.</label>
   <div class="col-sm-12">
    <input type="text" name="carRegNo" class="form-control" id="carRegNo" >

  </div>
</div>

                      <!-- Car brand text field--->
<div class="form-group row" >
 <label class="col-sm-12 col-form-label">Car brand</label>
 <div class="col-sm-12">
  <input type="text" name="carBrand" class="form-control" id="carBrand" >

</div>
</div>

                      <!-- Car model text field--->
<div class="form-group row" >
 <label class="col-sm-12 col-form-label">Car model</label>
 <div class="col-sm-12">
  <input type="text" name="carModel" class="form-control" id="carModel" >

</div>
</div>

                      <!-- Adding picture option--->
<div class="form-group ">
 <label class="col-sm-12 col-form-label">Add Picture</label>

 <form name="auto-uploader" class="form-auto">
  <button type="button" class="auto-uploader btn btn-grd">Select Files...</button>
</form>

</div>

                      <!-- Comment text field--->
<div class="form-group row" >
 <label class="col-sm-12 col-form-label">Your Comment</label>
 <div class="col-sm-12">
  <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
</div>
</div>


</div>
</div>
<div class="divider"></div>
<button class="btn btn-grd nextBtn pull-right" type="button" >Next</button>
</div>
</div>
<!----------form wizard step2------->
<div class="row setup-content" id="step-2">
 <div class="offset-md-2 col-md-8">
                <h5 class="mb-3">Contact details</h5>
                <div class="row">
                  <div class="col-md-12">

                      <!-- Full name of customer text field--->
                      <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Full Name</label>
                      <div class="col-sm-12">
                       <input type="text" name="fullName" class="form-control" id="name-field">

                      </div>
                      </div>

                      <!-- Country of customer text field--->
                      <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Country</label>
                      <div class="col-sm-12">
                       <input type="text" name="countryOfCustomer" class="form-control" id="country-field">

                      </div>
                      </div>

                      <!-- Personal address of customer text field--->
                      <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Personal address</label>
                      <div class="col-sm-12">
                       <input type="text" name="personalAddress" class="form-control" id="address-field">

                      </div>
                      </div>

                      <!-- Phone number text field--->
                      <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Phone  no.</label>
                      <div class="col-sm-12">
                       <input type="text" name="phoneNumber" class="form-control" id="phone-field">

                      </div>
                      </div>

                      <!-- Customer email --->
                      <div class="form-group row">
                      <label class="col-sm-12 col-form-label">E-mail</label>
                      <div class="col-sm-12">
                       <input type="email" name="email" class="form-control" id="email-field">

                          <!-- Customer password --->
                          <div class="form-group row">
                              <label class="col-sm-12 col-form-label">Password</label>
                              <div class="col-sm-12">
                                  <input type="password" name="password" class="form-control" id="1st-password-field">

                      </div>
                      </div>
                  </div>
                </div>
                <div class="divider"></div>
                <button class="btn btn-alt prevBtn pull-right" type="button" >Back</button>
                <button class="btn btn-grd nextBtn pull-right" type="button" onclick="fillClaimForm()" >Next</button>
              </div>
</div>
<!----------form wizard step3------->
<div class="row setup-content" id="step-3" >
  <div class="col-md-12">
     <div class="offset-md-2 col-md-8" >
                <h5 class="mb-4">This is your claim</h5>
                <div class="row">
                  <div class="col-md-12">
                        <div class="">

          <ul class="list-unstyled claim-table under-process-table">
 <li>
              <span class="case-header">Claim Date:</span>
              <label class="case-value"></label>
            </li>

              <li>
              <span class="case-header">By:</span>
              <label class="case-value">Wisam Swaidan</label>
            </li>
              <li>
              <span class="case-header">Phone no.:</span>
              <label class="case-value"><?php echo $phoneNumber ?></label>
            </li>
              <li>
              <span class="case-header">E-mail:</span>
              <label class="case-value"><?php echo $email ?></label>
            </li>
            <li>
              <span class="case-header">Country:</span>
              <label class="case-value"><?php echo $country?></label>
            </li>
            <li>
              <span class="case-header">Parking ticket company:</span>
              <label class="case-value"><?php //echo $parkingCompany ?></label>
            </li>
             <li>
              <span class="case-header">Reason:</span>
              <label class="case-value"><?php //echo //$reason ?></label>
            </li>
             <li>
              <span class="case-header">Ticket no.:</span>
              <label class="case-value"><?php echo $ticketNo ?></label>
            </li>
             <li>
              <span class="case-header">Ticket date:</span>
              <label class="case-value"><?php echo $ticketDate ?></label>
            </li>
              <li>
              <span class="case-header">Ticket time:</span>
              <label class="case-value"><?php echo $ticketTime ?></label>
            </li>
             <li>
              <span class="case-header">Ticket payment due date:</span>
              <label class="case-value"><?php //echo $dueDate ?></label>
            </li>
						<li>
						 <span class="case-header">Ticket fee:</span>
						 <label class="case-value"><?php echo $ticketFee ?></label>
					 </li>
                <li>
              <span class="case-header">Ticket issued on the following address:</span>
              <label class="case-value"><?php echo $ticketStreetName ?></label>
            </li>
             <li>
              <span class="case-header">Car reg no.:</span>
              <label class="case-value"><?php echo $carRegNo ?></label>
            </li>
             <li>
              <span class="case-header">Car brand:</span>
              <label class="case-value"><?php echo $carBrand ?></label>
            </li>
             <li>
              <span class="case-header">Car model:</span>
              <label class="case-value"><?php echo $carModel ?></label>
            </li>
               <li>
              <span class="case-header">Your comments:</span>
              <label class="case-value "><?php echo $comment ?></label>
            </li>
              <li class="attachments">
              <span class="case-header">Attachments:</span>
              <label class="case-value "><img src="https://via.placeholder.com/50

C/O https://placeholder.com/"><img src="https://via.placeholder.com/50

C/O https://placeholder.com/"><img src="https://via.placeholder.com/50

C/O https://placeholder.com/"></label>
            </li>

          </ul>

        </div>
                  </div>
                </div>

<div class="divider"></div>
                 <button class="btn btn-alt prevBtn pull-right" type="submit" >Back</button>
                 <button class="btn btn-grd pull-primary" type="submit" data-toggle="modal" data-target="#confrimclaim" onclick="fillClaimForm()">Confirm</button>

      </div>



  </div>
</div>
</form> <!----------form wizard form------->


<!----------form wizard end------->
</div>
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
<script src="../../assets/js/gijgo.min.js" ></script>
<script src="../../assets/js/owl.carousel.js"></script>
<script src="../../assets/js/uploader.min.js"></script>
    <script src="../../assets/js/jQuery_custom.js"></script>




<script>
 $(document).ready(function() {
  var auto_uploader = $('.auto-uploader').uploader({
    upload_url: 'upload.php',
    input_name: 'file',
    maximum_total_files: 4,
    maximum_file_size: 50009000,
    file_types_allowed: ['image/jpeg', 'image/png', 'image/vnd.adobe.photoshop'],
    on_before_upload: function() {
      $('.save-auto').attr('disabled', true)
    },
    on_success_upload: function() {
      $('.save-auto').attr('disabled', false)
    },
    on_error: function(err) {
      swal({
        title: "Upload Failed",
        text: err.messages,
        type: "warning"
      })
    }
  })

  $('.save-auto').on('click', function() {
    alert($('.form-auto').find('input[name="file"]').val())
  })

  var manual_uploader = $('.manual-uploader').uploader({
    upload_url: 'upload.php',
    input_name: 'file',
    auto_upload: false,
    maximum_total_files: 4,
    maximum_file_size: 50009000,
    file_types_allowed: ['image/jpeg', 'image/png', 'image/vnd.adobe.photoshop'],
    on_before_upload: function() {
      $('.save-manual').attr('disabled', true)
    },
    on_success_upload: function() {
      $('.save-manual').attr('disabled', false)
    },
    on_error: function(err) {
      swal({
        title: "Upload Failed",
        text: err.messages,
        type: "warning"
      })
    }
  })

  $('.save-manual').on('click', function() {
    manual_uploader.upload(function() {
      alert($('.form-manual').find('input[name="file"]').val())
    })
  })
})
</script>



<!-- Modal -->
<div class="modal fade" id="confrimclaim" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body py-5 text-center">
    Your claim is now received.You will receive email as soon it is under process.
      </div>
      <div class="modal-footer">
        <a href="../../site/controllers/myaccount-controller.php" class="btn btn-alt">Go to my account</a>
        <a href="../../site/controllers/index-controller.php" class="btn btn-grd">Back to main page</a>

      </div>
    </div>
  </div>
</div><!------>
<!-- Modal -->

</body>
</html>
