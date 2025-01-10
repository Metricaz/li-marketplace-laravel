class OrderCategory {
  init() {
    function sendData(data) {
      const form = document.querySelector('#order-by-form');
      form.submit();
    }

    const send = document.querySelector("#select-order-by");
    if (send) {
      send.addEventListener("change", sendData);
    }
  }
}

export default OrderCategory;