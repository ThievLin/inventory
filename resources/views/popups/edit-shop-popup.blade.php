<!-- Overlay -->
<div class="edit-popup-shop-overlay hidden fixed inset-0 bg-black bg-opacity-50 z-50"></div>

<!-- Popup -->
<div class="edit-popup-shop hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-[600px] max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-4 py-3">
            <h2 class="text-2xl font-bold text-white">Edit Shop</h2>
        </div>
        <form id="edit-shop-form" class="space-y-3 px-6 py-2">
            <label class="block mb-1 font-semibold text-center text-lg">Shop Image:</label>
            <div class="relative">
                <img src="images/shop.jpg" id="shop-pic-preview" class="mt-2 h-48 w-full rounded-md mx-auto object-cover shadow-lg" alt="Shop Picture Preview">
                <input type="file" id="shop-pic" class="hidden">
                <div class="absolute inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 rounded-md opacity-0 transition-opacity duration-300 hover:opacity-100 cursor-pointer" onclick="document.getElementById('shop-pic').click();">
                    <i class="fas fa-edit text-white text-3xl"></i>
                </div>
            </div>
            <div class="py-2 w-full text-start">
                <div class="mb-3">
                    <label for="shop-name" class="block mb-1">Shop Name:</label>
                    <input type="text" id="shop-name" name="shop-name" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-between space-x-3 mb-3">
                    <div class="flex-1">
                        <label for="location-name1" class="block mb-1">Address 1:</label>
                        <textarea id="location-name1" name="location-name1" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3">រាជធានី, Street 1972, Phnom Penh 120801</textarea>
                    </div>
                    <div class="flex-1">
                        <label for="location-name2" class="block mb-1">Address 2:</label>
                        <textarea id="location-name2" name="location-name2" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3">រាជធានី, Street 1972, Phnom Penh 120801</textarea>
                    </div>
                </div>
            </div>            
            <div class="flex justify-end mt-3">
                <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600 transition">Save Changes</button>
                <button type="button" id="close-popup-shop" class="ml-2 bg-gray-300 text-gray-700 px-3 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const popup = document.querySelector('.edit-popup-shop');
        const overlay = document.querySelector('.edit-popup-shop-overlay');
        const closeBtn = document.getElementById('close-popup-shop');
        const fileInput = document.getElementById('shop-pic');
        const form = document.getElementById('edit-shop-form');

        document.querySelectorAll('.edit-button-shop').forEach(button => 
            button.addEventListener('click', () => {
                popup.classList.remove('hidden');
                overlay.classList.remove('hidden');
                document.getElementById('shop-name').value = button.dataset.shopName || '';
                document.getElementById('location-name1').value = button.dataset.locationName1 || 'រាជធានី, Street 1972, Phnom Penh 120801';
                document.getElementById('location-name2').value = button.dataset.locationName2 || 'រាជធានី, Street 1972, Phnom Penh 120801';
            })
        );

        closeBtn.addEventListener('click', () => {
            popup.classList.add('hidden');
            overlay.classList.add('hidden');
        });

        fileInput.addEventListener('change', event => {
            const reader = new FileReader();
            reader.onload = () => document.getElementById('shop-pic-preview').src = reader.result;
            reader.readAsDataURL(event.target.files[0]);
        });

        form.addEventListener('submit', event => {
            event.preventDefault();
            // Handle form submission logic
            popup.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    });
</script>
