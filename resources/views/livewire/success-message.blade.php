<div>
    @if ($visible)
        <div id="success-popup" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg">
            {{ $message }}
        </div>
    @endif
	 <style>
		  #success-popup {
				animation: fade-in-out 3s ease-in-out forwards;
		  }

		  @keyframes fade-in-out {
				0% {
					 opacity: 0;
					 transform: translateX(100%);
				}

				10% {
					 opacity: 1;
					 transform: translateX(0);
				}

				90% {
					 opacity: 1;
					 transform: translateX(0);
				}

				100% {
					 opacity: 0;
					 transform: translateX(100%);
				}
		  }
	 </style>
</div>

<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('hide-popup', ({
            delay
        }) => {
            setTimeout(() => {
                Livewire.emit('hideSuccessMessage');
            }, delay);
        });
    });
</script>

