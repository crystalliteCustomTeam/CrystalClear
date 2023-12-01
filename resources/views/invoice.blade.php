<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
body {
  margin: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
  font-size: 13px;
  color: rgba(0, 0, 0, 0.7);
}

*, *:before, *:after {
  box-sizing: inherit;
}

.red {
  color: #EB4242;
}

.strong {
  font-weight: bold;
}

.dark {
  color: black;
}

.container {
  width: 1024px;
  height: 750px;
  margin: 20px auto;
  border: 1px solid rgba(0, 0, 0, 0.2);
  background-color: #f1f1f1;
  position: relative;
}

.red-box {
  width: 85%;
  height: 500px;
  margin: 249px auto;
  background-color: #EB4242;
}

.receipt {
  position: absolute;
  z-index: 999;
  width: 50%;
  top: 50px;
  left: 25%;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
}
.receipt_header {
  height: 200px;
}
.receipt_header_top {
  background-color: #F4f4f4;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 35px;
  padding: 0 20px;
  font-size: 0.6rem;
}
.receipt_header_top p {
  color: rgba(0, 0, 0, 0.2);
}
.receipt_header_bottom {
  background-color: #EB4242;
  height: calc(100% - 35px);
  padding-top: 10px;
}
.receipt_header_bottom_logo {
  width: 135px;
  height: 135px;
  border-radius: 180px;
  border: 2px solid rgba(0, 0, 0, 0.2);
  margin: auto;
  color: #F4f4f4;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color:white;
  font-size: 4em;
}
.receipt_receipt {
  height: 499px;
  background-color: #F4f4f4;
  display: flex;
  flex-direction: column;
  padding: 20px 40px;
}
.receipt_receipt h1, .receipt_receipt h4 {
  text-transform: uppercase;
  text-align: center;
}
.receipt_receipt h1 {
  line-height: 110%;
  margin: 0;
}
.receipt_receipt > p {
  text-align: center;
  margin: 5px 0 0 0;
  font-size: 0.7rem;
}
.receipt_receipt_shipping {
  display: flex;
  justify-content: space-around;
  font-size: 0.7rem;
  padding-bottom: 15px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  margin-top: 20px;
}
.receipt_receipt_shipping a {
  font-size: 0.6rem;
}
.receipt_receipt_shipping h4 {
  text-align: left;
  font-weight: bold;
  margin: 0;
}
.receipt_receipt_shipping_left {
  flex: 1;
}
.receipt_receipt_shipping_left_to {
  display: flex;
  flex-direction: column;
  font-size: 0.6rem;
}
.receipt_receipt_shipping_right {
  flex: 1;
}
.receipt_receipt_shipping_right p {
  margin-top: 0;
  font-size: 0.6rem;
}
.receipt_receipt_items {
  font-size: 0.7rem;
  width: 100%;
  margin-top: 10px;
}
.receipt_receipt_items h4 {
  text-align: left;
}
.receipt_receipt_items_item {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}
.receipt_receipt_items_item_desc {
  flex: 2;
  margin-left: 30px;
}
.receipt_receipt_items_item_desc p {
  margin: 0;
}
.receipt_receipt_total {
  font-size: 0.7rem;
  font-weight: 900;
  width: 200px;
  align-self: flex-end;
}
.receipt_receipt_total_separator {
  width: 190px;
  height: 1px;
  background-color: rgba(0, 0, 0, 0.2);
  margin: auto;
}
.receipt_receipt_total_sub {
  padding-top: 12px;
}
.receipt_receipt_total > div {
  display: flex;
  justify-content: space-between;
  margin: 3px;
}
.receipt_receipt_total > div p {
  margin: 0;
}
</style>
<div class="container">
  <div class="red-box"></div>
  <div class="receipt">
    <header class="receipt_header">
      <header class="receipt_header_top">
        <h4 class="dark">Creative Logo Design</h4>
      
      </header>
      <header class="receipt_header_bottom">
        <div class="receipt_header_bottom_logo">
          <i class="fas fa-box"></i>
        </div>
      </header>
    </header>
    <div class="receipt_receipt">
      <h1 class="red">Thank You<br/> For <span>Purchasing</span> Our Service</h1>
      <p>Please verify the information below.</p>
      <div class="receipt_receipt_shipping">
        <div class="receipt_receipt_shipping_left">
          <h4 class="dark">shipping to:</h4>
          <div class="receipt_receipt_shipping_left_to">
            <span>Patryk Zabielski</span>
            <span>102 Awesome Street</span>
            <span>Mountain View CA 94043</span>
            <span>United States</span>
          </div>
          <a href="#" class="red strong">Click here to update your adress.</a>
        </div>
        <div class="receipt_receipt_shipping_right">
          <h4 class="dark">shipping method:</h4>
          <p>Economy - No Tracking (3-10days)</p>
          <h4 class="dark">notes:</h4>
          <p>Please call me when you will be in front of the doors!</p>
        </div>
      </div>
      <div class="receipt_receipt_items">
        <h4 class="dark">items:</h4>
        <div class="receipt_receipt_items_item">
          <div class="receipt_receipt_items_item_nb">1<span>x</span></div>
          <div class="receipt_receipt_items_item_desc">
            <p class="strong dark">Beard Oil Mass Black Large</p>
            <p>Premium Edition</p>
          </div>
          <div class="receipt_receipt_items_item_price strong dark"><span>$</span>128.99</div>
        </div><!--close item-->
        <div class="receipt_receipt_items_item">
          <div class="receipt_receipt_items_item_nb">3<span>x</span></div>
          <div class="receipt_receipt_items_item_desc">
            <p class="strong dark">Beard Brush</p>
            <p>Premium Edition</p>
          </div>
          <div class="receipt_receipt_items_item_price strong dark"><span>$</span>68.99</div>
        </div><!--close item-->
      </div><!--close items-->
      <div class="receipt_receipt_total dark">
        <div class="receipt_receipt_total_separator"></div>
        <div class="receipt_receipt_total_sub">
          <p>Subtotal:</p><p>$197.98</p>
        </div>
        <div class="receipt_receipt_total_tax">
          <p>Tax:</p><p>$15.83</p>
        </div>
        <div class="receipt_receipt_total_fee">
          <p>Delivery Fee:</p><p>$20</p>
        </div>
        <div class="receipt_receipt_total_total">
          <p>TOTAL:</p><p>$233.81</p>
        </div>
      </div><!--close total-->
    </div>
  </div>
</div>
