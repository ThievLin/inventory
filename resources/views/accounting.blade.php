@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="bg-background text-foreground">
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
      <a href="accounting" class="bg-yellow-400 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        ACCOUNTING
      </a>
    </div>
    <hr class=" w-10 h-1 bg-gray-400 mt-2 rounded-sm"></hr>
  </div>

  <div class="bg-background flex flex-col items-center p-4">
    <div class="flex justify-between items-center mb-4 w-4/5">
      <a href="#" class="bg-primary text-primary-foreground py-2 px-4 rounded-lg">CREATE</a>
      <div class="relative">
        <div class="flex items-center space-x-2">
            <label for="start-date" class="text-muted-foreground">Date Range:</label>
            <input id="start-date" type="date" class="border border-yellow-400 rounded p-2" placeholder="Start Date" />
            <span class="text-muted-foreground">To</span>
            <input id="end-date" type="date" class="border border-yellow-400 rounded p-2" placeholder="End Date" />
            <button class="bg-accent text-accent-foreground py-2 px-4 rounded">SEARCH</button>
        </div>
      </div>     
    </div>
  </div>

  <div class="bg-background text-foreground p-4 flex flex-col items-center justify-center">
    <div class="w-4/5">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div class="">
            <div class="border-2 border-yellow-400 rounded p-4 text-center mb-4">
                <h2 class="text-lg font-semibold mb-2">TOTAL SALE AMOUNT</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p class="text-2xl font-bold">123</p>
              </div>
              <div class="border-2 border-yellow-400 rounded p-4 text-center">
                <h2 class="text-lg font-semibold mb-2">TOTAL ORDER AMOUNT</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p class="text-2xl font-bold">123</p>
              </div>
        </div>

        <div class="">
            <div class="border-2 border-yellow-400 rounded p-4 text-center mb-4">
                <h2 class="text-lg font-semibold mb-2">TOTAL INCOME</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p>USD: <span class="text-2xl">123</span></p>
                <p>RIEL: <span class="text-2xl">123</span></p>
              </div>
              <div class="border-2 border-yellow-400 rounded p-4 text-center">
                <h2 class="text-lg font-semibold mb-2">TOTAL EXPENSE</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p>USD: <span class="text-2xl">123</span></p>
                <p>RIEL: <span class="text-2xl">123</span></p>
              </div>
        </div>


        <div class="col-span-1 md:col-span-3 border-2 border-yellow-400 rounded p-4 text-center">
          <h2 class="text-lg font-semibold mb-2">TOTAL PROFIT</h2>
          <div class="grid grid-cols-3 gap-6 text-center items-center">
            <div>
              <p class="text-lg font-bold">USA</p>
              <div class="border-t-2 border-yellow-500 my-6"></div>
              <p class="text-2xl">123</p>
            </div>
            <p class="border-l-2 border-yellow-500 h-24 mx-auto mt-4"></p>
            <div>
              <p class="text-lg font-bold">RIEL</p>
              <div class="border-t-2 border-yellow-500 my-6"></div>
              <p class="text-2xl">123</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w-full text-secondary-foreground py-16 mt-3 bg-blue-600 text-center">
    <p class="pb-1">BSI Inventory System version 1.0.0</p>
    <h2 class="text-xl font-bold text-slate-50">ACCOUNTING PAGE</h2>
  </div>
</div>
