import html from "../redux/core.js";
import { connect } from "../redux/store.js";
import HeaderAlert from "./HeaderAlert.js";

function FavorList({ favor, filters, products }) {
  HeaderAlert(products, favor);
  const duplicateCounts = {};
  favor.forEach((item) => {
    duplicateCounts[item.id] = (duplicateCounts[item.id] || 0) + 1;
  });
  return html`
    <h1 class="cart-info__heading">Favourite List</h1>
    <p class="cart-desc">${favor.length} sản phẩm</p>
    <div class="cart-info__check-all">
      <label class="cart-info__checkbox">
        <input
          name="shipping-address"
          type="checkbox"
          class="cart-info__checkbox-input"
          onchange='dispatch("toggleAll",this.checked)'
          ${favor.every(filters.completed) && "checked"}
        />
        Check All
      </label>
    </div>
    <div class="cart-info__list cart-info__list-favor">
      ${favor.map((item, index) => {
        let handlePrice = item.price - (item.price * item.discount) / 100;
        let price = handlePrice.toLocaleString("vi-VN");
        const countDuplicates = duplicateCounts[item.id] || 1;
        if (
          countDuplicates === 1 ||
          index === favor.findIndex((i) => i.id === item.id)
        ) {
          return `<article class="cart-item">
          <label class="cart-info__checkbox">
            <input
              name="shipping-address"
              type="checkbox"
              class="cart-info__checkbox-input"
              ${item.isCheckOut && "checked"}
              onchange='dispatch("toggle",${index})'
            />
          </label>
          <a href="${ROOT}Home/ProductDetail/${item.id}">
            <img
              src="${ASSETS}img/products/${item.thumbnail}"
              alt=""
              class="cart-item__thumb"
            />
          </a>
          <div class="cart-item__content">
            <div class="cart-item__content-left">
              <h3 class="cart-item__title">
                ${item.name}
              </h3>
              <p class="cart-item__price-wrap">
               100 |
                <span class="cart-item__status">Còn hàng</span>
              </p>
              <div class="cart-item__ctrl-wrap">
                <div class="cart-item__ctrl cart-item__ctrl--md-block">
                  <div class="cart-item__input">
                    LavAzza
                  </div>
                </div>
                <div class="cart-item__ctrl">
                  <button
                    class="cart-item__ctrl-btn" onclick="dispatch('destroyFavor',${index})"
                  >
                    <img src="${ASSETS}icons/trash.svg" alt="" />
                    Delete
                  </button>
                </div>
              </div>
            </div>
            <div class="cart-item__content-right">
              <p class="cart-item__total-price">${price} đ</p>
              <button
                class="cart-item__checkout-btn btn btn--primary btn--rounded"
                onclick="dispatch('CheckOut',${index})"
              >
                Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </article>`;
        } else {
          return "";
        }
      })}
    </div>
    <div class="cart-info__bottom">
      <div class="cart-info__row cart-info__row-md--block">
        <div class="cart-info__continue">
          <a href="${ROOT}Home/" class="cart-info__continue-link">
            <img
              class="cart-info__continue-icon icon"
              src="${ASSETS}icons/arrow-down-2.svg"
              alt=""
            />
            Trở về trang chủ
          </a>
        </div>
        <button
          href="${ROOT}Home/CheckOut"
          class="cart-info__checkout-all btn btn--primary btn--rounded"
          onclick='dispatch("checkoutAll")'
        >
          Thêm tất cả vào giỏ hàng
        </button>
      </div>
    </div>
  `;
}
export default connect()(FavorList);
