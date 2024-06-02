import html from "../redux/core.js";
import { connect } from "../redux/store.js";
const toast = document.querySelector(".red-alert");
const navBtn = document.querySelector(".top-bar__more-icon-nav");
function handleToast(products, favor) {
  let isAlter = localStorage.getItem("alert");
  if (isAlter === "true") {
    toast.classList.add("show");
  }
  navBtn.onclick = (e) => {
    toast.classList.remove("show");
  };
}
function HeaderMobile({ products, favor }) {
  handleToast(products, favor);
  return html` <a
      href="${ROOT}Home/CheckOut"
      class="nav-btn d-none d-md-flex nav-btn-card"
    >
      <img src="${ASSETS}icons/buy.svg" alt="" class="nav-btn__icon icon" />
      <span class="nav-btn__title">Cart</span>
      <span class="nav-btn__qtn">${products.length}</span>
    </a>
    <a
      href="${ROOT}Home/Favourite"
      class="nav-btn d-none d-md-flex nav-btn-card"
    >
      <img src="${ASSETS}icons/heart.svg" alt="" class="nav-btn__icon icon" />
      <span class="nav-btn__title">Favourite</span>
      <span class="nav-btn__qtn">${favor.length}</span>
    </a>`;
}
export default connect()(HeaderMobile);
