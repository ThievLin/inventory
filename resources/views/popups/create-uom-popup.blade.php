<!-- Popup form -->
<div id="createUOMPopup" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-60">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Create New UOM</h2>
        </div>
        <form id="createUOMForm" class="p-6">
            <div class="mb-4">
                <label for="uomName" class="block text-sm font-medium text-gray-900 mb-1">UOM Name</label>
                <input type="text" id="uomName" name="uomName" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="uomAbbreviation" class="block text-sm font-medium text-gray-900 mb-1">UOM Abbreviation</label>
                <input type="text" id="uomAbbreviation" name="uomAbbreviation" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="closeCreateUOMPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
