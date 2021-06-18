<html lang="en" class="">
	<head>
		<meta charset="UTF-8">
		<title>Sprint X</title>
		<meta name="robots" content="noindex">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/metalogo.png">
		<link rel="stylesheet" href="styles/project.scss">
		<link rel="stylesheet" href="styles/spritesheet.css">
		<link rel="stylesheet" href="styles/w3.css">
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
	</head>
	<body>
		<aside>
			<nav id="mySidenav" class="sidenav">
				<a href="index.php" id="home"><i class="fa fa-home"></i>Home</a>
				<a href="index.php#aboutsection" id="about"><i class="fas fa-address-card"></i>About</a>
				<a href="index.php#portsection" id="folio"><i class="fas fa-briefcase"></i>Portfolio</a>
				<a href="libraries.php" id="contact"><i class="fas fa-file-code"></i>Adv. dev</a>
			</nav>
		</aside>
		<nav class="mobile-nav">
			<a href="index.php">Home</a>
			<a href="index.php#aboutsection">About</a>
			<a href="index.php#portsection">Portfolio</a>
			<a href="libraries.php">Adv. dev</a>
		</nav>
		<h2 class="title-projects">Sprint X</h2>
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
					<span onclick="document.getElementById('id01').style.display='none'"
						class="w3-button w3-display-topright">&times;</span>
					<h2 class="modal-title"></h2>
					<!-- <p class="infotext">Price: -->
					<div class="price-group">
						<span>Price:</span>
						<div class="price"></div>
					</div>
					<div class="market-group">
						<span>Market cap:</span>
						<div class="marketcap"></div>
					</div>
					<div class="volume-group">
						<span>Volume:</span>
						<div class="volume"></div>
					</div>
					<div class="supply-group">
						<span>Supply:</span>
						<div class="supplyInfo"></div>
					</div>
					<canvas id="coin-history-chart"></canvas>
				</div>
			</div>
		</div>
		<div id="id02" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
					<span onclick="document.getElementById('id02').style.display='none'"
						class="w3-button w3-display-topright">&times;</span>
					<h2 id="coin-name"></h2>
					<div class="modal-body">
						Current price :<span id="coin-price"></span>
						<br />
						Amount: <input type="number" id="amount-coins">
						<br />
						Total: <span id="total-value">0</span>
					</div>
				</div>
			</div>
		</div>
		<table id="crypto-table" class="table" style="overflow-x:auto;">
			<!-- <caption>Statement Summary</caption> -->
			<thead>
				<tr>
					<th scope="col">Logo</th>
					<th scope="col">Symbol</th>
					<th scope="col">Name</th>
					<th scope="24hr">24hr Change</th>
					<th scope="PrijsBit">Price($)</th>
					<th>More info</th>
					<th>Add</th>
				</tr>
			</thead>
			<tbody>
				<template id="crypto-template">
					{{#data}}
					<tr>
						<td><span class="sprite-block sprite-{{id}}"></span></td>
						<td>{{symbol}}</td>
						<td class="crypto-name">{{name}}</td>
						<td class="crypto-trade">{{changePercent24Hr}} %</td>
						<td class="crypto-price">{{priceUsd}}</td>
						<!-- Informatie die hieronder staat is alleen voor de modal dus in de table staat die op display:none -->
						<td class="crypto-market">${{marketCapUsd}}</td>
						<td class="supply">{{supply}}</td>
						<td class="volumeUsd24Hr">${{volumeUsd24Hr}}</td>
						<td>
							<!-- Button trigger modal -->
							<button onclick="document.getElementById('id01').style.display='block'"
								class="w3-button w3-black crypto-info-btn">More Info</button>
						</td>
						<td>
							<button onclick="document.getElementById('id02').style.display='block'"
								class="w3-button w3-black btn-open-modal-cryptofolio">Calculate</button>
						</td>
					</tr>
					{{/data}}
				</template>
			</tbody>
		</table>
	</body>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>
	<!--- Charts js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<!-- Custom js  -->
	<script src="js/crypto.js"></script>
</html>