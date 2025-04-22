<!-- Header -->
<header id="header">
    <a href="<?= home_url() ?>" class="title">Semmson</a>

    <?php 
        wp_nav_menu([
            "theme_location" => "main-menu-hyperspace",
            "container" => "nav"
        ]);
    ?>
<!-- 
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html" class="active">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>
     -->
</header>