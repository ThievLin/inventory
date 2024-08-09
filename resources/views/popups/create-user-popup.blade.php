<!-- Create User Popup Overlay -->
<div class="Create-popup-overlay hidden fixed inset-0 bg-black bg-opacity-50 z-50"></div>

<!-- Create User Popup -->
<div class="Create-popup hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-lg max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white">Create User</h2>
        </div>
        <form id="Create-user-form" class="space-y-4 px-6 py-2">
            <div class="relative text-center">
                <label for="profile-pic" class="block mb-1 font-semibold">Profile Picture:</label>
                <div class="relative inline-block">
                    <img src="images/user.png" class="h-32 w-32 rounded-full" alt="Profile">
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 rounded-full">
                        <div class="p-2 cursor-pointer hover:bg-opacity-75 transition rounded-full" onclick="document.getElementById('profile-pic').click();">
                            <i class="fas fa-edit text-white"></i>
                        </div>
                    </div>
                </div>
                <input type="file" id="profile-pic" class="hidden">
            </div>                      
            <div class="flex px-4">
                <div class="p-2 w-full">
                    <div class="mb-4">
                        <label for="username" class="block mb-1">Username:</label>
                        <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block mb-1">Role:</label>
                        <select class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <option value="" disabled selected>Select a role</option>
                            <option value="">Admin</option>
                            <option value="">Owner</option>
                            <option value="">Inventory</option>
                            <option value="">Seller</option>
                        </select>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="mb-4">
                        <label for="Systemname" class="block mb-1">System Name:</label>
                        <input type="text" id="Systemname" name="Systemname" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="usercontact" class="block mb-1">User Contact:</label>
                        <input type="text" id="usercontact" name="usercontact" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="mb-4">
                        <label for="oldpassword" class="block mb-1">Password:</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="newpassword" class="block mb-1">Confirm Password:</label>
                        <input type="password" id="cfpassword" name="cfpassword" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Save</button>
                <button type="button" id="close-user-popup" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById('createUserButton').addEventListener('click', function (event) {
        event.preventDefault();
        document.querySelector('.Create-popup-overlay').classList.remove('hidden');
        document.querySelector('.Create-popup').classList.remove('hidden');
    });

    document.getElementById('close-user-popup').addEventListener('click', function () {
        document.querySelector('.Create-popup-overlay').classList.add('hidden');
        document.querySelector('.Create-popup').classList.add('hidden');
    });

    document.querySelector('.Create-popup-overlay').addEventListener('click', function () {
        document.querySelector('.Create-popup-overlay').classList.add('hidden');
        document.querySelector('.Create-popup').classList.add('hidden');
    });
</script>
