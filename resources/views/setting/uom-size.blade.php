<div class="max-w-screen-lg mx-auto p-4">
    <div class="relative flex flex-col md:flex-row justify-between items-center w-full md:w-4/5 mb-4">
        <a href="#" id="createUOMButton" class="bg-primary text-primary-foreground py-1 px-4 rounded-lg text-sm">CREATE</a>
    </div>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($uom as $data)
        <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2">{{$data->UOM_name}}</h3>
            <p class="text-gray-500 text-lg">{{$data->UOM_abb}}</p>
        </div>
        @endforeach
    </div>
    @include('popups.create-uom-popup')
</div>

<script>
    // JavaScript to handle popup visibility
document.getElementById('createUOMButton').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('createUOMPopup').classList.remove('hidden');
});

document.getElementById('closeCreateUOMPopup').addEventListener('click', function() {
    document.getElementById('createUOMPopup').classList.add('hidden');
});

// Optionally handle form submission here
document.getElementById('createUOMForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Add logic to handle form submission, e.g., sending data to the server
    alert('UOM Created!');
    document.getElementById('createUOMPopup').classList.add('hidden');
});

</script>

