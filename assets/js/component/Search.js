import html from "../redux/core.js";
import { connect } from "../redux/store.js";
function Search() {
  fetch("http://localhost/projectPTIT/API/Read")
    .then((response) => response.json())
    .then((data) => {
      const HTML = data
        .map((product, index) => {
          return html`
            <div class="col search__product-item">
              <article class="product-card product-card__search">
                <div
                  class="product-card__img-wrap product-card__img-wrap--search"
                >
                  <a href="${ROOT}Home/ProductDetail/${index + 1}">
                    <img
                      src="${ASSETS}img/products/${product.thumbnail}"
                      alt=""
                      class="product-card__thumb"
                    />
                  </a>
                </div>
                <div class="product__desc-wrap">
                  <h3 class="product-card__title">
                    <a
                      href="${ROOT}Home/ProductDetail/${product.id}"
                      class="product-card__title-search"
                    >
                      ${product.name}
                    </a>
                  </h3>
                  <div class="product-card__row">
                    <a
                      href="${ROOT}Home/ProductDetail/${index + 1}"
                      class="product-card__price-search"
                    >
                      <span class="product-card__price">$${product.price}</span>
                    </a>
                  </div>
                </div>
              </article>
            </div>
          `;
        })
        .join("");
      const productElement = document.querySelector(".search__product-list");
      productElement.innerHTML = HTML;
    });
}
const SearchInput = document.querySelector(".search__input");
SearchInput.addEventListener("input", function (e) {
  let InputValue = e.target.value.trim().toLowerCase();
  let products = document.querySelectorAll(".product-card__search");
  products.forEach((item) => {
    if (item.innerText.toLowerCase().includes(InputValue)) {
      item.classList.remove("hide");
    } else {
      item.classList.add("hide");
    }
  });
});
export default Search;
