<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Product Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
    body { font-family: 'Roboto Mono', monospace; }
  </style>
</head>
<body class="bg-white text-black">

  <!-- Header -->
  <header class="flex justify-between items-center px-10 py-6 relative">
    <!-- Menu Button -->
    <button id="menuToggle" class="text-3xl">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Logo -->
    <div class="text-center absolute left-1/2 transform -translate-x-1/2">
      <div class="font-extrabold text-4xl tracking-tight flex items-center justify-center">
        kdm
        <span class="relative">
          v
          <span class="block w-3 h-3 rounded-full bg-sky-400 absolute -top-1 -right-3"></span>
        </span>
      </div>
      <div id="current-time" class="text-sm text-gray-600 mt-1"></div>
    </div>


    
  </header>

  
  <div id="subMenu" class="hidden fixed top-0 left-0 w-64 h-full bg-white shadow-lg z-50 p-6">
    <button id="closeMenu" class="text-black font-bold mb-4">Close</button>
    <ul class="space-y-4">
      <li><a href="index.php" class="block text-lg font-semibold">Home</a></li>
      <li><a href="index MEN.php" class="block text-lg font-semibold">MEN's</a></li>
      <li><a href="index WOMEN.php" class="block text-lg font-semibold">WOMEN's</a></li>
      <li><a href="index3.php" class="block text-lg font-semibold">Product 3</a></li>
    </ul>
  </div>


  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
    <?php 
      $products = [
      
        ["indexW1.php", "https://www.sprayground.com/cdn/shop/files/file_cd189763-51e0-4ccd-aa86-7398362a32de.png?v=1748981993", "BRICK BOTANIST DLXR BACKPACK", 65.00],
        ["indexW2.php", "https://www.sprayground.com/cdn/shop/files/file_289e8cd3-902b-462b-88f1-ac1ee29bdfa8.png?v=1748982083", "CANDY POP DLXR BACKPACK", 80.00],
        ["indexW3.php", "https://www.sprayground.com/cdn/shop/files/file_756b4689-7d4a-42a2-8ec6-e6bbbedc3a65.png?v=1748982091", "ELEGANT BOMBASTIC DLXSV BACKPACK", 90.00],
        ["indexW4.php", "https://www.sprayground.com/cdn/shop/files/file_e30ad884-ab5e-446a-891f-453b0b4b45e7.png?v=1748982225", "ASTROGALAXY DLXSV BACKPACK", 80.00],
        ["indexW5.php", "https://www.sprayground.com/cdn/shop/files/file_1fa05564-fff2-4b28-a5b9-56ea8b614e17.png?v=1748981869", "SHARK CENTRAL PULSE BACKPACK", 80.00],
        ["indexW6.php", "https://www.sprayground.com/cdn/shop/files/file_39db3f87-9f18-4a4e-81f6-6a417d14aa1b.png?v=1748982222", "KITTY KASH: ON THE EDGE DLXR BACKPACK", 70.00],
    ];
      foreach ($products as $product) {
          echo "<div class='border p-2 relative'>
                  <a href='{$product[0]}'>
                    <img src='{$product[1]}' alt='{$product[2]}' class='w-full object-cover mb-2 transition-transform duration-300 hover:scale-105'>
                    <div class='absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded'>WOMEN</div>
                    <h3 class='font-bold text-center'>{$product[2]}</h3>
                    <p class='text-center text-gray-600'>\$" . number_format($product[3], 2) . "</p>
                  </a>
                </div>";
      }
    ?>
</div>



  <div id="basketWrapper" class="fixed top-0 right-0 bg-white shadow-lg w-full md:w-[400px] h-full z-50 p-6 hidden">
    <button id="closeBasketBtn" class="text-black font-bold mb-4">Close</button>
    <div id="basketItems" class="overflow-y-auto max-h-[60vh]">
      <div>Your cart is empty!</div>
    </div>
    <div id="totalPrice" class="mt-4 font-bold text-lg">Total: $0.00</div>
  </div>

  <!-- Time Script -->
  <script>
    function updateTime() {
      const now = new Date();
      let hours = now.getHours();
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const seconds = now.getSeconds().toString().padStart(2, '0');
      const ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12 || 12;
      hours = hours.toString().padStart(2, '0');
      document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
    }
    setInterval(updateTime, 1000);
    updateTime();
  </script>

  <!-- Menu Toggle Script -->
  <script>
    document.getElementById('menuToggle').addEventListener('click', () => {
      document.getElementById('subMenu').classList.remove('hidden');
    });
    document.getElementById('closeMenu').addEventListener('click', () => {
      document.getElementById('subMenu').classList.add('hidden');
    });
  </script>

  <!-- Cart Script -->
  <script>
    (() => {
      const basketWrapper = document.getElementById('basketWrapper');
      const basketToggleBtn = document.getElementById('basketToggleBtn');
      const closeBasketBtn = document.getElementById('closeBasketBtn');
      const cartCountElem = document.getElementById('cartCount');
      function updateCartCount() {
        const count = 0; // still empty
        cartCountElem.textContent = count;
      }
      basketToggleBtn.addEventListener('click', () => {
        basketWrapper.classList.toggle('hidden');
      });
      closeBasketBtn.addEventListener('click', () => {
        basketWrapper.classList.add('hidden');
      });
      updateCartCount();
    })();
  </script>

</body>
</html>
