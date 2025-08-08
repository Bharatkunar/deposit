<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Money</title>
  <style>
    
.deposit-form {
    display: flex;
    align-items: center;
    justify-content: center;
}
    .form-container {
      /* background-color: #13181c; */
      color: #fff;
      border-radius: 15px;
      /* padding: 30px; */
      /* width: 500px; */
      min-width: 422px;
      /* box-shadow: 0 0 10px rgba(168, 216, 106, 0.4); */
      height: 500px;
      margin:0px;
    }

    .form-container h2 {
      margin-bottom: 20px;
      font-size: 15px;
      letter-spacing: 1px;
      font-family: monospace;
    }

    .input-box {
      border: 1.4px solid #dbfe78;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background: #20262f;
    }

    .input-box-title {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .input-box-title span {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
    }

    .input-box-title img {
      width: 40px;
      height: 40px;
      border-radius: 5px;
    }

    .change-btn {
      background-color: #dbfe78;
    color: #262d37;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.8em;
    }

    .amount-input {
      font-size: 20px;
      margin-top: 10px;
    }

    input.display-input {
      width:100%;
      padding: 10px;
      border: 1.4px solid #dbfe78;
      border-radius: 10px;
      margin-bottom: 20px;
      font-size: 18px;
      text-align: center;
      color: #fff;
      background: #20262f;    
    }

    .promo-section{
      display:flex;
      gap:30px;

    }
    .promo-main p{
      color:white;
      margin-bottom:20px;
      text-align:center;
    }

    .promo-box{
    background-color:#20262f;
    border: 1px solid gray;
    border-radius: 10px;
    text-align:center;
    color:white;
    width: 40%;
     margin-bottom:30px;
  }

    .promo-box.active{
      border: 2px solid #dbfe78;
    }
  .promo-box:hover{
    border: 2px solid #dbfe78;
  }


    .amount-options {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      margin-bottom: 20px;
    }

    .amount-options button {
      background-color: #111;
      color: #fff;
      border: 2px solid #dbfe78;
      padding: 10px;
      border-radius: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    .amount-options button:hover{
      background-color: #dbfe78;
      color: #111;
    }


    .center {
      text-align: center;
    }

    button.promo-btn {
    margin-left: 40%;
}
    .promo-btn {
      background: none;
      border: none;
      color: #fff;
      text-decoration: underline;
      cursor: pointer;
      margin-bottom: 20px;
      font-size: 14px;
      text-align:center;
    }

    .deposit-btn {
      width: 100%;
      background-color: #c8fe2f;
      color: #000;
      padding: 15px;
      border: none;
      font-weight: 700;
      font-size: 13px;
      border-radius: 10px;
      cursor: pointer;
    }

    /* Modal styles */
    .modal-boxes {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      /* background-color: rgba(0,0,0,0.6); */
    }

    .modal-content {
      background-color: #111;
      margin: 20px auto;
      padding: 20px;
      border-radius: 10px;
      width: 500px;
      max-width: 500px;
      color: #fff;
      height: 800px;
    }

    .method-option {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px;
      border: 1px solid #c8fe2f;
      border-radius: 8px;
      margin-bottom: 10px;
      cursor: pointer;
    }

    .method-option:hover {
      background-color: #333;
    }

    .method-option img {
      width: 40px;
      height: 40px;
      border-radius: 5px;
    }

    .method-info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

     .close-btn {
    background-color: #fff;
    color: #111;
    font-weight: 700;
    padding: 10px 15px;
    border-radius: 6px;
    cursor: pointer;
    margin-bottom: 25px;
    border: none;
    }

     #myInput {
      display: none;
      margin-top: 10px;
    border: 1.2px solid #dbfe78;
    border-radius: 10px;
    background: #20262f;
    margin-bottom: 30px;
    }
  </style>
</head>
<body>
<div class="deposit-form">

<div class="form-container">
  <h2>Add money</h2>

  <div class="input-box">
    <div class="input-box-title">
      <span id="selectedMethod">
        <img src="https://" alt="Logo">
        PayPay MEFETE
      </span>
      <button class="change-btn" onclick="openModal()">Change</button>
    </div>
    <div class="amount-input" id="selectedAmount">$ 200</div>
  </div>

  <input type="text" id="deposit-1" class="display-input" value="$ 200" readonly>

  <div class="amount-options">
    <button onclick="setAmount(100)">$ 100</button>
    <button onclick="setAmount(1000)">$ 1000</button>
    <button onclick="setAmount(50000)">$ 50000</button>
    <button onclick="setAmount(100000)">$ 100000</button>
  </div>

  
    <div class="promo-main">
    <p>PROMOTIONS</p>
  <div class="promo-section">
      <div class="promo-box active">
        <img src="#" alt="No image found">
        <p>Used promo code:<strong> WELCOME</strong></p>

      </div>
      <div class="promo-box">
        <img src="#" alt="No image found">
        <p>No Promo</p>
      </div>
    </div>
  </div>

  <button class="promo-btn" onclick="promocode()">Promo code</button>
  <input type="text" id="myInput" placeholder="Promo Code" />

  

  <!-- <div class="center"> <button class="promo-btn">Promo code</button></div> -->
  <button class="deposit-btn" id="depositBtn">Deposit via PayPay MEFETE</button>
</div>

<!-- Modal -->
<div id="methodModal" class="modal-boxes">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal()">X</button>
    
    <div class="method-option" onclick="selectMethod('PayPay MEFETE')">
      <div class="method-info">
        <img src="https://">
        <span>PayPay MEFETE</span>
      </div>
      <small>$25 – $100000</small>
    </div>

    <div class="method-option" onclick="selectMethod('JazzCash')">
      <div class="method-info">
        <img src="https://">
        <span>JazzCash</span>
      </div>
      <small>$50 – $50000</small>
    </div>

    <div class="method-option" onclick="selectMethod('EasyPaisa')">
      <div class="method-info">
        <img src="https://">
        <span>EasyPaisa</span>
      </div>
      <small>$100 – $80000</small>
    </div>
  </div>
</div>
</div>
<script>
  function setAmount(amount) {
    document.getElementById('selectedAmount').textContent = `$ ${amount}`;
    document.getElementById('deposit-1').value = `$ ${amount}`;
  }

  function openModal() {
    document.getElementById('methodModal').style.display = 'block';
  }

  function closeModal() {
    document.getElementById('methodModal').style.display = 'none';
  }

  function selectMethod(name) {
    const selected = document.getElementById('selectedMethod');
    selected.innerHTML = `<img src="https://"> ${name}`;
    document.getElementById('depositBtn').textContent = `Deposit via ${name}`;
    closeModal();
  }

 function promocode() {
      const input = document.getElementById("myInput");
      if (input.style.display === "none" || input.style.display === "") {
        input.style.display = "block";
      } else {
        input.style.display = "none";
      }
    }

</script>
</body>
</html>
