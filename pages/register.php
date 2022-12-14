<?php include_once"../layout/header.php";?>
<?php session_start(); if(isset($_SESSION["is_login"])){
        header("Location: https://bintangnasution.000webhostapp.com/dashboard.php");
        die();
    }?>
<form method="post" action="../action/doregister.php">
<?php
        if (isset($_GET['unmatch_pass'])) {
            echo'<div class="alert alert-warning text-sm" role="alert">';
            echo '<center>Password tidak cocok!<center>';
            echo '</div>';
        }
        ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name='nama_depan'/>
                <label for="inputFirstName">First name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name='nama_belakang'/>
                <label for="inputLastName">Last name</label>
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name='email'/>
        <label for="inputEmail">Email address</label>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name='password'/>
                <label for="inputPassword">Password</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name='konf_password'/>
                <label for="inputPasswordConfirm">Confirm Password</label>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-0">
        <div class="d-grid"><button class="btn btn-dark btn-block" type="submit">Create Account</button></div>
    </div>
</form>
</div>

<div class="card-footer text-center py-3">
<div class="small"><a href="login.php">Have an account? Sign in here!</a></div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
<?php include_once"../layout/footer.php";?>