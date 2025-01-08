class OrderCategory {
  init() {
  	function sendData(data) {
  		const form = document.querySelector('#order-by-form');
      console.log(form);
  		form.submit();
  	}

  	const send = document.querySelector("#select-order-by");
	send.addEventListener("change", sendData);
  }
}

export default OrderCategory;