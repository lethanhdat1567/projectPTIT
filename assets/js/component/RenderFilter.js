import html from "../redux/core.js";
import toggleHomeLink from "./HomeFilter.js";

function RenderFilter() {
  const $ = document.querySelector.bind(document);
  const $$ = document.querySelectorAll.bind(document);
  const rangeInputs = $$(".filter__form-group-wrapper input");
  const priceInput = $$(".price-input");
  const progress = $(".filter__form-slider");
  const inputName = $(".filter__form-input-branch");

  if (inputName) {
    inputName.addEventListener("keydown", (e) => {
      if (e.key === "Enter") {
        FilterAndRender(
          priceInput[0].value,
          priceInput[1].value,
          e.target.value.trim().toLowerCase()
        );
        e.preventDefault();
      }
    });
  }

  let priceGap = 200000;
  const rangeInput = Array.from(rangeInputs);

  rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
      let minVal = parseInt(rangeInput[0].value);
      let maxVal = parseInt(rangeInput[1].value);

      if (maxVal - minVal < priceGap) {
        if (e.target.className === "range-min") {
          rangeInput[0].value = maxVal - priceGap;
        } else {
          rangeInput[1].value = minVal + priceGap;
        }
      } else {
        priceInput[0].value = minVal;
        priceInput[1].value = maxVal;
        progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
        progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
      }

      FilterAndRender(
        priceInput[0].value,
        priceInput[1].value,
        inputName.value.trim().toLowerCase()
      );
    });
  });

  priceInput.forEach((input) => {
    input.addEventListener("input", (e) => {
      let minVal = parseInt(priceInput[0].value);
      let maxVal = parseInt(priceInput[1].value);

      if (maxVal - minVal >= priceGap && maxVal <= 2000000) {
        if (e.target.className.includes("price-input__min")) {
          rangeInput[0].value = minVal;
          progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
        } else {
          rangeInput[1].value = maxVal;
          progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
      }

      FilterAndRender(minVal, maxVal, inputName.value.trim().toLowerCase());
    });
  });

  function FilterAndRender(minVal, maxVal, nameValue) {
    toggleHomeLink();

    fetch("http://localhost/projectPTIT/API/Read")
      .then((response) => response.json())
      .then((data) => {
        const products = data.filter((item) => {
          const price = parseFloat(item.price);
          return (
            price >= minVal &&
            price <= maxVal &&
            item.name.toLowerCase().includes(nameValue)
          );
        });

        RenderProducts(products);
      });
  }

  function RenderProducts(products) {
    const renderProduct = $(".render-product");

    if (!renderProduct) return;

    renderProduct.innerHTML = products
      .map((product) => {
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
                  data-index="${product.id}"
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
                <a href="${ROOT}Home/ProductDetail/${product.id}">
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

    const favorites = JSON.parse(localStorage.getItem("FAVOR"));

    products.forEach((product) => {
      const favorBtn = $(`.product-card__like-btn[data-index="${product.id}"]`);

      if (!favorBtn) return;

      favorBtn.addEventListener("click", (e) => {
        e.preventDefault();
        favorBtn.classList.toggle("like-btn--liked");

        if (favorBtn.classList.contains("like-btn--liked")) {
          dispatch("addFavor", product.id);
        } else {
          dispatch("deleteFavor", product.id);
        }
      });

      const isFavor = favorites.some(
        (item) => item.id === product.id && item.isFavor
      );

      if (isFavor) {
        favorBtn.classList.add("like-btn--liked");
      }
    });
  }
}

export default RenderFilter;
