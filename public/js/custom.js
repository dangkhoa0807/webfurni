(function () {
	"use strict";
  
	var tinyslider = function () {
	  var el = document.querySelectorAll(".testimonial-slider");
  
	  if (el.length > 0) {
		var slider = tns({
		  container: ".testimonial-slider",
		  items: 1,
		  axis: "horizontal",
		  controlsContainer: "#testimonial-nav",
		  swipeAngle: false,
		  speed: 700,
		  nav: true,
		  controls: true,
		  autoplay: true,
		  autoplayHoverPause: true,
		  autoplayTimeout: 3500,
		  autoplayButtonOutput: false,
		});
	  }
	};
	tinyslider();
  
	var sitePlusMinus = function () {
	  var value,
		quantity = document.getElementsByClassName("quantity-container");
  
	  function createBindings(quantityContainer) {
		var quantityAmount =
		  quantityContainer.getElementsByClassName("quantity-amount")[0];
		var increase = quantityContainer.getElementsByClassName("increase")[0];
		var decrease = quantityContainer.getElementsByClassName("decrease")[0];
		increase.addEventListener("click", function (e) {
		  increaseValue(e, quantityAmount);
		});
		decrease.addEventListener("click", function (e) {
		  decreaseValue(e, quantityAmount);
		});
	  }
  
	  function init() {
		for (var i = 0; i < quantity.length; i++) {
		  createBindings(quantity[i]);
		}
	  }
  
	  function increaseValue(event, quantityAmount) {
		value = parseInt(quantityAmount.value, 10);
  
		value = isNaN(value) ? 0 : value;
		value++;
		quantityAmount.value = value;
		handleCart();
	  }
  
	  function decreaseValue(event, quantityAmount) {
		value = parseInt(quantityAmount.value, 10);
  
		value = isNaN(value) ? 0 : value;
		if (value > 0) value--;
  
		quantityAmount.value = value;
		handleCart();
	  }
  
	  init();
	};
	sitePlusMinus();
  
	const cartProducts = document.querySelectorAll(".listProduct");
  
	const priceTotal = document.getElementById("priceTotal");
	const subTotal = document.getElementById("subTotal");
  
	const cart = JSON.parse(localStorage.getItem("cartProducts")) || [];
  
	// ...
	const checkoutBtn = document.querySelector("#checkoutBtn");
  
	if (checkoutBtn) {
	  checkoutBtn.addEventListener("click", handleCheckout);
	}
	function handleCheckout() {
	  var totalPriceProduct = 0;
	  var updatedCart = [];
  
	  cartProducts.forEach((product) => {
		let price = parseInt(
		  product
			.querySelector("#price")
			.textContent.replace("đ", "")
			.replace(",", "")
		);
		let quantity = parseInt(product.querySelector(".quantity-amount").value);
		let total = product.querySelector("#total");
  
		total.textContent = price * quantity + "đ";
		totalPriceProduct += parseInt(
		  total.textContent.replace("đ", "").replace(",", "")
		);
  
		var nameProduct = product.querySelector(".name").innerHTML;
		var quantityProduct = quantity;
		var totalProduct = total.textContent;
		var checkoutProduct = {
		  nameProduct: nameProduct,
		  quantityProduct: quantityProduct,
		  totalProduct: totalProduct,
		};
  
		updatedCart.push(checkoutProduct);
	  });
	  localStorage.setItem("cartProducts", JSON.stringify(updatedCart));
	  // Lưu mảng cập nhật vào local storage sau khi đã duyệt qua tất cả sản phẩm
	  window.location.href = "checkout.html";
	}
  
	function handleCart() {
	  var totalPriceProduct = 0;
  
	  cartProducts.forEach((product) => {
		let price = parseInt(
		  product
			.querySelector("#price")
			.textContent.replace("đ", "")
			.replace(",", "")
		);
		let quantity = parseInt(product.querySelector(".quantity-amount").value);
		let total = product.querySelector("#total");
  
		total.textContent = price * quantity + "đ";
		totalPriceProduct += parseInt(
		  total.textContent.replace("đ", "").replace(",", "")
		);
	  });
	  if (!priceTotal || !subTotal) {
		return;
	  }
	  // Lưu mảng cập nhật vào local storage sau khi đã duyệt qua tất cả sản phẩm
	  priceTotal.textContent = formatMoney(totalPriceProduct) + "đ";
	  subTotal.textContent = formatMoney(totalPriceProduct) + "đ";
	}
  
	handleCart();
	const orderTotal = document.getElementById("orderTotal");
	const totalPrice = document.querySelectorAll(".pricePruct");
	let total = 0;
	totalPrice.forEach((price) => {
	  total += parseFloat(price.textContent.replace("đ", "").replace(".", ""));
	});
	if (orderTotal) {
	  orderTotal.textContent = formatMoney(total) + "đ";
	}
	// Hàm định dạng số tiền hiển thị
	function formatMoney(amount) {
	  return amount.toLocaleString("vi-VN");
	}
	
	
  })();
  