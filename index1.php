<?php include("header.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Before they sold out
          <br class="hidden lg:inline-block">readymade gluten
        </h1>
        <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="images/h1-banner-img-1.jpeg">
      </div>
    </div>
  </section>
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-white">OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h1-banner-img-2.jpeg">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="bg1">
              <input type="hidden" name="price" value="4">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h1-banner-img-3.jpeg">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Marshmello</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="marshmallow">
              <input type="hidden" name="price" value="4">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h2-1-rev-img-1.jpeg">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="bg1">
              <input type="hidden" name="price" value="4">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h2-1-rev-img-2.jpeg">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="bg1">
              <input type="hidden" name="price" value="4">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h2-1-rev-img-3.jpeg">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="bg1">
              <input type="hidden" name="price" value="4">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/p7-img-2.png">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="bg1">
              <input type="hidden" name="price" value="4">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h1-rev-img-5.png">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="bg2">
              <input type="hidden" name="price" value="56">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="images/h1-rev-img-7.png">
            <div class="w-full">
              <form action="manage_cart.php" method="POST">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit" name="add_to_cart">Add to Cart</button>
              <input type="hidden" name="item_name" value="cake">
              <input type="hidden" name="price" value="250">
              </form action="manage_cart.php" method="POST">
            </div>
          </div>
        </div>
      </div>
  </section>
  <footer class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Tailblocks</span>
      </a>
      <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
        <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>
</html>