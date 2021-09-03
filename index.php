<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<form><br>
				Enter the number of player(s): <input type="number" name="numOfPlayer" id="numOfPlayer" min="1" step="1" oninput="this.value = Math.round(this.value);"> 
			<button type="button" id="submitBtn">Submit</button>
		</form>

		<div id="outputBox" style="min-width: 50%; min-height: 10%; background-color: lightblue; padding: 20px; display: inline-block;">
		</div>

		<script type="text/javascript">
			$( document ).ready(function() {
				$("#submitBtn").on("click", function() {
					var numOfPlayer = $("#numOfPlayer").val();
					var cards = ["S-A", "S-2", "S-3", "S-4", "S-5", "S-6", "S-7", "S-8", "S-9", "S-X", "S-J", "S-Q", "S-K", "H-A", "H-2", "H-3", "H-4", "H-5", "H-6", "H-7", "H-8", "H-9", "H-X", "H-J", "H-Q", "H-K", "D-A", "D-2", "D-3", "D-4", "D-5", "D-6", "D-7", "D-8", "D-9", "D-X", "D-J", "D-Q", "D-K", "C-A", "C-2", "C-3", "C-4", "C-5", "C-6", "C-7", "C-8", "C-9", "C-X", "C-J", "C-Q", "C-K"];
					if(numOfPlayer.length == 0 || numOfPlayer < 1) {
						alert("Input value does not exist or value is invalid");
						return false;
					} else {
						var maxNumOfCardPerPlayer = Math.ceil(cards.length / numOfPlayer);
						var playerCards = [];
						for (var i = 0; i < numOfPlayer; i++) {
							playerCards.push([]);
						}
						while(cards.length > 0) {
							for (var i = 0; i < numOfPlayer; i++) {
								var randomIndex = Math.floor(Math.random() * cards.length);
								playerCards[i].push(cards[randomIndex]);
								cards.splice(randomIndex, 1);
							}
						}
						var output = "";
						for (var i = 0; i < numOfPlayer; i++) {
							output += (i+1) + ":   " + playerCards[i].join(',') + "<br>";
						}
						document.getElementById("outputBox").innerHTML = output;
						return true;
					}
				});
			});
		</script>
	</body>
</html>