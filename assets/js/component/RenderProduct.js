import html from "../redux/core.js";
import { connect } from "../redux/store.js";
import storage from "../../util/storage.js";
import HeaderAlert from "./HeaderAlert.js";

function RenderProduct({ products, favor, All }) {
  HeaderAlert(products, favor);
  fetch("http://localhost/projectPTIT/API/Read")
    .then((response) => response.json())
    .then((data) => {
      // storage.setALL(data);
      const HTML = data
        .map((product, index) => {
          return html`
            <div class="col">
              <article class="product-card">
                <div class="product-card__img-wrap">
                  <a href="${ROOT}Home/ProductDetail/${index + 1}">
                    <img
                      src="${ASSETS}img/products/${product.thumbnail}"
                      alt=""
                      class="product-card__thumb"
                    />
                  </a>
                  <button
                    class="like-btn product-card__like-btn"
                    data-index=${index}
                  >
                    <img
                      src="${ASSETS}icons/heart.svg"
                      alt=""
                      class="like-btn__icon icon"
                    />
                    <img
                      src="${ASSETS}icons/heart-red.svg"
                      alt=""
                      class="like-btn__icon--liked"
                    />
                  </button>
                </div>
                <h3 class="product-card__title">
                  <a href="${ROOT}Home/ProductDetail/${index + 1}">
                    ${product.name}
                  </a>
                </h3>
                <p class="product-card__brand">Lavazza</p>
                <div class="product-card__row">
                  <span class="product-card__price">$${product.price}</span>
                  <img
                    src="${ASSETS}icons/star.svg"
                    alt=""
                    class="product-card__star"
                  />
                  <span class="product-card__score">4.3</span>
                </div>
              </article>
            </div>
          `;
        })
        .join("");
      const productElement = document.querySelector(".render-product");
      productElement.innerHTML = HTML;
      // Like Btn
      const FavorBtnsNode = document.querySelectorAll(
        ".product-card__like-btn"
      );
      const FavorBtns = Array.from(FavorBtnsNode);
      FavorBtns.forEach((FavorBtn) => {
        FavorBtn.onclick = function (e) {
          e.preventDefault(); // Ngăn chặn hành động mặc định của nút (chẳng hạn chuyển hướng)
          const index = FavorBtn.getAttribute("data-index");
          // Thực hiện toggle lớp CSS 'like-btn--liked'
          this.classList.toggle("like-btn--liked");
          if (this.classList.contains("like-btn--liked")) {
            dispatch("addFavor", index);
            // location.reload();
          } else {
            dispatch("deleteFavor", index);
            // location.reload();
          }
        };
      });

      // Gọi hàm updateFavoriteStatus để cập nhật trạng thái yêu thích sau khi các sản phẩm đã được render
      updateFavoriteStatus(favor, data, FavorBtns);
    });
}

function updateFavoriteStatus(favor, data, FavorBtns) {
  const favorites = favor;
  FavorBtns.forEach((FavorBtn, index) => {
    if (data[index]) {
      const isFavor = favorites.some(
        (item) => item.id === data[index].id && item.isFavor
      );
      if (isFavor) {
        FavorBtn.classList.add("like-btn--liked");
      }
    } else {
      console.log("chiu thua");
    }
  });
}

window.onload = function () {
  const favor = JSON.parse(localStorage.getItem("favor") || "[]");
  const All = JSON.parse(localStorage.getItem("ALL") || "[]");
  const FavorBtnsNode = document.querySelectorAll(".product-card__like-btn");
  const FavorBtns = Array.from(FavorBtnsNode);
  updateFavoriteStatus(favor, All, FavorBtns);
};
// search product
function searchProduct() {
  let valueSearch = document.querySelector(".search__input").value;
  const search_Btn = document.querySelector(".search__btn");
  search_Btn.onclick = (e) => {
    e.preventDefault();
    fetch("http://localhost/projectPTIT/API/Read")
      .then((response) => response.json())
      .then((data) => {
        let productSearch = data.filter((value) => {
          return value.name.includes(valueSearch);
        });
        document.querySelector(".render-product").innerHTML = "";
        //  render
        const SearchHtml = productSearch
          .map((product, index) => {
            return html`
              <div class="col">
                <article class="product-card">
                  <div class="product-card__img-wrap">
                    <a href="${ROOT}Home/ProductDetail/${product.id}">
                      <img
                        src="${ASSETS}img/products/${product.thumbnail}"
                        alt=""
                        class="product-card__thumb"
                      />
                    </a>
                    <button
                      class="like-btn product-card__like-btn"
                      data-index=${index}
                    >
                      <img
                        src="${ASSETS}icons/heart.svg"
                        alt=""
                        class="like-btn__icon icon"
                      />
                      <img
                        src="${ASSETS}icons/heart-red.svg"
                        alt=""
                        class="like-btn__icon--liked"
                      />
                    </button>
                  </div>
                  <h3 class="product-card__title">
                    <a href="${ROOT}Home/ProductDetail/${index + 1}">
                      ${product.name}
                    </a>
                  </h3>
                  <p class="product-card__brand">Lavazza</p>
                  <div class="product-card__row">
                    <span class="product-card__price">$${product.price}</span>
                    <img
                      src="${ASSETS}icons/star.svg"
                      alt=""
                      class="product-card__star"
                    />
                    <span class="product-card__score">4.3</span>
                  </div>
                </article>
              </div>
            `;
          })
          .join("");
        document.querySelector(".render-product").innerHTML = SearchHtml;
      });
  };
}
document.addEventListener("click", function (event) {
  var targetElement = event.target; // Phần tử mà người dùng click vào
  // Kiểm tra xem phần tử được click có phải là nút mở dropdown không
  if (
    targetElement.classList.contains("top-act__btn-search") ||
    targetElement.closest(".top-act__btn-search") ||
    targetElement.closest(".search-dropdown__inner")
  ) {
    // Lấy phần tử dropdown
    var searchDropdown = document.querySelector(".search-dropdown");
    searchDropdown.style.display = "block";
    document
      .querySelector(".search__input")
      .addEventListener("input", searchProduct);
    searchProduct();
  } else {
    // Nếu click ra ngoài dropdown hoặc không phải là nút mở dropdown, ẩn dropdown đi
    var searchDropdown = document.querySelector(".search-dropdown");
    searchDropdown.style.display = "none";
  }
  if (
    targetElement.classList.contains("search__close-img-wrap") ||
    targetElement.closest(".search__close-img-wrap") ||
    targetElement.closest(".search__close-img")
  ) {
    searchDropdown.style.display = "none";
  }
});

export default connect()(RenderProduct);
