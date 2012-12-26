<div class="row content">

	<div class="span2">
		<nav class="nav list-wrapper">
			<li>Welcome <?php echo $user->nama_mahasiswa ?></li>
			<hr/>
			<li><a href="#"><i class="icon-home"></i> dashboard</a></li>
			<li><a href="#"><i class="icon-random"></i> finance</a></li>
			<li><a href="#"><i class="icon-list"></i> portfolio</a></li>
			<li><a href="#"><i class="icon-star"></i> nilai</a></li>
			<hr/>
			<li><a href="#"><i class="icon-envelope"></i> message (1)</a></li>
			<li><a href="#"><i class="icon-envelope"></i> task (4)</a></li>
		</nav>
	</div>

	<div class="span10">
		<div class="row">
			<!-- Profile -->
			<div class="span5 item">
				<div class="title">
					<h3>Profile</h3>
				</div>
				<div class="list-wrapper">
					<p class="lead">
						<?php echo $user->nama_mahasiswa ?><br/>
						<span class="label"><?php echo $user->nim ?></span>
						<span class="label"><?php echo $user->email ?></span>
					</p>
					
					<hr/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<!-- Task -->
			<div class="span5 item">
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
								<td>Pemrograman Web</td>
								<td>Resume tentang web API</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>

</div>

<script type="text/javascript">
	$("#grid").gridalicious({
		width:470,
		gutter:40,
		animate: true,
	});
</script>