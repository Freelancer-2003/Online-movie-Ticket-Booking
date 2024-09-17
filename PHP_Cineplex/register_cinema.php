<?php include 'base.php'; 

if(!isset($_SESSION['username'])){

echo '

<title>Cineplex | Home</title>
<link rel="stylesheet" href="css/login.css"/>



<style>
    body {
        background-image: url("images/cin1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .cinema {
        background-color:rgb(110 15 15 / 95%);
        margin:80px;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-start">
        <div class="col-12 col-md-10 col-lg-7">
            <form action="after_signup.php" method="POST" class="text-white cinema">
                

                <h1>Registration as Cinema <i class="fa fa-ticket" aria-hidden="true"></i></h1>

                <input type="text" name="role", value="cinema" style="display: none;">

                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="form-label">Username</label>
                        <input class="form-control" type="text" placeholder="Username" name="username" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-12">
                        <label class="form-label">First Name</label>
                        <input class="form-control" type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label class="form-label">Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fa fa-envelope-o" aria-hidden="true"></i required> E-mail</label>
                    <input class="form-control" type="email" placeholder="@" name="email">
                </div>
                <div class="form-row">
                <div class="form-group col-md-6 col-12">
                    <label class="form-label"> Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label class="form-label">Repeat Password</label>
                    <input class="form-control" type="password" placeholder="Password Again" name="cpassword" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-12">
                    <label class="form-label">Cinema Name</label>
                    <input class="form-control" type="text" placeholder="Cinema Name" name="cname" required>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label class="form-label"><i class="fa fa-phone" aria-hidden="true"></i> Cinema Phone No</label>
                    <input class="form-control" type="number" placeholder="Contact No" name="cphone" required>
                </div>
                <div class="form-group col-md-12 col-12">
                    <label class="form-label">Cinema City</label>
                    <input class="form-control" type="text" placeholder="Cinema City" name="ccity" required>
                </div>
            </div>
                <div class="form-group">
                    <label class="form-label">Cinema Address</label>
                    <input class="form-control" type="text" placeholder="Cinema Address" name="caddress" required>
                </div>

                <input class="btn btn-primary btn-block btn-lg" type="submit" value="Register">
            </form>
        </div>
    </div>
</div>';
}
else {
    echo "You can't access this page!";
}


