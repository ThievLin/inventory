<div id="EditIngredientPopup" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-60">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2 text-center">Edit Ingredient Product</h2>
        </div>
        <form id="IngredientForm" enctype="multipart/form-data" class="p-6">
            <div class="mb-4 flex justify-center">
                <label for="Item_Engname" class="block text-2xl font-bold text-gray-900 text-center mb-1">Hot Vanilla Latte</label>
            </div>
            <div class="mb-4 flex justify-center">
                <label for="Item_Khname" class="block text-lg font-semibold text-gray-900 text-center mb-1">វ៉ាន់នីឡាឡាតេក្តៅ</label>
            </div>
            <div class="mb-4">
                <label class="block text-md font-semibold text-gray-900 mb-1">ធាតុផ្សំ</label>
                <input type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
                <input type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
                <input type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save Change</button>
                <button type="button" id="closeEditIngredientPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    const editIngredientPopup = document.getElementById('EditIngredientPopup');
    const closeEditIngredientPopup = document.getElementById('closeEditIngredientPopup');

    document.querySelectorAll('.edit-ingredient-btn').forEach(button => {
        button.addEventListener('click', () => {
            // Show the popup
            editIngredientPopup.classList.remove('hidden');
        });
    });

    closeEditIngredientPopup.addEventListener('click', () => {
        // Hide the popup
        editIngredientPopup.classList.add('hidden');
    });
});
</script>