<?php
	get_header();
	$posts = fes_home_child_posts();
?>
    <div class="container" id="main-content">
        <div class="row">
            <div class="col-sm-12">
                <h1>Фундация Едно Сърце</h1>
            </div>
        </div>
        <?php foreach ($posts as $post): ?>
            <div class="row home-section" id="post-<?php $post->ID; ?>">
                <div class="col-sm-12">
                    <h2><?php echo $post->post_title; ?></h2>
                    <div class="post-content">
                        <?php if (has_post_thumbnail($post)): ?>
                            <div class="float-right col-sm-12 col-md-7 col-lg-6">
	                            <?php
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                                ?>
                                <img src="<?php echo $image[0]; ?>" alt="featured image" class="img-fluid post-img" />
                            </div>
                        <?php endif; ?>
                        <div class="col-sm-12 col-md-5 col-lg-6">
	                        <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
	get_footer();
