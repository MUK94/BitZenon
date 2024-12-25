<div id="quotePopup" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 justify-center items-center z-50">
    <div class="bg-white p-8 rounded shadow-lg relative">
        <div class="flex mb-12 items-center flex-col justify-between">
            <p class="text-center text-3xl font-semibold custom-blue-color-1">Have a project idea in mind? <br>
                Describe it here and we'll bring it
                to life!
            </p>
        </div>

        <!-- Close Button -->
        <button id="closePopup" wire:click="showPopup = false" class="font-bold absolute top-2 right-4">
            <i class="text-red-600 fa-solid fa-xmark"></i>
        </button>

        <!-- Form -->
        <form wire:submit.prevent="submit" class="pt-6">
            <!-- Your form fields here -->
            <div class="flex justify-between gap-2">
                <div class="mb-4 flex flex-col">
                    <label for="name" class="block  text-gray-700">Name <span
                            class="field-required">*</span></label>
                    <input type="text" id="name" wire:model="name" placeholder="Your Name" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 placeholder">
                    @error('name')
                        <span class="text-red-600">{{ $name }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="email" class="block  text-gray-700">Email <span
                            class="field-required">*</span></label>
                    <input type="email" id="email" wire:model="email" placeholder="Your Email" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 placeholder">
                    @error('email')
                        <span class="text-red-600">{{ $email }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="phone" class="block  text-gray-700">Tel</label>
                    <input type="tel" id="phone" wire:model="phone" placeholder="Your phone"
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 placeholder">
                    @error('phone')
                        <span class="text-red-600">{{ $phone }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between gap-2">
                <div class="mb-4 flex flex-col">
                    <label for="projectType" class="block text-gray-700">Project Type <span
                            class="field-required">*</span></label>
                    <select id="projectType" wire:model="projectType" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500">Select a project type</option>
                        <option value="8" class="text-gray-900">Collaboration</option>
                        <option value="9" class="text-gray-900">Consultation</option>
                        <option value="1" class="text-gray-900">Web Development Project</option>
                        <option value="2" class="text-gray-900">PowerApps Project</option>
                        <option value="3" class="text-gray-900">Power Automate Project</option>
                        <option value="5" class="text-gray-900">Power BI Project</option>
                        <option value="5" class="text-gray-900">Fabric Project</option>
                        <option value="7" class="text-gray-900">Other Project</option>
                    </select>
                    @error('projectType')
                        <span class="text-red-600">{{ $projectType }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="scope" class="block text-gray-700">Project State <span
                            class="field-required">*</span></label>
                    <select id="scope" wire:model="scope" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500">Select Project State</option>
                        <option value="initial" class="text-gray-900">From Scratch</option>
                        <option value="intermediate" class="text-gray-900">Pre-existing but not live</option>
                        <option value="online" class="text-gray-900">Pre-existing Online</option>
                        <option value="noidea" class="text-gray-900">Not listed here</option>
                    </select>
                    @error('state')
                        <span class="text-red-600">{{ $state }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="scope" class="block text-gray-700">Scope <span
                            class="field-required">*</span></label>
                    <select id="scope" wire:model="scope" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                        <option value="" class="text-gray-500">Select Scope</option>
                        <option value="small" class="text-gray-900">Small (Personal)</option>
                        <option value="medium" class="text-gray-900">Medium (Business)</option>
                        <option value="large" class="text-gray-900">Large (Entreprise)</option>
                    </select>
                    @error('scope')
                        <span class="text-red-600">{{ $scope }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex flex-col">
                <label for="description" class="block text-gray-700">Message <span
                        class="field-required">*</span></label>
                <textarea id="description" wire:model="description" placeholder="Your Message" required
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-700"></textarea>
                @error('description')
                    <span class="text-red-600">{{ $description }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600"
                    @if (!$this->isFormValid()) disabled @endif>Submit
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
