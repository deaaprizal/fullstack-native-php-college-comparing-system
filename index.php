<?php
		include "model/Survei_model.php";
		include "model/Testimoni_model.php";
		include "model/Kampus_model.php";

		$testimoni = new Testimoni_model();
		$survei = new Survei_model();
		$kmp = new Kampus_model();

		$result = $survei->ambilkampus();
		$result1 = $survei->ambilkampus();
		$result2 = $testimoni->viewTestimoni();
		$result3 = $kmp->daftarKampus();

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

		<div class="ui top fixed menu">
		    	<div class="ui icon input">
		    		<a class="item" href="http://localhost/bandingkampus">Home</a>
		    		<a class="item">Tentang</a>
					<a class="item">Kontak</a>
					<a class="item">Blog</a>
		    	</div>

			<div class="right item">
			    <div class="ui action input">
			    	<input type="text" placeholder="nama kampus...">
			      	<div class="ui button">Cari</div>
			    </div>
			</div>
		</div>

		<div class ="ui container" style="background: #f9f9f9">
			<br/>
			<br/>
			<!-- 
				<a href="space_iklan1.php"><center><div class="ui leaderboard test ad" style="background: #222; opacity: 0.9" data-text="Space Iklan 1"></div></center></a>
			-->

			<h2 class="ui center aligned icon header">
  				<img src="assets/img/bandingkampuslogo.png"> <span style="color:#dc5538">Banding</span>&nbsp;&nbsp;</i><span style="color:#3B5998">Kampus</span>
			</h2>

		<div class="ui top attached tabular menu animated fadeInDownBig">
		  	<a class="item active" data-tab="bandingkan">Bandingkan</a>
		  	<a class="item" data-tab="peringkat">Peringkat</a>
		  	<a class="item" data-tab="masuk">Masuk</a>
		</div>

		<div class="ui center aligned bottom attached tab segment active" data-tab="bandingkan" style="box-shadow: 2px 3px 3px 2px #888">

		<div class="ui hidden divider"></div>

		<div class="ui center aligned container animated fadeInDownBig">
				<div class="ui steps">
  <div class="active step" style="box-shadow: 1px 2px 2px 1px #888">
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
			 <button class="ui huge facebook button" style="box-shadow: 2px 3px 3px 2px #888">Lihat Website</button>
			 	<div class="or animated bounceInUp"></div>
			 <button class="ui huge google plus button" type="submit" style="box-shadow: 2px 3px 3px 2px #888"> Bandingkan</button>
		</div>
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
    					<tr>
      						<td>
        						<div class="ui ribbon label">1</div>
      						</td>
      						<td class="center aligned"></td>
      						<td class="center aligned"></td>
      						<td class="center aligned"></td>
    					</tr>
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
				  <div class="two fields">
				    <div class="field">
				      <label>Username</label>
				      <input type="text" name="username">
				    </div>
				    <div class="field">
				      <label>Password</label>
				      <input type="password" name="password">
				    </div>
				  </div>
				  <div class="ui center aligned container">
				  	<button class="ui facebook button" type="submit" style="width:200px">Masuk</button>
				  </div>
				</form>
				<h4 class="ui horizontal divider header">
				<button onclick="daftar()" class="ui button">daftar disini</button>
				atau
 				<button onclick="lupapassword()" class="ui button">lupa password?</button>
				</h4>
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

		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>
		<div class="ui hidden divider"></div>

		<div class="ui center aligned container top attached">
  			<h1>Testimonial Alumni</h1>


		<!-- random looping mulai dari sini -->
		<div class="ui cards" style="position: relative;left:120px">
		<?php while($row = mysql_fetch_array($result2)){?>
			<div class="card">
		 	<div class="content">
		    	<div class="header"><?php echo $row['nama_lengkap'];?></div>
		    	<div class="description">
		      		<p><?php echo $row['testimoni']?></p>
		    	</div>
		  	</div>
		  	<div class="extra content">
		    	<div class="author">
			 		<?php echo $row['nama_kampus'];?>
		    	</div>
		  	</div>
		</div>
  		<?php } ?>
	</div>
</div>
		<div class="ui hidden divider"></div>
		<!-- random beres -->

	<div class="ui hidden divider"></div>
	<div class="ui hidden divider"></div>

	<div class="ui internally celled grid" style="background: #fff">
	  	<div class="row">
	    	<div class="three wide column">
	      		<h3 align="center">Kampus Terdaftar</h3>
	      		<hr/>
	      		<br/>
	    		<!-- looping list kampus -->
						<?php while($row = mysql_fetch_array($result3)){?>
	      		<img src="assets/images/<?php echo $row['foto'];?>" class="ui small image">
	      		<p class="ui large header"><?php echo $row['nama_kampus'];?></p>
	      		<hr/>
						<?php } ?>
	      		<!-- end looping -->
	      		<center><a href="#" class="ui google plus button">Lihat Semua</a></center>
	    	</div>

	    	<!-- mid content -->
	    	<div class="ten wide column">
	    		<h1 class="ui header">Panduan Pengguna</h1>
					<div class="ui list">
						<div class="item">
						   	<i class="question circle large icon"></i>
						    <div class="content">
	    		<div class="ui hidden" id="next"></div>
						     	<a class="ui medium header" onclick="pertanyaan1()">Bagaimana cara membandingkan kampus?</a>
						    </div>
						</div>
						<div class="item">
						    <i class="question circle large icon"></i>
						    <div class="content">
						    	<a class="ui medium header" onclick="pertanyaan2()">Bagaimana cara melihat peringkat kampus?</a>
						    </div>
						</div>
						<div class="item">
						    <i class="question circle large icon"></i>
						    <div class="content">
						    	<a class="ui medium header" onclick="pertanyaan3()">Bagaimana cara mendaftar sebagai anggota?</a>
						    </div>
						</div>
						<div class="item">
						   	<i class="question circle large icon"></i>
						    <div class="content">
						    	<a class="ui medium header" onclick="pertanyaan4()">Bagaimana cara bertanya kepada mahasiswa internal?</a>
						    </div>
						</div>
					</div>
				<div class="ui hidden divider"></div>
				<h3 class="ui header">Section Two</h3>
				</div>
	    	<!-- end of mid content -->
	    </div>
	</div>
</div>
</div>
</div>
</div>



	<!-- pertanyaan 1: bagaimana cara membandingkan kampus -->
	<div class="ui modal pertanyaan1">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara membandingkan kampus</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

		<!-- pertanyaan 2: bagaimana cara melihat peringkat kampus -->
	<div class="ui modal pertanyaan2">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara melihat peringkat kampus</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

			<!-- pertanyaan 3: bagaimana cara mendaftar sebagai anggota -->
	<div class="ui modal pertanyaan3">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara mendaftar sebagai anggota</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

			<!-- pertanyaan 4: bagaimana cara bertanya -->
	<div class="ui modal pertanyaan4">
  		<i class="close icon"></i>
	  	<div class="content">
		    <div class="description">
		     	<div class="ui large header">Cara bertanya kepada mahasiswa internal</div>
		      	<p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		      	<p>Is it okay to use this photo?</p>
		    </div>
	  	</div>
	  	<div class="actions">
		    <div class="ui positive right labeled icon button">
		      Ya, Saya Mengerti
		      <i class="checkmark icon"></i>
		    </div>
	  	</div>
	</div>

	<!-- pertanyaan berakhir -->

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
	p, small, b, h1, h2, h3, h4, h5, h6 {
		color: #555666;
	}
	.tobot:hover{
		color:#222;
		transition: .6s;
	}
</style>