<?php
include_once 'header_admin.php';
if($_POST){
    
  
?>
<script type="text/javascript">
window.onload=function(){
  showStickySuccessToast();
};
window.location='login.php';
</script>
<?php
    }
    
    else{
?>
<script type="text/javascript">
window.onload=function(){
  showStickyErrorToast();
};
</script>
<?php
    }

    } else{
?>
<script type="text/javascript">
window.onload=function(){
  showStickyWarningToast();
};
</script>
<?php   
    }
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-2">
		  <?php
			include_once 'sidebar_admin.php';
			?>
		  </div>
          <br>
          <br>
          <br>

		  <div class="col-xs-13 col-sm-13 col-md-10">
		    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">SELAMAT DATANG ADMIN</h3>
  </div>
  <div class="panel-body">
    SELAMAT DATANG DI KONTROL PANEL HALAMAN ADMINISTRATOR
  </div>
</div>
    
        </div>
        <?php
include_once 'footer.php';
?>