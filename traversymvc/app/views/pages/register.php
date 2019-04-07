<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card card-body">
            <h2>Register</h2>
            <h4>Please register your account below</h4>
            <form action="<?php echo URLROOT; ?> /pages/register" method="post">

                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" name="name"
                           class="form-control <?php echo (!empty($data['username_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['username']; ?>">
                    <span class="invalid-feedback"><?php echo $data['username_error']; ?></span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                           class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"
                           class="form-control  <?php echo (!empty($data['pass_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['pass_error']; ?></span>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password"
                           class="form-control  <?php echo (!empty($data['pass_confirm_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['pass_confirm_error']; ?></span>
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age"
                           class="form-control  <?php echo (!empty($data['age_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['age']; ?>">
                    <span class="invalid-feedback"><?php echo $data['age_error']; ?></span>
                </div>

                <div class="row">
                    <div clas="col">
                        <input type="button" value="Register" class="btn btn-success btn-block">
                    </div>
                </div>

                <div class="col">
                    <a href="<?php echo URLROOT; ?>/pages/login" class="btn btn-light btn-block">Have an account?<h6>Login</h6></a>
                </div>

            </form>
        </div>
    </div>


</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
