<?php
    include_once '../../../helper.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
  <link href="../../../frontend.css" rel="stylesheet" type="text/css"/>
  <link type="text/css" href="../../themes/base/jquery-ui.css" rel="stylesheet" />
 	<script type="text/javascript" src="../../../jquery-core/jquery-core.min.js"></script>
	<script type="text/javascript" src="../jquery.ui.core.min.js"></script>
  <?php echo _loadFile( '../presets/accordion.preset' ); ?>
  <script src="../jquery.ui.accordion.min.js" type="text/javascript"></script>
  <script>
  $(document).ready(function() {
    $("#dialog").dialog();
  });
  </script>
</head>
<body style="font-size:62.5%;">

<div id="accordion">
	<h3><a href="#">Section 1</a></h3>

	<div>
		<p>
		Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
		ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
		odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
		</p>
	</div>
	<h3><a href="#">Section 2</a></h3>
	<div>
		<p>
		Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
		purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
		velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
		suscipit faucibus urna.
		</p>

	</div>
	<h3><a href="#">Section 3</a></h3>
	<div>
		<p>
		Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
		Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
		ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
		lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
		</p>
		<ul>
			<li>List item one</li>

			<li>List item two</li>
			<li>List item three</li>
		</ul>
	</div>
	<h3><a href="#">Section 4</a></h3>
	<div>
		<p>

		Cras dictum. Pellentesque habitant morbi tristique senectus et netus
		et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
		faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
		mauris vel est.
		</p>
		<p>
		Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
		inceptos himenaeos.
		</p>
	</div>
</div>

</body>
</html>
