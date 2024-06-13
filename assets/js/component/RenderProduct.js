import html from "../redux/core.js";
import { connect } from "../redux/store.js";
import HeaderAlert from "./HeaderAlert.js";
import toggleHomeLink from "./HomeFilter.js";
let items = [];
let currentPage = 1;
let perPage = 10;
let totalPage = items.length / 10;
let perItem = [];
let isPaginationRendered = false;
function renderPageNumber(products, favor) {
  if (!isPaginationRendered) {
    const pagination = document.querySelector("#pagination");
    if (pagination) {
      totalPage = Math.ceil(items.length / perPage);
      for (let i = 1; i <= totalPage; i++) {
        document.getElementById(
          "pagination"
        ).innerHTML += `<li class="pagination-li">${i}</li>`;
      }
      const liNote = document.querySelectorAll(".pagination-li");
      const li = Array.from(liNote);
      li.forEach((item, index) => {
        item.onclick = (e) => {
          li.forEach((liItem) => liItem.classList.remove("clicked"));
          item.classList.add("clicked");
          handlePageNumber(index + 1, products, favor);
        };
        if (index === 0) {
          item.classList.add("clicked");
          handlePageNumber(1, products, favor);
        }
      });
      document.querySelector(".pagination-minus").onclick = () => {
        if (currentPage > 1) {
          li.forEach((liItem) => liItem.classList.remove("clicked"));
          li[currentPage - 2].classList.add("clicked");
          handlePageNumber(currentPage - 1, products, favor);
        }
      };

      document.querySelector(".pagination-plus").onclick = () => {
        if (currentPage < totalPage) {
          const newPage = currentPage + 1;
          const newPageLi = li[newPage - 1];
          li.forEach((liItem) => liItem.classList.remove("clicked"));
          newPageLi.classList.add("clicked");
          handlePageNumber(newPage, products, favor);
        }
      };

      isPaginationRendered = true;
    }
  }
}

function handlePageNumber(num, products, favor) {
  currentPage = num;
  perItem = items.slice(
    (currentPage - 1) * perPage,
    (currentPage - 1) * perPage + perPage
  );
  RenderProduct({ products, favor });
}
function RenderProduct({ products, favor, All }) {
  HeaderAlert(products, favor);
  const x = products.reduce((acc, item) => {
    const discountedPrice = item.price - (item.price * item.discount) / 100;
    return acc + parseInt(discountedPrice);
  }, 0);
  let shipping = 10;
  let handleEstimated = shipping + x;
  let Estimated = handleEstimated.toLocaleString("vi-VN");
  let result = x.toLocaleString("vi-VN");
  fetch("https://coffeedp.id.vn/projectPTIT/API/Read")
    .then((response) => response.json())
    .then((data) => {
      items = data;
      perItem = items.slice(
        (currentPage - 1) * perPage,
        (currentPage - 1) * perPage + perPage
      );
      renderPageNumber(products, favor);
      const HTML = perItem
        .map((product, index) => {
          let handlePrice =
            product.price - (product.price * product.discount) / 100;
          let priceBefore = product.price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
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
                  ${priceBefore} đ
                </span>
                <span class="prod-info__tax ${discount}"
                  >${product.discount}%</span
                >
                <div class="product-card__row">
                  <span class="product-card__price ${modify}">${price} đ</span>
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
function renderPaginationForSearch(totalPages) {
  const pagination = document.querySelector("#pagination");
  if (pagination) {
    pagination.innerHTML = ""; // Xóa nội dung pagination cũ
    for (let i = 1; i <= totalPages; i++) {
      pagination.innerHTML += `<li class="pagination-li">${i}</li>`;
    }
    const liNote = document.querySelectorAll(".pagination-li");
    const li = Array.from(liNote);
    li.forEach((item, index) => {
      item.onclick = (e) => {
        li.forEach((liItem) => liItem.classList.remove("clicked"));
        item.classList.add("clicked");
        handlePageNumber(index + 1, products, favor);
      };
    });
  }
}
// search product
function searchProduct() {
  let valueSearch = document.querySelector(".search__input").value;
  const search_Btn = document.querySelector(".search__btn");
  search_Btn.onclick = (e) => {
    e.preventDefault();
    toggleHomeLink();
    fetch("https://coffeedp.id.vn/projectPTIT/API/Read")
      .then((response) => response.json())
      .then((data) => {
        let productSearch = data.filter((product) => {
          const searchValue = valueSearch.toLowerCase();
          const productName = product.name.toLowerCase();
          const productPrice = product.price;
          return (
            productName.includes(searchValue) ||
            productPrice.includes(searchValue)
          );
        });
        document.querySelector(".render-product").innerHTML = "";
        //  render
        const SearchHtml = productSearch
          .map((product, index) => {
            let handlePrice =
              product.price - (product.price * product.discount) / 100;
            let price = handlePrice.toLocaleString("vi-VN");
            let discount = product.discount > 0 ? "show" : "";
            let modify =
              product.discount > 0 ? "product-card__price--discount" : "";
            let priceBefore = product.price.replace(
              /\B(?=(\d{3})+(?!\d))/g,
              "."
            );
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
                  <div class="product-card__row">
                    <span class="product-card__price ${modify}">$${price}</span>
                    <span class="prod-info__tax ${discount}"
                      >${product.discount}%</span
                    >
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
        var searchDropdown = document.querySelector(".search-dropdown");
        searchDropdown.style.display = "none";
        // Tính toán số lượng trang cần hiển thị
        const totalPages = Math.ceil(productSearch.length / perPage);
        renderPaginationForSearch(totalPages);

        // Render sản phẩm cho trang đầu tiên
        handlePageNumber(1, productSearch, favor);
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
    // searchProduct();
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
