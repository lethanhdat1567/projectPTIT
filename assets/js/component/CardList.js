import html from "../redux/core.js";
import { connect } from "../redux/store.js";
function CardList({ products }) {
  return html`
    ${products.map((product, index) => {
      return `<article class="cart-item">
        <a href="${ROOT}Home/ProductDetail/${product.id}">
          <img
            src="${ASSETS}img/products/${product.thumbnail}"
            alt=""
            class="cart-item__thumb"
          />
        </a>
        <div class="cart-item__content">
          <div class="cart-item__content-left">
            <h3 class="cart-item__title">
              ${product.name}
            </h3>
            <p class="cart-item__price-wrap">
              $47.00 |
              <span class="cart-item__status">In Stock</span>
            </p>
            <div class="cart-item__ctrl cart-item__ctrl--md-block">
              <div class="cart-item__input">
                LavAzza
                <img class="icon" src="${ASSETS}icons/arrow-down-2.svg" alt="" />
              </div>
              <div class="cart-item__input">
                <button class="cart-item__input-btn">
                  <img class="icon" src="${ASSETS}icons/minus.svg" alt="" />
                </button>
                <span>1</span>
                <button class="cart-item__input-btn">
                  <img class="icon" src="${ASSETS}icons/plus.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="cart-item__content-right">
            <p class="cart-item__total-price">${product.price}$</p>
            <div class="cart-item__ctrl">
              <button class="cart-item__ctrl-btn">
                <img src="${ASSETS}icons/heart-2.svg" alt="" />
                Save
              </button>
              <button
                class="cart-item__ctrl-btn"
                onclick="dispatch('delete',${index})"
              >
                <img src="${ASSETS}icons/trash.svg" alt="" />
                Delete
              </button>
            </div>
          </div>
        </div>
      </article>`;
    })}
  `;
}
export default connect()(CardList);
