<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="index.php"><img 
			src="images/logo1.png" 
			alt="logosmk"
			 width=60 
			 height=60
			 style="position: relative; bottom: 13px; left:20px"></a>

			</div>
			<div class="w3layouts_header_right ">
			    <form action="#" method="post">
					
					
				</form>
			</div>
			
			
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="effect-3">Home</a></li>
						<li> <a class='effect-3 scroll' data-toggle='dropdown'>Tentang Kami<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='#' >Sambutan Kepala Sekolah</a></li>
								<li><a href='#' >Profile Sekolah</a></li>
								<li><a href='#' >Kontak Kami</a></li>
							</ul>
						</li>
						<li><a href="#" class="effect-3">Kompetensi Keahlian </a></li>
						<li>
						<a href="#" class="effect-3">Berita</a>
						</li>
						<li><a href="#" class="effect-3">Perpustakaan</a></li>
						<li> <a class='effect-3 scroll' data-toggle='dropdown'>Portal Alumni<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='#' >Career Support BKK</a></li>
								<li><a href='#' >Teacher Study Kemdikbud</a></li>
							</ul>
						</li>
						<li><a href="#" class="effect-3">PPDB</a></li>
						<li><a href="#" class="effect-3">Toko Skansay</a></li>
						<li> <a class='effect-3 scroll' data-toggle='dropdown'>...<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='#' >Unit Kerja</a></li>
								<li><a href='#' >eRapor SMK</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Masuk</h3>	
					<div class="login-form">
						<form action="peroses_login.php" method="post">
							<input type="text" name="username" placeholder="Username" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<div class="tp">
								<input type="submit" value="Masuk">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Daftar</h3>	
					<div class="login-form">
						<form action="proses_daftar.php" method="post" onkeyup='check();'>
						   <input type="text" name="username" placeholder="Username" required="">	
							<input type="password" name="password" id="Password1" placeholder="Password" required="">
							<input type="password" name="password" id="Password2" placeholder="Confirm Password" required="">
							<span id='message'></span>
							
							<input type="text" name="Nisn" placeholder="NISN" maxlength="10" required="">
							<input type="text" name="Nama_Murid" placeholder="Nama" required="">
							<input type="text" name="Kota" placeholder="Kota" required="">
							
<table class="table text-left">	
	<tr>
    	<td> Jenis Kelamin : </td>
   		<td><select name="Jenis_Kelamin">
    			<option value="Laki-Laki" selected> Laki-Laki </option>
				<option value="Perempuan"> Perempuan </option>
			</select>
		</td>
    </tr>
	
	<tr>
    	<td> Agama : </td>
   		<td><select name="Agama">
    			<option value="Islam" selected> Islam </option>
				<option value="Kristen"> Kristen </option>
				<option value="Katolik"> Katolik </option>
				<option value="Hindu" > Hindu </option>
				<option value="Buddha"> Buddha </option>
				<option value="Kong_Hu_Cu"> Kong Hu Cu </option>
			</select>
		</td>
    </tr>
    
    <tr>
    	<td> Jurusan : </td>
        <td> <select name="Jurusan">
    			<option value="AP" selected> AP </option>
				<option value="RPL"> RPL </option>
				<option value="TKR"> TKR </option>
			 </select>
       	</td>
    </tr>
    
    <tr>
    	<td>Kelas : </td>
        <td><select name="Kelas">
    			<option value="1" selected> 10 </option>
				<option value="2"> 11 </option>
				<option value="3"> 12 </option>
			</select>
      	</td>
 	</tr>
    </table>
							
							<input type="submit" value="Daftar" id="Daftar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="validasi_daftar.js"></script>
