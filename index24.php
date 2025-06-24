<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Checkout Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
</head>
<body class="bg-white text-black font-sans">
  <div class="min-h-screen flex flex-col md:flex-row max-w-7xl mx-auto">
    <!-- Left side form -->
    <form id="checkout-form" class="flex-1 p-8 md:border-r border-gray-200" novalidate>
      <div class="flex justify-between items-center mb-6">
        <h2 class="font-extrabold text-lg leading-6">Contact</h2>
        <a class="text-sm underline" href="index.php">Back</a>
      </div>
      <input
        id="gmail"
        name="email"
        aria-label="Email or mobile phone number"
        class="w-full mb-10 px-4 py-3 border border-gray-300 rounded-lg text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
        placeholder="Email or mobile phone number"
        type="email"
        required
      />

      <h3 class="font-extrabold text-lg leading-6 mb-4">Delivery</h3>
      <div class="mb-4">
        <label class="block text-xs text-gray-400 mb-1" for="country">Country/Region</label>
        <select
          id="country"
          name="country"
          aria-label="Country/Region"
          class="w-full border border-gray-300 rounded-lg px-4 py-3 text-black font-semibold cursor-pointer"
          required
        >
          <option value="Cambodia" selected>Cambodia</option>
        </select>
      </div>

      <div class="flex gap-4 mb-4">
        <input
          id="first-name"
          name="firstName"
          aria-label="First name (optional)"
          class="flex-1 border border-gray-300 rounded-lg px-4 py-3 text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
          placeholder="First name (optional)"
          type="text"
        />
        <input
          id="last-name"
          name="lastName"
          aria-label="Last name"
          class="flex-1 border border-gray-300 rounded-lg px-4 py-3 text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
          placeholder="Last name"
          type="text"
          required
        />
      </div>

      <input
        id="address"
        name="address"
        aria-label="Address"
        class="w-full mb-4 px-4 py-3 border border-gray-300 rounded-lg text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
        placeholder="Address"
        type="text"
        required
      />

      <div class="flex gap-4 mb-4">
        <input
          id="city"
          name="city"
          aria-label="City"
          class="flex-1 border border-gray-300 rounded-lg px-4 py-3 text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
          placeholder="City"
          type="text"
          required
        />
        <input
          id="postal-code"
          name="postalCode"
          aria-label="Postal code (optional)"
          class="flex-1 border border-gray-300 rounded-lg px-4 py-3 text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
          placeholder="Postal code (optional)"
          type="text"
        />
      </div>

      <div class="relative mb-6">
        <input
          id="phone"
          name="phone"
          aria-label="Phone"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
          placeholder="Phone"
          type="tel"
          required
          pattern="^\+?[0-9\s\-]{7,15}$"
          title="Please enter a valid phone number"
        />
        <div
          aria-label="Phone help"
          class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer"
          title="Phone help"
        >
          <i class="fas fa-question-circle"></i>
        </div>
      </div>

      <label class="inline-flex items-center mb-8 cursor-pointer">
        <input
          class="form-checkbox border border-gray-300 rounded-sm text-black"
          type="checkbox"
          id="save-info"
          name="saveInfo"
        />
        <span class="ml-2 text-sm font-normal text-black"
          >Save this information for next time</span
        >
      </label>

      <h3 class="font-extrabold text-lg leading-6 mb-3">Shipping method</h3>
      <button
        class="w-full border border-gray-600 rounded-lg px-6 py-4 flex justify-between items-center font-semibold text-black hover:bg-gray-100"
        type="button"
        aria-label="Select shipping method Delivery, free shipping"
      >
        <span>Delivery</span>
        <span>FREE</span>
      </button>
    </form>


    <aside class="flex-1 bg-gray-100 p-8 flex flex-col">
      <div id="checkoutCartItems" class="flex-grow overflow-y-auto mb-6"></div>

      <div class="flex gap-2 mb-6">
        <input
          id="discount-code"
          name="discountCode"
          class="flex-1 rounded-lg border border-gray-300 px-4 py-3 text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-black"
          placeholder="Discount code"
          type="text"
          aria-label="Discount code"
        />
        <button
          class="bg-gray-300 rounded-lg px-5 py-3 font-semibold text-gray-600 hover:bg-gray-400"
          type="button"
          onclick="applyDiscount()"
        >
          Apply
        </button>
      </div>

      <div class="flex justify-between mb-2 text-sm font-normal">
        <span>Subtotal</span>
        <span id="checkoutSubtotalPrice">USD $0.00</span>
      </div>
      <div class="flex justify-between mb-6 text-sm font-normal">
        <span class="flex items-center gap-1">
          Shipping
          <i
            aria-label="Shipping info"
            class="fas fa-question-circle text-gray-600 cursor-pointer"
            title="Shipping info"
          ></i>
        </span>
        <span id="checkoutShippingPrice" class="font-semibold">Free</span>
      </div>
      <div class="flex justify-between text-xl font-extrabold mb-6">
        <span>
          Total
          <span class="text-xs font-normal ml-1">USD</span>
        </span>
        <span id="checkoutTotalPrice">USD $0.00</span>
      </div>

      <button
        id="payNowButton"
        type="button"
        class="w-full bg-black text-white font-bold py-4 rounded-lg hover:bg-gray-800 disabled:opacity-50 disabled:cursor-not-allowed"
        onclick="submitOrder()"
        disabled
      >
        Pay now
      </button>
    </aside>
  </div>

  <script>
  let cart = JSON.parse(localStorage.getItem("basket")) || [];
  let discountAmount = 0;
  let discountCodeUsed = false;

  function renderCheckoutItems() {
    const checkoutCartContainer = document.getElementById("checkoutCartItems");
    const checkoutSubtotalPriceElement = document.getElementById("checkoutSubtotalPrice");
    const checkoutShippingPriceElement = document.getElementById("checkoutShippingPrice");
    const checkoutTotalPriceElement = document.getElementById("checkoutTotalPrice");
    const payNowButton = document.getElementById("payNowButton");

    checkoutCartContainer.innerHTML = "";

    if (cart.length === 0) {
      checkoutCartContainer.innerHTML =
        `<p>Your basket is empty. <a href="index.php" style="color:#3498db; text-decoration:underline;">Go back to shopping</a></p>`;
      checkoutSubtotalPriceElement.textContent = "USD $0.00";
      checkoutShippingPriceElement.textContent = "Free";
      checkoutTotalPriceElement.textContent = "USD $0.00";
      payNowButton.disabled = true;
      return;
    }

    payNowButton.disabled = false;

    let subtotal = 0;

    cart.forEach((item) => {
      const itemTotal = item.price * item.quantity;
      const cartItem = document.createElement("div");
      cartItem.classList.add("item", "mb-4", "flex", "gap-4", "items-center");

      cartItem.innerHTML = `
        <img src="${item.img}" alt="${item.name}" class="w-20 h-20 object-cover rounded" />
        <div class="item-details flex flex-col gap-1">
          <p class="item-name font-semibold text-black">${item.name}</p>

          <p class="price text-gray-800 text-sm">Price: $${item.price.toFixed(2)}</p>
          <p class="quantity text-gray-800 text-sm">Quantity: ${item.quantity}</p>
          <p class="subtotal text-black font-semibold text-sm">Subtotal: $${itemTotal.toFixed(2)}</p>
        </div>
      `;
      checkoutCartContainer.appendChild(cartItem);

      subtotal += itemTotal;
    });


    discountAmount = discountCodeUsed ? subtotal * 0.10 : 0;
    const shippingPrice = 0;
    const totalAfterDiscount = Math.max(0, subtotal + shippingPrice - discountAmount);


    checkoutSubtotalPriceElement.textContent = `USD $${subtotal.toFixed(2)}`;
    checkoutShippingPriceElement.textContent = shippingPrice === 0 ? "Free" : `USD $${shippingPrice.toFixed(2)}`;
    checkoutTotalPriceElement.textContent = `USD $${totalAfterDiscount.toFixed(2)}`;

 
    let discountRow = document.getElementById("checkoutDiscountRow");
    if (!discountRow) {
      discountRow = document.createElement("div");
      discountRow.id = "checkoutDiscountRow";
      discountRow.className = "flex justify-between mb-2 text-sm font-normal text-red-600";
      checkoutShippingPriceElement.parentElement.insertAdjacentElement("afterend", discountRow);
    }

    if (discountCodeUsed) {
      discountRow.innerHTML = `
        <span>Discount (10%)</span>
        <span>- USD $${discountAmount.toFixed(2)}</span>
      `;
    } else {
      discountRow.remove();
    }
  }

  function applyDiscount() {
  const codeInput = document.getElementById("discount-code");
  const code = codeInput.value.trim().toLowerCase();

  const validCodes = {
    "free10": 0.10
  };

  if (discountCodeUsed) {
    alert("You have already applied a discount code.");
    return;
  }

  if (validCodes.hasOwnProperty(code)) {
    discountAmount = validCodes[code];
    discountCodeUsed = true;
    alert(`Promotion applied: ${discountAmount * 100}% off!`);
    renderCheckoutItems();
  } else {
    alert("Invalid promo code. Please try again.");
  }
}


  function submitOrder() {
    const form = document.getElementById("checkout-form");
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    if (cart.length === 0) {
      alert("Your basket is empty. Please add items before checkout.");
      return;
    }

    const orderData = {
      firstName: document.getElementById("first-name").value.trim(),
      lastName: document.getElementById("last-name").value.trim(),
      address: document.getElementById("address").value.trim(),
      city: document.getElementById("city").value.trim(),
      postalCode: document.getElementById("postal-code").value.trim(),
      phone: document.getElementById("phone").value.trim(),
      email: document.getElementById("gmail").value.trim(),
      country: document.getElementById("country").value,
      cart,
      discountCode: discountCodeUsed ? "free10" : null,
      discountAmount: discountAmount.toFixed(2),
    };

    localStorage.setItem("orderData", JSON.stringify(orderData));
    alert("Thank you for your order! Your items will be shipped soon.");
    localStorage.removeItem("basket");
    window.location.href = "index23.php";
  }

  renderCheckoutItems();

  const form = document.getElementById("checkout-form");
  const payNowButton = document.getElementById("payNowButton");
  form.addEventListener("input", () => {
    payNowButton.disabled = !form.checkValidity() || cart.length === 0;
  });
</script>
