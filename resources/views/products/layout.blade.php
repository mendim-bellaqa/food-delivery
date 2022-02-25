
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FOOD - DELIVERY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <body class="text-gray-900 bg-gray-100 font-body" id="body">
        <!-- wrapper start -->
        <div class="pt-16 px-10 grid lg:grid-cols-5 pb-20">

          <div class="bg-black opacity-50 z-20 top-0 bottom-0 left-0 right-0 fixed hidden" id="overlay">
          </div>
          <!-- nav start -->
          <div class="lg:col-span-1">
            <nav>
              <div class="flex justify-between mb-6 px-2 md:mb-16">
                <h1 class="font-bold uppercase">
                  <a href="index.html" class="text-xl"><i class="fas fa-user-ninja mr-2"></i>Food <span
                      class="text-red-700">Ninja</span></a>
                </h1>
                <div class="px-4 cursor-pointer lg:hidden" id="open-menu">
                  <i class="fas fa-bars"></i>
                </div>
              </div>
              <ul class="hidden lg:block mr-10 mb-10" id="menu">
                <li class="my-3">
                  <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold" href="items-4.html">
                    <i class="fas fa-carrot mr-2"></i>
                    <span>Salads</span>
                  </a>
                </li>
                <li class="my-3">
                  <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold bg-custom-yellow block" href="items-1.html">
                    <i class="fas fa-hamburger mr-2"></i>
                    <span>Burgers</span>
                  </a>
                </li>
                <li class="my-3">
                  <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold" href="items-3.html">
                    <i class="fas fa-pizza-slice mr-2"></i>
                    <span>Pizza</span>
                  </a>
                </li>
                <li class="my-3">
                  <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold" href="items-2.html">
                    <i class="fas fa-beer mr-2"></i>
                    <span>Beverages</span>
                  </a>
                </li>
                <div class="mt-16">
                  <span class="px-3 text-gray-500">Other</span>
                  <li class="my-3">
                    <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold" href="orders-1.html">
                      <i class="fas fa-redo-alt mr-2"></i>
                      <span>My Orders</span>
                    </a>
                  </li>
                  <li class="my-3">
                    <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold" href="profile.html">
                      <i class="fas fa-user-alt mr-2"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                </div>
              </ul>
            </nav>
          </div>
          <!--nav end-->
          <main class="lg:col-span-4">
            <div class="flex justify-center md:justify-end">
              <a href="index.html" class="rounded-full bg-gray-200 py-2 px-6 mr-auto"><i
                  class="fas fa-long-arrow-alt-left"></i></a>
              <button class="font-bold rounded-full bg-white mr-2 py-2 px-3 shadow sm:block hidden cart"><i
                  class="fas fa-shopping-basket"></i> 8
                items - $17.50</button>
              <a href="#" class="font-bold rounded-full bg-yellow-400 ml-2 py-2 px-3">login</a>
              <a href="#" class="font-bold rounded-full bg-gray-300 py-2 px-3 ml-2">signup</a>
            </div>
            <button class="font-bold rounded-full bg-white mr-2 py-2 px-3 shadow block sm:hidden mt-5 w-full cart"><i
                class="fas fa-shopping-basket mr-3"></i> 8
              items - $17.50</button>
            <div class="mt-16">
              <div><span class="font-bold text-2xl md:text-4xl">Food delivery - products</span><img src="images/hamburger.svg"
                  class="h-6 w-6 md:h-8 md:w-8 mb-3 ml-2 md:ml-5 inline-flex"></div>



<div class="container">
    @yield('content')
</div>

</body>
</html>

