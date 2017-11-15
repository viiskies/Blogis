
<!-- <?php print_r($data); ?> -->
<!DOCTYPE HTML>
<!--
    Striped by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title><?= $data['post']['title'] . " | " . CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/main.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/myStyle.css">
</head>
<body>

    <!-- Content -->
    <div id="content">
        <div class="inner">

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>

                    <h2><a href="#"><?= $data['page']['title']; ?></a></h2>
                    <!--                                 <p>A free, fully responsive HTML5 site template by HTML5 UP</p> -->
                </header>

                <!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a> -->
                <p><?= $data['page']['body']; ?></p>
            </article>


        </div>
    </div>

    <!-- Sidebar -->

    <div id="sidebar">
        <!-- Logo -->
        <h1 id="logo"><a href="/<?= CONFIG['site_path']; ?>"><?= CONFIG['site_title']; ?></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <?php uframe\Menu::show(); ?>
            </ul>
        </nav>

        <!-- Search -->
        <section class="box search">
            <form method="post" action="#">
                <input type="text" class="text" name="search" placeholder="Search" />
            </form>
        </section>

        <?php 
        foreach ($data['ads'] as $ad) {
            ?>

            <section class="text-style1">
                <div class="inner ad">
                    <p>
                        <a href="<?= $ad['link']; ?>"><strong><?= $ad['title']; ?></strong></a>
                    </p>
                </div>
            </section>
            <?php
        } ?>


        <!-- Copyright -->
        <ul id="copyright">
            <li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>

    </div>

    <!-- Scripts -->
    <script src="/<?= CONFIG['site_path']; ?>/assets/js/jquery.min.js"></script>
    <script src="/<?= CONFIG['site_path']; ?>/assets/js/skel.min.js"></script>
    <script src="/<?= CONFIG['site_path']; ?>/assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="/<?= CONFIG['site_path']; ?>/assets/js/main.js"></script>

</body>
</html>