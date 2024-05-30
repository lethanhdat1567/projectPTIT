import html from "../redux/core.js";
import { connect } from "../redux/store.js";
function HeaderMobile({ products, favor }) {
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
      <span class="nav-btn__title">Card</span>
      <span class="nav-btn__qtn">${favor.length}</span>
    </a>`;
}
export default connect()(HeaderMobile);
