import storage from "../../util/storage.js";
const init = {
  All: [], // Khởi tạo All là một mảng trống
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

async function fetchData() {
  try {
    // Sử dụng await để chờ đợi khi fetch dữ liệu từ API
    const response = await fetch("http://localhost/projectPTIT/API/Read");
    const data = await response.json();

    // Gán dữ liệu từ API vào biến All
    init.All = data;
    // Lưu trữ dữ liệu từ API vào localStorage
    storage.setALL(data);

    // Gọi hàm render hoặc các thao tác khác tại đây
    // Ví dụ: renderProducts();
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

// Gọi hàm fetchData để bắt đầu quá trình fetch dữ liệu từ API
fetchData();
const actions = {
  add({ products }, newProduct) {
    if (newProduct) {
      products.push(newProduct);
      storage.set(products);
    }
  },
  delete({ products, total }, index) {
    const indexesToDestroy = products.reduce((acc, item, indexPro) => {
      if (item.id === products[index].id) {
        acc.push(indexPro);
      }
      return acc;
    }, []);
    for (let i = indexesToDestroy.length - 1; i >= 0; i--) {
      products.splice(indexesToDestroy[i], 1);
    }
    let totalCheckOut = products.reduce((acc, item) => {
      return acc + parseInt(item.price);
    }, 0);
    storage.set(products);
    storage.setPrice(totalCheckOut);
  },
  addFavor({ favor, All }, index) {
    if (index >= 0 && index < All.length) {
      All[index].isFavor = true;
      All[index].isCheckOut = false;
      favor.push(All[index]);
      storage.setFavor(favor);
    } else {
      location.reload();
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
    const indexesToDestroy = favor.reduce((acc, item, indexFavor) => {
      if (item.id === favor[index].id) {
        acc.push(indexFavor);
      }
      return acc;
    }, []);
    for (let i = indexesToDestroy.length - 1; i >= 0; i--) {
      favor.splice(indexesToDestroy[i], 1);
    }
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
    const checkOut = favor.filter((item) => {
      return item.isCheckOut;
    });
    const remainingFavor = favor.filter((item) => {
      return !item.isCheckOut;
    });
    products.push(...checkOut);

    favor = remainingFavor;

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
