<header class="header">
    <div class="header__content row">

        <div class="header__logo">
            <a class="logo" href="index.php">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div> <!-- end header__logo -->

        <ul class="header__social">
            <li>
                <a href="https://www.facebook.com/london.bo.52"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/mohammed-jamal-2aaba8203/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li>
            <?php if(True){
                        echo "<li><a href=\"login.php\">Login</a></li>";
                    }
                    else echo "<li><a href=\"logout.php\">Logout</a></li>"
                ?>

        </ul> <!-- end header__social -->

        <a class="header__search-trigger" href="#0"></a>

        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

        </div>  <!-- end header__search -->


        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Site Navigation</h2>

            <ul class="header__nav">
                <li class="current"><a href="index.php" title="">Home</a></li>
                <li class="has-children">
                    <a href="#0" title="">Categories</a>
                    <ul class="sub-menu">
                    @foreach ( $cats as $cat )
                    <li><a href="?cat={{ $cat->id }}">{{ $cat->name }}</a></li>
                    @endforeach
                    </ul>
                </li>
                <!--<li class="has-children">
                    <a href="#0" title="">Blog</a>
                    <ul class="sub-menu">
                    <li><a href="single-video.html">Video Post</a></li>
                    <li><a href="single-audio.html">Audio Post</a></li>
                    <li><a href="single-gallery.html">Gallery Post</a></li>
                    <li><a href="single-standard.html">Standard Post</a></li>
                    </ul>
                </li>
                <li><a href="style-guide.html" title="">Styles</a></li>-->
                <li><a href="about.html" title="">About</a></li>
                <li><a href="contact.html" title="">Contact</a></li>
                <?php if(True){
                    echo '<li><a href="../article_sub.php" title="">Create an article</a></li>';
                }
                ?>
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
        </nav> <!-- end header__nav-wrap -->
    </div> <!-- header-content -->
</header> <!-- header -->