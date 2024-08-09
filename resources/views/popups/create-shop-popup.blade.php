<!-- Overlay -->
<div class="create-popup-shop-overlay hidden fixed inset-0 bg-black bg-opacity-50 z-50"></div>

<!-- Popup -->
<div class="create-popup-shop hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-[600px] max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white">Create Shop</h2>
        </div>
        <form id="create-shop-form" class="space-y-4 px-6 py-2">
            <div class="relative text-center">
                <label for="shop-pic" class="block mb-1 font-semibold">Shop Picture:</label>
                <div class="relative inline-block">
                    <img src="images/shop.jpg" class="h-32 w-32 rounded-full" alt="Profile">
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 rounded-full">
                        <div class="p-2 cursor-pointer hover:bg-opacity-75 transition rounded-full" onclick="document.getElementById('profile-pic').click();">
                            <i class="fas fa-edit text-white"></i>
                        </div>
                    </div>
                </div>
                <input type="file" id="profile-pic" class="hidden">
            </div>
            <div class="p-2 w-full text-start">
                <div class="mb-4">
                    <label for="shop-name" class="block mb-1">Shop Name:</label>
                    <input type="text" id="shop-name" name="shop-name" class="w-full border border-gray-300 rounded-md p-2">
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Save</button>
                <button type="button" id="close-create-shop-popup" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
            </div>
        </form>
    </div>
</div>
