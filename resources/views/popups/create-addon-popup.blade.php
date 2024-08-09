<div id="popupcreate" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Add Add-ons</h2>
        </div>
        <form id="AddonForm" action="{{ route('add-ons.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            <div class="mb-4">
                <label for="Addons_name" class="block text-sm font-medium text-gray-900 mb-1">Add-ons Name</label>
                <input type="text" id="Addons_name" name="Addons_name" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="Percentage" class="block text-sm font-medium text-gray-900 mb-1">Percentage</label>
                <input type="text" id="Percentage" name="Percentage" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="Qty" class="block text-sm font-medium text-gray-900 mb-1">Qty</label>
                <input type="text" id="Qty" name="Qty" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="UOM_id" class="block text-sm font-medium text-gray-900 mb-1">UOM</label>
                <select id="UOM_id" name="UOM_id" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Select a UOM</option>
                    @foreach ($uom as $data)
                    <option value="{{ $data->UOM_id }}">
                        {{ $data->UOM_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="cancelCre" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
