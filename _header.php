<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
	
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta name="description" content="" />
		<title><?php echo $this->config->item('lifestream_title')?></title>
		<link rel="stylesheet" href="<?php echo $this->config->item('base_url')?>public/css/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->config->item('theme_folder')?>main.css" type="text/css" media="screen" />
		<?php if ($page_type == 'index' || !$page_type): ?>
		<link rel="alternate" type="application/rss+xml" title="Full RSS Feed" href="<?php echo $this->config->item('base_url')?>feed" />
		<?php else: ?>
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php echo $this->config->item('base_url')?>feed/<?php echo $page_type?>/<?php echo $page_query?>" />
		<?php endif; ?>

		<?php if (!$page_type): ?>
		<link rel="stylesheet" href="<?php echo $this->config->item('theme_folder')?>scripts/code.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo $this->config->item('theme_folder')?>scripts/highlight.js"></script>
		<script type="text/javascript">
        initHighlightingOnLoad('html', 'css', 'php', 'javascript');
        </script>
		<?php endif; ?>
	</head>
	
	<body id="sweetcron">
	<div id="header">
		
		<div id="top-panel">
			<div class="welcomeholder">
				<div class="textholder">
					<p>It's hard to find pictures of yourself when you're always behind the camera</p>
					<p><img src="<?php echo $this->config->item('theme_folder')?>images/me.jpg" alt="mark philpot"/></p>
				</div> <!--/textholder-->
				<div class="picholder">
					<h2>resume</h2>
					<ul>
						<li>updated -- coming soon</li>
						<li><img src="<?php echo $this->config->item('theme_folder')?>images/icons/pdf.png" title="download pdf" alt="pdf"/>
						    <img src="<?php echo $this->config->item('theme_folder')?>images/icons/tex.png" title="download tex" alt="tex"/>
						    <img src="<?php echo $this->config->item('theme_folder')?>images/icons/txt.png" title="download tex" alt="text"/></li>
					</ul>
					<h2>my sites</h2>
					<ul>
						<li><a href="http://www.mcstudios.net">www.mcstudios.net</a></li>
						<li><a href="http://www.dukeband.org">www.dukeband.org</a></li>
						<li><a href="http://blog.mcstudios.net">blog.mcstudios.net</a></li>
					</ul>
					<h2>contact</h2>
					<ul>
						<li><p><span>first.last@gmail.com</span></p></li>
					</ul>
					<div class="credentials">
						<h2>services</h2>
						<ul>
							<li>
								<img src="<?php echo $this->config->item('theme_folder')?>images/services/twitter.gif" alt=""/> Twitter<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/blog.png" alt=""/> MC Studios Blog<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/googlereader.png" alt=""/> Google Reader Shared Items<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/goodreads.png" alt=""/> Goodreads<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/pandora.png" alt=""/> Pandora<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/youtube.png" alt=""/> Youtube (Uploads/Favorites)<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/friendfeed.png" alt=""/> FriendFeed (Posts/Comments)<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/netflix.png" alt=""/> Netflix Queues<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/lastfm.png" alt=""/> Last.fm Now Playing<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/delicious.png" alt=""/> Delicious Bookmarks<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/flickr.png" alt=""/> Flickr Uploads<br/>
							    <img src="<?php echo $this->config->item('theme_folder')?>images/services/brightkite.png" alt=""/> Brightkite (Location)<br/>
							    <img src="http://www.dopplr.com/favicon.ico" alt=""/> Dopplr (Trips)<br/>
							</li>
						</ul>
					</div> <!--/credentials-->
				</div> <!--/picholder-->
			</div> <!--/welcomeholder-->
		</div> <!--/top-panel-->
		
		<div id="sub-panel"><a href="#" id="toggle" title="about me"><span>about me</span></a></div>
	
		<div class="center_box">
		
			<!-- Insert banner image here (position: absolute) -->
			
			<ul id="navigation">
				<li<?php if (!$this->uri->segment(1) || $this->uri->segment(1) == 'page'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->config->item('base_url')?>" title="Lifestream"><img src="http://www.markphilpot.net/favicon.ico" alt="Lifestream"/></a></li>
			<?php $feeds = $this->feed_model->get_active_feeds(); $displayed_netflix = false; $displayed_youtube = false; foreach ($feeds as $feed): if($feed->feed_status == 'active'): if(($feed->feed_domain != 'rss.netflix.com' || !$displayed_netflix) && ($feed->feed_domain != 'youtube.com' || !$displayed_youtube)) :?>
				<li <?php if($this->uri->segment(3) == $feed->feed_domain) echo "class='current'"; ?>><a href="<?php echo $this->config->item('base_url')?>items/site/<?php echo $feed->feed_domain?>" title="<?php echo $feed->feed_title?>">
				<?php 
					// Custom titles
					if($feed->feed_domain == 'twitter.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/twitter.gif' alt='Twitter'/>";
					elseif($feed->feed_domain == 'blog.mcstudios.net')
						echo "<img src='".$this->config->item('theme_folder')."images/services/blog.png' alt='Blog'/>";
					elseif($feed->feed_domain == 'google.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/googlereader.png' alt='Google Reader'/>";
					elseif($feed->feed_domain == 'goodreads.com')
						echo "<img src='http://www.goodreads.com/favicon.ico' alt='Goodreads'/>";
					elseif($feed->feed_domain == 'pandora.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/pandora.png' alt='Pandora'/>";
					elseif($feed->feed_domain == 'youtube.com')
					{
						echo "<img src='".$this->config->item('theme_folder')."images/services/youtube.png' alt='Youtube'/>"; $displayed_youtube = true;
					}
					elseif($feed->feed_domain == 'friendfeed.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/friendfeed.png' alt='FriendFeed'/>";
					elseif($feed->feed_domain == 'rss.netflix.com')
					{
						echo "<img src='".$this->config->item('theme_folder')."images/services/netflix.png' alt='Netflix'/>"; $displayed_netflix = true;
					}
					elseif($feed->feed_domain == 'last.fm')
						echo "<img src='".$this->config->item('theme_folder')."images/services/lastfm.png' alt='Last.fm'/>";
					elseif($feed->feed_domain == 'dopplr.com')
						echo "<img src='http://www.dopplr.com/favicon.ico' alt='Dopplr'/>";
					elseif($feed->feed_domain == 'delicious.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/delicious.png' alt='Delicious'/>";
					elseif($feed->feed_domain == 'flickr.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/flickr.png' alt='Delicious'/>";
					elseif($feed->feed_domain == 'facebook.com')
						echo "<img src='http://www.facebook.com/favicon.ico' alt='Facebook'/>";
					elseif($feed->feed_domain == 'brightkite.com')
						echo "<img src='".$this->config->item('theme_folder')."images/services/brightkite.png' alt='Brightkite'/>";
					else
						echo $feed->feed_domain;
				?>
				</a></li>
			<?php endif; endif; endforeach; ?>
			</ul>
			
			<h1><a href="<?php echo $this->config->item('base_url')?>"><?php echo $this->config->item('lifestream_title')?></a></h1>
		</div> <!--/center_box-->
	</div> <!--/header-->
	
	<div class="center_box">
