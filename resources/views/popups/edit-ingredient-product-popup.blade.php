<!-- Popup for editing ingredients -->
<div id="EditIngredientPopup" class="fixed inset-0 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 relative"> <!-- Added 'relative' for positioning -->
        <button id="closePopupButton" class="absolute top-0 right-0 mt-4 mr-4 text-gray-500">
            <i class="fas fa-times"></i>
        </button>
        <h2 class="text-2xl font-bold mb-4">Edit Ingredients</h2>
        <form id="editIngredientForm" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="Pro_id" id="Pro_id">
            <div id="ingredientsContainer"></div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Changes</button>
            <button type="button" id="closeEditIngredientPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
        </form>
    </div>
</div>
@include('popups.create-productIngr')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const editIngredientPopup = document.getElementById('EditIngredientPopup');
    const popupItem_1 = document.getElementById('popupItem_1');
    const closeEditIngredientPopup = document.getElementById('closeEditIngredientPopup');
    const closeCreateItemPopup = document.getElementById('closeCreateItemPopup');

    document.querySelectorAll('.edit-ingredient-btn').forEach(button => {
        button.addEventListener('click', () => {
            const productName = button.getAttribute('data-product-name');
            const itemName = button.getAttribute('data-item-name');
            const qty = button.getAttribute('data-qty');
            const uom = button.getAttribute('data-uom');
            const proId = button.getAttribute('data-pro-id');
            editIngredientPopup.querySelector('label[for="Item_Engname"]').textContent = productName;

            editIngredientPopup.querySelector('input[name="IPI_id"]').value = proId;

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
    closeCreateItemPopup.addEventListener('click', () => {
        // Hide the popup
        popupItem_1.classList.add('hidden');
    });
});

function handleSelect(event) {
    var selectedValue = event.target.value;
    if (selectedValue === 'createnewITEM') {
        togglePopup('popupItem_1');
    }
}
function togglePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) {
        popup.classList.toggle('hidden');
    }
}
</script> 
