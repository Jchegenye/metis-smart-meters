<?php foreach($lastSeen as $key => $value) { ?>
<div class="row <?php echo "mt-4"; ?>">
    <div class="col-md-4">
        <img src="<?php echo $value->img_url; ?>" class="img-fluid img-rounded h-100 w-100" alt="diamond">
    </div>
    <div class="col-md-8">
        <a href="single-blog.php?slug=<?php echo $value->id; ?>&title=<?php echo $value->title; ?>">
            <h6 class="color-light-blue"><?php echo $value->title; ?></h6>
        </a>
        <p>
            <?php echo $value->date; ?>
        </p>
    </div>
</div>
<?php } ?>