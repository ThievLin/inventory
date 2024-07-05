@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class=" bg-background text-foreground">
  <header class="flex flex-row items-center space-x-4 mt-2">
    <div class="ml-5">
      <img src="{{ asset('storage/images/official_logo.png') }}" alt="BSI Logo" class="h-10 w-12 rounded">
    </div>
    <div class="bg-primary p-3 shadow-md flex items-end justify-end flex-1">
      <div class="space-x-2 items-end justify-end">
        <h1 class="text-sm font-bold text-primary-foreground">BSI ADMIN</h1>
      </div>
    </div>
    <div>
      <img src="{{ asset('storage/images/me.png') }}" alt="Admin Profile" class="h-10 w-12 rounded-full mr-5">
    </div>
  </header>
  <div class="flex flex-col items-center py-6">
    <div class="flex space-x-2 -mt-10">
      <a href="inventory" class="bg-yellow-400 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        INVENTORY
      </a>
      <a href="supplier" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        SUPPLIER
      </a>
      <a href="items" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        ITEM
      </a>
      <a href="orders" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        ORDER
      </a>
      <a href="#" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        POS
      </a>
      <a href="product" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        PRODUCT
      </a>
      <a href="addons" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        ADD-ONS
      </a>
      <a href="reports" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        REPORTS
      </a>
    </div>
    <div class=" w-3/5 h-1 bg-gray-400 mt-2 rounded-sm"></div>
  </div>

  <div class="bg-background flex flex-col items-center p-4">
    <div class="flex justify-between items-center mb-4 w-4/5">
      <a href="#" class="bg-primary text-primary-foreground py-2 px-4 rounded-lg">CREATE</a>
      <div class="relative">
        <input type="text" placeholder="Search..." class="border border-input rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary" />
        <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
      </div>      
    </div>    
    <div class=" w-4/5 border-2 border-yellow-400 p-4">
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-collapse">
          <h4 class="text-center font-bold pb-2">DETAIL INVENTORY INFORMATION</h4>
          <thead>
            <tr class="bg-primary text-primary-foreground">
              <th class="py-4 px-4 border-b">Inventory 1</th>
              <th class="py-4 px-4 border-b">Inventory 2</th>
              <th class="py-4 px-4 border-b">Inventory 3</th>
              <th class="py-4 px-4 border-b">Inventory 4</th>
              <th class="py-4 px-4 border-b">Inventory 5</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-zinc-200">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-300">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-200">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-300">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-200">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-300">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="w-full text-secondary-foreground py-16 mt-3 bg-blue-600 text-center">
    <p class="pb-1">BSI Inventory System version 1.0.0</p>
    <h2 class="text-xl font-bold text-slate-50">INVENTORY PAGE</h2>
  </div>
</div>

