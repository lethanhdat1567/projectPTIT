import html from "../redux/core.js";
import { connect } from "../redux/store.js";
import HeaderAlert from "./HeaderAlert.js";

function CardList({ products, favor }) {
  HeaderAlert(products, favor);

  // Đối tượng để lưu trữ số lần xuất hiện của mỗi ID sản phẩm
  const productCounts = {};

  // Lặp qua mảng products để đếm số lần xuất hiện của mỗi ID sản phẩm
  products.forEach((product) => {
    const productId = product.id;
    productCounts[productId] = (productCounts[productId] || 0) + 1;
  });

  // Biến để lưu trữ ID của các sản phẩm đã được hiển thị
  const displayedProductIds = new Set();

  return html`
    ${products.map((product, index) => {
      const productId = product.id;

      // Kiểm tra xem sản phẩm đã được hiển thị chưa
      if (displayedProductIds.has(productId)) {
        return ""; // Nếu đã được hiển thị, trả về chuỗi rỗng
      }

      // Nếu chưa được hiển thị, thêm ID vào Set
      displayedProductIds.add(productId);

      // Lấy số lần xuất hiện của sản phẩm
      const productCount = productCounts[productId];

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
                </div>
                <div class="cart-item__input">
                  <button class="cart-item__input-btn" onclick="dispatch('minusCart',${index})">
                    <img class="icon" src="${ASSETS}icons/minus.svg" alt="" />
                  </button>
                  <span>${productCount}</span> <!-- Hiển thị số lượng sản phẩm -->
                  <button class="cart-item__input-btn" onclick="dispatch('plusCart',${index})">
                    <img class="icon" src="${ASSETS}icons/plus.svg" alt="" />
                  </button>
                </div>
              </div>
            </div>
            <div class="cart-item__content-right">
              <p class="cart-item__total-price">${product.price}$</p>
              <div class="cart-item__ctrl">
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
