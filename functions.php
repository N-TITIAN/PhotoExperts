<?php
include_once "dbconfig.php";

function displayGalleryItem($row)
{
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
            <img src="<?php echo $row['photo_path']; ?>" class="img-fluid" alt="<?php echo $row['photo_name']; ?>">
            <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="<?php echo $row['photo_path']; ?>" title="Gallery 1" class="glightbox preview-link"><i
                        class="bi bi-arrows-angle-expand"></i></a>
              
                 <a href="gallery-single.php?project_id=<?php echo $row['project_id'];?>" class="details-link"
                        id="gallerySingle-<?php echo $row['project_id']; ?>" type="button"><i class="bi bi-link-45deg"></i></a>
                        <a href="<?php echo $row['photo_path']; ?>" download="<?php echo $row['photo_name']; ?>" class="details-link" title="Download Image"><i
                                class="bi bi-download"></i></a>
            </div>

        </div>

    </div>
    <?php
   
}
function custom_header($menuOption, $dropdownOption = '')
{
    ?>
        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <i class="bi bi-camera"></i>
                    <h1>PhotoExperts</h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <?php
                        $options = array("Home", "About", "Gallery", "Contact", "Services", "Sign-in");
                        foreach ($options as $option) {
                            if ($menuOption == $option && $option != "Gallery") {
                                 if($menuOption == $option && $option == "Home"){
                                    ?>
                                     <li><a href="index.php" class="active"><?php echo $option; ?></a></li>
                                    <?php
                                }

                                elseif ($menuOption == $option && $option != "Home") {
                                    ?>
                                            <li><a href="<?php echo strtolower($option); ?>.php" class="active"><?php echo $option; ?></a></li>
                                <?php } 
                                
                               
                                ?>
                                   
                                <?php } 
                                
                            elseif ($menuOption == $option && $option == "Gallery") { ?>
                                        <li class="dropdown">
                                            <a href="gallery.php"><span><?php echo $option; ?></span> <i
                                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                            <ul>
                                                <?php
                                                $dropdownOptions = array("Nature", "People", "Architecture", "Animals", "Sports", "Travel");
                                                foreach ($dropdownOptions as $dropdownItem) {
                                                    ?>
                                                        <li><a href="gallery.php"><?php echo $dropdownItem; ?></a></li>
                                                <?php } ?>
                                                <li class="dropdown">
                                                    <a href="#"><span>Sub Menu</span> <i
                                                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                                                    <ul>
                                                        <li><a href="#">Sub Menu 1</a></li>
                                                        <li><a href="#">Sub Menu 2</a></li>
                                                        <li><a href="#">Sub Menu 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                <?php } else { ?>
                                        <li><a href="<?php echo strtolower($option); ?>.php"><?php echo $option; ?></a></li>
                                <?php }
                        }
                        ?>
                    </ul>
                </nav><!-- .navbar -->

                <div class="header-social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->
        <?php
}
?>
