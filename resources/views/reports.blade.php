@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['1st Qtr', 11],
          ['2nd Qtr', 6],
          ['3rd Qtr', 3],
          ['4th Qtr', 3]
        ]);

        var options = {
          title: 'Sales'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'Sales', 'Expenses', 'Profit'],
      ['2014', 1000, 400, 200],
      ['2015', 1170, 460, 250],
      ['2016', 660, 1120, 300],
      ['2017', 1030, 540, 350]
    ]);

    var options = {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>

<div class="min-h-screen flex flex-col bg-background text-foreground">
  <header class="flex flex-row items-center space-x-4">
    <div class="ml-5">
      <img src="{{ asset('storage/images/official_logo.png') }}" alt="BSI Logo" class="h-8 w-10 rounded">
    </div>
    <div class="bg-primary p-4 shadow-md flex items-end justify-end flex-1">
      <div class="space-x-2 items-end justify-end">
        <h1 class="text-sm font-bold text-primary-foreground">BSI ADMIN</h1>
      </div>
    </div>
    <div>
      <img src="{{ asset('storage/images/me.png') }}" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5">
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
      <a href="reports" class="bg-yellow-400 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-6 py-2">
        REPORTS
      </a>
    </div>
    <div class="w-3/5 h-1 bg-gray-400 mt-2 rounded-sm"></div>
  </div>

  <div class="flex flex-col items-center flex-grow p-4">
    <div class="w-4/5 bg-card text-card-foreground">
      <div class="flex">
        <div class="bg-white rounded-lg p-4 w-1/4 pr-4">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Report Overview</h2>
    <ul class="space-y-2">
        <li class="flex items-center cursor-pointer text-primary hover:text-primary-700">
            <span class="text-lg mr-2">+</span> Inventory Detail
        </li>
        <li class="flex items-center cursor-pointer text-gray-600">
            <span class="text-lg mr-2">+</span> Detailed Report
        </li>
        <li class="flex items-center cursor-pointer text-gray-600">
            <span class="text-lg mr-2">+</span> Sales Trends
        </li>
        <li class="flex items-center cursor-pointer text-gray-600">
            <span class="text-lg mr-2">+</span> Customer Insights
        </li>
        <li class="flex items-center cursor-pointer text-gray-600">
            <span class="text-lg mr-2">+</span> Profit Analysis
        </li>
    </ul>
</div>


        <div class="w-3/4">
            <div class="flex items-center mb-4">
                <label class="mr-2 font-semibold">Start Date:</label>
                <input type="date" class="border border-input p-2 rounded-lg mr-4" />
                <span class="mr-4 font-semibold">End Date:</span>
                <input type="date" class="border border-input p-2 rounded-lg mr-4" />
                <button class="bg-primary text-primary-foreground p-2 px-4 rounded-lg">SEARCH</button>
              </div>
              
          <div class="flex">
            <div class="w-1/2 pr-4">
              <div id="columnchart_material" style="width: 600px; height: 400px;"></div>
            </div>

            <div class="w-1/2">
                <div id="piechart" style="width: 400px; height: 400px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w-full text-secondary-foreground py-16 mt-3 bg-blue-600 text-center">
    <p class="pb-1">BSI Inventory System version 1.0.0</p>
    <h2 class="text-xl font-bold text-slate-50">REPORTS PAGE</h2>
  </div>
</div>
