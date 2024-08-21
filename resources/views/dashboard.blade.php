@extends('layouts.app-nav')
@section('content')
<div class="flex justify-center items-center mt-4">
    <div id="dashboard" class="p-2 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8 w-full mb-14 mt-1 md:w-4/5 lg:w-4/5">
        <div class="w-full">
          <div class="border-2 border-yellow-500 rounded-lg p-14 text-center shadow-lg">
            <h2 class="text-xl font-bold mb-2">DAILY SALE</h2>
            <div class="border-t-2 border-yellow-500 my-6 mt-1"></div>
            <p class="text-xl font-bold ">{{$totalDailySales}}</p>
          </div>
          <div class="border-2 border-yellow-500 rounded-lg p-14 text-center mt-4 shadow-lg">
            <h2 class="text-xl font-bold">TOP PRODUCT</h2>
            <div class="border-t-2 border-yellow-500 my-6 mt-1"></div>
              @if ($topProduct)
                  <p class="text-xl font-bold">{{ $topProduct->Product_name_eng }}: {{ $topProduct->total_qty }}</p>
              @else
                  <p class="text-xl font-bold">No products sold today</p>
              @endif
          </div>
        </div>
        <div class="border-2 border-yellow-500 rounded-lg p-10 w-full shadow-lg">
          <h2 class="text-xl font-bold text-center mb-4">STOCK-ON-HAND</h2>
          <div class="border-t-2 border-yellow-500 my-6"></div>
          <div class="grid grid-cols-6 gap-6 text-center m-auto">
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
        <div class="border-2 border-yellow-500 rounded-lg p-3 bg-white shadow-lg w-full">
          <h2 class="text-2xl font-bold text-center mb-4">PRODUCT LIST</h2>
          <div class="border-t-2 border-yellow-500 my-4"></div>
          <div class="overflow-y-auto" style="max-height: 400px;">
            <table class="w-full border-collapse">
              <thead>
                <tr>
                  <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Product Name ENG</th>
                  <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Product Name KH</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($product as $data)
                <tr>
                  <td class="border border-yellow-500 p-4 bg-zinc-300">{{$data->Pro_name_eng}}</td>
                  <td class="border border-yellow-500 p-4 bg-zinc-300">{{$data->Pro_name_kh}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>        
      </div>      
</div>
@endsection