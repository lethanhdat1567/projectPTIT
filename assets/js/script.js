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

// favourite list
window.addEventListener("DOMContentLoaded", () => {
  const favorList = $(".act-dropdown__inner-favor");
  let products = JSON.parse(localStorage.getItem("product"));
  function html([first, ...string], ...values) {
    return values
      .reduce((acc, cur) => acc.concat(cur, string.shift()), [first])
      .filter((x) => (x && x !== true) || x === 0)
      .join("");
  }
  const renderedHTML = html`
    <img src="${ASSETS}icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
    <div class="act-dropdown__top">
      <h2 class="act-dropdown__title">You have ${products.length} item(s)</h2>
      <a href="${ROOT}Home/Favourite" class="act-dropdown__view-all">See All</a>
    </div>
    <div class="row row-cols-3 gx-2 act-dropdown__list">
      ${products.map((product) => {
        return `<div class="col">
        <article class="cart-preview-item">
          <div class="cart-preview-item__img-wrap">
            <img
              src="${ASSETS}img/products/${product.thumbnail}"
              alt=""
              class="cart-preview-item__thumb"
            />
          </div>
          <h3 class="cart-preview-item__title">${product.name}</h3>
          <p class="cart-preview-item__price">$${product.price}</p>
        </article>
      </div>`;
      })}
    </div>
    <div class="act-dropdown__separate"></div>
    <div class="act-dropdown__checkout">
      <a
        href="${ROOT}Home/CheckOut"
        class="btn btn--primary btn--rounded act-dropdown__checkout-btn"
        >Check Out All</a
      >
    </div>
  `;
  favorList.innerHTML = renderedHTML;
});
// card list
window.addEventListener("DOMContentLoaded", () => {
  const favorCard = $(".act-dropdown__inner-card");
  let products = JSON.parse(localStorage.getItem("product"));

  const total = products.reduce((acc, product) => {
    return acc + parseInt(product.price, 10);
  }, 0);
  console.log(total);
  function html([first, ...string], ...values) {
    return values
      .reduce((acc, cur) => acc.concat(cur, string.shift()), [first])
      .filter((x) => (x && x !== true) || x === 0)
      .join("");
  }
  const renderedHTML = html`
    <img src="${ASSETS}icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
    <div class="act-dropdown__top">
      <h2 class="act-dropdown__title">You have ${products.length} item(s)</h2>
      <a href="${ROOT}Home/CheckOut" class="act-dropdown__view-all">See All</a>
    </div>
    <div class="row row-cols-3 gx-2 act-dropdown__list">
      ${products.map((product) => {
        return `<div class="col">
      <article class="cart-preview-item">
        <div class="cart-preview-item__img-wrap">
          <img
            src="${ASSETS}img/products/${product.thumbnail}"
            alt=""
            class="cart-preview-item__thumb"
          />
        </div>
        <h3 class="cart-preview-item__title">${product.name}</h3>
        <p class="cart-preview-item__price">$${product.price}</p>
      </article>
    </div>`;
      })}
    </div>
    <div class="act-dropdown__bottom">
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Subtotal</span>
        <span class="act-dropdown__value">$${total}</span>
      </div>
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Texes</span>
        <span class="act-dropdown__value">Free</span>
      </div>
      <div class="act-dropdown__row">
        <span class="act-dropdown__label">Shipping</span>
        <span class="act-dropdown__value">$10.00</span>
      </div>
      <div class="act-dropdown__row act-dropdown__row--bold">
        <span class="act-dropdown__label">Total Price</span>
        <span class="act-dropdown__value">$${total + 10}</span>
      </div>
    </div>
    <div class="act-dropdown__checkout">
      <a
        href="${ROOT}Home/CheckOut"
        class="btn btn--primary btn--rounded act-dropdown__checkout-btn"
        >Check Out All</a
      >
    </div>
  `;
  favorCard.innerHTML = renderedHTML;

  const favor = $(".top-act__title-favor");
  favor.innerText = products.length;
  const card = $(".top-act__title-card");
  card.innerText = total + "$";
});
