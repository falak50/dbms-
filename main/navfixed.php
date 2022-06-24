 <div  class="navbar  navbar-fixed-top" >
      <div style="background:red;">
      <div class="navbar-inner"  >
        <div class="container-fluid"  style="background:black;">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" style="color:white;" href="#"><b>ICON</b></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a><i style="color:white;"  class="icon-user icon-large"></i> 
              <i style="color:white;" > Welcome:</i>
              <i style="color:white;">
              <strong> <?php echo $_SESSION['SESS_LAST_NAME'];?></strong></a></li>
		       
              </i>
           <!-- <i style="color:white;" ></i> -->
              <li><a> <i  style="color:white;" class="icon-calendar icon-large"></i>
       <i style="color:white;">
       <?php
								$Today = date('y:m:d',mktime());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
       </i>
							

				</a></li>
              <li><a href="../index.php"><font color="red"><i class="icon-off icon-large"></i></font> <i style="color:white;">Log Out</i></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
    </div>
	