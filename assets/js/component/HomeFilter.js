const filterContainer = document.querySelector(".render-product");
const homeLink = document.createElement("a");
homeLink.classList.add("filter-home", "hide", "btn--primary");
homeLink.href = `${ROOT}/Home/Main`;
homeLink.textContent = "Trang chủ";
let isHomeLinkToggled = false;
if (filterContainer) {
  filterContainer.insertAdjacentElement("beforebegin", homeLink);
}
function toggleHomeLink() {
  homeLink.classList.remove("hide");
  isHomeLinkToggled = true;
}
export default toggleHomeLink;
