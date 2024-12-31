<div>
	<button id="copy-button" onclick="copyToClipboard()">
		Share URL <i class="fa-regular fa-copy"></i>
	</button>
</div>

<script>
	function copyToClipboard() {
		var tempInput = document.createElement("input");
		tempInput.value = "{{ $url }}";
		document.body.appendChild(tempInput);
		tempInput.select();
		document.execCommand("copy");
		document.body.removeChild(tempInput);

		// Change button text and color
		var button = document.getElementById("copy-button");
		button.innerHTML = 'URL copied!';
		button.style.color = "green";
		button.style.fontWeight = "bold";
		setTimeout(() => {
			button.innerHTML = 'Share URL <i class="fa-regular fa-copy"></i>';
			button.style.color = ""; // Reset color
			button.style.fontWeight = "";
		}, 3000);
	}
</script>
