import html from "../redux/core.js";
// Thêm trang chủ
const filterContainer = document.querySelector(".render-product");
const homeLink = document.createElement("a");
homeLink.classList.add("filter-home", "hide", "btn--primary");
homeLink.href = `${ROOT}/Home/Main`;
homeLink.textContent = "Trang chủ";
if (filterContainer) {
  filterContainer.insertAdjacentElement("beforebegin", homeLink);
}
function toggleHomeLink() {
  homeLink.classList.remove("hide");
}
// Kết thúc
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
        FilterName(e.target.value.trim().toLowerCase());
        e.preventDefault();
        // Gọi hàm xử lý khi nhấn Enter ở đây nếu cần
      }
    });
  }
  let priceGap = 200000;
  inputName;
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
      FilterPrice(priceInput[0].value, priceInput[1].value);
    });
  });
  priceInput.forEach((input) => {
    input.addEventListener("input", (e) => {
      let minVal = parseInt(priceInput[0].value);
      let maxVal = parseInt(priceInput[1].value);
      // CHỈNH LẠI GIÁ TIỀN Ở ĐÂY
      if (maxVal - minVal >= priceGap && maxVal <= 2000000) {
        console.log(e.target.className);
        if (e.target.className.includes("price-input__min")) {
          rangeInput[0].value = minVal;
          progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
        } else {
          rangeInput[1].value = maxVal;
          progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
      }
      FilterPrice(priceInput[0].value, priceInput[1].value);
    });
  });
  //
  function FilterPrice(minVal, maxVal) {
    toggleHomeLink();

    fetch("http://localhost/projectPTIT/API/Read")
      .then((response) => response.json())
      .then((data) => {
        const products = data.filter((item, index) => {
          const price = parseFloat(item.price);
          return price >= minVal && price <= maxVal;
        });
        // Lay index cũ
        let originalIndexes = [];
        data.forEach((item, index) => {
          originalIndexes.push(index);
        });
        const originalIndexesProductCate = [];
        products.forEach((product) => {
          const oldIndex = originalIndexes.findIndex(
            (index) => data[index].id === product.id
          );
          originalIndexesProductCate.push(oldIndex);
        });
        document.querySelector(".render-product").innerHTML = "";
        const SearchHtml = products
          .map((product, index) => {
            const oldIndex = originalIndexesProductCate[index];
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
                      data-index=${oldIndex}
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
        document.querySelector(".render-product").innerHTML = SearchHtml;
        const favorites = JSON.parse(localStorage.getItem("FAVOR"));
        const FavorBtnsNode = document.querySelectorAll(
          ".product-card__like-btn"
        );

        const FavorBtns = Array.from(FavorBtnsNode);
        FavorBtns.forEach((FavorBtn, index) => {
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
          const product = products[index];

          if (product) {
            const isFavor = favorites.some(
              (item) => item.id === product.id && item.isFavor
            );

            if (isFavor) {
              FavorBtn.classList.add("like-btn--liked");
            }
          } else {
            console.log("Không tìm thấy sản phẩm tương ứng");
          }
        });
      });
  }
  function FilterName(value) {
    toggleHomeLink();

    fetch("http://localhost/projectPTIT/API/Read")
      .then((response) => response.json())
      .then((data) => {
        const products = data.filter((item) => {
          return item.name.toLowerCase().includes(value.toLowerCase());
        });
        let originalIndexes = [];
        data.forEach((item, index) => {
          originalIndexes.push(index);
        });
        const originalIndexesProductCate = [];
        products.forEach((product) => {
          const oldIndex = originalIndexes.findIndex(
            (index) => data[index].id === product.id
          );
          originalIndexesProductCate.push(oldIndex);
        });
        document.querySelector(".render-product").innerHTML = "";
        const SearchHtml = products
          .map((product, index) => {
            const oldIndex = originalIndexesProductCate[index];
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
                      data-index=${oldIndex}
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
        document.querySelector(".render-product").innerHTML = SearchHtml;
        const favorites = JSON.parse(localStorage.getItem("FAVOR"));
        const FavorBtnsNode = document.querySelectorAll(
          ".product-card__like-btn"
        );

        const FavorBtns = Array.from(FavorBtnsNode);
        FavorBtns.forEach((FavorBtn, index) => {
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
          const product = products[index];

          if (product) {
            const isFavor = favorites.some(
              (item) => item.id === product.id && item.isFavor
            );

            if (isFavor) {
              FavorBtn.classList.add("like-btn--liked");
            }
          } else {
            console.log("Không tìm thấy sản phẩm tương ứng");
          }
        });
      });
  }
}

export default RenderFilter;
