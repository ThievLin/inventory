<!-- Overlay -->
<div class="edit-popup-overlay hidden fixed inset-0 bg-black bg-opacity-50 z-50"></div>

<!-- Popup -->
<div class="edit-popup hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-lg max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white">Edit User</h2>
        </div>
        <form id="edit-user-form" class="space-y-4 px-6 py-2">
            <div class="relative text-center">
                <label for="profile-pic" class="block mb-1 font-semibold">Profile Picture:</label>
                <div class="relative mt-2 h-64 w-64 mx-auto group">
                    <img src="images/user.png" class="h-64 w-64 rounded-full" alt="Profile Picture Preview">
                    <input type="file" id="profile-pic" class="hidden">
                    <div class="absolute bottom-0 left-0 right-0 h-64 w-64 bg-gray-900 bg-opacity-50 rounded-full flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer" onclick="document.getElementById('profile-pic').click();">
                        <i class="fas fa-edit text-white"></i>
                    </div>
                </div>
            </div>
            <div class="flex px-4">
                <div class="p-2 w-full">
                    <div class="mb-4">
                        <label for="U_name" class="block mb-1">Username:</label>
                        <input type="text" id="U_name" name="U_name" value="{{ $data->U_name }}" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="R_id" class="block mb-1">Role:</label>
                        <select id="R_id" name="R_id" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <option value="" disabled>Select a role</option>
                            @foreach ($role as $role)
                            <option value="{{ $role->R_id }}" {{ $role->R_id == old('R_id', $data->R_id) ? 'selected' : '' }}>
                                {{ $role->R_type }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="mb-4">
                        <label for="sys_name" class="block mb-1">System Name:</label>
                        <input type="text" id="sys_name" name="sys_name" value="{{ $data->sys_name }}" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="U_contact" class="block mb-1">User Contact:</label>
                        <input type="text" id="U_contact" name="U_contact" value="{{ $data->U_contact }}"  class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="mb-4">
                        <label for="text" class="block mb-1">Old Password:</label>
                        <input type="password" id="password" name="password"  value="{{ $data->password }}" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="newpassword" class="block mb-1">New Password:</label>
                        <input type="password" id="newpassword" name="newpassword" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Save Changes</button>
                <button type="button" id="close-popup" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
            </div>
        </form>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const editPopup = document.querySelector('.edit-popup');
    const editPopupOverlay = document.querySelector('.edit-popup-overlay');
    const closePopupButton = document.querySelector('#close-popup');
    const profilePicInput = document.getElementById('profile-pic');
    const editButtons = document.querySelectorAll('.edit-button-user');
    
    editButtons.forEach(button => button.addEventListener('click', () => {
        editPopup.classList.remove('hidden');
        editPopupOverlay.classList.remove('hidden');
        document.getElementById('username').value = button.dataset.username || '';
        document.getElementById('role').value = button.dataset.role || '';
    }));

    closePopupButton.addEventListener('click', () => {
        editPopup.classList.add('hidden');
        editPopupOverlay.classList.add('hidden');
    });

    profilePicInput.addEventListener('change', event => {
        const reader = new FileReader();
        reader.onload = () => document.querySelector('.edit-popup img').src = reader.result;
        reader.readAsDataURL(event.target.files[0]);
    });

    document.getElementById('edit-user-form').addEventListener('submit', event => {
        event.preventDefault();
        // Handle form submission logic here
        editPopup.classList.add('hidden');
        editPopupOverlay.classList.add('hidden');
    });
});
</script>
