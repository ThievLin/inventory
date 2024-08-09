<div id="popupcreate" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Add Product</h2>
        </div>
        <form id="productForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            <div class="mb-4">
                <label for="Pro_name_eng" class="block text-sm font-medium text-gray-900 mb-1">Product Name Eng</label>
                <input type="text" id="Pro_name_eng" name="Pro_name_eng" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="Pro_name_kh" class="block text-sm font-medium text-gray-900 mb-1">Product Name Kh</label>
                <input type="text" id="Pro_name_kh" name="Pro_name_kh" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="Pro_Cate_id" class="block text-sm font-medium text-gray-900 mb-1">Product Category</label>
                <select id="Pro_Cate_id" name="Pro_Cate_id" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Select product category</option>
                    @foreach ($proCate as $data)
                    <option value="{{ $data->Pro_Cate_id }}">
                        {{ $data->Cate_Khname }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-900 mb-1">Item Image</label>
                <div>
                    <button type="button" class="select-logo" onclick="document.getElementById('image').click()">Browse</button>
                    <input type="file" id="image" name="image" style="display:none">
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="cancelCre" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
