import html from "../redux/core.js";
import { connect } from "../redux/store.js";

function FavorHeaderList({ favor }) {
  return html`
    <img src="${ASSETS}icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
    <div class="act-dropdown__top">
      <h2 class="act-dropdown__title">Bạn có ${favor.length} sản phẩm</h2>
      <a href="${ROOT}Home/Favourite" class="act-dropdown__view-all"
        >Xem tất cả</a
      >
    </div>
    <div class="row row-cols-3 gx-2 act-dropdown__list">
      ${favor.map((item) => {
        let handlePrice = item.price - (item.price * item.discount) / 100;
        let price = handlePrice.toLocaleString("vi-VN");
        return `<div class="col">
          <article class="cart-preview-item">
            <div class="cart-preview-item__img-wrap">
              <img
                src="${ASSETS}img/products/${item.thumbnail}"
                alt=""
                class="cart-preview-item__thumb"
              />
            </div>
            <h3 class="cart-preview-item__title">${item.name}</h3>
            <p class="cart-preview-item__price">${price} đ</p>
          </article>
        </div>`;
      })}
    </div>
    <div class="act-dropdown__separate"></div>
    <div class="act-dropdown__checkout">
      <button
        href="${ROOT}Home/CheckOut"
        class="cart-info__checkout-all btn btn--primary btn--rounded"
        onclick='dispatch("checkoutNgu")'
      >
        Mua tất cả
      </button>
    </div>
  `;
}
export default connect()(FavorHeaderList);
