///////// DARK MODE//////
const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container,.navbar-container,.sidebar,.left-menu-icon,.toggle,.movie-list-item-title,.movie-list-item-desc,.actie-deals,.bottom-gradient,.top-gradient,.text-toggle,.cta,.three,.two,.one,.svg-arrow,.footer,.footer-col h4,.footer-col ul li a,.footer-col .social-links a"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");

  
});


