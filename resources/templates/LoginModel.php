
  <!-- Login Modal -->
  <div class="modal fade signup" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header signin_header">
          <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="signup">
            <form id="LoginForm" name="userLoginForm" >
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="Logemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="Logpass" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <p>Not a Member ? <a href="#" data-bs-toggle="modal" data-bs-target="#signup">Register</a></p>
                </div>
                <button type="submit" class="btn btn-warning" style="float: right;">LOG IN</button>
              </form>   
          </div>
        </div>
      </div>
    </div>
  </div>