window.onload = (event) => {

  let alerts = Array.from(document.querySelectorAll(".alert"));
  if (alerts.length) {
    alerts.forEach((alert) => {
      let closeBtn = alert.querySelector("button");
      closeBtn.addEventListener("click", function(ev) {
        ev.preventDefault();
        alert.style.opacity = "0";
        setTimeout(() => {
          alert.style.display = "none";
          alert.style.opacity = "1";
        }, 1000);
      });

      if (alert.classList.contains('danger') === false) {
        setTimeout(() => {
          closeBtn.click();
        }, 4000);
      }
    });
  }
};