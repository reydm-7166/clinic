<style>
  .notif {
    height: 6vh;
    box-sizing: border-box;
  }
</style>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <div class="notif pt-1">
                      <?php if(isset($_SESSION['notification_error'])){ ?>
                              <h5 class="rounded bg-danger text-white p-1 mt-2" ><?= $_SESSION['notification_error'] ?></h5>
                      <?php } unset($_SESSION['notification_error']);?>
                    </div>
                    <!-- <img src="../../../uploads/services1.png" style="width: 185px; height: 220px" alt="logo"> -->
                    <h4 class="mt-1 mb-5 pb-1">Naturopathic Clinic</h4>
                  </div>
  
                  <form action="/Signin_users/user_login" method="post">
                    <h5 class="text-center mb-4">Please login to your account</h5>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Username</label>
                      <input name="username" type="text" id="form2Example11" class="form-control" placeholder="Phone number or email address"/>
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Password</label>
                      <input name="password" type="password" id="form2Example22" class="form-control" />
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                        <input class="btn btn-success btn-block fa-lg mb-3" type="submit" id="login" name="submit" value="Login">
                        <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?&nbsp;</p><a href="signup"> Create Account</a> 
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>