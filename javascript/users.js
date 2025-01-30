const searchBar = document.querySelector(".users .search input"),
  searchBtn = document.querySelector(".users .search button");

searchBtn.onClick = () => {
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBar.classList.toggle("active");
};
