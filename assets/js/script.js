import RenderFilter from "./component/RenderFilter.js";
import toggleHomeLink from "./component/HomeFilter.js";
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function isHidden(element) {
  if (!element) return true;

  if (window.getComputedStyle(element).display === "none") {
    return true;
  }

  let parent = element.parentElement;
  while (parent) {
    if (window.getComputedStyle(parent).display === "none") {
      return true;
    }
    parent = parent.parentElement;
  }

  return false;
}

function debounce(func, timeout = 300) {
  let timer;
  return (...args) => {
    clearTimeout(timer);
    timer = setTimeout(() => {
      func.apply(this, args);
    }, timeout);
  };
}

const calArrowPos = debounce(() => {
  if (isHidden($(".js-dropdown-list"))) return;

  const items = $$(".js-dropdown-list > li");

  items.forEach((item) => {
    const arrowPos = item.offsetLeft + item.offsetWidth / 2;
    item.style.setProperty("--arrow-left-pos", `${arrowPos}px`);
  });
});

window.addEventListener("resize", calArrowPos);

window.addEventListener("DOMContentLoaded", calArrowPos);

window.addEventListener("DOMContentLoaded", handleActiveMenu);

function handleActiveMenu() {
  const dropdowns = $$(".js-dropdown");
  const menus = $$(".js-menu-list");
  const activeClass = "menu-column__item--active";

  const removeActive = (menu) => {
    menu.querySelector(`.${activeClass}`)?.classList.remove(activeClass);
  };

  const init = () => {
    menus.forEach((menu) => {
      const items = menu.children;
      if (!items.length) return;

      removeActive(menu);
      if (window.innerWidth > 991) items[0].classList.add(activeClass);

      Array.from(items).forEach((item) => {
        item.onmouseenter = () => {
          if (window.innerWidth <= 991) return;
          removeActive(menu);
          item.classList.add(activeClass);
        };
        item.onclick = () => {
          if (window.innerWidth > 991) return;
          removeActive(menu);
          item.classList.add(activeClass);
          item.scrollIntoView();
        };
      });
    });
  };

  init();

  dropdowns.forEach((dropdown) => {
    dropdown.onmouseleave = () => init();
  });
}

window.addEventListener("DOMContentLoaded", initJsToggle);

function initJsToggle() {
  $$(".js-toggle").forEach((button) => {
    const target = button.getAttribute("toggle-target");
    if (!target) {
      document.body.innerText = `Cần thêm toggle-target cho: ${button.outerHTML}`;
    }
    button.onclick = (e) => {
      e.preventDefault();
      RenderFilter();
      if (!$(target)) {
        return (document.body.innerText = `Không tìm thấy phần tử "${target}"`);
      }
      const isHidden = $(target).classList.contains("hide");

      requestAnimationFrame(() => {
        $(target).classList.toggle("hide", !isHidden);
        $(target).classList.toggle("show", isHidden);
      });
    };
    document.onclick = function (e) {
      if (!e.target.closest(target)) {
        const isHidden = $(target).classList.contains("hide");
        if (!isHidden) {
          button.click();
        }
      }
    };
  });
}
window.addEventListener("DOMContentLoaded", () => {
  const links = $$(".js-dropdown-list > li > a");

  links.forEach((link) => {
    link.onclick = () => {
      if (window.innerWidth > 991) return;
      const item = link.closest("li");
      item.classList.toggle("navbar__item--active");
    };
  });
});
window.addEventListener("DOMContentLoaded", () => {
  const tabsSelector = "prod-tad__item";
  const contentsSelector = "prod-tad__content";

  const tabActive = `${tabsSelector}--current`;
  const contentActive = `${contentsSelector}--current`;

  const tabContainers = $$(".js-tabs");
  tabContainers.forEach((tabContainer) => {
    const tabs = tabContainer.querySelectorAll(`.${tabsSelector}`);
    const contents = tabContainer.querySelectorAll(`.${contentsSelector}`);
    tabs.forEach((tab, index) => {
      tab.onclick = () => {
        tabContainer
          .querySelector(`.${tabActive}`)
          ?.classList.remove(tabActive);
        tabContainer
          .querySelector(`.${contentActive}`)
          ?.classList.remove(contentActive);
        tab.classList.add(tabActive);
        contents[index].classList.add(contentActive);
      };
    });
  });
});
window.addEventListener("DOMContentLoaded", () => {
  const switchBtn = document.querySelector("#switch-theme-btn");
  if (switchBtn) {
    switchBtn.onclick = function () {
      const isDark = localStorage.dark === "true";
      document.querySelector("html").classList.toggle("dark", !isDark);
      localStorage.setItem("dark", !isDark);
      switchBtn.querySelector("span").textContent = isDark
        ? "Dark mode"
        : "Light mode";
    };
    const isDark = localStorage.dark === "true";
    switchBtn.querySelector("span").textContent = isDark
      ? "Light mode"
      : "Dark mode";
  }
});

const isDark = localStorage.dark === "true";
document.querySelector("html").classList.toggle("dark", isDark);

window.addEventListener("DOMContentLoaded", () => {
  const rolesBtnNote = $$(".activeRoleBtn");
  const inputRoles = $$(".role-input");
  const roleHiddens = $$(".role-inputHidden");
  const rolesBtn = Array.from(rolesBtnNote);
  const inputRole = Array.from(inputRoles);
  const roleHidden = Array.from(roleHiddens);
  rolesBtn.map((roleBtn, index) => {
    roleBtn.onclick = (e) => {
      e.preventDefault();
      inputRole[index].focus();
    };
    inputRole[index].addEventListener("keypress", function (event) {
      if (event.key === "Enter") {
        window.location.href = `${ROOT}Admin/QLND/${roleHidden[index].value}`;
      }
    });
  });
});

window.addEventListener("DOMContentLoaded", () => {
  function html([first, ...string], ...values) {
    return values
      .reduce((acc, cur) => acc.concat(cur, string.shift()), [first])
      .filter((x) => (x && x !== true) || x === 0)
      .join("");
  }
  // Thêm trang chủ
  const cates = document.querySelectorAll(".category-item");
  const catesArr = Array.from(cates);
  catesArr.forEach((cate) => {
    cate.onclick = (e) => {
      fetch("http://localhost/projectPTIT/API/Read")
        .then((response) => response.json())
        .then((data) => {
          let originalIndexes = [];
          data.forEach((item, index) => {
            originalIndexes.push(index);
          });
          toggleHomeLink();
          let productCate = [];
          if (cate.classList.contains("category-item-1")) {
            productCate = data.filter((value) => {
              const price = parseFloat(value.price);
              return price >= 0 && price <= 200000;
            });
          } else if (cate.classList.contains("category-item-2")) {
            productCate = data.filter((value) => {
              const price = parseFloat(value.price);
              return price > 200000 && price <= 500000;
            });
          } else if (cate.classList.contains("category-item-3")) {
            productCate = data.filter((value) => {
              const price = parseFloat(value.price);
              return price > 500000;
            });
          }
          const originalIndexesProductCate = [];
          // So sánh từng sản phẩm trong productCate với dữ liệu ban đầu để tìm index cũ
          productCate.forEach((product) => {
            const oldIndex = originalIndexes.findIndex(
              (index) => data[index].id === product.id
            );
            originalIndexesProductCate.push(oldIndex);
          });

          // Sử dụng mảng originalIndexesProductCate để lấy index cũ của từng sản phẩm trong productCate
          const CateHtml = productCate
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
                        data-index="${oldIndex}"
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
          const productElement = document.querySelector(".render-product");
          productElement.innerHTML = CateHtml;
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
            const product = productCate[index];

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
    };
  });
});
