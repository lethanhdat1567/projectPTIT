import { connect } from "../redux/store.js";
import html from "../redux/core.js";
function HeaderCardDropdown({ favor, products }) {
  const x = products.reduce((acc, item) => {
    const discountedPrice = item.price - (item.price * item.discount) / 100;
    return acc + parseInt(discountedPrice);
  }, 0);

  let shipping = 10000;
  let handleEstimated = shipping + x;
  let Estimated = handleEstimated.toLocaleString("vi-VN");
  let result = x.toLocaleString("vi-VN");
  return html`
    <img src="${ASSETS}icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
    <div class="act-dropdown__top">
      <h2 class="act-dropdown__title">Bạn có ${products.length} sản phẩm</h2>
      <a href="${ROOT}Home/CheckOut" class="act-dropdown__view-all"
        >Xem tất cả</a
      >
    </div>
    <div class="row row-cols-3 gx-2 act-dropdown__list">
      ${products.map((product) => {
        let handlePrice =
          product.price - (product.price * product.discount) / 100;
        let price = handlePrice.toLocaleString("vi-VN");
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
        <p class="cart-preview-item__price">${price} đ</p>
      </article>
    </div>`;
      })}
    </div>
    <div class="act-dropdown__bottom">
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Tổng phụ</span>
        <span class="act-dropdown__value">${result} đ</span>
      </div>
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Thuế</span>
        <span class="act-dropdown__value">Free</span>
      </div>
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Shipping</span>
        <span class="act-dropdown__value">10.000 đ</span>
      </div>
      <div class="act-dropdown__row act-dropdown__row--bold">
        <span class="act-dropdown__label">Tổng tiền</span>
        <span class="act-dropdown__value">${Estimated} đ</span>
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
