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

@extends('layouts.app-nav')

@section('content')
<div class="flex flex-col">
  <div class="flex flex-col flex-grow p-4 bg-background text-foreground">
    <div class="flex flex-col items-center flex-grow p-4">
      <div class="w-full lg:w-4/5 bg-card text-card-foreground">
        <div class="flex flex-col lg:flex-row">
          <div class="bg-white rounded-lg p-4 w-full lg:w-1/4 lg:pr-4 mb-4 lg:mb-0">
            <h2 class="text-xl font-bold mb-6 text-gray-800">Report Overview</h2>
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
          <div class="w-full lg:w-3/4">
            <div class="flex flex-col lg:flex-row items-center mb-6">
              <label class="mr-2 font-semibold">Start Date:</label>
              <input type="date" class="border border-input p-2 rounded-lg mb-4 lg:mb-0 lg:mr-4 w-full lg:w-auto" />
              <label class="mr-2 font-semibold">End Date:</label>
              <input type="date" class="border border-input p-2 rounded-lg mb-4 lg:mb-0 lg:mr-4 w-full lg:w-auto" />
              <button class="bg-primary text-primary-foreground p-2 px-4 rounded-lg w-full lg:w-auto">SEARCH</button>
            </div>
            <div class="flex flex-col lg:flex-row">
              <div class="w-full lg:w-2/3 pr-0 lg:pr-4 mb-4 lg:mb-0">
                <div id="columnchart_material" class="w-full" style="height: 400px;"></div>
              </div>
              <div class="w-full lg:w-1/3">
                <div id="piechart" class="w-full" style="height: 400px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
