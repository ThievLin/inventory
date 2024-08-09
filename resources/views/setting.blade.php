@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="min-h-screen flex flex-col bg-background text-foreground">
        <header class="flex flex-row items-center space-x-4 mt-2">
            <div class="ml-5">
                <div class="ml-0">
                    @if(Auth::check() && Auth::user()->invshop && Auth::user()->invshop->S_logo)
                        <a href="/home">
                            <img src="{{ asset('storage/' . Auth::user()->invshop->S_logo) }}" alt="Shop Logo" class="h-10 w-12 rounded">
                        </a>
                    @else
                        <a href="/home">
                            <img src="{{ asset('images/official_logo.png') }}" alt="Default Logo" class="h-10 w-12 rounded">
                        </a>
                    @endif
                </div>                
            </div>
            <div class="bg-primary p-3 shadow-md flex items-end justify-end flex-1">
                <div class="space-x-2 items-end justify-end">
                    <h1 class="text-sm font-bold text-primary-foreground">{{ Auth::user()->U_name }}</h1>
                </div>
            </div>
            <div class="relative">
                @include('profile.profile')
            </div>
            @include('popups.edit-profile-popup')
        </header>
        
        <div class="flex flex-col items-center py-6">
            <div class="flex space-x-2 -mt-4">
                <a href="setting" class="bg-primary text-white rounded-lg px-4 py-2 text-sm font-bold">
                    SETTING
                </a>
            </div>
            <hr class="w-10 h-1 bg-gray-500 mt-2 rounded-sm">
        </div>

        <div class="flex flex-1">
            <!-- Sidebar Toggle Button -->
            <div class="relative z-9">
                <button class="block lg:hidden p-2 ml-2 bg-yellow-400 text-gray-700" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Menu Overlay -->
                <div class="fixed inset-0 bg-black bg-opacity-50 hidden lg:hidden z-50" id="menu-overlay"></div>
                <!-- Sidebar -->
                <aside class="text-gray-500 w-64 h-full p-6 bg-gray-200 fixed top-0 left-0 transform -translate-x-full transition-transform lg:transform-none lg:static lg:w-64 lg:h-full lg:p-6 lg:bg-gray-200 z-50" id="sidebar">
                    <nav class="flex flex-col py-4">
                        <!-- Navigation Links -->
                        <a href="#shop" id="link-section1" onclick="showSection('section1');" class="nav-link flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                            <i class="fas fa-store mr-2"></i> Shop
                        </a>
                        <a href="#user" id="link-section3" onclick="showSection('section3');" class="nav-link flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                            <i class="fas fa-user mr-2"></i> User
                        </a>
                        <a href="#category" id="link-section4" onclick="showSection('section4');" class="nav-link flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                            <i class="fas fa-list mr-2"></i> Category
                        </a>
                        <a href="#module" id="link-section6" onclick="showSection('section6');" class="nav-link flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                            <i class="fas fa-puzzle-piece mr-2"></i> Module
                        </a>
                        <a href="#product" id="link-section7" onclick="showSection('section7');" class="nav-link flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                            <i class="fas fa-box-open mr-2"></i> Product
                        </a>
                        <a href="#uom-size" id="link-section9" onclick="showSection('section9');" class="nav-link flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                            <i class="fas fa-ruler-combined mr-2"></i> UOM/Size
                        </a>
                    </nav>
                </aside>
            </div>
    <!-- Main Content -->
    <main class="flex-1 pl-2">
      <div id="section1" class="content-section">
        @include('setting.shop')
      </div>
      <div id="section3" class="content-section max-w-screen-lg mx-auto grid-cols-1 md:grid-cols-2 gap-8 flex flex-row" style="display: none;">
        @include('setting.user',['user'=> $user,'role'=>$role])
      </div>
      <div id="section4" class="content-section max-w-screen-lg mx-auto grid-cols-1 md:grid-cols-2 gap-8 flex flex-row" style="display: none;">
        @include('setting.category', ['itemCate' => $itemCate, 'productCate' => $productCate])
    </div>
      <div id="section6" class="content-section max-w-screen-lg mx-auto grid-cols-1 md:grid-cols-2 gap-8 flex flex-row" style="display: none;">
        @include('setting.module')
      </div>
      <div id="section7" class="content-section max-w-screen-lg mx-auto grid-cols-1 md:grid-cols-2 gap-8 flex flex-row" style="display: none;">
        @include('setting.product',['invProduct'=>$invProduct])
      </div>
      <div id="section9" class="content-section max-w-screen-lg mx-auto grid-cols-1 md:grid-cols-2 gap-8 flex flex-row" style="display: none;">
        @include('setting.uom-size')
      </div>
    </main>
  </div>
  @include('layouts.footer')
</div>
    <script>
      document.getElementById('menu-toggle').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        var overlay = document.getElementById('menu-overlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
      });
      document.getElementById('menu-overlay').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        var overlay = document.getElementById('menu-overlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
      });

      function showSection(sectionId) {
        // Save the selected section in local storage
        localStorage.setItem('activeSection', sectionId);

        document.querySelectorAll('.content-section').forEach(function(section) {
          section.style.display = 'none';
        });
        document.getElementById(sectionId).style.display = 'block';

        document.querySelectorAll('.nav-link').forEach(function(link) {
          link.classList.remove('bg-yellow-400');
        });
        document.querySelector(`[id="link-${sectionId}"]`).classList.add('bg-yellow-400');
      }

      document.addEventListener('DOMContentLoaded', function() {
        // Get the saved section from local storage
        const savedSection = localStorage.getItem('activeSection') || 'section1';
        showSection(savedSection);
      });
    </script>