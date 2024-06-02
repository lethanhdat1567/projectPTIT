// Kiểm tra xem mã đã được thực thi chưa
let isExecuted = false;

// Chỉ chạy mã khi chưa được thực thi và trang đã được load hoàn toàn
if (!isExecuted) {
  // Gán biến cờ thành true để chỉ thực thi mã một lần
  isExecuted = true;

  // Tất cả mã của bạn sẽ được đặt trong đây
  const logoutBtn = document.querySelector(".btn-logout");
  if (logoutBtn) {
    logoutBtn.onclick = (e) => {
      e.preventDefault();
      localStorage.removeItem("All");
      localStorage.removeItem("PRODUCT");
      localStorage.removeItem("FAVOR");
      localStorage.removeItem("defaultUser");
      window.location.href = `${ROOT}User/SignIn`;
    };
  }

  // Set tài khoản mặc định
  const defaultBtn = document.querySelector(".form__checkbox-input");
  let isChecked = false;
  if (defaultBtn) {
    defaultBtn.onclick = (e) => {
      isChecked = !isChecked;
      if (isChecked) {
        localStorage.setItem("defaultUser", false);
      } else {
        localStorage.removeItem("defaultUser");
      }
    };
  }

  const defaultUser = JSON.parse(localStorage.getItem("defaultUser"));
  if (window.location.href === `${ROOT}Home/Main`) {
    if (!defaultUser && defaultUser != undefined) {
      localStorage.setItem("defaultUser", true);
    }
  }
  if (window.location.href === `${ROOT}User/SignIn`) {
    if (defaultUser) {
      window.location.href = `${ROOT}Home/Main`;
    }
  }
}
