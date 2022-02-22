<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

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
                        <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold" href="items-1.html">
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
                            <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold bg-custom-yellow block"
                                href="orders-1.html">
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
                <div><span class="font-bold text-2xl md:text-4xl">Your past orders:</span></div>

                <div class="mt-5 grid grid-cols-2 lg:grid-cols-1 gap-10">

                    <!--card-->
                    <div
                        class="bg-white rounded-lg shadow-md lg:border-l-8 border-gray-800 text-center hover:shadow-lg order">
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="bg-custom-yellow p-3">
                                <span class="font-bold text-lg">13, November 2020</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">8 items</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">$27.50</span>
                            </div>
                            <div class="p-3">
                                <button class="rounded-lg bg-custom-yellow px-3 py-1 font-bold">Order details</button>
                            </div>
                        </div>
                    </div>
                    <!--card end-->

                    <!--card-->
                    <div
                        class="bg-white rounded-lg shadow-md lg:border-l-8 border-gray-800 text-center hover:shadow-lg order">
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="bg-custom-yellow p-3">
                                <span class="font-bold text-lg">13, November 2020</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">8 items</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">$27.50</span>
                            </div>
                            <div class="p-3">
                                <button class="rounded-lg bg-custom-yellow px-3 py-1 font-bold">Order details</button>
                            </div>
                        </div>
                    </div>
                    <!--card end-->

                    <!--card-->
                    <div
                        class="bg-white rounded-lg shadow-md lg:border-l-8 border-gray-800 text-center hover:shadow-lg order">
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="bg-custom-yellow p-3">
                                <span class="font-bold text-lg">13, November 2020</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">8 items</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">$27.50</span>
                            </div>
                            <div class="p-3">
                                <button class="rounded-lg bg-custom-yellow px-3 py-1 font-bold">Order details</button>
                            </div>
                        </div>
                    </div>
                    <!--card end-->

                    <!--card-->
                    <div
                        class="bg-white rounded-lg shadow-md lg:border-l-8 border-gray-800 text-center hover:shadow-lg order">
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="bg-custom-yellow p-3">
                                <span class="font-bold text-lg">13, November 2020</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">8 items</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">$27.50</span>
                            </div>
                            <div class="p-3">
                                <button class="rounded-lg bg-custom-yellow px-3 py-1 font-bold">Order details</button>
                            </div>
                        </div>
                    </div>
                    <!--card end-->

                    <!--card-->
                    <div
                        class="bg-white rounded-lg shadow-md lg:border-l-8 border-gray-800 text-center hover:shadow-lg order">
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="bg-custom-yellow p-3">
                                <span class="font-bold text-lg">13, November 2020</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">8 items</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">$27.50</span>
                            </div>
                            <div class="p-3">
                                <button class="rounded-lg bg-custom-yellow px-3 py-1 font-bold">Order details</button>
                            </div>
                        </div>
                    </div>
                    <!--card end-->

                    <!--card-->
                    <div
                        class="bg-white rounded-lg shadow-md lg:border-l-8 border-gray-800 text-center hover:shadow-lg order">
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="bg-custom-yellow p-3">
                                <span class="font-bold text-lg">13, November 2020</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">8 items</span>
                            </div>
                            <div class="p-3">
                                <span class="font-bold text-md">$27.50</span>
                            </div>
                            <div class="p-3">
                                <button class="rounded-lg bg-custom-yellow px-3 py-1 font-bold">Order details</button>
                            </div>
                        </div>
                    </div>
                    <!--card end-->

                </div>

            </div>


        </main>
        <aside
            class="transform top-0 right-0 w-full md:w-2/5 shadow-2xl bg-white fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30 translate-x-full"
            id="cart-panel">
            <div class="p-8">
                <button class="bg-gray-200 py-2 px-6 rounded-full" id="close-cart-panel"><i
                        class="fas fa-times"></i></button>
                <main class="text-center font-bold">
                    <i class="fas fa-shopping-basket fa-3x mx-auto mt-10"></i>
                    <table class="table-auto mx-auto mt-10">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Item</th>
                                <th class="px-4 py-2">Quantity</th>
                                <th class="px-4 py-2">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Bacon Jammer</td>
                                <td class="border px-4 py-2">2x</td>
                                <td class="border px-4 py-2">$ 3.50</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Pepperoni Lover</td>
                                <td class="border px-4 py-2">3x</td>
                                <td class="border px-4 py-2">$ 1.00</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Sanguine Refresher</td>
                                <td class="border px-4 py-2">1x</td>
                                <td class="border px-4 py-2">$ 2.50</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-5 text-lg">Total: <span class="text-custom-yellow">$12.50</span></div>
                    <button class="rounded-lg bg-custom-yellow px-4 py-2 font-bold mt-6">Order & Pay</button>
                </main>
            </div>
        </aside>
        <aside
            class="transform top-0 right-0 w-full md:w-2/5 shadow-2xl bg-white fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30 translate-x-full"
            id="order-panel">
            <div class="p-8">
                <button class="bg-gray-200 py-2 px-6 rounded-full" id="close-order-panel"><i
                        class="fas fa-times"></i></button>
                <main class="text-center font-bold">
                    <span class="text-xl">13, November 2020</span>
                    <table class="table-auto mx-auto mt-10">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Item</th>
                                <th class="px-4 py-2">Quantity</th>
                                <th class="px-4 py-2">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Bacon Jammer</td>
                                <td class="border px-4 py-2">2x</td>
                                <td class="border px-4 py-2">$ 3.50</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Pepperoni Lover</td>
                                <td class="border px-4 py-2">3x</td>
                                <td class="border px-4 py-2">$ 1.00</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Sanguine Refresher</td>
                                <td class="border px-4 py-2">1x</td>
                                <td class="border px-4 py-2">$ 2.50</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-5 text-lg">Total: <span class="text-custom-yellow">$12.50</span></div>
                </main>
            </div>
        </aside>
    </div>
    <!--wrapper end-->
    <script src="js/cart.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/orders.js"></script>
</body>

</html>