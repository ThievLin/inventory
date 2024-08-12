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
                <div class="w-full h-0.5 bg-bsicolor rounded-sm mb-4"></div>
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
            <div class="w-full h-0.5 bg-bsicolor rounded-sm mb-4"></div>
            <div id="itemsContainer" class="flex flex-wrap -mx-2 mb-2">
                <!-- Item rows will be appended here -->
            </div>

            <div class="w-full flex justify-start mb-4 space-x-1">
                <button type="button" id="subtractRowBtn" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-400 hidden"><i class="fas fa-minus-circle"></i></button>
                <button type="button" id="addMoreRowBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-400 hidden"><i class="fas fa-plus-circle"></i></button>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 mr-2">Save</button>
                <button type="button" onclick="togglePopup('popupOrder')" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-400">Cancel</button>
            </div>
        </form>
    </div>
</div>

@include('popups.create-item-popup')

<!-- JavaScript to handle showing/hiding rows based on selection and calculating total price -->
<script>
    document.getElementById('selectnum').addEventListener('change', function() {
    var itemsContainer = document.getElementById('itemsContainer');
    itemsContainer.innerHTML = '';
    var selectedValue = parseInt(this.value);

    if (selectedValue > 0) {
        addMoreRowBtn.classList.remove('hidden');
        subtractRowBtn.classList.remove('hidden');
    } else {
        addMoreRowBtn.classList.add('hidden');
        subtractRowBtn.classList.add('hidden');
    }

    for (var i = 0; i < selectedValue; i++) {
        addItemRow(i + 1);
    }
});

document.getElementById('addMoreRowBtn').addEventListener('click', function() {
    var itemsContainer = document.getElementById('itemsContainer');
    var currentRowCount = itemsContainer.children.length;
    addItemRow(currentRowCount + 1);
});

document.getElementById('subtractRowBtn').addEventListener('click', function() {
    var itemsContainer = document.getElementById('itemsContainer');
    if (itemsContainer.children.length > 0) {
        itemsContainer.removeChild(itemsContainer.lastElementChild);
    }
});

function addItemRow(index) {
    var itemRow = `
        <div class="item-row w-full flex">
            <div class="w-full sm:w-1/5 px-2 mb-6">
                <label for="inputSelectItem${index}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select Item</label>
                <select id="inputSelectItem${index}" name="inputSelectItem${index}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" onchange="handleItemSelect(event)">
                    <option value="">Select Item</option>
                    <option value="createButton">Create Item</option>
                    @foreach ($items as $data)
                    <option value="{{ $data->Item_id }}">
                        {{ $data->Item_Khname }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="w-full sm:w-1/5 px-2 mb-8">
                <label for="QtyItem${index}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Qty Items</label>
                <input type="number" id="QtyItem${index}" name="QtyItem${index}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="w-full sm:w-1/5 px-2 mb-8">
                <label for="inputSelectUOM${index}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select UOM</label>
                <select id="inputSelectUOM${index}" name="inputSelectUOM${index}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select UOM</option>
                    @foreach ($uom as $data)
                    <option value="{{ $data->UOM_id }}">
                        {{ $data->UOM_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="w-full sm:w-1/5 px-2 mb-8">
                <label for="Qty${index}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Qty Price</label>
                <input type="number" id="Qty${index}" name="Qty${index}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" oninput="updateTotalPrice()">
            </div>
            <div class="w-full sm:w-1/5 px-2 mb-8">
                <label for="price${index}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Price</label>
                <input type="number" id="price${index}" name="price${index}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" oninput="updateTotalPrice()">
            </div>
            <div class="w-full sm:w-1/5 px-2 mb-8">
                <label for="inputSelectCurrency${index}" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select Currency</label>
                <select id="inputSelectCurrency${index}" name="inputSelectCurrency${index}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Currency</option>
                    <option value="Riel">Riel</option>
                    <option value="USD">USD</option>
                </select>
            </div>
        </div>
    `;
    document.getElementById('itemsContainer').insertAdjacentHTML('beforeend', itemRow);
}

function updateTotalPrice() {
    var totalPriceField = document.getElementById('Total_Price');
    var itemsContainer = document.getElementById('itemsContainer');
    var priceInputs = itemsContainer.querySelectorAll('input[id^="price"]');
    var qtyInputs = itemsContainer.querySelectorAll('input[id^="Qty"]');
    var totalPrice = 0;

    priceInputs.forEach(function(input, index) {
        var price = parseFloat(input.value);
        var qty = parseFloat(qtyInputs[index].value);
        if (!isNaN(price)) {
            totalPrice += price;
        }
    });

    totalPriceField.value = totalPrice;
}

function handleItemSelect(event) {
    var selectedValue = event.target.value;
    if (selectedValue === 'createButton') {
        togglePopup('popupItem');
    }
}

function togglePopup(popupId) {
        const popup = document.getElementById(popupId);
        popup.classList.toggle('hidden');
    }

document.getElementById('closeItemPopup').addEventListener('click', function() {
    togglePopup('popupItem');
});


</script>
