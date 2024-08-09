<!-- Overlay -->
<div class="create-popup-location-overlay hidden fixed inset-0 bg-black bg-opacity-50 z-50"></div>

<!-- Popup -->
<div class="create-popup-location hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-[600px] max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white">Create location</h2>
        </div>
        <form id="create-location-form" class="space-y-4 px-6 py-2">
            <div class="p-2 w-full text-start">
                <div class="mb-4">
                    <label for="location-name" class="block mb-1">Address:</label>
                    <textarea type="text" id="location-name" name="location-name" class="w-full border border-gray-300 rounded-md p-2"></textarea>
                </div>
            </div>
            <div class="p-2 mb-6">
                <label for="shop_cat" class="block text-sm font-medium text-gray-900 mb-1">Shop Category</label>
                <select id="shop_cat" name="shop_cat" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select Shop</option>
                    <option>Shop 1</option>
                    <option>Shop 2</option>
                    <option>Shop 3</option>
                </select>
            </div>
            <div class="flex justify-end mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Save</button>
                <button type="button" id="close-create-location-popup" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
            </div>
        </form>
    </div>
</div>
