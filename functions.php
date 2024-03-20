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
                <a href="gallery-single.php" class="details-link" id="gallerySingle-<?php echo $row["project_id"];?>"><i class="bi bi-link-45deg"></i></a>
            </div>
        </div>

    </div>
<?php
}
?>
