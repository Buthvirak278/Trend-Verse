<?php

$homeUrl = "index.php";
$allItemsUrl = "#"; 
$checkoutUrl = "index24.php";
$continueShoppingUrl = "index19.php";
?>

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


  <header class="flex justify-between items-center px-10 py-6">
    <button class="text-[14px] font-normal" onclick="window.location.href='<?php echo htmlspecialchars($homeUrl); ?>'">Back</button>

  
    <div class="font-extrabold text-4xl tracking-tight flex items-center">
    Trend
      <span class="relative">
      Verse
        <span class="block w-3 h-3 rounded-full bg-sky-400 absolute -top-1 -right-3"></span>
      </span>
    </div>

    <button id="basketToggleBtn" class="text-[14px] font-extrabold tracking-widest">
      CART (<span id="cartCount">0</span>)
    </button>
  </header>

  <main class="max-w-7xl mx-auto px-10 flex flex-col md:flex-row gap-10">
    <section class="flex flex-col">
      <img id="mainImage" alt="Backpack Front" class="rounded-md max-w-[600px] w-full" src="https://www.sprayground.com/cdn/shop/files/file_bd7ebb0e-1ec7-4b31-9b99-9a337e88bf43.png?v=1748981895"/>
      
      <div class="flex gap-4 mt-6 small-images">
  <div class="border border-black rounded-md p-1 w-24 h-24 flex items-center justify-center cursor-pointer">
    <img 
      src="https://www.sprayground.com/cdn/shop/files/file_bd7ebb0e-1ec7-4b31-9b99-9a337e88bf43.png?v=1748981895"
      data-src="https://www.sprayground.com/cdn/shop/files/file_bd7ebb0e-1ec7-4b31-9b99-9a337e88bf43.png?v=1748981895" 
      alt="Front view" class="rounded-md max-h-full max-w-full object-contain" />
  </div>

  <div class="border border-black rounded-md p-1 w-24 h-24 flex items-center justify-center cursor-pointer">
    <img 
      src="https://www.sprayground.com/cdn/shop/files/file_3f529b91-d472-439e-9c4b-ad192d7a17a8.png?v=1748981892"
      data-src="https://www.sprayground.com/cdn/shop/files/file_3f529b91-d472-439e-9c4b-ad192d7a17a8.png?v=1748981892" 
      alt="Back view" class="rounded-md max-h-full max-w-full object-contain" />
  </div>

  <div class="border border-black rounded-md p-1 w-24 h-24 flex items-center justify-center cursor-pointer">
    <img 
      src="https://www.sprayground.com/cdn/shop/files/file_ce2e757b-d855-46d2-8d3b-dd61e5c2fec0.png?v=1748981890"
      data-src="https://www.sprayground.com/cdn/shop/files/file_ce2e757b-d855-46d2-8d3b-dd61e5c2fec0.png?v=1748981890" 
      alt="Side view" class="rounded-md max-h-full max-w-full object-contain" />
  </div>

  <div class="border border-black rounded-md p-1 w-24 h-24 flex items-center justify-center cursor-pointer">
    <img 
      src="https://www.sprayground.com/cdn/shop/files/file_90eae699-cd9d-4bdc-b29c-b0586bc61abb.png?v=1748981892"
      data-src="https://www.sprayground.com/cdn/shop/files/file_90eae699-cd9d-4bdc-b29c-b0586bc61abb.png?v=1748981892" 
      alt="Inside view" class="rounded-md max-h-full max-w-full object-contain" />
  </div>

  <div class="border border-black rounded-md p-1 w-24 h-24 flex items-center justify-center cursor-pointer">
    <img 
      src="https://www.sprayground.com/cdn/shop/files/file_04cf35a8-9bdd-4d35-b4e1-7ba49666dc04.jpg?v=1748976813"
      data-src="https://www.sprayground.com/cdn/shop/files/file_04cf35a8-9bdd-4d35-b4e1-7ba49666dc04.jpg?v=1748976813" 
      alt="Inside view 2" class="rounded-md max-h-full max-w-full object-contain" />
  </div>
    </section>

    <section class="flex flex-col max-w-md">
      <h1 class="text-[18px] font-normal tracking-widest mb-1">GUMMY SPRAY DLXR BACKPACK</h1>
      <a class="text-[14px] font-normal text-slate-500 mb-4" href="#">SIZE CHART</a>
      <p class="text-[18px] font-normal mb-6">$65.00</p>

      <div class="flex gap-4">
        <button id="addToCartBtn" class="bg-black text-white rounded-md py-3 px-8 text-[14px] font-normal tracking-widest">
          Add to cart
        </button>
        <a href="<?php echo htmlspecialchars($homeUrl); ?>" class="bg-black text-white rounded-md py-3 px-8 text-[14px] font-normal tracking-widest flex items-center justify-center">
        &lt; all items
      </a>
        </button>
      </div>
      <div id="cartMessage" class="text-green-600 mt-4 hidden">Added to cart!</div>


<section class="product-details p-6 bg-white rounded-lg shadow-md mt-6">
  <h2 class="text-2xl font-bold mb-4">Product Details</h2>

  <h3 class="text-xl font-semibold mb-2">Exterior</h3>
  <ul class="list-disc list-inside mb-4">
    <li>Dimensions: 18" x 6" x 11.5"</li>
    <li>Front zipper pocket</li>
    <li>Side pockets</li>
    <li>Zippered Stash pocket</li>
    <li>Separate velour sunglass compartment</li>
    <li>Ergonomic mesh back padding</li>
    <li>Adjustable Straps for custom sizing</li>
    <li>Gold zippers with metal hardware</li>
    <li>Metal "Sprayground Authentic" badge</li>
    <li>Slide through back sleeve connects to carry-on luggage to free your hands</li>
  </ul>

  <h3 class="text-xl font-semibold mb-2">Interior</h3>
  <ul class="list-disc list-inside mb-4">
    <li>Separate velour laptop compartment</li>
    <li>Mesh organizer pocket</li>
  </ul>

  <h3 class="text-xl font-semibold mb-2">Fabric</h3>
  <ul class="list-disc list-inside">
    <li>900D Polyester Fabric</li>
  </ul>
</section>


  <div id="basketWrapper" class="fixed top-0 right-0 bg-white shadow-lg w-full md:w-[400px] h-full z-50 p-6 hidden">
    <button id="closeBasketBtn" class="text-black font-bold mb-4">Close</button>
    <div id="basketItems" class="overflow-y-auto max-h-[60vh]"></div>
    <div id="totalPrice" class="mt-4 font-bold text-lg">Total: $0.00</div>
    <div class="mt-4 flex gap-4">
      <button id="checkoutBtn" class="bg-black text-white px-4 py-2">Checkout</button>
      <button id="continueBtn" class="border border-black px-4 py-2">Continue Shopping</button>
    </div>
  </div>


  <script>
    (() => {
      const PRODUCT_NAME = "GUMMY SPRAY DLXR BACKPACK";
      const PRODUCT_PRICE = 65.00;
      const mainImage = document.getElementById('mainImage');
      const smallImages = document.querySelectorAll('.small-images img');
      const basketWrapper = document.getElementById('basketWrapper');
      const basketToggleBtn = document.getElementById('basketToggleBtn');
      const closeBasketBtn = document.getElementById('closeBasketBtn');
      const addToCartBtn = document.getElementById('addToCartBtn');
      const checkoutBtn = document.getElementById('checkoutBtn');
      const continueBtn = document.getElementById('continueBtn');
      const basketItemsContainer = document.getElementById('basketItems');
      const totalPriceElem = document.getElementById('totalPrice');
      const cartCountElem = document.getElementById('cartCount');
      const cartMessage = document.getElementById('cartMessage');

      function safeParseJSON(json) {
        try { return JSON.parse(json); } catch { return null; }
      }

      function updateCartCount() {
        const cart = safeParseJSON(localStorage.getItem('basket')) || [];
        const count = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCountElem.textContent = count;
      }

      function displayBasket() {
        const cart = safeParseJSON(localStorage.getItem('basket')) || [];
        basketItemsContainer.innerHTML = '';
        let total = 0;

        if (cart.length === 0) {
          basketItemsContainer.innerHTML = '<div>Your cart is empty!</div>';
          totalPriceElem.textContent = 'Total: $0.00';
          return;
        }

        cart.forEach((item, index) => {
          const itemDiv = document.createElement('div');
          itemDiv.className = 'mb-4 flex items-center gap-4';
          itemDiv.innerHTML = `
            <img src="${item.img}" alt="${item.name}" class="w-16 h-16 object-cover rounded">
            <div class="flex-1">
              <div class="font-bold">${item.name}</div>
              <div class="flex gap-2 mt-1">
                <button data-index="${index}" data-action="decrease" class="px-2 border">-</button>
                <span>${item.quantity}</span>
                <button data-index="${index}" data-action="increase" class="px-2 border">+</button>
              </div>
            </div>
            <div>$${(item.price * item.quantity).toFixed(2)}</div>`;
          basketItemsContainer.appendChild(itemDiv);
          total += item.price * item.quantity;
        });

        totalPriceElem.textContent = `Total: $${total.toFixed(2)}`;
      }

      function updateQuantity(index, action) {
        const cart = safeParseJSON(localStorage.getItem('basket')) || [];
        if (!cart[index]) return;
        if (action === 'increase') cart[index].quantity++;
        if (action === 'decrease') {
          cart[index].quantity--;
          if (cart[index].quantity <= 0) cart.splice(index, 1);
        }
        localStorage.setItem('basket', JSON.stringify(cart));
        displayBasket();
        updateCartCount();
      }

      function addToCart() {
        const img = mainImage.src;
        let cart = safeParseJSON(localStorage.getItem('basket')) || [];
        const existingIndex = cart.findIndex(i => i.name === PRODUCT_NAME);
        if (existingIndex !== -1) {
          cart[existingIndex].quantity++;
        } else {
          cart.push({ name: PRODUCT_NAME, price: PRODUCT_PRICE, img, quantity: 1 });
        }
        localStorage.setItem('basket', JSON.stringify(cart));
        updateCartCount();
        cartMessage.classList.remove('hidden');
        setTimeout(() => cartMessage.classList.add('hidden'), 2000);
      }

      basketToggleBtn.onclick = () => {
        basketWrapper.classList.toggle('hidden');
        if (!basketWrapper.classList.contains('hidden')) displayBasket();
      };
      closeBasketBtn.onclick = () => basketWrapper.classList.add('hidden');
      addToCartBtn.onclick = addToCart;
      checkoutBtn.onclick = () => window.location.href = '<?php echo htmlspecialchars($checkoutUrl); ?>';
      continueBtn.onclick = () => window.location.href = '<?php echo htmlspecialchars($continueShoppingUrl); ?>';
      basketItemsContainer.onclick = (e) => {
        const btn = e.target.closest('button');
        if (!btn) return;
        const index = parseInt(btn.dataset.index);
        const action = btn.dataset.action;
        if (!isNaN(index) && action) updateQuantity(index, action);
      };
      smallImages.forEach(img => {
        img.onclick = () => { mainImage.src = img.dataset.src; }
      });
      updateCartCount();
    })();
  </script>
</body>
</html>
