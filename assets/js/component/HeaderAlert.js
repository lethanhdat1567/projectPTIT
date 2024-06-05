import html from "../redux/core.js";
import { connect } from "../redux/store.js";
function HeaderAlert({ products, favor }) {
  // const favorCard = document.querySelector(".act-dropdown__inner-card");
  const favorCount = document.querySelector(".top-act__title-favor");
  favorCount.innerText = favor.length;
  const card = document.querySelector(".top-act__title-card");
  const x = products.reduce((acc, item) => {
    const discountedPrice = item.price - (item.price * item.discount) / 100;
    return acc + parseInt(discountedPrice);
  }, 0);
  let result = x.toLocaleString("vi-VN");
  card.innerText = result;
  const alter = document.querySelector(".act-dropdown__alert-card");
  const isAlter = localStorage.getItem("alert");
  const close = document.querySelector(".alert-card__close");
  if (isAlter === "true") {
    alter.style.display = "block";
    const setTime = setTimeout(function () {
      alter.style.display = "none";
      localStorage.setItem("alert", false);
    }, 5000);
    close.onclick = (e) => {
      alter.style.display = "none";
      clearTimeout(setTime);
      localStorage.setItem("alert", false);
    };
  }
}
export default connect()(HeaderAlert);
