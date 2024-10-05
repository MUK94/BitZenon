<div id="quotePopup"
    class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 justify-center items-center z-50">
    <div class="bg-white p-8 rounded shadow-lg relative">
        <div class="flex mb-4 items-center flex-col justify-between">
            <h2 class="mb-2 custom-blue-color-1">Get a Quote</h2>
            <p class="mb-2 text-green-700 font-semibold">Have a project idea in mind? Describe it here and we'll bring it
                to life!</p>
        </div>

        <!-- Close Button -->
        <button id="closePopup" wire:click="showPopup = false" class="font-bold absolute top-2 right-4">
            <i class="text-red-600 fa-solid fa-xmark"></i>
        </button>

        <!-- Form -->
        <form wire:submit.prevent="submit">
            <!-- Your form fields here -->
            <div class="flex justify-between gap-2">
                <div class="mb-4 flex flex-col">
                    <label for="name" class="block text-sm text-gray-700">Name</label>
                    <input type="text" id="name" wire:model="name" placeholder="Your Name" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 placeholder:text-sm">
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="email" class="block text-sm text-gray-700">Email</label>
                    <input type="email" id="email" wire:model="email" placeholder="Your Email" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 placeholder:text-sm">
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between gap-2">
                <div class="mb-4 flex flex-col">
                    <label for="projectType" class="block text-sm text-gray-700">Project Type</label>
                    <select id="projectType" wire:model="projectType" required
                        class="w-72 text-sm border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500">Select a project type</option>
                        <option value="8" class="text-gray-900">Collaboration</option>
                        <option value="9" class="text-gray-900">Consultation</option>
                        <option value="1" class="text-gray-900">Web Development Project</option>
                        <option value="6" class="text-gray-900">Microsoft Power Platform Project</option>
                        <option value="2" class="text-gray-900">PowerApps Project</option>
                        <option value="3" class="text-gray-900">Power Automate Project</option>
                        <option value="5" class="text-gray-900">Power BI Project</option>
                        <option value="7" class="text-gray-900">Other Project</option>
                    </select>
                    @error('projectType')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="scope" class="block text-sm text-gray-700">Scope</label>
                    <select id="scope" wire:model="scope" required
                        class="w-72 border text-sm border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500">Select scope</option>
                        <option value="small" class="text-gray-900">Small</option>
                        <option value="medium" class="text-gray-900">Medium</option>
                        <option value="large" class="text-gray-900">Large</option>
                    </select>
                    @error('scope')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex flex-col">
                <label for="description" class="block text-sm text-gray-700">Message</label>
                <textarea id="description" wire:model="description" placeholder="Your Message" required
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 placeholder:text-sm"></textarea>
                @error('description')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600" @if(!$this->isFormValid()) disabled @endif>Submit
                </button>
            </div>
        </form>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const openBtn = document.querySelector('.btn-booking button');
        const closeBtn = document.getElementById('closePopup');
        const popup = document.getElementById('quotePopup');

        // Open popup on "Get a Quote" button click
        openBtn.addEventListener('click', function(event) {
            event.preventDefault();
            popup.classList.remove('hidden');
            popup.classList.add('flex')
        });

        // Close popup on "X" button click
        closeBtn.addEventListener('click', function() {
            popup.classList.add('hidden');
        });

        // Optional: close popup when clicking outside the popup
        window.addEventListener('click', function(event) {
            if (event.target === popup) {
                popup.classList.add('hidden');
            }
        });
    });
</script>
