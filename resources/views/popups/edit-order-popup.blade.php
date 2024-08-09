<div id="editOrderPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg w-2/3">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Order</h2>
        </div>
      <form id="editOrderForm" class="p-6">
        <div class="flex flex-wrap -mx-2 mb-4">
            <h3 class="w-full text-lg font-bold text-gray-800 mb-2">Order Info</h3>
            <div class="w-full h-0.5 bg-yellow-400 rounded-sm mb-4"></div>
            <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                <label for="input1" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Order Number</label>
                <input type="text" id="input1" name="input1" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                <label for="input2" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Receipt Image</label>
                <input type="file" id="input2" name="input2" class="text-sm border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                <label for="input3" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Total Price</label>
                <input type="number" id="input3" name="input3" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                <label for="input4" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Select Supplier</label>
                <select id="input4" name="input4" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select Supplier</option>
                    <option>Supplier 1</option>
                    <option>Supplier 2</option>
                    <option>Supplier 3</option>
                </select>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                <label for="input5" class="block text-lg sm:text-sm font-medium text-gray-900 mb-1">Inc VAT</label>
                <input type="checkbox" id="input5" name="input5" class="h-6 w-6 ml-10 border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
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
        <div class="flex justify-end">
            <button type="button" id="closeEditPopup" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-md focus:outline-none mr-2">Cancel</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md focus:outline-none">Save Change</button>
        </div>
      </form>
    </div>
</div>
  