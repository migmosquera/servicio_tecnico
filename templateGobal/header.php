
<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_5">
                    <a href="index.php">
                        <img src="static/img/LOGO STLA21PRUEBA2.png" alt="logo" class="logo-image">
                        <!--<div class="logo-box">
                            <h1>moblo</h1>
                            <div class="slogan">Cellular Repair Center</div>
                        </div>-->

                    </a>
                </div>
                <div class="grid_7">
                    <nav>
                        <ul class="sf-menu">
                           
                            
                            <li <?php if (substr($_SERVER['PHP_SELF'], 14) == 'index.php' ){ ?> class="current" <?php }?>><a href="index.php"><?php echo $home_navbar ?></a></li>
                            <li ><a href="index-1.html">Services</a>
                                <ul class="nav-arrow-1">
                                    <li><a href="#">Dolore ipsu</a></li>
                                    <li><a href="#">Consecte</a>
                                        <ul class="nav-arrow-2">
                                            <li><a href="#">Dolore ipsu</a></li>
                                            <li><a href="#">Consecte</a></li>
                                            <li><a href="#">Elit Conseq</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Elit Conseq</a></li>
                                </ul>
                            </li>
                            <li  <?php if (substr($_SERVER['PHP_SELF'], 14) == 'services.php' ){ ?> class="current" <?php }?>><a href="services.php">Iphone Repair</a></li>
                            <li><a href="index-3.html">Blog</a></li>
                            <li><a href="index-4.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

