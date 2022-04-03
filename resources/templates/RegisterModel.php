
    <!-- Register Modal -->
    <div class="modal fade signup" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header signup_header">
          <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="signup">
            <form id="registrationForm"  name="userRegisterForm">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <select name="category">
                    <option>Choose Category</option>
                    <option>Admin</option>
                    <option>User</option>
                    <option>Saler</option>
                  </select>
                </div>
                <div class="mb-3">
                    <p>Already Registered ? <a href="#" data-bs-toggle="modal" data-bs-target="#signin">Login</a></p>
                </div>
                <button type="submit" class="btn btn-warning" style="float: right;">SIGN UP</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  