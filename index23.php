<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Invoice</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f4f4;
      padding: 40px;
      color: #333;
    }
    .invoice-box {
      max-width: 900px;
      margin: auto;
      padding: 30px 50px;
      background: #fff;
      border: 1px solid #eee;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.15);
    }
    .invoice-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
    }
    .title {
      text-align: center;
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 30px;
    }
    .section {
      margin-bottom: 20px;
      font-size: 14px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table th, table td {
      border: 1px solid #eee;
      padding: 10px;
      text-align: left;
    }
    table th {
      background: #f9f9f9;
    }
    .totals {
      margin-top: 20px;
      text-align: right;
    }
    .totals p {
      margin: 5px 0;
      font-size: 16px;
    }
    .payment-qr {
      text-align: center;
      margin-top: 30px;
    }
    .payment-qr p {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .terms {
      margin-top: 40px;
      font-size: 12px;
      color: #777;
    }
  </style>
</head>
<body>

<div class="invoice-box">
  <div class="invoice-header">
    <div>
      <h2>TrendVerse</h2>
      <p>Address: Phnom Penh Tmey, Sen Sok, Phnom Penh</p>
      <p>Email: TrendVerse@gmail.com</p>
      <p>Phone: (+855) 081 272 999</p>
    </div>
    <div id="invoiceDetails"></div>
  </div>

  <div class="title">INVOICE</div>

  <div class="section" id="customerInfo"></div>

  <table id="orderItems"></table>

  <div class="totals" id="totals"></div>

  <div class="terms">
    <strong>Terms & Conditions:</strong>
    <p>- Payment due by the due date.</p>
    <p>- Late payment may incur additional fees.</p>
    <p>- All sales are final unless otherwise stated.</p>
  </div>

  <div style="margin-top: 15px; font-size: 14px; color: black; text-align: left;">
    <a href="index.php" style="color: black; text-decoration: none; cursor: pointer;">← Back to Shopping</a>
  </div>
</div>

<script>
  const orderData = JSON.parse(localStorage.getItem("orderData"));

  if (!orderData) {
    document.body.innerHTML = "<h2>No order data found.</h2>";
  } else {
    let lastInvoiceNumber = parseInt(localStorage.getItem('lastInvoiceNumber') || '0', 10);
    const newInvoiceNumber = lastInvoiceNumber + 1;
    localStorage.setItem('lastInvoiceNumber', newInvoiceNumber);

    function formatInvoiceNumber(num) {
      return 'INV-' + num.toString().padStart(6, '0');
    }

    function formatDate(date) {
      return date.toLocaleDateString('en-US', {
        year: 'numeric', month: 'long', day: 'numeric'
      });
    }

    const invoiceNumber = formatInvoiceNumber(newInvoiceNumber);
    const today = new Date();
    const dueDate = new Date();
    dueDate.setDate(today.getDate() + 7);

    const {
      firstName, lastName, email, phone, address, city,
      postalCode = "N/A", cart = [],
      discountCode, discountAmount = "0.00"
    } = orderData;

    document.getElementById("invoiceDetails").innerHTML = `
      <p><strong>Invoice #:</strong> ${invoiceNumber}</p>
      <p><strong>Date:</strong> ${formatDate(today)}</p>
      <p><strong>Due Date:</strong> ${formatDate(dueDate)}</p>
    `;

    document.getElementById("customerInfo").innerHTML = `
      <p><strong>Customer:</strong> ${firstName} ${lastName}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Phone:</strong> ${phone}</p>
      <p><strong>Address:</strong> ${address}, ${city} (${postalCode})</p>
    `;

    let subtotal = 0;
    const rows = cart.map(item => {
      const itemTotal = item.price * item.quantity;
      subtotal += itemTotal;
      return `
        <tr>
          <td>${item.name}</td>
          <td>$${item.price.toFixed(2)}</td>
          <td>${item.quantity}</td>
          <td>$${itemTotal.toFixed(2)}</td>
        </tr>`;
    });

    document.getElementById("orderItems").innerHTML = `
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      ${rows.join("")}
    `;

    const discount = parseFloat(discountAmount);
    const shipping = 0;
    const total = subtotal - discount + shipping;

    document.getElementById("totals").innerHTML = `
      <p>Subtotal: $${subtotal.toFixed(2)}</p>
      ${ discount > 0 ? `<p>Discount (${discountCode}): -$${discount.toFixed(2)}</p>` : "" }
      <p>Shipping: Free</p>
      <p><strong>Total Due: $${total.toFixed(2)}</strong></p>
    `;
  }
</script>

</body>
</html>
