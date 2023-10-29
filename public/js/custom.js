(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
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
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();

	


	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	       

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
			handleCheckout();
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
			handleCheckout();
	    }
	    
	    init();
		
	};
	sitePlusMinus();
	
	

	const cartProducts= document.querySelectorAll('.listProduct');
	
	const priceTotal=document.getElementById('priceTotal');
	const subTotal=document.getElementById('subTotal');
	// xử lí thanh toán tiền
	
	const cart = JSON.parse(localStorage.getItem("cartProducts")) || []; // Sử dụng JSON.parse và mặc định là một mảng rỗng nếu không có dữ liệu

// ...

function handleCheckout() {
  var totalPriceProduct = 0;
  var updatedCart = []; // Tạo một mảng mới để lưu dữ liệu cập nhật

  cartProducts.forEach((product) => {
    let price = parseInt(product.querySelector('#price').textContent.replace('đ', '').replace(',', ''));
    let quantity = parseInt(product.querySelector('.quantity-amount').value);
    let total = product.querySelector('#total');

    total.textContent = price * quantity + 'đ';
    totalPriceProduct += parseInt(total.textContent.replace('đ', '').replace(',', ''));

    var nameProduct = product.querySelector('.name').innerHTML;
    var quantityProduct = quantity;
    var totalProduct = total.textContent;
    var checkoutProduct = {
      nameProduct: nameProduct,
      quantityProduct: quantityProduct,
      totalProduct: totalProduct
    };
    
    updatedCart.push(checkoutProduct); // Thêm sản phẩm mới vào mảng cập nhật
  });

  // Lưu mảng cập nhật vào local storage sau khi đã duyệt qua tất cả sản phẩm
  localStorage.setItem('cartProducts', JSON.stringify(updatedCart));

	// priceTotal.textContent= formatMoney(totalPriceProduct)+ 'đ';
	// subTotal.textContent= formatMoney(totalPriceProduct)+ 'đ';

}
handleCheckout();
// Hàm định dạng số tiền hiển thị 	
function formatMoney(amount) {  
	return amount.toLocaleString('vi-VN');
  }



})();
