<!DOCTYPE html>

<html> 

	<head> 
		<link rel="stylesheet" type="text/css" href="/~ccit1563/mvp/assets/style.css">
		<title><?php echo $title; ?></title>
	</head>

	<body>

		<div id="main">
			<div id="header">
				<h1><a id="headerlink" href="http://phoenix.sheridanc.on.ca/~ccit1563/mvp/index.php/mvp/"><?php echo $title; ?></a></h1>
			</div>

			<div id="navbar">
				<nav>
					<ul>
						<li id="findbtn"><a href="/find">Find Restaurant</a></li>
						<li id="mapbtn"><a href="/map">Map</a></li>
						<li><input type="text" id="searchbox" name="search" placeholder="Search"><input type="button" name="searchbtn" value="Q"></li>
					</ul>
				</nav>
			</div> 
