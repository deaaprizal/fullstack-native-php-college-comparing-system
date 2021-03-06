<?php
		include "model/Survei_model.php";
		include "model/Testimoni_model.php";
		include "model/Kampus_model.php";
		include "model/Banding_model.php";
		include "model/Statistik_model.php";
		
		$testimoni = new Testimoni_model();
		$survei = new Survei_model();
		$kmp = new Kampus_model();
		$banding = new Banding_model();
		$statistik = new Statistik_model();
		
		$result = $survei->ambilkampus();
		$result1 = $survei->ambilkampus();
		$result2 = $testimoni->viewTestimoni();
		$result3 = $kmp->daftarKampus();
		$result4 = $banding->rankingKampus();
		
		$totalKampus = $statistik->totalKampus();
		$totalDaftar = $statistik->totalDaftar();
		$totalPengguna = $statistik->totalPengguna();
		$totalTestimoni = $statistik->totalTestimoni();
		$totalTanya = $statistik->totalTanya();
		$totalUlasan = $statistik->totalUlasan();
		
		

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    	<link rel="stylesheet" type="text/css" href="element/animate.css">
    	<script src="element/jquery-3.1.1.min.js"></script>
	    <script src="semantic/dist/semantic.min.js"></script>
	    <script src="semantic/dist/components/accordion.js"></script>
	    <script src="element/overlay.js"></script>
	    <script src="element/transition.js"> </script>
		<script src="../element/angular.js"></script>
    	<script src="element/date.js"></script>
	</head>
	<body style="background: #f9f9f9;">

		<div class="ui top fixed menu" style="height: 60px">
		    	<div class="ui icon input">
		    		<a class="item" href="http://localhost/bandingkampus">Home</a>
		    		<a class="item" href="tentang.php">Tentang</a>
					<a class="item" href="kontak.php">Kontak</a>
		    	</div>
		    <!--	
			<div class="right item">
			    <div class="ui action input">
			    	<input type="text" placeholder="nama kampus...">
			      	<div class="ui button">Cari</div>
			    </div>
			</div>
			-->
		</div>

		<div class ="ui container" style="background: #f9f9f9">
			<br/>
			<br/>
			<!-- 
				<a href="space_iklan1.php"><center><div class="ui leaderboard test ad" style="background: #222; opacity: 0.9" data-text="Space Iklan 1"></div></center></a>
			-->

		<h1 class="ui center aligned icon header" style="font-size: 44px">
			<img src="assets/img/bandingkampuslogo.png"><small>a n d i n g  k a m p u s</small>
		</h1>

		<div class="ui top attached tabular menu animated fadeInDownBig">
		  	<a class="item active" data-tab="bandingkan">Bandingkan</a>
		  	<a class="item" data-tab="peringkat">Peringkat</a>
		  	<a class="item" data-tab="masuk">Masuk</a>
		</div>

		<div class="ui center aligned bottom attached tab segment active" data-tab="bandingkan" style="box-shadow: 1px 2px 2px 1px #888">

		<div class="ui hidden divider"></div>

		<div class="ui center aligned container animated fadeInDownBig">
				<div class="ui steps">
  <div class="active step" style="box-shadow: 0px 2px 2px 0px #888">
    <i class="balance scale icon"></i>
    <div class="content">
      <div class="title">Bandingkan</div>
      <div class="description">cari kampus yang akan dibandingkan</div>
    </div>
  </div>
  <div class="disabled step" style="box-shadow: 0px 1px 1px 0px #888">
    <i class="star icon"></i>
    <div class="content">
      <div class="title">Cek Score</div>
      <div class="description">lihat dan bandingkan score kampus</div>
    </div>
  </div>
  <div class="disabled step" style="box-shadow: 0px 1px 1px 0px #888">
    <i class="question icon"></i>
    <div class="content">
      <div class="title">Tanya User</div>
      <div class="description">ajukan pertanyaan kepada mahasiswa internal</div>
    </div>
  </div>
</div>
		</div>

		<div class="ui hidden divider"></div>

		<form action="bandingHasil.php" method="POST" class="ui large form animated bounceInRight">
		<div class="ui center aligned stackable grid container">
		  	<div class="column">
		    	<select class="ui huge search dropdown" name="kampus1" required>
						<option value="">Kampus 1</option>
						<?php while($row = mysql_fetch_array($result)){?>
					 <option value="<?php echo $row['nama_kampus'];?>"><?php echo $row['nama_kampus'];?></option>
				 		<?php }?>
				</select>

		  	</div>
		 </div>

		  	<div class="ui horizontal divider">
    			<h1>VERSUS</h1>
  			</div>
  		<div class="ui center aligned stackable grid container">
		  	<div class="column">
		    	<select class="ui huge search dropdown" name="kampus2" required>
					 <option value="">Kampus 2</option>
					 <?php while($row = mysql_fetch_array($result1)){?>
					<option value="<?php echo $row['nama_kampus'];?>"><?php echo $row['nama_kampus'];?></option>
					 <?php }?>
				</select>
		  	</div>
		 </div>
		 <div class="ui hidden divider"></div>


		<div class="ui buttons">
			 <a href="http://google.com" class="ui huge facebook button" style="box-shadow: 2px 3px 3px 2px #888">Lihat Website</a>
			 	<div class="or animated bounceInUp"></div>
			 <button class="ui huge google plus button" type="submit" style="box-shadow: 2px 3px 3px 2px #888"> Bandingkan</button>
		</div>
		<br/>
		<br/>
		<br/>

		</div>
	</form>

		<!-- tab2 -->
		<div class="ui bottom attached tab segment" data-tab="peringkat"">

			<div class="ui hidden divider"></div>

			<div class="ui justified aligned container">
				<h1>PERINGKAT</h1>

				<!-- table ranking peringkat -->
				<table class="ui celled table">
  					<thead>
    					<tr class="center aligned">
    						<th>No</th>
    						<th>Nama Kampus</th>
					    	<th>Alamat</th>
					    	<th>Score</th>
  						</tr>
					</thead>
  					
  					<tbody>
						<?php $no=1;
						while($row = mysql_fetch_array($result4)){?>
							<tr>
								<td>
									<div class="ui ribbon label"><?php echo $no?></div>
								</td>
								<td class="center aligned"><?php echo $row['nama_kampus']; ?></td>
								<td class="center aligned"><?php echo $row['alamat']; ?></td>
								<td class="center aligned"><?php echo $row['score']; ?></td>
							</tr>
						<?php $no++;
						}?>
  					</tbody>
  					
  					<tfoot>
    					<tr>
    						<th colspan="4">
      							<div class="ui right floated pagination menu">
        							<!-- untuk pagination -->
      							</div>
    						</th>
  						</tr>
  					</tfoot>
				</table>
			</div>
		</div>


		<!-- tab4 -->
		<div class="ui bottom attached tab segment" data-tab="masuk"">

			<div class="ui hidden divider"></div>

			<div class="ui justified aligned container animated bounceInDown">
			
			<div class="ui hidden divider"></div>
	  			
	  			<form class="ui large form" action="users/process/loginProcess.php" method="post">
  					<div class="ui center aligned stackable grid container">
						<div class="ui huge icon input">
	  						<input type="text" placeholder="username" name="username">
						</div>
			    		<div class="ui huge icon input">
	  						<input type="password" name="password" placeholder="password">
						</div>
	  						<input class="ui huge google plus button" type="submit" value="masuk">
		 			</div>
				</form>

		 		<div class="ui hidden divider"></div>
		 		<div class="ui hidden divider"></div>

		 		<div class="ui center aligned container">
					<div class="ui floating compact message" style="width:73%">
	  					<p>Belum punya akun? <span onclick="daftar()" style="cursor: pointer;color:#3B5998">Daftar disini</span></p>
	  					<p><span onclick="lupapassword()" style="cursor: pointer;color:#3B5998">Lupa password?</span></p>
					</div>
				</div>

				<div class="ui hidden divider"></div>
				<div class="ui hidden divider"></div>
			</div>
		</div>

		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>

		<div class="ui right aligned container animated bounce infinite">
			<span onclick="next()" style="color:#dc5538; cursor: pointer; top:-150px; position: fixed; z-index: 99;"><i class="huge arrow alternate circle down outline icon tobot"></i></span>
		</div>
	
		<!-- konten 3 kolom -->
		<center><span style="font-size: 64px;color: #555;font-weight: 600;line-height: 94px; text-transform: lowercase">APA YANG KAMI SAJIKAN?</span></center>

		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui horizontal segments">
		<!-- kolom 1 -->
		<div class="ui segment">
		    <p>
			<div class="ui items">
				<div class="item">
					<div class="ui tiny image">
						<img src="assets/icon/biaya.png">
					</div>
					<div class="middle aligned content">
						<span class="header">Informasi Biaya Kuliah</span>
					</div>
				</div>

				<div class="item" id="next">
					<div class="ui tiny image">
						<img src="assets/icon/akreditasi.png">
					</div>
					<div class="middle aligned content">
						<span class="header">Informasi Akreditasi Jurusan</span>
					</div>
				</div>

				<div class="item">
					<div class="ui tiny image">
						<img src="assets/icon/tanya.png">
					</div>
					<div class="middle aligned content">
						<span class="header">Tanya Mahasiswa</span>
					</div>
				</div>
				
				<div class="item">
				    <div class="ui tiny image">
				      <img src="assets/icon/review.png">
				    </div>
				    <div class="middle aligned content">
				      <span class="header">Ulasan Dari Mahasiswa</span>
				    </div>
				</div>
			</div>
			</p>
		 </div>

		 <!-- kolom 2 -->
		<div class="ui segment">
		    <p>
		    	<div class="ui items">
				  <div class="item">
				    <div class="ui tiny image">
				      <img src="assets/icon/kualitas.png">
				    </div>
				    <div class="middle aligned content">
				      <span class="header">Kualitas Dosen</span>
				    </div>
				  </div>

				  <div class="item">
				    <div class="ui tiny image">
				      <img src="assets/icon/list.png">
				    </div>
				    <div class="middle aligned content">
				      <span class="header">List Fakultas</span>
				    </div>
				  </div>

					<div class="item">
					    <div class="ui tiny image">
					      <img src="assets/icon/banding.png">
					    </div>
					    <div class="middle aligned content">
					      <span class="header">Score Perbandingan</span>
					    </div>
				  </div>

					<div class="item">
					    <div class="ui tiny image">
					      <img src="assets/icon/win.png">
					    </div>
					    <div class="middle aligned content">
					      <span class="header">Persentase Data Pemenang</span>
					    </div>
				  	</div>
				</div>
			</p>
		</div>
	</div>

		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
			
<center><span style="font-size: 44px;color: #555;font-weight: 600;line-height: 94px; text-transform: lowercase">KENAPA HARUS PAKE BANDINGKAMPUS?</span></center>

		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>

	<!-- random beres -->
	<div class="ui internally celled grid" style="background: #fff">
	  	<div class="row">
	    	<div class="three wide column">
	      		<h2 class="ui center aligned header">Kampus Terdaftar</h2>
	      		<hr/>
	      		<br/>
	    		<!-- looping list kampus -->
						<?php while($row = mysql_fetch_array($result3)){?>
	      		<img src="assets/images/<?php echo $row['foto'];?>" class="ui small image">
	      		<p class="ui large header"><?php echo $row['nama_kampus'];?></p>
	      		<hr/>
						<?php } ?>
	      		<!-- end looping -->
	      		<center><a href="#" class="ui facebook button">Lihat Semua</a></center>
	    	</div>

	    	<!-- mid content -->
<div class="center aligned thirteen wide column">

<div class="ui statistics">
  <div class="statistic">
    <div class="value">
      <?php echo $totalUlasan ?>
    </div>
    <div class="label">
      Ulasan Kampus
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <?php echo $totalKampus ?>
    </div>
    <div class="label">
      Kampus Terdaftar
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <?php echo $totalPengguna ?>
    </div>
    <div class="label">
      Pengguna
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <?php echo $totalTestimoni ?>
    </div>
    <div class="label">
      Testimoni Alumni
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <?php echo $totalTanya ?>
    </div>
    <div class="label">
      Bertanya
    </div>
  </div>
    <div class="statistic">
    <div class="value">
      <?php echo $totalUlasan ?>
    </div>
    <div class="label">
      Orang Puas
    </div>
  </div>
</div>

	<div class="ui hidden divider"></div>

<div class="ui icon message">
  <i class="building outline icon"></i>
  <div class="content">
    <div class="header">
      <h1>Satu Satu Nya Di Indonesia</h1>
    </div>
    <p>Yang menyajikan informasi kampus secara <span style="color:#dc5538">transparan</span>, melalui kerjasama dengan <span style="color:#3B5998">mahasiswa internal</span></p>
  </div>
</div>

	<div class="ui hidden divider"></div>
	<div class="ui hidden divider"></div>
	<h2>Testimoni Alumni Untuk Kampusnya</h2>
	<div class="ui hidden divider"></div>
		<div class="ui feed">
		<?php while($row = mysql_fetch_array($result2)){?>
				  <div class="event">
				    <div class="label">
				      <img src="assets/img/logouser.png">
				    </div>
				    <div class="content">
				      <div class="summary">
				        <a class="user">
				          @<?php echo $row['nama_lengkap'];?>
				        </a><br/>
				        <?php echo $row['testimoni']?>
				        <div class="date">
				          <?php echo $row['nama_kampus'];?>
				        </div>
				      </div>
				      <div class="meta">
				        <a class="like">
				          <i class="checkmark icon"></i> Verified Akun
				        </a>
				    </div>
				</div>
			</div>
		<?php } ?>
		</div>

	<div class="ui hidden divider"></div>
	<div class="ui hidden divider"></div>
	<h2>Testimoni Pengguna Bandingkampus</h2>
	<div class="ui hidden divider"></div>
			<div class="ui feed">
				  <div class="event">
				    <div class="label">
				      <img src="assets/img/logouser.png">
				    </div>
				    <div class="content">
				      <div class="summary">
				        <a class="user">
				        	@Gege
				        </a><br/>
				        	Website ini sangat membantu saya
				        <div class="date">
				        	lpkia
				        </div>
				      </div>
				      <div class="meta">
				        <a class="like">
				          <i class="checkmark icon"></i> Verified Akun
				        </a>
				    </div>
				</div>
			</div>
			<div class="ui feed">
				  <div class="event">
				    <div class="label">
				      <img src="assets/img/logouser.png">
				    </div>
				    <div class="content">
				      <div class="summary">
				        <a class="user">
				        	@ImasPrat
				        </a><br/>
				        	Sangat Informatif!
				        <div class="date">
				        	lpkia
				        </div>
				      </div>
				      <div class="meta">
				        <a class="like">
				          <i class="checkmark icon"></i> Verified Akun
				        </a>
				    </div>
				</div>
			</div>
			<div class="ui feed">
				  <div class="event">
				    <div class="label">
				      <img src="assets/img/logouser.png">
				    </div>
				    <div class="content">
				      <div class="summary">
				        <a class="user">
				        	@Gege
				        </a><br/>
				        	Bener-bener berguna, karena infonya langsung dari mahasiswa Internal
				        <div class="date">
				        	lpkia
				        </div>
				      </div>
				      <div class="meta">
				        <a class="like">
				          <i class="checkmark icon"></i> Verified Akun
				        </a>
				    </div>
				</div>
			</div>
		</div>

	</div>
	    	<!-- end of mid content -->
	    </div>
	</div>
</div>
</div>
</div>
</div>



	

	<!-- modal daftar user -->
		<div class="ui modal daftar">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header"><i class="user circle icon"></i> Daftar Akun BandingKampus</div>
		     	<div class="ui divider"></div>
	  				<div class="ui hidden divider"></div>
		      	<form class="ui large form" action="users/process/registerProcess.php" method="post">
				  <div class="four fields">
				    <div class="field">
				      <label>Username</label>
				      <input name="username" type="text">
				    </div>
				    <div class="field">
				      <label>Email</label>
				      <input name="email" type="email">
				    </div>
				    <div class="field">
				      <label>Password</label>
				      <input name="password" type="password">
				    </div>
				    <div class="field">
				      <label>Ulangi Password</label>
				      <input name="repassword" type="password">
				    </div>
				  </div>
		    </div>
	  	</div>
	  	<div class="ui hidden divider"></div>
			<div class="actions">
				<button class="ui negative right labeled icon button" type="submit">
						Daftar
						<i class="checkmark icon"></i>
				</button>
			</div>
	  </form>
	</div>

	<!-- modal daftar user berakhir -->

		<!-- modal lupa password -->
		<div class="ui modal lupapassword">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header"><i class="question circle icon"></i> Lupa Password </div>
		     	<div class="ui divider"></div>
	  				<div class="ui hidden divider"></div>
		      	<form class="ui large form" action="users/process/lupaProcess.php" method="post">
	  				<div class="ui center aligned container">
				  <div class="field">
				      <label>Masukan Alamat Email</label>
				      <input type="email" style="width:50%" name="email">
				  </div>
				  <small><i>Kami akan mengirimkan konfirmasi reset password ke email yang anda masukan diatas.</i></small>
				  	</div>
		    </div>
	  	</div>
	  	<div class="ui hidden divider"></div>
	  	<div class="actions">
		    <button class="ui negative right labeled icon button" type="submit" name="kirim">
		      Reset Password
		      <i class="checkmark icon"></i>
		    </button>
	  	</div>
	  	</form>
	</div>

	<!-- modal lupa password berakhir -->



	<!-- js start -->
	<script type="text/javascript">
	function pertanyaan1(){
	$('.ui.modal.pertanyaan1')
  		.modal('show')
	;
	}
	function pertanyaan2(){
	$('.ui.modal.pertanyaan2')
  		.modal('show')
	;
	}
	function pertanyaan3(){
	$('.ui.modal.pertanyaan3')
  		.modal('show')
	;
	}
	function pertanyaan4(){
	$('.ui.modal.pertanyaan4')
  		.modal('show')
	;
	}
	function daftar(){
	$('.ui.modal.daftar')
  		.modal('show')
	;
	}
	function lupapassword(){
	$('.ui.modal.lupapassword')
  		.modal('show')
	;
	}
	</script>

	<script type="text/javascript">
		function next(){
		document.querySelector('#next').scrollIntoView({
  behavior: 'smooth'
});
	}
	</script>

		<script src="element/popup.js"></script>
		<script type="text/javascript">
			$('.ui.dropdown')
  				.dropdown()
			;
			$('.menu .item')
  				.tab()
			;
		</script>
	<!-- js end -->
	</body>
</html>

<style>
	@font-face{
		font-family: geomanist;
		src: url('assets/geomanist-regular-webfont.woff');
	}

	button, div, ul, li, span, a, p, small, b, h1, h2, h3, h4, h5, h6 {
		color: #555666;
		font-family: geomanist;
		font-variant: inherit;
	}
	.tobot:hover{
		color:#222;
		transition: .6s;
	}
</style>