<div id="main_container">		
    <ul id="activity_list">
        <?php if ($items): $i = 1; foreach ($items as $item): ?>
            <!-- begin conditional content -->
            <li class="item <?php echo $item->get_feed_class()?> <?php if ($i % 4 == 0): ?> last<?php endif; ?>">
            	<p class="site_info" style="background: transparent url(<?php echo $item->get_feed_icon()?>) 0 center no-repeat"><a href="<?php echo $this->config->item('base_url')?>items/site/<?php echo $item->get_feed_domain()?>"><?php echo $item->get_feed_title()?></a></p>
            	<div class="item_inner">
            	
            	<!-- domain-specific boxes -->
            	
            	<?php if ($item->get_feed_domain() == 'opensourcefood.com'): ?>
	            <div class="osf_fold"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"></a></div>
            	<img src="<?php echo $item->get_image()?>" alt="" />
            	<p class="osf_recipe"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"><?php echo $item->get_title()?></a><span><?php echo word_limiter(strip_tags($item->get_content()), 28)?></span></p>
            	
            	<?php elseif ($item->get_feed_domain() == 'twitter.com'): ?>
            	<p class="twitter_user"><a href="<?php echo $this->config->item('base_url')?>items/site/<?php echo $item->get_feed_domain()?>"><img src="http://s3.amazonaws.com/twitter_production/profile_images/56958143/profile_bigger.jpg" alt="" /></a></p>
            	<p class="twitter_tweet"><?php echo $item->get_title()?></p>
            	
            	<?php elseif ($item->get_feed_domain() == 'vimeo.com'): ?>
            	<?php echo $item->get_video()?>
            	<p class="vimeo_title"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"><?php echo $item->get_title()?></a></p>
            	
            	<?php elseif ($item->get_feed_domain() == 'youtube.com'): ?>
            	<?php echo $item->get_video()?>
            	<p class="youtube_title"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"><?php echo $item->get_title()?></a></p>
            	<p><?php echo word_limiter(strip_tags($item->get_content()), 8)?></p>
            	
            	<?php elseif ($item->get_feed_domain() == 'digg.com'): ?>
            	<div class="inner_container">
            	<p class="digg_title"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"><?php echo $item->get_title()?></a></p>
            	<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
            	</div>
            	           	
            	<?php elseif ($item->get_feed_domain() == 'flickr.com'): ?>
				<p class="activity_image_text"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"><?php echo $item->get_title()?></a><span class="activity_image_content"></span></p>
				<a class="activity_image" href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>" style="background: url(<?php echo $item->item_data[$item->get_feed_class()]['image']['m']?>) center center no-repeat"></a>

				<?php elseif($item->get_feed_domain() == 'delicious.com'): ?>
				<div class="inner_container">
					<p><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title(); ?></a></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'friendfeed.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_permalink()?>"><?php echo $item->get_title()?></a></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'blog.mcstudios.net'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'google.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'librarything.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'pandora.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'dopplr.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'rss.netflix.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo substr($item->get_title(), 5); ?></a><br/><img src="<?php echo $item->get_image()?>" alt=""/></p>
					<p><?php echo word_limiter(strip_tags($item->get_content()), 38)?></p>
					<p><?php print_r($item); ?></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'brightkite.com'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
				</div>
				
				<?php elseif($item->get_feed_domain() == 'last.fm'): ?>
				<div class="inner_container">
					<p class="blog_title"><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_title()?></a></p>
				</div>

            	<?php elseif (!$item->feed_id): //this means it came from Sweetcron itself ?>
            	<div class="inner_container">
            	<p class="blog_title"><a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>"><?php echo $item->get_title()?></a></p>
            	<p class="blog_cite">A blog post</p>
            	</div>

            	<?php else: //generic container with instructions ?>
            	<div class="inner_container instructions">
            	<p><strong>The Dark theme does not have a custom style for this domain :: <?php echo $item->get_feed_domain(); ?>.</strong></p>  
            	</div>

            	<?php endif; ?>
            	
            	</div>
            	<p class="date"><?php echo $item->get_human_date()?> | <a href="<?php echo $item->get_permalink()?>/<?php echo $item->get_name()?>#disqus_thread">Comments &raquo;</a></p>

            </li>

        <?php $i++; endforeach; endif; ?>
    </ul>
	<div class="clear"></div>
    <p id="pagination"><?php echo $pages?></p>

</div>