<div id="quotePopup" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 justify-center items-center z-50">
    <div class="bg-white p-8 rounded shadow-lg relative">
        <div class="flex mb-8 items-center flex-col justify-between">
            <p class="text-center text-3xl font-semibold custom-blue-color-1">Have a project idea in mind? <br>
                Describe it here and get a <span class="emphasized">"free"</span> quote today!
            </p>
        </div>

        <!-- Close Button -->
        <button id="closePopup" class="font-bold absolute top-2 right-4">
            <i class="emphasized font-bold fa-solid fa-xmark"></i>
        </button>

        <form wire:submit.prevent="submit">
            <div class="flex justify-between gap-2">
                <div class="mb-4 flex flex-col">
                    <label for="name" class="block text-gray-700">Name <span class="field-required">*</span></label>
                    <input type="text" id="name" wire:model="name" required placeholder="Your Name"
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none">
                    @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="email" class="block text-gray-700">Email <span
                            class="field-required">*</span></label>
                    <input type="email" id="email" wire:model="email" required placeholder="Your Email"
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none">
                    @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="phone" class="block text-gray-700">Tel <span class="field-required">*</span></label>
                    <input type="tel" id="phone" wire:model="phone" required placeholder="Your phone"
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none">
                    @error('phone')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between gap-2">
                <div class="mb-4 flex flex-col">
                    <label for="projectType" class="block">Project Type <span class="field-required">*</span></label>
                    <select id="projectType" wire:model="projectType" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none">
                        <option value="" class="text-gray-600">-- Select --</option>
                        <option value="Consultation" class="text-gray-600">Consultation</option>
                        <option value="Web Development Project" class="text-gray-600">Web Development Project</option>
                        <option value="PowerApps Project" class="text-gray-600">PowerApps Project</option>
                        <option value="Power Automate Project" class="text-gray-600">Power Automate Project</option>
                        <option value="Power BI Project" class="text-gray-600">Power BI Project</option>
                        <option value="Fabric Project" class="text-gray-600">Fabric Project</option>
                        <option value="Other Project" class="text-gray-600">Other Project</option>
                    </select>
                    @error('projectType')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="projectState" class="block">Current State <span class="field-required">*</span></label>
                    <select id="projectState" wire:model="projectState" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none">
                        <option value="" class="text-gray-600">-- Select --</option>
                        <option value="initial" class="text-gray-600">From Scratch</option>
                        <option value="intermediate" class="text-gray-600">Existing but not live</option>
                        <option value="online" class="text-gray-600">Existing Online</option>
                        <option value="Other" class="text-gray-600">Other</option>
                    </select>
                    @error('projectState')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="scope" class="block">Scope <span class="field-required">*</span></label>
                    <select id="scope" wire:model="scope" required
                        class="w-72 border border-gray-300 p-2 rounded focus:outline-none">
                        <option value="" class="text-gray-600">-- Select --</option>
                        <option value="small" class="text-gray-600">Small (Personal)</option>
                        <option value="medium" class="text-gray-600">Medium (Business)</option>
                        <option value="large" class="text-gray-600">Large (Enterprise)</option>
                    </select>
                    @error('scope')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex flex-col">
                <label for="description" class="block text-gray-700">Message <span
                        class="field-required">*</span></label>
                <textarea id="description" wire:model="description" rows="2" required
                    class="w-full border resize-none border-gray-300 p-2 rounded focus:outline-none"></textarea>
                @error('description')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <!-- Google Recaptcha Widget-->
            {{-- <div class="g-recaptcha mt-4" data-sitekey={{ config('services.recaptcha.key') }}></div> --}}
            <div>
                <button type="submit"
                    class="px-4 py-2 text-white custom-blue-color rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    Send
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const openBtns = document.querySelectorAll('.quoteBtn');
        const closeBtn = document.getElementById('closePopup');
        const popup = document.getElementById('quotePopup');
        const successMessage = document.getElementById('successMessage');

        // Open popup on "Get a Quote" button click
        openBtns.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                popup.classList.remove('hidden');
                popup.classList.add('flex');
            });
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
