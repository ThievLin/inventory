<div id="EditIngredientPopup" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-60">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2 text-center">EDIT INGREDIENT</h2>
        </div>
        <form action="/setting/${proId}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PATCH')
            <div class="mb-4 flex justify-center">
                <label for="Item_Engname" class="block text-2xl font-bold text-gray-900 text-center mb-1"></label>
            </div>
            <div class="mb-4">
                <label class="block text-md font-semibold text-gray-900 mb-1">ធាតុផ្សំ</label>
                <select id="IIQ_name" name="IIQ_name" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
                    <option value=""></option>
                    @foreach ($ingredientQty as $data)
                    <option value="{{ $data->IIQ_name }}">
                        {{ $data->IIQ_name }}
                    </option>
                    @endforeach
                </select>
                {{-- <input name="IIQ_name" type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1"> --}}
                <input name="Item_Name" type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
                <input name="Qty" type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
                <input name="UOM" type="text" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-1">
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">UPDATE</button>
                <button type="button" id="closeEditIngredientPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">CANCEL</button>
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
            // Extract data attributes from the clicked button
            // const IIQname = button.getAttribute('data-IIQ_name');
            const productName = button.getAttribute('data-product-name');
            const itemName = button.getAttribute('data-item-name');
            const qty = button.getAttribute('data-qty');
            const uom = button.getAttribute('data-uom');
            const proId = button.getAttribute('data-pro-id');

            // Populate the popup form fields
            // editIngredientPopup.querySelector('input[name="IIQ_name"]').value = IIQname;
            editIngredientPopup.querySelector('label[for="Item_Engname"]').textContent = productName;
            editIngredientPopup.querySelector('input[name="Item_Name"]').value = itemName;
            editIngredientPopup.querySelector('input[name="Qty"]').value = qty;
            editIngredientPopup.querySelector('input[name="UOM"]').value = uom;

            // Update form action with the correct ID
            const form = editIngredientPopup.querySelector('form');
            form.action = `/setting/test/${proId}`;

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
