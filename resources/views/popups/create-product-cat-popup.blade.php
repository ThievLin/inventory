<!-- Popup form -->
<div id="createProductCatPopup" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-60">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Create new Product Category</h2>
        </div>
        <form id="itemCatForm" enctype="multipart/form-data" class="p-6">
            <div class="mb-4">
                <label for="Cate_Khname" class="block text-sm font-medium text-gray-900 mb-1">Product Cate Khname</label>
                <input type="text" id="Cate_Khname" name="Cate_Khname" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="Cate_Engname" class="block text-sm font-medium text-gray-900 mb-1">Product Cate Enname</label>
                <input type="text" id="Cate_Engname" name="Cate_Engname" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="IPG_id" class="block text-sm font-medium text-gray-900 mb-1">Select Product Group</label>
                <select id="IPG_id" name="IPG_id" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach ($shop_se as $data)
                    <option value="{{ $data->S_id }}">
                        {{ $data->S_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="closeCreateProductCatPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
  </div>