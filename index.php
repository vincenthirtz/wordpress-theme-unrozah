<?php get_header(); ?>

<div class="content">
<div class="wrapper">
	<div class="articles">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<p class="postmetadata"><?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?></p>
				
			
					<?php the_content(); ?>
			
		</article>
<?php endwhile; ?>


</div> 
<?php get_sidebar();?>
            </div>

<div class="navigation">
<?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?>
</div>
<?php else : ?>
<h2>Oooopppsss...</h2>
<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>

</div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
</body>
</html>