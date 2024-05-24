import html from "../redux/core.js";
import { connect } from "../redux/store.js";
function subLittlePrice({ products, total }) {
  return html`
    <div class="cart-info__row">
      <span>Subtotal:</span>
      <span>$${total}</span>
    </div>
    <div class="cart-info__row">
      <span>Shipping:</span>
      <span>$10.00</span>
    </div>
    <div class="cart-info__separate"></div>
    <div class="cart-info__row cart-info__row--bold">
      <span>Total:</span>
      <span>$${total + 10}</span>
    </div>
  `;
}
export default connect()(subLittlePrice);
