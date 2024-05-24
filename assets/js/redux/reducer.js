import storage from "../../util/storage.js";
const init = {
  products: storage.get(),
  total: storage.getPrice(),
  favor: storage.getFavor(),
  filter: "add",
  filters: {
    all: () => true,
    active: (favor) => !favor.isCheckOut,
    completed: (favor) => favor.isCheckOut,
  },
};

const actions = {
  add({ products }, newProduct) {
    if (newProduct) {
      products.push(newProduct);
      storage.set(products);
    }
  },
  delete({ products, total }, index) {
    let test = products[index];
    total = total - test.price;
    products.splice(index, 1);
    storage.set(products);
    storage.setPrice(total);
    location.reload();
  },
  addFavor({ favor }, obj, index) {
    if (obj) {
      obj.isFavor = true;
      obj.isCheckOut = false;
      favor.push(obj);
      storage.setFavor(favor);
    }
  },
  deleteFavor({ favor }, obj, index) {
    const objIndex = favor.findIndex((item) => item.id === obj.id);
    // Nếu obj tồn tại trong danh sách favor
    if (objIndex !== -1) {
      obj.isFavor = false;
      favor.splice(objIndex, 1);
      console.log("filer favor");
      // Lưu trữ danh sách favor đã được cập nhật
      storage.setFavor(favor);
    }
  },
  destroyFavor({ favor }, index) {
    favor.splice(index, 1);
    storage.setFavor(favor);
    location.reload();
  },
  toggle({ favor }, index) {
    const favorItem = favor[index];
    favorItem.isCheckOut = !favorItem.isCheckOut;
    storage.setFavor(favor);
  },
  toggleAll({ favor }, completed) {
    favor.forEach((item) => (item.isCheckOut = completed));
    storage.setFavor(favor);
  },
  CheckOut({ favor, products }, index) {
    const checkOutItem = favor[index];
    checkOutItem.isCheckOut = true;
    favor.splice(index, 1);
    products.push(checkOutItem);
    storage.set(products);
    storage.setFavor(favor);
    location.reload();
  },
  checkoutAll({ favor, products }) {
    favor.map((item) => {
      item.isCheckOut = true;
    });
    const checkout = favor.filter((item) => item.isCheckOut);
    favor = favor.filter(init.filters.active);
    products.push(...checkout);
    storage.set(products);
    storage.setFavor(favor);
    window.location.href = `${ROOT}Home/CheckOut`;
  },
};

export default function reducer(state = init, action, args) {
  actions[action] && actions[action](state, ...args);
  return state;
}
