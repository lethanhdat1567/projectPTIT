import { connect } from "../redux/store.js";
import html from "../redux/core.js";
function HeaderCardDropdown({ favor, products }) {
  const result = products.reduce((acc, item) => {
    return acc + parseInt(item.price);
  }, 0);
  return html`
    <img src="${ASSETS}icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
    <div class="act-dropdown__top">
      <h2 class="act-dropdown__title">You have ${products.length} item(s)</h2>
      <a href="${ROOT}Home/CheckOut" class="act-dropdown__view-all">See All</a>
    </div>
    <div class="row row-cols-3 gx-2 act-dropdown__list">
      ${products.map((product) => {
        return `<div class="col">
      <article class="cart-preview-item">
        <div class="cart-preview-item__img-wrap">
          <img
            src="${ASSETS}img/products/${product.thumbnail}"
            alt=""
            class="cart-preview-item__thumb"
          />
        </div>
        <h3 class="cart-preview-item__title">${product.name}</h3>
        <p class="cart-preview-item__price">$${product.price}</p>
      </article>
    </div>`;
      })}
    </div>
    <div class="act-dropdown__bottom">
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Subtotal</span>
        <span class="act-dropdown__value">$${result}</span>
      </div>
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Texes</span>
        <span class="act-dropdown__value">Free</span>
      </div>
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Shipping</span>
        <span class="act-dropdown__value">$10.00</span>
      </div>
      <div class="act-dropdown__row act-dropdown__row--bold">
        <span class="act-dropdown__label">Total Price</span>
        <span class="act-dropdown__value">$${result + 10}</span>
      </div>
    </div>
    <div class="act-dropdown__checkout" onclick='dispatch("checkoutAll")'>
      <a
        href="${ROOT}Home/CheckOut"
        class="btn btn--primary btn--rounded act-dropdown__checkout-btn"
        >Check Out All</a
      >
    </div>
  `;
}
export default connect()(HeaderCardDropdown);