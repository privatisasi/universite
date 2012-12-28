<div class="row content">
	<div class="span12" id="grid">
		
		<!-- greetings -->
		<div class="item">
			<div class="list-wrapper">
				<p class="lead">Selamat Datang <?php echo $user->nama_mahasiswa ?> </p>
				<hr/>
				<p>berikut ini ringkasan kegiatan anda minggu ini :</p>
				<table class="table">
					<tr>
						<td class="bold">badge</td>
						<td>
							<span class="badge">seeker</span>
							<span class="badge">mandrake</span>
						</td>
					</tr>
					<tr>
						<td class="bold">reminder</td>
						<td class="reminder">
							<li><span class="label label-warning">1</span> <b>pengumpulan</b> tugas kelas pemrograman web ...</li>
							<li><span class="label label-info">2</span> <b>[finansial]</b> DPP tahap 3</li>
							<li><span class="label label-info">3</span> <b>[seminar]</b> Cloud Computing</li>
						</td>
					</tr>
				</table>

			</div>
		</div>

		<!-- Portfolio -->
		<div class="item">
			<div class="title">
				<h3>Portfolio</h3>
			</div>
			<div class="list-wrapper">
				<div class="port-showcase">
					<h4>Sistem Informasi Akademik</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. <a href="#" class="">__ ... __</a></p>		
				</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Style.IO</td>
						</tr>
						<tr>
							<td>Akademisi</td>
						</tr>
					</tbody>
				</table>
				
				<a href="#" class="label label-info">selengkapnya</a>
			</div>
		</div>


		<!-- Task -->
		<div class="item">
			<div class="title">
				<h3>Task</h3>
			</div>
			<div class="list-wrapper">
				<table class="table">
					<thead>
						<tr>
							<th>Matakuliah</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Pemrograman Web</td>
							<td>Resume tentang web API</td>
						</tr>
						<tr>
							<td>Keamanan Jaringan</td>
							<td>Cari jurnal tentang security policy</td>
						</tr>
					</tbody>
				</table>
					<a href="#" class="label label-info">read more</a>
			</div>
		</div>

		<!-- status -->
		<div class="item">
			<div class="title">
				<h3>Status</h3>
			</div>
			<div class="list-wrapper">
				<table class="table">
					<thead>
						<tr>
							<th>Tanggal</th>
							<th>Keterangan</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>2012-12-12</td>
							<td>Submisi Proposal PKN</td>
							<td>ok</td>
						</tr>
						<tr>
							<td>2012-12-11</td>
							<td>Tandatangan proposal IT Battle</td>
							<td>ok</td>
						</tr>
					</tbody>
				</table>
				<a href="#" class="label label-info">read more</a>
			</div>
		</div>

		<!-- News -->
		<div class="item">
			<div class="list-wrapper">
				<p class="lead">Berita Universitas</p>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>2012-12-12</td>
							<td><b>Beasiswa Djarum 2012</b></td>
						</tr>
						<tr>
							<td>2012-12-11</td>
							<td>Erasmus Mundus periode 3</td>
						</tr>
						<tr>
							<td>2012-12-07</td>
							<td>Rumah Sakit UMM Siap Untuk Beroperasi</td>
						</tr>
						<tr>
							<td>2012-12-05</td>
							<td>Wisuda Periode 4 tahun 2012</td>
						</tr>
					</tbody>
				</table>
				<div class="">
					<a href="#" class="label label-info">read more</a>
				</div>
			</div>
		</div>

		<!-- badge -->
		<div class="item">
			<div class="title">
				<h3>Reputation</h3>
			</div>
			<div class="list-wrapper">
				<hr/>
				<span class="badge">pesmaba</span>
				<span class="badge">ahad_study</span>
				<span class="badge">p2kk</span>
				<span class="badge">readers</span>
				<span class="badge">aktivis</span>
				<span class="badge">lab</span>
				<span class="badge">asisten</span>
				<span class="badge">seeker</span>
				<span class="badge">mandrake</span>
				<hr/>
				<div class="">
					<a href="#" class="label label-info">more detail</a>
				</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	$("#grid").gridalicious({
		width:370,
		gutter:20,
	});
</script>