<?php
include_once('../wp-load.php'); ?>

<?php include 'Tags/head-tag.php'; ?>
<?php wp_reset_postdata(); ?>
<?php
$args = array(
    'post_type' => 'card',
    'posts_per_page' => '1',
    'post_status' => 'publish',
    'p' => 13
);
    
$the_query = new WP_Query($args);

?>

<?php
if ( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ):
    $the_query->the_post(); 
    
    $image_id = get_post_thumbnail_id ();
    $image_url = wp_get_attachment_image_src ($image_id, true);
    $catch = get_field('catch');
    $campaign = get_field('campaign-descript'); 
    $url = get_field('url');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php the_title(); ?>公式サイト</title>
<link rel="stylesheet" href="./css/style.css?<?php the_time(); ?>">

</head>

<body>

    <?php include 'Tags/body-tag.php'; ?>

    <meta http-equiv="refresh" content="1; URL=https://re-roots.net/link.php?i=pgn7whvhbmzv&m=mglyzkhr1q9g">

    <div class="re__wrap">
        <h2><?php the_title(); ?></h2>
        <img src="<?php echo $image_url[0]; ?>" alt="">

        <div class="catch__wrap">
                <?php echo $catch ; ?>
        </div>

        <?php if(!empty($campaign)) : ?>
        <div class="campaign__wrap">
            <span class="campaign__title">キャンペーン情報</span>
            <ul class="campaign__descript">
                <?php echo $campaign; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>

</body>
<?php endwhile; endif; wp_reset_query(); ?>

</html>