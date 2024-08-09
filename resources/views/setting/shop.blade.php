<div class="max-w-screen-lg mx-auto">
    <div class="relative flex flex-col md:flex-row justify-between items-center w-full md:w-4/5">
        <a href="#" id="createShopButton" class="bg-primary text-primary-foreground py-1 px-4 rounded-lg md:mb-3 sm:mb-2 text-sm">CREATE</a>
        <div id="dropdownMenu" class="hidden absolute bg-white shadow-lg rounded-lg mt-32 z-10 w-52 border-2 border-gray-400">
            <a href="#" id="createShopLink" class="block px-4 py-2 text-gray-500 border-b-2 border-gray-400 hover:bg-gray-200 hover:rounded-t-lg">Create Shop</a>
            <a href="#" id="createLocationLink" class="block px-4 py-2 text-gray-500 hover:bg-gray-200 hover:rounded-b-lg">Create Location</a>
        </div>
    </div>
    <div id="shop-container" class="grid gap-6">
        @foreach ($shop as $data )
        <div class="shop-card relative bg-white rounded-lg shadow-lg overflow-hidden col-span-full sm:col-span-1">
            <div class="p-6 bg-gray-100 rounded-lg">
                <div class="relative flex justify-center items-center">
                    <img src="{{ asset('storage/' . $data->S_logo) }}" alt="Shop Image" class="rounded-full h-52 w-52 object-cover mx-auto shadow-lg mb-4">
                    <div class="edit-button-shop absolute bottom-2 right-2 bg-gray-900 bg-opacity-50 p-2 rounded-full cursor-pointer hover:bg-opacity-75 transition duration-300">
                        <i class="fas fa-edit text-white"></i>
                    </div>
                </div>
                <h1 class="text-2xl font-semibold mb-2 text-center text-primary">WELCOME, {{strtoupper($data->S_name)}}</h1>
                <div class="flex">
                    <div class="flex flex-col items-start p-4 bg-gray-200 rounded-lg m-2 w-full">
                        <h2 class="text-lg font-medium mb-4">Address 1:</h2>
                        <p class="text-gray-600 mb-4">រាជធានី, Street 1972, Phnom Penh 120801</p>
                        <a href="#" class="text-blue-500">Manage your location</a>
                    </div>
                    <div class="flex flex-col items-start p-4 bg-gray-200 rounded-lg m-2 w-full">
                        <h2 class="text-lg font-medium mb-4">Address 2:</h2>
                        <p class="text-gray-600 mb-4">រាជធានី, Street 1972, Phnom Penh 120801</p>
                        <a href="#" class="text-blue-500">Manage your location</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
   <!-- Add more shop cards here as needed -->
    </div>
    <div class="mt-4">
        {{ $shop->links() }}
    </div>
    @include('popups.edit-shop-popup')
    @include('popups.create-shop-popup')
    @include('popups.create-location-popup')
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const createShopButton = document.getElementById('createShopButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const createShopLink = document.getElementById('createShopLink');
        const createLocationLink = document.getElementById('createLocationLink');
        const createShopPopup = document.querySelector('.create-popup-shop');
        const createShopOverlay = document.querySelector('.create-popup-shop-overlay');
        const createLocationPopup = document.querySelector('.create-popup-location');
        const createLocationOverlay = document.querySelector('.create-popup-location-overlay');
        const closeCreateShopPopup = document.getElementById('close-create-shop-popup');
        const closeCreateLocationPopup = document.getElementById('close-create-location-popup');

        createShopButton.addEventListener('click', (event) => {
            event.preventDefault();
            dropdownMenu.classList.toggle('hidden');
        });

        createShopLink.addEventListener('click', (event) => {
            event.preventDefault();
            dropdownMenu.classList.add('hidden');
            createShopPopup.classList.remove('hidden');
            createShopOverlay.classList.remove('hidden');
        });

        createLocationLink.addEventListener('click', (event) => {
            event.preventDefault();
            dropdownMenu.classList.add('hidden');
            createLocationPopup.classList.remove('hidden');
            createLocationOverlay.classList.remove('hidden');
        });

        closeCreateShopPopup.addEventListener('click', () => {
            createShopPopup.classList.add('hidden');
            createShopOverlay.classList.add('hidden');
        });

        closeCreateLocationPopup.addEventListener('click', () => {
            createLocationPopup.classList.add('hidden');
            createLocationOverlay.classList.add('hidden');
        });

        createShopOverlay.addEventListener('click', () => {
            createShopPopup.classList.add('hidden');
            createShopOverlay.classList.add('hidden');
        });

        createLocationOverlay.addEventListener('click', () => {
            createLocationPopup.classList.add('hidden');
            createLocationOverlay.classList.add('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!createShopButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Event listener for the edit button to show the edit popup
        document.querySelectorAll('.edit-button-shop').forEach(button => 
            button.addEventListener('click', () => {
                document.querySelector('.edit-popup-shop').classList.remove('hidden');
                document.querySelector('.edit-popup-shop-overlay').classList.remove('hidden');
            })
        );

        // JavaScript to adjust the grid layout based on the number of cards
        const shopContainer = document.getElementById('shop-container');
        const shopCards = shopContainer.children;

        if (shopCards.length === 1) {
            shopContainer.classList.add('grid-cols-1');
        } else {
            shopContainer.classList.add('grid-cols-1', 'sm:grid-cols-2');
        }
    });
</script>
