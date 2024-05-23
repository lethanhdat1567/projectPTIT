import { attach } from "./redux/store.js";
import CardList from "./component/CardList.js";
attach(document.querySelector(".cart-info__list-card"), CardList);
