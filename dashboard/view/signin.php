<!DOCTYPE html >
<html>

<?php include 'inc/sign-header.php'; ?>

<body>


  <!-- breadcrumb --->
  <!--  <nav aria-label="breadcrumb" class="mt-1 bg-secondary">
      <div class="container">
         <div class="row">
            <ul class="breadcrumb mb-0">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ul>
         </div>
      </div>
    </nav> -->
    <!--- breadcrumb-->
    <section class="form-section py-4 d-flex">
      <div class="container align-self-center">
        <div class="row">
          <div class="offset-lg-1 col-lg-10">
            <div class="col-12">
              <div class="rounded card login-box shadow-lg border-0 overflow-hidden">
                <div class="row mx-0">
                 <div class="col-lg-5 login-box-left d-lg-flex bg-grd ">
                  <div class="align-self-center d-lg-flex text-center text-lg-left justify-content-lg-between d-lg-block text-white">
                    <div class="form-group pl-0 pl-lg-5">
                      
                      <a href="index.php" class="">
                        <img src="../../dashboard/view/assets/images/logo.png" class="footer-logo d-block my-3" alt="Claimy" title="Claimy" height="22">
                      </a>

                      <p><small>-The preferred claim company</small><p/>

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-7 d-flex">
                    <div class="form-row login-form align-self-center">
                     <div class="form-group col-12 ">
                      <h1 class="form-title text-center mb-lg-3">Sign in</h1>
                    </div>
                    <div class="form-group col-12 username">

                     <input type="text" class="form-control w-100" id="" placeholder="Enter E-mail Address">
                   </div>
                   <div class="form-group col-12 password">

                     <input type="Password" class="form-control" id="" placeholder="Enter your password">
                   </div>
                   <div class="col-12 d-md-flex justify-content-between">
                    <div class="custom-control custom-checkbox mr-sm-2 form-group">
                      <input type="checkbox" class="custom-control-input" id="Remember">
                      <label class="custom-control-label" for="Remember">Remember Me</label>

                    </div>  
                    <p class="mb-0"><a href="#" class="text-theme a-link form-group">Forgot Password?</a></p>  
                  </div> 
                  <div class="col-12 text-lg-center">
                    <button type="submit" class="btn btn-primary btn-grd mt-3 w-100 border-0" onclick="window.location.href = '../../dashboard/controllers/index-controller.php';">Log In</button>
                  </div>
                 <!--  <div class="divider text-center">
                    <span class="or bg-white rounded-circle shadow-sm d-inline">OR</span>
                  </div>
                  <div class="d-flex justify-content-center w-100 form-group">
                    <a href="#" class="btn btn-icon"><div class="">
                     <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">

                     <circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098"/>
                     <path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
                     c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>
                   </svg>
                 </div>
                 <span>Login with Facebook</span>
               </a>
               <a href="#" class="btn btn-icon">
                <div>
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
                  <circle id="XMLID_30_" style="fill:#DC4E41;" cx="56.098" cy="56.097" r="56.098"/>
                  <path style="fill:#DC4E41;" d="M19.531,58.608c-0.199,9.652,6.449,18.863,15.594,21.867c8.614,2.894,19.205,0.729,24.937-6.648
                  c4.185-5.169,5.136-12.06,4.683-18.498c-7.377-0.066-14.754-0.044-22.12-0.033c-0.012,2.628,0,5.246,0.011,7.874
                  c4.417,0.122,8.835,0.066,13.252,0.155c-1.115,3.821-3.655,7.377-7.51,8.757c-7.443,3.28-16.94-1.005-19.282-8.813
                  c-2.827-7.477,1.801-16.5,9.442-18.675c4.738-1.667,9.619,0.21,13.673,2.673c2.054-1.922,3.976-3.976,5.864-6.052
                  c-4.606-3.854-10.525-6.217-16.61-5.698C29.526,35.659,19.078,46.681,19.531,58.608z"/>
                  <path style="fill:#DC4E41;" d="M79.102,48.668c-0.022,2.198-0.045,4.407-0.056,6.604c-2.209,0.022-4.406,0.033-6.604,0.044
                  c0,2.198,0,4.384,0,6.582c2.198,0.011,4.407,0.022,6.604,0.045c0.022,2.198,0.022,4.395,0.044,6.604c2.187,0,4.385-0.011,6.582,0
                  c0.012-2.209,0.022-4.406,0.045-6.615c2.197-0.011,4.406-0.022,6.604-0.033c0-2.198,0-4.384,0-6.582
                  c-2.197-0.011-4.406-0.022-6.604-0.044c-0.012-2.198-0.033-4.407-0.045-6.604C83.475,48.668,81.288,48.668,79.102,48.668z"/>

                  <path style="fill:#FFFFFF;" d="M19.531,58.608c-0.453-11.927,9.994-22.949,21.933-23.092c6.085-0.519,12.005,1.844,16.61,5.698
                  c-1.889,2.077-3.811,4.13-5.864,6.052c-4.054-2.463-8.935-4.34-13.673-2.673c-7.642,2.176-12.27,11.199-9.442,18.675
                  c2.342,7.808,11.839,12.093,19.282,8.813c3.854-1.38,6.395-4.936,7.51-8.757c-4.417-0.088-8.835-0.033-13.252-0.155
                  c-0.011-2.628-0.022-5.246-0.011-7.874c7.366-0.011,14.743-0.033,22.12,0.033c0.453,6.439-0.497,13.33-4.683,18.498
                  c-5.732,7.377-16.322,9.542-24.937,6.648C25.981,77.471,19.332,68.26,19.531,58.608z"/>
                  <path style="fill:#FFFFFF;" d="M79.102,48.668c2.187,0,4.373,0,6.57,0c0.012,2.198,0.033,4.407,0.045,6.604
                  c2.197,0.022,4.406,0.033,6.604,0.044c0,2.198,0,4.384,0,6.582c-2.197,0.011-4.406,0.022-6.604,0.033
                  c-0.022,2.209-0.033,4.406-0.045,6.615c-2.197-0.011-4.396,0-6.582,0c-0.021-2.209-0.021-4.406-0.044-6.604
                  c-2.197-0.023-4.406-0.033-6.604-0.045c0-2.198,0-4.384,0-6.582c2.198-0.011,4.396-0.022,6.604-0.044
                  C79.057,53.075,79.079,50.866,79.102,48.668z"/>
                </svg>
              </div>
              <span>Login with Gmail</span>
            </a>
          </div> -->

       <!--    <div class="w-100 text-center">
            <p class=" text-muted mb-0"><small>New at claimy?</small><a href="signup.php" class="btn-link ml-2">Sign Up</a></p>

          </div> -->
        </div>
      </div>


    </div>
  </div>
</div>
</div>
</div>
</div>
</section><!---->


</body>


<script src="../../dashboard/view/assets/js/jquery-3.3.1.min.js"></script>
<script src="../../dashboard/view/assets/js/bootstrap.min.js"></script>
<script>

</script>
</html>
