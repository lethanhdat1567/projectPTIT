import html from "../redux/core.js";
import { connect } from "../redux/store.js";
function subLittlePrice({ products, total }) {
  let x = products.reduce((acc, item) => {
    const discountedPrice = item.price - (item.price * item.discount) / 100;
    return acc + parseInt(discountedPrice);
  }, 0);
  let shipping = 10000;
  let handleEstimated = shipping + x;
  let Estimated = handleEstimated.toLocaleString("vi-VN");
  let result = x.toLocaleString("vi-VN");
  return html`
    <div class="cart-info__row">
      <span>Tổng phụ:</span>
      <span>${result} đ</span>
    </div>
    <div class="cart-info__row">
      <span>Shipping:</span>
      <span>10.000 đ</span>
    </div>
    <div class="cart-info__separate"></div>
    <div class="cart-info__row cart-info__row--bold">
      <span>Tổng tiền:</span>
      <span>${Estimated} đ</span>
    </div>
  `;
}
export default connect()(subLittlePrice);
