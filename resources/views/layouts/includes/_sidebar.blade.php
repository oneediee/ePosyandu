<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/babies" class="active"><i class="lnr lnr-heart"></i> <span>Data Balita</span></a></li>
						@if(auth()->user()->role == 'superadmin')
						<li><a href="/mothers" class="active"><i class="lnr lnr-user"></i> <span>Data Orang Tua</span></a></li>
						<li><a href="/admins" class="active"><i class="lnr lnr-user"></i> <span>Data Kader</span></a></li>
						<li><a href="/users" class="active"><i class="lnr lnr-user"></i> <span>Data Akun</span></a></li>
						@endif
						<li><a href="/immunizations" class="active"><i class="lnr lnr-pencil"></i> <span>Data Imunisasi</span></a></li>
						<li><a href="/schedules" class="active"><i class="fa fa-calendar"></i> <span>Jadwal Imunisasi</span></a></li>
					</ul>
				</nav>
			</div>
		</div>