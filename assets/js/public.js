const products = document.querySelectorAll(".product-card");
console.log(products);
let array = Array.from(products);
array.map((product) => {
  product.onclick = (e) => {
    alert("Vui lòng đăng nhập để xem sản phẩm");
    e.preventDefault();
  };
});
