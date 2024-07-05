@vite('resources/css/app.css')

<div class="min-h-screen bg-background text-foreground">
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
      <a href="inventory" class="bg-gray-300 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
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

  <div class="flex justify-center items-center mt-6">
    <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-8 w-full md:w-4/5">
      <div>
        <div class="border-2 border-yellow-500 rounded-lg p-12 text-center">
          <h2 class="text-xl font-bold">DAILY SALE</h2>
          <div class="border-t-2 border-yellow-500 my-6 mt-1"></div>
          <p class="text-xl font-bold">123</p>
        </div>
        <div class="border-2 border-yellow-500 rounded-lg p-10 text-center mt-4">
          <h2 class="text-xl font-bold ">TOP PRODUCT</h2>
          <div class="border-t-2 border-yellow-500 my-6 mt-1"></div>
          <p class="text-xl font-bold">1. Iced Green Tea</p>
        </div>
      </div>
  
      <div class="border-2 border-yellow-500 rounded-lg p-10">
        <h2 class="text-xl font-bold text-center mb-4">STOCK-ON-HAND</h2>
        <div class="border-t-2 border-yellow-500 my-6"></div>
        <div class="grid grid-cols-6 gap-6 text-center">
          <div>
            <p class="text-lg font-bold">COFFEE</p>
            <p class="text-md">2 Kg</p>
          </div>
          <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
          <div>
            <p class="text-lg font-bold">SUGAR</p>
            <p class="text-md">0.75 Kg</p>
          </div>
          <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
          <div>
            <p class="text-lg font-bold">MILK</p>
            <p class="text-md">1.5 Liter</p>
          </div>
        </div>
        <div class="border-t-2 border-yellow-500 my-6"></div>
        <div class="grid grid-cols-6 gap-6 text-center">
          <div>
            <p class="text-lg font-bold">CREAM</p>
            <p class="text-md"></p>
          </div>
          <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
          <div>
            <p class="text-lg font-bold"></p>
            <p class="text-md"></p>
          </div>
          <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
          <div>
            <p class="text-lg font-bold"></p>
            <p class="text-md"></p>
          </div>
        </div>
      </div>
  
      <div class="border-2 border-yellow-500 rounded-lg p-3 bg-white shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-4">PRODUCT LIST</h2>
        <div class="border-t-2 border-yellow-500 my-4"></div>
        <table class="w-full border-collapse">
          <thead>
            <tr>
              <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 1</th>
              <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 2</th>
              <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 3</th>
              <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 4</th>
              <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 5</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
            </tr>
            <tr>
              <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
            </tr>
            <tr>
              <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
            </tr>
            <tr>
              <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
              <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
            </tr>
            <tr>
              <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
              <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
  
  <div class="w-full text-secondary-foreground py-16 mt-32 bg-blue-600 text-center">
    <p class="pb-1">BSI Inventory System version 1.0.0</p>
    <h2 class="text-xl font-bold text-slate-50">DASHBOARD PAGE</h2>
  </div>
</div>
