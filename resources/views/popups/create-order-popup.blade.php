<!-- Popup form -->
<div id="popupOrder" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-5xl w-full mx-4 max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2 sm:text-2xl">Add New Order</h2>
        </div>
        <form class="p-6 sm:p-6" method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-2 mb-4">
                <h3 class="w-full text-lg font-bold text-gray-800 mb-2">Order Info</h3>
                <div class="w-full h-0.5 bg-yellow-400 rounded-sm mb-4"></div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="Order_number" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Order Number</label>
                    <input type="text" id="Order_number" name="Order_number" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="Reciept_image" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Receipt Image</label>
                    <input type="file" id="Reciept_image" name="Reciept_image" class="text-sm border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="Total_Price" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Total Price</label>
                    <input type="number" id="Total_Price" name="Total_Price" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="Sup_id" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select Supplier</label>
                    <select id="Sup_id" name="Sup_id" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option>Select a Supplier</option>
                        @foreach ($Supplier as $data)
                        <option value="{{ $data->Sup_id }}">
                            {{ $data->Sup_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="inc_VAT" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Inc VAT</label>
                    <input type="checkbox" id="inc_VAT" name="inc_VAT" class="h-6 w-6 ml-10 border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full sm:w-1/5 px-2 mb-8">
                    <label for="order_date" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Order Date</label>
                    <input type="date" id="order_date" name="order_date" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>                           
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="selectnum" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select Order Number</label>
                    <select id="selectnum" name="selectnum" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Select number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            <h3 class="w-full text-xl font-bold text-gray-800 mb-2">Items</h3>
            <div class="w-full h-0.5 bg-yellow-400 rounded-sm mb-4"></div>
            <div id="itemsContainer" class="flex flex-wrap -mx-2 mb-4">
                <!-- Item rows will be appended here -->
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 mr-2">Save</button>
                <button type="button" onclick="togglePopup('popupOrder')" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-400">Cancel</button>
            </div>
        </form>
    </div>
</div>
<!-- JavaScript to handle showing/hiding rows based on selection and calculating total price -->
<script>
    document.getElementById('selectnum').addEventListener('change', function() {
        var itemsContainer = document.getElementById('itemsContainer');
        itemsContainer.innerHTML = ''; // Clear existing items
        var selectedValue = parseInt(this.value);

        for (var i = 0; i < selectedValue; i++) {
            var itemRow = `
                <div class="item-row w-full flex flex-wrap">
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputSelectItem${i+1}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select Item</label>
                        <select id="inputSelectItem${i+1}" name="inputSelectItem${i+1}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Item</option>
                                <option id="createButton">Create Item</option>
                                 @foreach ($items as $data)
                                <option value="{{ $data->Item_id }}">
                                    {{ $data->Item_Khname }}
                                </option>
                                @endforeach
                        </select>
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputSelectUOM${i+1}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select UOM</label>
                        <select id="inputSelectUOM${i+1}" name="inputSelectUOM${i+1}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select UOM</option>
                                 @foreach ($uom as $data)
                                <option value="{{ $data->UOM_id }}">
                                    {{ $data->UOM_name }}
                                </option>
                                @endforeach
                        </select>
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="Qty${i+1}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Qty</label>
                        <input type="number" id="Qty${i+1}" name="Qty${i+1}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" oninput="updateTotalPrice()">
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="price${i+1}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Price</label>
                        <input type="number" id="price${i+1}" name="price${i+1}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" oninput="updateTotalPrice()">
                    </div>
                </div>
            `;
            itemsContainer.insertAdjacentHTML('beforeend', itemRow);
        }
    });

    function updateTotalPrice() {
        var totalPriceField = document.getElementById('Total_Price');
        var itemsContainer = document.getElementById('itemsContainer');
        var priceInputs = itemsContainer.querySelectorAll('input[id^="price"]');
        var qtyInputs = itemsContainer.querySelectorAll('input[id^="Qty"]');
        var totalPrice = 0;

        priceInputs.forEach(function(input, index) {
            var price = parseFloat(input.value);
            var qty = parseFloat(qtyInputs[index].value);
            if (!isNaN(price) ) {
                totalPrice += price ;
            }
        });

        // Update the Total_Price field
        totalPriceField.value = totalPrice;
    }

    function togglePopup(popupId) {
        var popup = document.getElementById(popupId);
        popup.classList.toggle('hidden');
    }
</script>
