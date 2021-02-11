<?php
    require "./localization.php";
?>
<!DOCTYPE html>
<html lang=<?php echo $locale; ?>>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadot Valentin</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="modules/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="modules/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="modules/octicons-2.1.2/octicons/octicons.css">
    <!-- <link rel="stylesheet" href="modules/jquery-ui-1.12.1/jquery-ui.min.css"> -->
    <link rel="stylesheet" href="modules/PhotoSwipe-4.1.1/dist/photoswipe.css">
    <link rel="stylesheet" href="modules/PhotoSwipe-4.1.1/dist/default-skin/default-skin.css">
    <link rel="stylesheet" href="styles/font/EarthOrbiter/styles.css">
    <link rel="stylesheet" href="styles/font/EarthOrbiterDeep3D/styles.css">
    <link rel="stylesheet" href="styles/css/styles.css">
    <link rel="stylesheet" href="styles/css/reset.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="modules/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="modules/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<body>
    <!-- ***Site developed from scratch, using SCMASS and less to structure the page -->
    <div class="l-main-container">
        <!-- header -->
        <header id="header" class="l-header">
            <div class="toggle">
                <span id="toggle-sidebar-left-mobile" class="mega-octicon octicon-three-bars"></span>
            </div>
            <div class="l-author">
                <a href="index.php"><img src="images/avatar.jpg" title="avatar" alt="avatar"><span class="author">Cadot Valentin</span></a>
            </div>
            <nav class="l-main-nav">
                <ul>
                    <li class=""><a href="CV-VC-Ifocop.pdf" target="_blank">CV</a></li>
                    <li class=""><a href="game.php">SpaceWar</a></li>
                </ul>
            </nav>
            <nav class="l-second-nav">
                <ul>
                    <li class="second-nav-block">
                        <span class="mega-octicon octicon-globe"></span>
                        <ul class="second-nav-block-hover">
                            <?php
                                foreach($supported_locales as $l) {
                                	echo "<li><a href=\"?lang=$l\">".explode('_', $l)[0]."</a></li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="second-nav-block">
                        <span class="mega-octicon octicon-mail"></span>
                        <form class="second-nav-block-hover" action="formulaire.php" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <p><?php echo T_('If you want to contact me'); ?></p>
                              <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <label class="sr-only" for="emailInput">Email address</label>
                                    <input type="email" class="form-control" name="emailInput" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                  <label class="sr-only" for="subjectInput">Subject</label>
                                      <input type="subject" class="form-control" name="subjectInput" placeholder="<?php echo T_('Subject'); ?>">
                                  </div>
                          <div class="form-group">
                              <label class="sr-only" for="messageInput">Message</label>
                                <textarea class="form-control" name="messageInput" placeholder="<?php echo T_('Enter your message here'); ?>"></textarea>
                          </div>
                          <button type="submit" class="btn btn-default"><?php echo T_('Submit'); ?></button>
                        </form>
                    </li>
                </ul>
            </nav>
            <div id="l-second-nav-mobile" class="l-second-nav-mobile outright">
                <div class="toggle">
                    <span id="toggle-outright-sidebar-right-mobile" class="mega-octicon octicon-remove-close"></span>
                </div>
                <div class="l-container">
                    <ul>
                        <?php
                            foreach($supported_locales as $l) {
                                echo "<li><a href=\"?lang=$l\">".explode('_', $l)[0]."</a></li>";
                            }
                        ?>
                    <li>
                        <form class="second-nav-block-hover" action="formulaire.php" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <p><?php echo T_('If you want to contact me'); ?></p>
                              <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <label class="sr-only" for="emailInput">Email address</label>
                                    <input type="email" class="form-control" name="emailInput" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                  <label class="sr-only" for="subjectInput">Subject</label>
                                      <input type="subject" class="form-control" name="subjectInput" placeholder="<?php echo T_('Subject'); ?>">
                                  </div>
                          <div class="form-group">
                              <label class="sr-only" for="messageInput">Message</label>
                                <textarea class="form-control" name="messageInput" placeholder="<?php echo T_('Enter your message here'); ?>"></textarea>
                          </div>
                          <button type="submit" class="btn btn-default"><?php echo T_('Submit'); ?></button>
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="toggle">
                <span id="toggle-sidebar-right-mobile" class="mega-octicon octicon-gear"></span>
            </div>
        </header>
        <!-- /header -->
        <div id="sidebar-left-mobile" class="l-sidebar-left-mobile out">
            <div class="toggle">
                <span id="toggle-out-sidebar-left-mobile" class="mega-octicon octicon-remove-close"></span>
            </div>
            <nav class="l-nav">
                <ul>
                    <li>
                        <div class="span-icon">
                            <span class="mega-octicon octicon-octoface"></span>
                            <span class="mega-octicon octicon-primitive-dot"></span>
                        </div>
                        <a id="about-me-mobile" href="#" rel="">
                            <?php echo T_("About me-sidebar-left-mobile"); ?>
                        </a>
                    </li>
                    <li>
                        <div class="span-icon">
                            <span class="mega-octicon octicon-package"></span>
                            <span class="mega-octicon octicon-primitive-dot"></span>
                        </div>
                        <a id="programmation-mobile" href="#programmation" rel="">
                            <?php echo T_("Programing-sidebar-left-mobile"); ?>
                        </a>
                    </li>
                    <li>
                        <div class="span-icon">
                            <span class="mega-octicon octicon-pencil"></span>
                            <span class="mega-octicon octicon-primitive-dot"></span>
                        </div>
                        <a id="infographie-mobile" href="#infographie" rel="">
                            <?php echo T_("Infographics-sidebar-left-mobile"); ?>
                        </a>
                    </li>
                    <li>
                        <div class="span-icon">
                            <span class="mega-octicon octicon-unmute"></span>
                            <span class="mega-octicon octicon-primitive-dot"></span>
                        </div>
                        <a id="musique-mobile" href="#musique" rel="">
                            <?php echo T_("Music-sidebar-left-mobile"); ?>
                        </a>
                    </li>
                    <li>
                        <div class="span-icon">
                            <span class="mega-octicon octicon-mortar-board"></span>
                            <span class="mega-octicon octicon-primitive-dot"></span>
                        </div>
                        <a id="competence-mobile" href="#competence" rel="">
                            <?php echo T_("Skills-sidebar-left-mobile"); ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="sidebar-left-tablet" class="l-sidebar-left-tablet">
            <div class="l-container">
                <nav class="l-nav">
                    <ul>
                        <li>
                            <div class="span-icon">
                                <span class="mega-octicon octicon-octoface"></span>
                            </div>
                            <a id="about-me-tablet" href="#" rel=""><?php echo T_("About me-sidebar-left"); ?>
                            </a>
                        </li>
                        <li>
                            <div class="span-icon">
                                <span class="mega-octicon octicon-package"></span>
                            </div>
                            <a id="programmation-tablet" href="#programmation" rel="">
                                <?php echo T_("Programing_test-sidebar-left"); ?>
                            </a>
                        </li>
                        <li>
                            <div class="span-icon">
                                <span class="mega-octicon octicon-pencil"></span>
                            </div>
                            <a id="infographie-tablet" href="#infographie" rel="">
                                <?php echo T_("Infographics-sidebar-left"); ?>
                            </a>
                        </li>
                        <li>
                            <div class="span-icon">
                                <span class="mega-octicon octicon-unmute"></span>
                            </div>
                            <a id="musique-tablet" href="#musique" rel="">
                                <?php echo T_("Music-sidebar-left"); ?>
                            </a>
                        </li>
                        <li>
                            <div class="span-icon">
                                <span class="mega-octicon octicon-mortar-board"></span>
                            </div>
                                <a id="competence-tablet" href="#competence" rel="">
                                    <?php echo T_("Skills-sidebar-left"); ?>
                                </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="sidebar-left" class="l-sidebar-left">
            <div class="l-container">
                <nav class="l-nav">
                    <ul>
                        <li class="slideTrigger">
                            <div class="span-icon">
                                <span class="mega-octicon octicon-octoface"></span>
                                <span class="mega-octicon octicon-primitive-dot"></span>
                            </div>
                            <a id="about-me" href="#about-me" rel=""><?php echo T_("About me-sidebar-left"); ?>
                            </a>
                        </li>
                        <li class="slideTrigger">
                            <div class="span-icon">
                                <span class="mega-octicon octicon-package"></span>
                                <span class="mega-octicon octicon-chevron-right"></span>
                            </div>
                            <a id="programmation" href="#programmation" rel="">
                                <?php echo T_("Programing_test-sidebar-left"); ?>
                            </a>
                            <ul class="nav-cat-1 slideToggle" style="display: none;">
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Web Development and Integration'); ?></span></li>
                            </ul>
                        </li>
                        <li class="slideTrigger">
                            <div class="span-icon">
                                <span class="mega-octicon octicon-pencil"></span>
                                <span class="mega-octicon octicon-chevron-right"></span>
                            </div>
                            <a id="infographie" href="#infographie" rel="">
                                <?php echo T_("Infographics-sidebar-left"); ?>
                            </a>
                            <ul class="nav-cat-1 slideToggle" style="display: none;">
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Digital painting'); ?></span></li>
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('3D modeling'); ?></span></li>
                            </ul>
                        </li>
                        <li class="slideTrigger">
                            <div class="span-icon">
                                <span class="mega-octicon octicon-unmute"></span>
                                <span class="mega-octicon octicon-chevron-right"></span>
                            </div>
                            <a id="musique" href="#musique" rel="">
                                <?php echo T_("Music-sidebar-left"); ?>
                            </a>
                            <ul class="nav-cat-1 slideToggle" style="display: none;">
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Electric guitar'); ?></span></li>
                            </ul>
                        </li>
                        <li class="slideTrigger">
                            <div class="span-icon">
                                <span class="mega-octicon octicon-mortar-board"></span>
                                <span class="mega-octicon octicon-chevron-right"></span>
                            </div>
                                <a id="competence" href="#competence" rel="">
                                    <?php echo T_("Skills-sidebar-left"); ?>
                                </a>
                            <ul class="nav-cat-1 slideToggle" style="display: none;">
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Front-End development'); ?></span></li>
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Back-End development'); ?></span></li>
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('CMS'); ?></span></li>
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Other language'); ?></span></li>
                                <li><span class="octicon octicon-primitive-dot"></span><span class="nav-cat-1-link"><?php echo T_('Infographics'); ?></span></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <content id="content" class="l-content">
            <!-- about-me content -->
            <div id="scroll-about-me" class="background-content">
                <div id="gradient">
                    <span class="gradient-content">
                        <span class="gradient-content-animation">
                            <span class="mega-octicon octicon-octoface"></span>
                            <?php echo T_("Presentation"); ?>
                        </span>
                    </span>
                </div>
            </div>

            <div class="l-container">
                <section class="l-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="page-header">
                                  <h1><?php echo T_('Welcome !'); ?></h1>
                            </div>
                                  <p>Je suis actuellement en formation professionnelle à l'IFOCOP à Paris XI. Passionné par l'informatique, le developpement web et l'infographie, je souhaite allier ces passions à mon quotidien !</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /about-me content -->
            <!-- programing content -->
            <div id="scroll-programmation" class="background-content">
                <div id="gradient2">
                    <span class="gradient-content">
                        <span class="gradient-content-animation">
                            <span class="mega-octicon octicon-package"></span>
                            <?php echo T_("Programmation"); ?>
                        </span>
                    </span>
                </div>
            </div>

            <div class="l-container">
                <section class="l-section">
                    <div class="container-fluid">
                      <div class="page-header">
                            <h1><?php echo T_('Web Development and Integration'); ?></h1>
                      </div>
                      <div class="row">
                      <div class="col-md-12">
                            <p> SpaceWar: Jeu réalisé entièrement en Javascript en utilisant la balise canvas. Le but est de survivre en tuant un maximum de vaisseaux enemies, pour faire le meilleur score possible.</p>

                            <p>
                                Pas besoin de clavier, le déplacement se fait à la souris.
                            </p>

                            <p>
                                <a class="btn" href="https://github.com/CadotV/CV-Jeu-Ifocop">Voir le code source</a>

                                <a class="btn" href="game.php">Jouer au jeu</a>
                            </p>
                      </div>
                      </div>
                    </div>
                </section>
            </div>
            <!-- /programing content -->
            <!-- infographics content -->
            <div id="scroll-infographie" class="background-content">
                <div id="gradient3">
                    <span class="gradient-content">
                        <span class="gradient-content-animation">
                            <span class="mega-octicon octicon-pencil"></span>
                            <?php echo T_("Infographie"); ?>
                        </span>
                    </span>
                </div>
            </div>

            <div class="l-container">
                <section class="l-section">
                    <div class="container-fluid">
                        <div class="page-header">
                              <h1><?php echo T_('Digital painting with Photoshop / Illustrator'); ?></h1>
                        </div>
                        <div class="gallery demo-gallery" data-pswp-uid="1">
                            <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/template_personnage_final.png" itemprop="contentUrl" data-size="636x740" data-med="images/template_personnage_final.png" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/template_personnage_final.png" title="<?php echo T_('Gnomish'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Gnomish'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/Succube.jpg" itemprop="contentUrl" data-size="997x1200" data-med="images/Succube.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/Succube.jpg" title="<?php echo T_('Succube'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Succube head'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/Gnomette.jpg" itemprop="contentUrl" data-size="900x1200" data-med="images/Gnomette.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/Gnomette.jpg" title="<?php echo T_('Gnomish'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Gnomish version of Valeera in Heartstone'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/dreamstone-template.jpg" itemprop="contentUrl" data-size="800x570" data-med="images/dreamstone-template.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/dreamstone-template.jpg" title="<?php echo T_('Website template'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Template of website made using Photoshop and HTML / CSS'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/Sketch-reference_01.jpg" itemprop="contentUrl" data-size="905x1200" data-med="images/Sketch-reference_01.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/Sketch-reference_01.jpg" title="<?php echo T_('Girl face'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Template of website made using Photoshop and HTML / CSS'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/skeleton-skull_01.jpg" itemprop="contentUrl" data-size="1024x473" data-med="images/skeleton-skull_01.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/skeleton-skull_01.jpg" title="<?php echo T_('Human skull painted with Photoshop'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Digital painting using an Intuos 3 graphic tablet'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/lion-face_01.jpg" itemprop="contentUrl" data-size="1024x482" data-med="images/lion-face_01.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/lion-face_01.jpg" title="<?php echo T_('Lion head painted with Photoshop'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Digital painting using an Intuos 3 graphic tablet'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/logo-dreamstone.png" itemprop="contentUrl" data-size="611x237" data-med="images/logo-dreamstone.png" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/logo-dreamstone.png" title="<?php echo T_('Website logo created using Illustrator and Photoshop'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('DreamStone website Logo made with Illustrator and polished with Photoshop'); ?></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="page-header">
                              <h1><?php echo T_('3D modeling'); ?></h1>
                        </div>
                        <div class="gallery demo-gallery" data-pswp-uid="1">
                            <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/zbrush-head.jpg" itemprop="contentUrl" data-size="542x552" data-med="images/zbrush-head.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/zbrush-head.jpg" title="<?php echo T_('3D orc head'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('3D orc head made with Zbrush'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/sand_normals_diffuse.jpg" itemprop="contentUrl" data-size="512x512" data-med="images/sand_normals_diffuse.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/sand_normals_diffuse.jpg" title="<?php echo T_('Sand mapping'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Diffuse map, 3d made using Zbrush'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/sand_normals_normal.jpg" itemprop="contentUrl" data-size="512x512" data-med="images/sand_normals_normal.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/sand_normals_normal.jpg" title="<?php echo T_('Sand mapping'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Normal map'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/sand_normals_depth.jpg" itemprop="contentUrl" data-size="512x512" data-med="images/sand_normals_depth.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/sand_normals_depth.jpg" title="<?php echo T_('Sand mapping'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Depth map'); ?></figcaption>
                                </figure>
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="images/sand_normals_spec.jpg" itemprop="contentUrl" data-size="512x512" data-med="images/sand_normals_spec.jpg" data-med-size="1024x1024" data-author="Cadot Valentin" class="demo-gallery__img--main">
                                        <img src="images/sand_normals_spec.jpg" title="<?php echo T_('Sand mapping'); ?>" itemprop="thumbnail" data-toggle="tooltip" data-placement="top">
                                    </a>
                                    <figcaption itemprop="caption description"><?php echo T_('Specular map'); ?></figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /infographics content -->
            <!-- musique content -->
            <div id="scroll-musique" class="background-content">
                <div id="gradient4">
                    <span class="gradient-content">
                        <span class="gradient-content-animation">
                            <span class="mega-octicon octicon-unmute"></span>
                            <?php echo T_("Musique"); ?>
                        </span>
                    </span>
                </div>
            </div>

            <div class="l-container">
                <section class="l-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-header">
                                  <h1><?php echo T_('Electric guitar record'); ?></h1>
                            </div>
                            <div class="col-md-8">
                                <p><?php echo T_('Simple electric guitar record using Cubase 5 and an input device Prodipe 2'); ?></p>
                            </div>
                            <div class="col-md-4">
                                <audio controls="controls">
                                    <source src="audios/test_enregistrement.mp3" type="audio/mp3" />
                                    <?php echo T_('Your web browser is not compatible'); ?>
                                </audio>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <!-- /musique content -->
            <!-- competence content -->
            <div id="scroll-competence" class="background-content">
                <div id="gradient5">
                    <span class="gradient-content">
                        <span class="gradient-content-animation">
                            <span class="mega-octicon octicon-mortar-board"></span>
                            <?php echo T_("competences"); ?>
                        </span>
                    </span>
                </div>
            </div>

            <div class="l-container">
                <section class="l-section align-center">
                    <div class="container-fluid">
                        <div class="page-header">
            				<h1><?php echo T_('Front-End development'); ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart chart-frontend" data-percent="85">HTML</div>
                                <div class="chart chart-frontend" data-percent="70">CSS</div>
                                <div class="chart chart-frontend" data-percent="50">JAVASCRIPT</div>
                                <div class="chart chart-frontend" data-percent="45">JQUERY</div>
                                <div class="chart chart-frontend" data-percent="60">LESS</div>
                                <div class="chart chart-frontend" data-percent="40">SASS</div>
                                <div class="chart chart-frontend" data-percent="70">BOOTSTRAP</div>
                            </div>
                        </div>
                        <div class="page-header">
            				<h1><?php echo T_('Back-End development'); ?></h1>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart chart-backend" data-percent="50">PHP</div>
                                <div class="chart chart-backend" data-percent="65">SQL</div>
                                <div class="chart chart-backend" data-percent="70">XML</div>
                                <div class="chart chart-backend" data-percent="70">JSON</div>
                            </div>
                        </div>
                        <div class="page-header">
            				<h1><?php echo T_('CMS'); ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart chart-cms" data-percent="65">WORDPRESS</div>
                                <div class="chart chart-cms" data-percent="65">DRUPAL</div>
                                <div class="chart chart-cms" data-percent="50">PLONE</div>
                            </div>
                        </div>
                        <div class="page-header">
            				<h1><?php echo T_('Other language'); ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart chart-other" data-percent="45">C/C++</div>
                                <div class="chart chart-other" data-percent="50">JAVA</div>
                                <div class="chart chart-other" data-percent="20">PYTHON</div>
                                <div class="chart chart-other" data-percent="30">VB.NET</div>
                            </div>
                        </div>
                        <div class="page-header">
            				<h1><?php echo T_('Infographics'); ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart chart-infographie" data-percent="60">PHOTOSHOP</div>
                                <div class="chart chart-infographie" data-percent="35">ILLUSTRATOR</div>
                                <div class="chart chart-infographie" data-percent="50">INDESIGN</div>
                                <div class="chart chart-infographie" data-percent="30">Zbrush</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        <div class="row">

                        </div>
                        <div class="row">

                        </div>
                    </div>
                </section>
            </div>
            <!-- /competences content -->
        </content>

        <footer id="footer" class="l-footer">
            <div class="l-container">
    			<p>©2020 Cadot Valentin - <?php echo T_('Publication director'); ?></p>
    			<p><a href="mailto:valentin.cadot@gmail.com" target="_blank">Contact</a> | <a href="#" data-toggle="modal" data-target="#myModal">Mentions</a> | <?php echo T_('Site developed from scratch'); ?></p>
            </div>
        </footer>
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader-active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

              </div>

            </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Mentions légales</h4>
          </div>
          <div class="modal-body">

  Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <a href="http://valentincadot.fr">valentincadot.fr</a> sont :

  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Editeur du Site : </b></span></p>
  <ul>
  <li>Nom : Cadot</li>
  <li>Prénom : Valentin</li>
  <li>Adresse : 261 AVENUE DAUMESNIL</li>
  <li>Email : valentin.cadot@gmail.com</li>
  <li>Site Web : <a href="http://valentincadot.fr">valentincadot.fr</a></li>
  </ul>
  </br>
  <p style="color: #b51a00;"><b><span style="color: rgb(0, 0, 0);">Hébergement :</span> </b></p>
  Hébergeur : PHPNET FRANCE
  97-97bis rue Général Mangin, 38100 GRENOBLE
  Site Web :  <a href="http://www.phpnet.org">www.phpnet.org</a>
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Développement</b><b> : </b></span></p>
  Valentin Cadot
  Adresse : 261 AVENUE DAUMESNIL
  Site Web : <a href="http://valentincadot.fr">valentincadot.fr</a>
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Conditions d’utilisation : </b></span></p>
  Ce site (<a href="http://valentincadot.fr">valentincadot.fr</a>) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
  Les mentions légales ont été générées sur le site <a title="générateur de mentions légales pour site internet gratuit" href="http://www.generateur-de-mentions-legales.com">Générateur de mentions légales</a>, offert par <a title="imprimerie paris, imprimeur paris" href="http://welye.com">Welye</a>.

  <span style="color: #323333;">Cadot Valentin<b> </b></span>met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de , et signaler toutes modifications du site qu'il jugerait utile. n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.

  <b>Cookies</b> : Le site <a href="http://valentincadot.fr">valentincadot.fr</a> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.

  <b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. Cadot Valentin ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.

  Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de Cadot Valentin.

  Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de Cadot Valentin, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. Cadot Valentin se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Services fournis : </b></span></p>
  <p style="color: #323333;">L'ensemble des activités ainsi que ses informations sont présentés sur notre site <a href="http://valentincadot.fr">valentincadot.fr</a>.</p>
  <p style="color: #323333;">Cadot Valentin s’efforce de fournir sur le site valentincadot.fr des informations aussi précises que possible. les renseignements figurant sur le site <a href="http://valentincadot.fr">valentincadot.fr</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site valentincadot.fr<span style="color: #000000;"><b> </b></span>sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.  </p>
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Limitation contractuelles sur les données : </b></span></p>
  Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse valentin.cadot@gmail.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).

  Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. <span style="color: #323333;">De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</span>

  Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de Cadot Valentin.
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Propriété intellectuelle :</b></span></p>
  Tout le contenu du présent sur le site <a href="http://valentincadot.fr">valentincadot.fr</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la Cadot Valentin à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.

  Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de Cadot Valentin. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Déclaration à la CNIL : </b></span></p>
  Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, ce site n'a pas fait l'objet d'une déclaration  auprès de la Commission nationale de l'informatique et des libertés (<a href="http://www.cnil.fr/">www.cnil.fr</a>).
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Litiges : </b></span></p>
  Les présentes conditions du site <a href="http://valentincadot.fr">valentincadot.fr</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux. La langue de référence, pour le règlement de contentieux éventuels, est le français.
  </br>
  <p style="color: #b51a00;"><span style="color: rgb(0, 0, 0);"><b>Données personnelles :</b></span></p>
  De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <a href="http://valentincadot.fr">valentincadot.fr</a>.

  Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activités, ou de recevoir les lettres d’information.

  Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
<script type="text/javascript" src="modules/PhotoSwipe-4.1.1/dist/photoswipe.min.js"></script>
<script type="text/javascript" src="modules/PhotoSwipe-4.1.1/dist/photoswipe-ui-default.min.js"></script>
<script src='http://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js'></script>
<script type="text/javascript" src="scripts/index.js"></script>
</html>
