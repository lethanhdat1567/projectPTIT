import html from "../redux/core.js";
document.addEventListener("DOMContentLoaded", function () {
  const inputBtn = document.querySelector(".search-dropdown-mobile__input");
  const closeBtn = document.querySelector(".search-dropdown-mobile__close");
  const innnerSearch = document.querySelector(".search-dropdown-inner-mobile");

  if (inputBtn) {
    inputBtn.addEventListener("input", function (e) {
      fetch("https://datlethanh.id.vn/projectPTIT/API/Read")
        .then((response) => response.json())
        .then((data) => {
          let productSearch = data.filter((value) => {
            return value.name
              .toLowerCase()
              .includes(e.target.value.toLowerCase());
          });
          renderValue(productSearch);
        });
      closeBtn.style.display = "block";
      innnerSearch.style.display = "block";
      if (e.target.value === "") {
        closeBtn.style.display = "none";
        innnerSearch.style.display = "none";
      }
    });
  }
  function renderValue(value) {
    const innnerSearch = document.querySelector(
      ".search-dropdown-inner-mobile"
    );
    const Html = value
      .map((product, index) => {
        let handlePrice =
          product.price - (product.price * product.discount) / 100;
        let price = handlePrice.toLocaleString("vi-VN");
        let discount = product.discount > 0 ? "show" : "";
        let modify =
          product.discount > 0 ? "product-card__price--discount" : "";
        return html`
          <div class="product-card__search-mobile-wrapper">
            <div class="product-card__search-mobile-wrap">
              <a
                class="product-card__search-mobile-img-wrapper"
                href="${ROOT}Home/ProductDetail/${product.id}"
              >
                <img
                  src="${ASSETS}img/products/${product.thumbnail}"
                  class="product-card__search-mobile-img"
                />
              </a>
              <div class="product-card__price-wrapper">
                <a
                  href="${ROOT}Home/ProductDetail/${product.id}"
                  class="product-card__search-mobile"
                  >${product.name}</a
                >
                <span class="prod-info__tax ${discount}"
                  >${product.discount}%</span
                >
                <span class="product-card__price ${modify}">$${price}</span>
              </div>
            </div>
          </div>
        `;
      })
      .join("");
    innnerSearch.innerHTML = Html;
  }
  if (closeBtn)
    closeBtn.onclick = (e) => {
      inputBtn.value = "";
      innnerSearch.style.display = "none";
      closeBtn.style.display = "none";
    };
});
