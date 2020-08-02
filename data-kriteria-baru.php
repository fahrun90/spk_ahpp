<?php
include_once 'header.php';

if($_POST){
	
	include_once 'includes/kriteria.inc.php';
	$eks = new Kriteria($db);

	$eks->id = $_POST['kd'];
	$eks->nm = $_POST['nm'];
	
	if($eks->insert()){
?>
<script type="text/javascript">
window.onload=function(){
	showStickySuccessToast();
};
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
}
?>
		<div class="row">
		 <!-- <div class="col-xs-12 col-sm-12 col-md-2">
		  <?php
			//include_once 'sidebar.php';
			$db= new PDO ("mysql:host=localhost;dbname=15183207005_spk_ahp", "root", "");
      $Query5="select nama_kriteria from ahp_data_kriteria where id_pengguna = '$_SESSION[id_pengguna]' order by nama_kriteria desc ";
			$results = $db->query($Query5);
			
			?>-->
			<div class="col-xs-12 col-sm-12 col-md-12">
		  <ol class="breadcrumb">
			  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="data-kriteria.php"><span class="fa fa-bank"></span> Data Kriteria</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
			</ol>
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Kriteria</strong>
		  	</p>
		  	<div class="panel panel-default">
				
		<div class="panel-body">
					
			    <form method="post">
				  <div class="form-group">
				    <label for="kd">ID Kriteria</label>
				    <select class="form-control" id="kd" name="kd">
						<option>C1</option>
						<option>C2</option>
						<option>C3</option>
						<!--<option>C4</option>
						<option>C5</option>-->
						
				  </div>
					</select>
					<p class="text-muted">Input 3 ID Kriteria anda C1,C2, dan C3</p>
					
				  </div>
				  <div class="form-group">
				    <label for="nm">Nama Kriteria</label>
				    <input type="text" class="form-control" id="nm" name="nm" required>
				  </div>
				  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
				  <button type="button" onclick="location.href='data-kriteria.php'" class="btn btn-success"><span class="fa fa-history"></span> Kembali</button>
				</form>
			 
		  </div>
			<center>
			  <h3>Masukkan Data Kriteria Anda</h3>
			  	<p>Anda disini akan memasukan kriteria yang anda inginkan</p>
			  	<p>Pilih id kriteria kemudian masukan nama kriteria anda,tampilan sukses akan muncul apabila id kriteria belum diisi sebelumnya</p>
			  	<p>Lalu setelah ke 3 kriteria terisi dan diisi , maka dapat melanjutkan untuk melakukan input alternatif ataupun menekan tombol "kembali" untuk melihat data </p>
			  </center>
		  </div></div></div>
		</div>
		<?php
include_once 'footer.php';
?>