@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="justify-center text-center mt-10 mb-10">
                <h2>All products ready to be delivered</h2>
            </div>
        </div>
    </div>

  <div class=" bg-gray-100 flex">

    <a class="rounded-lg shadow-lg bg-white p-6 w-72 group hover:shadow-2xl" href="#">

      <!-- Title -->
      <p class="text-lg text-gray-800 font-semibold">PIZZA</p>

      <!-- Price -->
      <div class="flex flex-row mt-3 gap-2 place-items-end">
        <p class="text-6xl font-bold"> $10 </p>
        <p class="text-2xl font-light items-bottom pb-1"> /mo </p>
      </div>

      <!-- Desctiption -->
      <div class="flex flex-col gap-2 mt-5">

        <!-- 1st desctiption -->
        <div class="grid grid-cols-12">
          <div class="col-span-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-3 stroke-green-500" fill="none" viewBox="0 0 24 24" stroke="#22c55e">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="col-span-10">
            <p class="text-gray-500"> Simple, managed Kubernetes </p>
          </div>
        </div>

        <!-- 2nd desctiption -->
        <div class="grid grid-cols-12">
          <div class="col-span-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-3 stroke-green-500" fill="none" viewBox="0 0 24 24" stroke="#22c55e">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="col-span-10">
            <p class="text-gray-500"> Free control plane included  </p>
          </div>
        </div>

        <!-- 3rd desctiption -->
        <div class="grid grid-cols-12">
          <div class="col-span-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-3 stroke-green-500" fill="none" viewBox="0 0 24 24" stroke="#22c55e">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="col-span-10">
            <p class="text-gray-500"> Scale automatically, increase availability  </p>
          </div>
        </div>

      </div>

    </a>

  </div>

@endsection
