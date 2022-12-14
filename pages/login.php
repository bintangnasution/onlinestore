<?php include"../layout/header.php";?>
<form method="post" action="../action/dologin.php">
    <?php session_start(); if(isset($_SESSION["is_login"])){
        header("Location: https://bintangnasution.000webhostapp.com/dashboard.php");
        die();
    }?>
    <?php
    if (isset($_GET['bye'])) {
        echo'<div class="alert alert-success text-sm" role="alert">';
        echo '<center>Log out Berhasil!<center>';
        echo '</div>';
    }
    if (isset($_GET['unfill'])) {
        echo'<div class="alert alert-danger text-sm" role="alert">';
        echo '<center>Email dan password tidak boleh kosong!<center>';
        echo '</div>';
    }
    if(isset($_GET['unreg'])){
        echo'<div class="alert alert-danger text-sm" role="alert">';
        echo '<center>Email atau password tidak terdaftar!<center>';
        echo '</div>';
    }
    ?>
    <div class="form-floating mb-3">
        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"/>
        <label for="inputEmail">Email</label>
        <?php
        if(isset($_GET['b_email'])) {
            echo'<div class="alert alert-warning mt-1" role="alert">';
            echo '<center>Email tidak boleh kosong!<center>';
            echo '</div>';
        }
        ?>
    </div>
    
    <div class="form-floating mb-3">
        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password"/>
        <label for="inputPassword">Password</label>
        <?php
        if(isset($_GET['b_pass'])) {
            echo'<div class="alert alert-warning mt-1" role="alert">';
            echo '<center>Password tidak boleh kosong!<center>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <button class="btn btn-dark form-control" type="submit">Login</button>
    </div>
</form>

</div>
<div class="card-footer text-center py-3">
<div class="small"><a href="register.php">Need an account? Sign up!</a></div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
<?php include"../layout/footer.php";?>