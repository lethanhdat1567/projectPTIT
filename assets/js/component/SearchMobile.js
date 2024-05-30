import html from "../redux/core.js";
document.addEventListener("DOMContentLoaded", function () {
  const inputBtn = document.querySelector(".search-dropdown-mobile__input");
  const closeBtn = document.querySelector(".search-dropdown-mobile__close");
  const innnerSearch = document.querySelector(".search-dropdown-inner-mobile");

  if (inputBtn) {
    inputBtn.addEventListener("input", function (e) {
      fetch("http://localhost/projectPTIT/API/Read")
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
        return html`
          <div class="product-card__search-mobile-wrapper">
            <a
              class="product-card__search-mobile-img-wrapper"
              href="${ROOT}Home/ProductDetail/${product.id}"
            >
              <img
                src="${ASSETS}img/products/${product.thumbnail}"
                class="product-card__search-mobile-img"
              />
            </a>
            <a
              href="${ROOT}Home/ProductDetail/${product.id}"
              class="product-card__search-mobile"
              >${product.name}</a
            >
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
