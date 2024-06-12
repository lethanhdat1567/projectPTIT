import html from "./redux/core.js";
fetch("https://datlethanh.id.vn/projectPTIT/API/Read")
  .then((response) => response.json())
  .then((data) => {
    const HTML = data
      .map((product, index) => {
        let priceBefore = product.price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        let handlePrice =
          product.price - (product.price * product.discount) / 100;
        let price = handlePrice.toLocaleString("vi-VN");
        let discount = product.discount > 0 ? "show" : "";
        let modify =
          product.discount > 0 ? "product-card__price--discount" : "";
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
                <a href="${ROOT}Home/ProductDetail/${product.id}">
                  ${product.name}
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <span class="product-card__price--modify ${discount}">
                $${priceBefore}
              </span>
              <span class="prod-info__tax ${discount}"
                >${product.discount}%</span
              >
              <div class="product-card__row">
                <span class="product-card__price ${modify}">$${price}</span>
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
    const linkNote = document.querySelectorAll(".admin");
    const link = Array.from(linkNote);

    link.forEach((item) => {
      item.onclick = (e) => {
        alert("Anh/Chị vui lòng đăng nhập trang người dùng!!");
        e.preventDefault();
      };
    });
  });
