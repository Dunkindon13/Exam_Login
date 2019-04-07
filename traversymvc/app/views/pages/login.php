<?php APPROOT . '/views/inc/header.php'; ?>
    <?php /*APPROOT . '/controllers/pages.php'; */?>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h2>Login</h2>
                <h4>Please fill in your login information</h4>
                <form action="<?php echo URLROOT; ?>/pages/login" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($data['pass_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>"
                        <span class="invalid-feedback"><?php echo $data['pass_error']; ?></span>

                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block" value="Login">
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/pages/register" class="btn btn-light btn-block">No account? <h6>Register</h6></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php APPROOT . '/views/inc/footer.php'; ?>