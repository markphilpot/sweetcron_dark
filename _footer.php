</div>
<div id="footer">
<p id="copyright">Copyleft <?php echo date('Y');?>.  Some Rights Reserved.  Powered by Sweetcron v<?php echo $this->config->item('sweetcron_version')?></p>
</div> <!--/footer-->

<!--Moo Stuff -->
<script type="text/javascript" src="<?php echo $this->config->item('theme_folder')?>js/mootools-1.2.1-core-yc.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('theme_folder')?>js/mootools-1.2-more.js"></script>

<script type="text/javascript">window.addEvent('domready', function(){ new SmoothScroll({duration: 1000}); });</script>
	

<!--SlidePanel-->
<script type="text/javascript">
	window.addEvent('domready', function(){
		var mySlide = new Fx.Slide('top-panel');
		mySlide.hide(); 
	
		$('top-panel').setStyle('display', 'block');
		$('sub-panel').setStyle('display', 'block');
	
		$('toggle').addEvent('click', function(e){
		e = new Event(e);
		mySlide.toggle();
		e.stop();
		
		});
	});
</script>

<script type="text/javascript">
//<![CDATA[
(function() {
		var links = document.getElementsByTagName('a');
		var query = '?';
		for(var i = 0; i < links.length; i++) {
			if(links[i].href.indexOf('#disqus_thread') >= 0) {
				query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
			}
		}
		document.write('<script type="text/javascript" src="http://disqus.com/forums/markphilpotslifestream/get_num_replies.js' + query + '"></' + 'script>');
	})();
//]]>
</script>


</body>
</html>