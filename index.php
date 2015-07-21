<?php
/** Germania Template 2013 - Author: Marc Ernst **/
defined( '_JEXEC' ) or die;
/**<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?> **/ ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/normal.css">
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
<div id="site">
	<div id="sticker"><jdoc:include type="modules" name="sticker" /></div>
	<div id="top">
			<div id="nav">
			<div id="search"><jdoc:include type="modules" name="user3" /></div>
			<jdoc:include type="modules" name="top_menu" />
			
			
			</div>
			
	</div>
	<div id="body">
		<div id="right"><jdoc:include type="message" /><jdoc:include type="modules" name="right" /></div>
		
		<jdoc:include type="modules" name="body" />
		<jdoc:include type="component" />
		
		<div id="bottom_nav">
			<jdoc:include type="modules" name="bottom_menu" />
		</div>
	</div>
	<div id="footer">
			&copy; Darmst&auml;dter Burschenschaft Germania <?php echo(date(Y)); ?>
	</div>
</div>
	
</body>
</html>