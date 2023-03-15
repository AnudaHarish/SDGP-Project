<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      User Management
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
      
      <li class="active">User Management</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        
          <button class = "btn btn-primary" data-toggle = "modal" data-target = "#modalAtUser">
            Add User
          </button>

        

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tables">

          <thead>
            <tr>

              <th style = "width:10px">#</th>
              <th>User</th>
              <th>Nick name</th>
              <th>Picture</th>
              <th>Profile</th>
              <th>State</th>
              <th>Last login</th>
              <th>Actions</th>

            </tr>
            
            
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src = "views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>User adminstrator</td>
              <td><button class="btn btn-success btn-xs">Active</button>
              <td>2017-12-11 12:05:32</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src = "views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>User adminstrator</td>
              <td><button class="btn btn-success btn-xs">Active</button>
              <td>2017-12-11 12:05:32</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src = "views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>User adminstrator</td>
              <td><button class="btn btn-danger btn-xs">Deactive</button>
              <td>2017-12-11 12:05:32</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
            

          </tbody>
        </table>

      </div>

      

    </div>

  </section>

</div>


<!--==========================
  =   user add pop up           =
  ===========================-->
<!-- Modal -->
<div id="modalAtUser" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

    <form role="form" method = "post" enctype = "multipart/form-data" >

      <!--==========================
       =   Modal header          =
      ===========================-->

      <div class="modal-header" style="background: #3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add User</h4>

      </div>

      <div class="modal-body">

      <!--==========================
        =   Modal body         =
      ===========================-->

        <!-- Entry for the name -->
        
        <div class = "box-body">

          <div class= "form-group">

            <div class = "input-group">

              <span class = "input-group-addon"><i class = "fa fa-user"></i></span>
              <input type="text" class = "form-control input-lg" name ="newName" placeholder="Username" required>


            </div>

          </div>

          <!-- Entry for the user -->

          

          <div class= "form-group">

            <div class = "input-group">

              <span class = "input-group-addon"><i class = "fa fa-key"></i></span>
              <input type="text" class = "form-control input-lg" name ="newUser" placeholder="User Type" required>
              

            </div>

          </div>

          

          <!-- Entry for the user -->

          

          <div class= "form-group">

            <div class = "input-group">

              <span class = "input-group-addon"><i class = "fa fa-lock"></i></span>
              <input type="password" class = "form-control input-lg" name ="newPassword" placeholder="User password" required>
              

            </div>

          </div>

          <!-- Entry for the user profile -->

          

          <div class= "form-group">

            <div class = "input-group">

              <span class = "input-group-addon"><i class = "fa fa-users"></i></span>
              
              <select class="form-control input-lg" name="selectProfile">

                <option value = "">Select Profile</option>

                <option value = "Adminstrator">Administrator</option>

                <option value = "Special Character">Special character</option>

                <option value = "">Seller</option>



              </select>
              

            </div>

          </div>

          <div class= "form-group">

            <div class= "panel">Uplaod Profile Photo</div>

            <input type ="file" id = "newPhoto" name = "newPhoto">

            <p class = "help-block">Please upload a photo less than 200MB</p>

            <img src = "views/img/users/default/anonymous.png" class="img-thumbnail" width="100px">


          </div>

        


        </div>

      </div>

      <!--==========================
        =   Modal footer          =
      ===========================-->


      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Go</button>

        <button type = "submit" class = "btn btn-primary">Save changes</button>

      </div>

      <?php

      
        $editUser = new ControllerUsers();
        $editUser -> ctrEditUser();
        

      ?>



    </form>

    </div>

  </div>
</div>


