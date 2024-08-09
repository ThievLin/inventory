<img src="images/user.jpg" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5 cursor-pointer" id="profileDropdownToggle">
<div id="profileDropdown" class="hidden absolute right-1 mt-2 w-52 bg-white rounded-md shadow-lg border-2 border-yellow-400 z-10">
    <div class="py-0">
        <a href="dashboard" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 rounded-md">Dashboard</a>
        <a href="setting" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 rounded-md">Settings</a>
        <a href="account" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 rounded-md">Account</a>
        <a href="#" class="block px-5 py-3 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-b-2 border-yellow-400 rounded-md" id="editProfile">Profile</a>
        <a class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const profileDropdownToggle = document.getElementById('profileDropdownToggle');
        const profileDropdown = document.getElementById('profileDropdown');
  
        profileDropdownToggle.addEventListener('click', function () {
            profileDropdown.classList.toggle('hidden');
        });
        document.addEventListener('click', function (event) {
            if (!profileDropdownToggle.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    });
  </script>

<style>
    #logout-form{
   margin-top: -15px;
  }
</style>