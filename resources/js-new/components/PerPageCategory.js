class PerPageCategory {
  init() {
    function sendData(data) {
      const form = document.querySelector('#perpage-form');
      form.submit();
    }

    const send = document.querySelector("#select-items-per-page");
    if (send) {
      send.addEventListener("change", sendData);
    }
  }
}

export default PerPageCategory;