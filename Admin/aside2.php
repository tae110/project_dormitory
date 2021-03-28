  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
          <div class="image">
              <img src="../../images/user.png" width="48" height="48" alt="User" />
          </div>
          <div class="info-container">
              <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?=$_SESSION["a_name"]?></div>
              <div class="email"><?=$_SESSION["a_email"]?></div>
              <!-- <div class="btn-group user-helper-dropdown">
                  <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="true">keyboard_arrow_down</i>
                  <ul class="dropdown-menu pull-right">
                      <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                      <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                      <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                  </ul>
              </div> -->
          </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
          <ul class="list">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active">
                  <a href="../../pages/tables/manage_dormitory.php">
                      <i class="material-icons">home</i>
                      <span>Home</span>
                  </a>
              </li>
              <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <i class="material-icons">swap_calls</i>
                      <span>จัดการหอพัก</span>
                  </a>
                  <ul class="ml-menu">
                      <li>
                          <a href="../../pages/forms/addDormitory.php">เพิ่มหอพัก</a>
                      </li>
                      <li>
                          <a href="../../index.php">จัดการหอพัก</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="../../pages/examples/sign-up.php">
                      <i class="material-icons">add</i>
                      <span>เพิ่มผู้ดูเเลระบบ</span>
                  </a>
              </li>
              <li>
                  <a href="../../pages/examples/sign-in.php">
                      <i class="material-icons">logout</i>
                      <span>ออกจากระบบ</span>
                  </a>
              </li>

          </ul>
      </div>
      <!-- #Menu -->
      <!-- Footer -->
      <!-- <div class="legal">
          <div class="copyright">
              &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
          </div>
          <div class="version">
              <b>Version: </b> 1.0.5
          </div>
      </div> -->
      <!-- #Footer -->
  </aside>
  <!-- #END# Left Sidebar -->
  <!-- Right Sidebar -->