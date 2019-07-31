 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?=base_url();?>home">INFOKAMPUS</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li <?php if($title=='Beranda'){echo "class='nav-item active'";}else echo "class='nav-item'";?>><a href="<?=base_url();?>home" class="nav-link">Beranda</a></li>
	          <li <?php if($title=='Lomba'){echo "class='nav-item active'";}else echo "class='nav-item'";?>><a href="<?=base_url();?>lomba" class="nav-link">Lomba</a></li>
	          <li <?php if($title=='Beasiswa'){echo "class='nav-item active'";}else echo "class='nav-item'";?>><a href="<?=base_url();?>beasiswa" class="nav-link">Beasiswa</a></li>
	          <li <?php if($title=='Events'){echo "class='nav-item active'";}else echo "class='nav-item'";?>><a class="nav-link" href="<?=base_url();?>events">Events</a></li>
	          <li <?php if($title=='Kerjasama'){echo "class='nav-item active'";}else echo "class='nav-item'";?>><a href="<?=base_url();?>kerjasama" class="nav-link">Kerjasama</a></li>
	          <li <?php if($title=='Kontak'){echo "class='nav-item active'";}else echo "class='nav-item'";?>><a href="<?=base_url();?>kontak" class="nav-link">Kontak</a></li>
	          <li class="nav-item cta"><a href="<?=base_url();?>auth" class="nav-link"><span>Upload Lomba</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->	