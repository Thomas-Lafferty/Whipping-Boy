<html>
<head>
	<script type="text/javascript">
		var max_width = 800, min_width = 200;
		var width = 500;
		var max_change = 10;
		var left = true;
		var messages = [
			"Sup boi",
			";)",
			"SEIZUREEEE",
			"German dong",
			"Johnjennings.net for all your sexual needs",
			"Agile",
			"Computer Science",
			"Non-Deterministic",
			"Context-Free",
			"Plagiarism"
		];
		var colours = [
			"#f00", "#0f0", "#00f",
			"#f0f", "#0ff", "#ff0",
			"#faf", "#aff", "#ffa"
		];

		function update() {
			width += (Math.random() * 2 * max_change) - max_change;
			if (width > max_width) { width = max_width; }
			if (width < min_width) { width = min_width; }
			document.getElementById("myimg").width = width;
			if (Math.random() < 0.1) {
				document.getElementById("myh").innerHTML = messages[Math.floor(Math.random() * messages.length)];
			}
			if (Math.random() < 0.15) {
				left = !left;
			}
			document.getElementById("myh").style.color = colours[Math.floor(Math.random() * colours.length)];
			document.getElementById("myimg").style.float = left ? "left" : "right";
			window.requestAnimationFrame(update);
		}
		window.requestAnimationFrame(update);
	</script>
</head>

<body>
<marquee>
  <form method="post" action="maps.php">
	  Location:
	  <input type="text" name="location">
	  <input type="submit">
  </form>
	<h1 id="myh">BANTA</h1>
    <?php
        $location=$_REQUEST['location'];
        echo "<img id='myimg' src='https://maps.googleapis.com/maps/api/staticmap?center=$location&size=640x400&key=AIzaSyCDLuCCtz89sxyZDtS8cEynZRo6kIxLDfg'/>";
    ?>
	</marquee>
</body>
</html>
