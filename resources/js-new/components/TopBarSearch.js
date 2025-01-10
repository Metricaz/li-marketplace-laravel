class TopBarSearch {
  init() {
    function sendData(data) {
      const form = document.querySelector('#search-form');
      const input = document.querySelector('#topbar-search-input');
      const actionUrl = form.action+'/'+ encodeURI(input.value);
      form.action = actionUrl;
      form.submit();
    }

      const send = document.querySelector("#topbar-search-submit");
      const form = document.querySelector('#search-form');

      form.addEventListener('keypress', function (event) {
        if (event.keyCode === 13) {
          event.preventDefault();
          sendData();
        }
      });

      if (send) {
        send.addEventListener("click", sendData);
      }
  }
}

export default TopBarSearch;