<?php /* Start loop */ ?>
<?php $about = new WP_Query('page_id=9'); ?>
<?php $sponsors = new WP_Query('page_id=14'); ?>
<?php $results = new WP_Query('page_id=27'); ?>
<?php $news = new WP_Query('page_id=54'); ?>

<?php while (have_posts()) : the_post(); ?>
	<div id="intro" class="slide">
  	<div class="story">
  		<h1 class="the-title"><?php the_title();?></h1>
  		<div class="the-content"><?php the_content();?></div>
		</div>
	</div>
	<div id="between" class="slide">
  	<div class="story">
  		<h1 class="the-title"><?php the_title();?></h1>
  		<div class="the-content"><blockquote>"Nothing you do for a child is ever wasted."<small>Garrison Keillor</small></blockquote></div>
		</div>
	</div>

	<div id="about" class="slide">
  	<div class="story">
		  <?php
    		if ($about->have_posts()) :
    		  while ($about->have_posts()) : $about->the_post();?>
    		  <h1 class="the-title animate-in" data-animation="space-in"><?php the_title();?></h1>
    		  <div class="the-content">
    		  <?php echo the_content();
      		endwhile;
    		endif; ?>
    		</div>
    </div><div class="stars1"></div><div class="stars2"></div><div class="stars3"></div><div class="stars4"></div><div class="stars5"></div><div class="stars6"></div>
  </div>

	<div id="sponsors" class="slide">
  	<div class="story">
		  <?php
    		if ($sponsors->have_posts()) :
    		  while ($sponsors->have_posts()) : $sponsors->the_post();?>
    		  <h1 class="the-title animate-in" data-animation="space-in"><?php the_title();?></h1>
    		  <div class="the-content animate-in" data-animation="fade-in">
    		  <?php echo the_content();
    		  endwhile;
    		endif; ?>
  		</div>
  </div>
  </div>

	<div id="results" class="slide">
  	<div class="story">
		  <?php
    		if ($results->have_posts()) :
    		  while ($results->have_posts()) : $results->the_post();?>
    		  <h1 class="the-title animate-in" data-animation="space-in"><?php the_title();?></h1>
    		  <div class="the-content animate-in" data-animation="fade-in">
    		  <?php echo the_content();
    		  endwhile;
    		  endif; ?>
  		</div>
  </div>
  </div>
<?php endwhile; /* End loop */ ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/main.js"></script>