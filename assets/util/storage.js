const PRODUCTS_STORAGE = "PRODUCT";
const TOTAL_STORAGE = "total";
const FAVOR_STORAGE = "FAVOR";
const ALL_STORAGE = "ALL";
export default {
  get() {
    return JSON.parse(localStorage.getItem(PRODUCTS_STORAGE)) || [];
  },
  set(product) {
    localStorage.setItem(PRODUCTS_STORAGE, JSON.stringify(product));
  },
  getPrice() {
    return JSON.parse(localStorage.getItem(TOTAL_STORAGE)) || [];
  },
  setPrice(total) {
    localStorage.setItem(TOTAL_STORAGE, JSON.stringify(total));
  },
  getFavor() {
    return JSON.parse(localStorage.getItem(FAVOR_STORAGE)) || [];
  },
  setFavor(favor) {
    localStorage.setItem(FAVOR_STORAGE, JSON.stringify(favor));
  },
  getALL() {
    return JSON.parse(localStorage.getItem(ALL_STORAGE)) || [];
  },
  setALL(All) {
    localStorage.setItem(ALL_STORAGE, JSON.stringify(All));
  },
};
