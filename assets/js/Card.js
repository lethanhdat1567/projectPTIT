import { attach } from "./redux/store.js";
import CardList from "./component/CardList.js";
import subList from "./component/subList.js";
import subLittlePrice from "./component/subLittlePrice.js";
import FavorHeaderList from "./component/FavorHeaderList.js";
import FavorList from "./component/FavorList.js";
import RenderProduct from "./component/RenderProduct.js";
import Search from "./component/Search.js";

// Hàm kiểm tra và gọi hàm attach
function attachComponent(selector, component) {
  const element = document.querySelector(selector);
  if (element) {
    attach(element, component);
  } else {
    console.log(`Không tìm thấy phần tử '${selector}' trong DOM.`);
  }
}

// Gọi hàm attachComponent cho các phần tử cần thiết
attachComponent(".cart-info__list-card", CardList);
attachComponent(".act-dropdown__inner-favor", FavorHeaderList);
attachComponent(".cart-info__favor-list", FavorList);
attachComponent(".render-product", RenderProduct);
attachComponent(".search__product-list", Search);
attachComponent(".cart-info__sub-list", subList);
attachComponent(".sub-little__price", subLittlePrice);
