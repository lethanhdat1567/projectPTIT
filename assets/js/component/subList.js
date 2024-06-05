import html from "../redux/core.js";
import { connect } from "../redux/store.js";
const subWrap = document.querySelector(".cart-info__sub-list");

let link = `${ROOT}Home/Payment`;
// thao tao
function subList({ products, total }) {
  const x = products.reduce((acc, item) => {
    const discountedPrice = item.price - (item.price * item.discount) / 100;
    return acc + parseInt(discountedPrice);
  }, 0);
  let shipping = 10;
  let handleEstimated = shipping + x;
  let Estimated = handleEstimated.toLocaleString("vi-VN");
  let result = x.toLocaleString("vi-VN");
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
      <span>${Estimated}$</span>
    </div>
  `;
}
export default connect()(subList);
