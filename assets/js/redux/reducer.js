import storage from "../../util/storage.js";
const init = {
  All: storage.getALL(),
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
    let sum = test.price * test.quantity;
    total = total - sum;
    products.splice(index, 1);
    storage.set(products);
    storage.setPrice(total);
  },
  addFavor({ favor, All }, index) {
    if (index) {
      All[index].isFavor = true;
      All[index].isCheckOut = false;
      favor.push(All[index]);
      storage.setFavor(favor);
    }
  },
  deleteFavor({ favor, All }, index) {
    const objIndex = favor.findIndex((item) => item.id === All[index].id);
    // Nếu obj tồn tại trong danh sách favor
    if (objIndex !== -1) {
      All[index].isFavor = false;
      favor.splice(objIndex, 1);
      // Lưu trữ danh sách favor đã được cập nhật
      storage.setFavor(favor);
    }
  },
  destroyFavor({ favor }, index) {
    favor.splice(index, 1);
    storage.setFavor(favor);
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
  CheckOut({ favor, products, total }, index) {
    const checkOutItem = favor[index];
    checkOutItem.isCheckOut = true;
    favor.splice(index, 1);
    let existingProductIndex = products.findIndex(
      (item) => item.id === checkOutItem.id
    );
    if (existingProductIndex !== -1) {
      products[existingProductIndex].quantity =
        (products[existingProductIndex].quantity || 1) + 1;
    } else {
      checkOutItem.quantity = 1;
      products.push(checkOutItem);
    }
    let totalCheckOut = products.reduce((acc, item) => {
      // Chuyển đổi chuỗi số thành số và thêm vào tổng
      return acc + parseInt(item.price); // Sử dụng parseFloat để chuyển đổi chuỗi số thành số thực
    }, 0);
    storage.setPrice(totalCheckOut);
    storage.set(products);
    storage.setFavor(favor);
  },
  checkoutAll({ favor, products }) {
    // Đánh dấu tất cả các sản phẩm trong danh sách yêu thích là đã chọn mua
    favor.forEach((item) => {
      item.isCheckOut = true;
    });

    products.push(...favor);

    favor = [];

    let totalCheckOut = products.reduce((acc, item) => {
      return acc + parseInt(item.price); // Sử dụng parseFloat để chuyển đổi chuỗi số thành số thực
    }, 0);
    storage.setPrice(totalCheckOut);
    storage.set(products);
    storage.setFavor(favor);
    window.location.href = `${ROOT}Home/CheckOut`;
  },

  plus({ favor }, index) {
    const itemToAdd = favor[index];
    // Sao chép phần tử đó
    const copiedItem = { ...itemToAdd };
    // Thêm phần tử sao chép vào vị trí hiện tại trong mảng favor
    favor.splice(index + 1, 0, copiedItem);
    storage.setFavor(favor);
  },

  minus({ favor }, index) {
    // Kiểm tra xem có ít nhất một sản phẩm trong danh sách không
    if (favor.length <= 1) {
      return;
    }

    // Lấy id của sản phẩm được chọn
    const selectedProductId = favor[index].id;

    // Tìm tất cả các sản phẩm có cùng id với sản phẩm được chọn
    const favorWithSameId = favor.filter(
      (item) => item.id === selectedProductId
    );

    // Kiểm tra xem có nhiều hơn một sản phẩm có cùng id không
    if (favorWithSameId.length <= 1) {
      return;
    }

    // Xóa sản phẩm khỏi danh sách sản phẩm
    favor.splice(index, 1);

    // Lưu lại danh sách favor đã được cập nhật
    storage.setFavor(favor);
  },
  plusCart({ products }, index) {
    const itemToAdd = products[index];
    const copiedItem = { ...itemToAdd };
    products.splice(index + 1, 0, copiedItem);
    storage.set(products);
  },
  minusCart({ products }, index) {
    // Lấy id của sản phẩm được chọn
    const selectedProductId = products[index].id;

    // Tìm tất cả các sản phẩm có cùng id với sản phẩm được chọn
    const productsWithSameId = products.filter(
      (product) => product.id === selectedProductId
    );

    // Kiểm tra xem có nhiều hơn một sản phẩm có cùng id không
    if (productsWithSameId.length <= 1) {
      return;
    }

    // Xóa sản phẩm khỏi danh sách sản phẩm
    products.splice(index, 1);

    // Lưu lại danh sách sản phẩm đã được cập nhật
    storage.set(products);
  },
};

export default function reducer(state = init, action, args) {
  actions[action] && actions[action](state, ...args);
  return state;
}
