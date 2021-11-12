   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Data <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=barang"><i class="fa fa-briefcase" aria-hidden="true"></i>Account Officer</a></li>
                          <li><a  href="index.php?page=user1"><i class="fa fa-user" aria-hidden="true"></i>User</a></li>
                      </ul>
                  </li> 
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
