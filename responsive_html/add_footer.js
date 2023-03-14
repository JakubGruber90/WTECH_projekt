const link_footer = document.createElement("link");
link_footer.href = "footer.css";
link_footer.rel = "stylesheet";
document.head.appendChild(link_footer);
const footer = document.createElement("footer");
footer.innerHTML = '<p>&copy; Copyright 2023, Footwear shop <img src="src/footer_logo.png" alt="footer logo"></p>'
document.body.appendChild(footer);