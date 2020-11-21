<!DOCTYPE html>
<html>
	<head>
		<?php include '../header.js'?>
	</head>

	<body>
		The graph of \(y=x^2-7x+10\) is shown below:
		<div id="box" class="jxgbox" style="width:500px; height: 500px;"></div>
		<script type="text/javascript">
			var board = JXG.JSXGraph.initBoard('box', {boundingbox: [-10, 10, 10, -10], axis:true});
			var graph = board.create('functiongraph',
				[function(x) { return x*x-7*x+10;}, -10,10]
				);
			var p1 = board.create('point', [2,0]);
			var p2 = board.create('point', [5,0]);
			var t1 = board.create('text', [2,-4,"The solutions are 2 and 5."]);
		</script>
	</body>
<html>
