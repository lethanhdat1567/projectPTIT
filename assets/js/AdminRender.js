import html from "./redux/core.js";
fetch("http://localhost/projectPTIT/API/Read")
  .then((response) => response.json())
  .then((data) => {
    const HTML = data
      .map((product, index) => {
        return html`
          <div class="col">
            <article class="product-card admin">
              <div class="product-card__img-wrap">
                <a href="${ROOT}Admin/ProductDetail/${product.id}">
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
                <a href="${ROOT}Admin/ProductDetail/${product.id}">
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
    const linkNote = document.querySelectorAll(".admin");
    const link = Array.from(linkNote);

    link.forEach((item) => {
      item.onclick = (e) => {
        alert("Anh/Chị vui lòng đăng nhập trang người dùng!!");
        e.preventDefault();
      };
    });
  });
