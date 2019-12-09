<?php include 'inc/header.php'; ?>

<section class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">My <span class="font-regular">Cases</span></h2>
        </div>
        <!--setting navabar-->
        <div class="mb-3 ">
            <ul class="nav nav-pills navbar-inner">
                <li class="nav-item">
                    <a class="nav-link " href="myaccount.php">My cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="setting.php">User setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php">logout</a>
                </li>
            </ul>
        </div>
        <!--setting navabar end-->
        <!---user setting form------>
        <div class="card claim-card shadow-lg border-0 d-md-flex justify-content-between">
            <div class="card-body">
                <form class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" value="wisam swaidan">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option disabled="">Select country</option>
                                <option>Denmark</option>
                                <option>Denmark</option>
                                <option>Denmark</option>
                                <option>Denmark</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address"
                                   value="Dæmningen 42A, 7100Vejle">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone No." value="1234567890">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail"
                                   value="wisamswaidan@gmail.com">
                        </div>

                        <button type="submit" class="btn btn-grd">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!---user setting form end------>
    </div>
</section>
</div>

<?php include 'inc/footer.php'; ?>
