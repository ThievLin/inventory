<!-- Assuming your popup markup remains the same -->
<div id="editPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg w-1/2">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Product</h2>
        </div>
   
        <form id="editProductPopup"  action="" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PATCH')
            <input type="hidden" id="editPro_id" name="Pro_id" value="{{ $data->Pro_id }}">
            <div class="mb-4">
                <label for="editPro_name_eng" class="block text-sm font-medium text-gray-900 mb-1">Product Name Eng</label>
                <input type="text" id="editPro_name_eng" name="Pro_name_eng" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="editPro_name_kh" class="block text-sm font-medium text-gray-900 mb-1">Product Name Kh</label>
                <input type="text" id="editPro_name_kh" name="Pro_name_kh" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="editCate_Khname" class="block text-sm font-medium text-gray-900 mb-1">Product Category</label>
                <select id="editCate_Khname" name="Pro_Cate_id" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select Product</option>
                    @foreach ($proCate as $data)
                    <option value="{{ $data->Pro_Cate_id }}">
                        {{ $data->Cate_Khname }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="editimage" class="block text-sm font-medium text-gray-900 mb-1">Item Image</label>
                <div>
                    <button type="button" class="select-logo" onclick="document.getElementById('editimage').click()">Browse</button>
                    <input type="file" id="editimage" name="image" style="display:none">
                </div>
                <img id="imagePreview" src="" alt="Image Preview" class="h-20 w-24 rounded hidden mt-2">
              </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save Change</button>
                <button type="button" id="cancelEdit" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
