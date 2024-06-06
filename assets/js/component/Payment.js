function Payment() {
  const InputCheckOut = document.querySelector(".cart-info__checkOut");
  if (InputCheckOut) {
    const products = JSON.parse(localStorage.getItem("PRODUCT"));
    const productIds = products.reduce((acc, cur) => {
      return [...acc, cur.id];
    }, []);
    const prodValue = JSON.stringify(productIds);
    InputCheckOut.value = prodValue;
  }
}
export default Payment;
