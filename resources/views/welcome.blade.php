<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD DELIVERY - HOME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body class="text-gray-900 bg-gray-100 font-body" id="body">
    <!-- hero start -->
    <div class="top-0 left-0 right-0 p-16 bg-orange-300 h-screen-75 rounded-b-full">
        <div class="flex justify-center">
            <div class="font-bold uppercase mr-auto">
                <a href="/" class="text-xl"><i class="fas fa-user-ninja mr-2"></i>Food <span
                        class="text-red-700">DELIVERY</span></a>
            </div>
            <div class="font-bold">
                <a href="/" class="py-2 px-5">Home</a>
                <a href="#order" class="py-2 px-5">Order</a>
                <a href="#contact" class="py-2 px-5">Contact</a>
            </div>
            <div class="ml-auto font-bold">
                <a href="#" class="py-2 px-5">Login</a>
                <a href="#" class="font-bold rounded-full bg-gray-100 py-2 px-5 ml-2">Sign Up</a>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-7 lg:ml-48 mt-12 lg:mt-10 text-center lg:text-left">
                <span class="font-bold text-hero">
                    DELIVERY food
                </span>
                <span class="font-bold text-6xl block ml-48 hidden xl:block">
                    your choice
                </span>
            </div>
            <div class="col-span-5 lg:mt-20 hidden md:block">
                <img src="images/pizza-hero.png" class="h-64 mx-auto lg:mx-0">
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="p-25" id="order">
        <div class="font-bold text-center text-5xl">
            What's the mood?
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 mt-12 font-bold text-center items-center text-lg">
            <a href="#" class="my-3">
                <div class="bg-orange-300 rounded-full py-6 w-4/5 md:w-1/3 mx-auto">
                    <span class="bg-white p-4 rounded-full text-center"><i class="fas fa-carrot"></i></span>
                    <span class="block mt-5">Salad</span>
                </div>
            </a>
            <a href="#" class="my-3">
                <div class="bg-orange-300 rounded-full py-6 w-4/5 md:w-1/3 mx-auto">
                    <span class="bg-white p-4 rounded-full"><i class="fas fa-hamburger"></i></span>
                    <span class="block mt-5">Burger</span>
                </div>
            </a>
            <a href="#" class="my-3">
                <div class="bg-orange-300 rounded-full py-6 w-4/5 md:w-1/3 mx-auto">
                    <span class="bg-white p-4 rounded-full"><i class="fas fa-pizza-slice"></i></span>
                    <span class="block mt-5">Pizza</span>
                </div>
            </a>
            <a href="#" class="my-3">
                <div class="bg-orange-300 rounded-full py-6 w-4/5 md:w-1/3 mx-auto">
                    <span class="bg-white p-4 rounded-full"><i class="fas fa-cocktail"></i></span>
                    <span class="block mt-5">Drinks</span>
                </div>
            </a>
            <a href="#" class="my-3">
                <div class="bg-orange-300 rounded-full py-6 w-4/5 md:w-1/3 mx-auto">
                    <span class="bg-white p-4 rounded-full"><i class="fas fa-ice-cream"></i></span>
                    <span class="block mt-5">Dessert</span>
                </div>
            </a>
        </div><br><br><br>
    </div>
    <!--main end-->
    <!--contact start--><br><br><br>
    <div class="bottom-0 left-0 right-0 bg-orange-300 py-20 text-center" id="contact">
        <span class="mt-12 font-bold text-5xl">SEND US A MESSAGE</span>
        <form class="mt-10 w-1/2 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <input type="text" class="rounded-lg bg-gray-200 p-2" placeholder="NAME">
                <input type="text" class="rounded-lg bg-gray-200 p-2" placeholder="EMAIL">
            </div>
            <div class="mt-10">
                <textarea class="rounded-lg bg-gray-200 p-2 w-full h-screen-25" placeholder="MESSAGE"></textarea>
            </div>
            <div class="mt-6">
                <button type="submit"
                    class="text-white text-xl hover:shadow-lg rounded-lg bg-gray-800 px-5 py-2">Send</button>
            </div>
        </form>
    </div>
    <!--contact end-->
</body>

</html>
