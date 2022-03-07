<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col-lg-12 col-xl-11 w-100">
          <div class="card text-black mt-5" style="border-radius: 25px;">
            <div class="card-body p-md-3">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <form class="mx-1 mx-md-4" action="schedule" method="post">

                  <?php $user = $this->session->userdata('verify'); if(!empty($user)){ ?>
                    <input type="hidden" name="id" value=" <?= $user['id']; ?> ">
                    
                    <?php } ?>


                  <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-4 mt-0">Book Schedule</p>  
                  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label " for="form3Example1c">First Name</label>
                        <input type="text" id="form3Example1c" name="first_name" class="form-control" />
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Last Name</label>
                        <input type="text" id="form3Example1c" name="last_name" class="form-control" />
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Age</label>
                        <input type="number" id="form3Example3c" name="age" class="form-control" />
                      </div>

                    </div>
                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Email Address</label>
                        <input type="email" id="form3Example3c" name="email_address" class="form-control" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Choose Category</label>
                        <select class="form-control" name="category" aria-label="Default select example">
                            <div class="form-outline flex-fill mb-0">
                                <?php 
                                    if($this->session->userdata('contents')) foreach($this->session->userdata('contents') as $data) { ?>
                                        <option value="<?=$data['id'] ?>"><?= $data['treatment_name'] ?></option>
                                <?php } ?>
                            </div>
                        </select>
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Choose Preferred Date</label>
                            <input type="datetime-local" name="date_pref" class="form-control">
                            <small class="form-text text-muted"><i>Expect this to change...</i></small>
                        </div>
                    </div>

  
                    <div class="d-flex flex-row align-items-center mb-4">
                        <input class="btn btn-success btn-block btn-lg text-body rounded" type="submit" id="submit" name="submit" value="Submit">
                    </div>


                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 no-img">
                    
                  <img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30162438/361.png" style="height: 600px; width: 660px;" class="img-fluid" alt="Sample image">
  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      // Data Picker Initialization
        $('.datepicker').datepicker({
        inline: true
        });
  </script>