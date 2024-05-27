import html from "../redux/core.js";
import { connect } from "../redux/store.js";
const subWrap = document.querySelector(".cart-info__sub-list");
// Link
let link = "";
if (subWrap) {
  if (subWrap.classList.contains("checkoutPage")) {
    link = `${ROOT}Home/Shipping`;
  } else if (subWrap.classList.contains("shippingPage")) {
    link = `${ROOT}Home/Payment`;
  }
}
// thao tao
function subList({ products, total }) {
  const result = products.reduce((acc, item) => {
    return acc + parseInt(item.price);
  }, 0);
  return html`
    <div class="cart-info__row">
      <span>Subtotal <span class="cart-info__sub-label">(items)</span></span>
      <span>${products.length}</span>
    </div>
    <div class="cart-info__row">
      <span>Price <span class="cart-info__sub-label">(Total)</span></span>
      <span>${result}$</span>
    </div>
    <div class="cart-info__row">
      <span>Shipping</span>
      <span>10.00$</span>
    </div>
    <div class="cart-info__separate"></div>
    <div class="cart-info__row">
      <span>Estimated Total</span>
      <span>${result}$</span>
    </div>
    <a href=${link} class="cart-info__next-btn btn btn--primary btn--rounded">
      Continue to checkout
    </a>
  `;
}
export default connect()(subList);
