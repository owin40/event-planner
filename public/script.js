document.addEventListener("DOMContentLoaded", function () {
    // Smooth scroll functionality for navbar links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
            });
        });
    });

    // Smooth scroll functionality for the scroll-to-top button
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.onscroll = function () {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    };

    function scrollToTopButton() {
        if (document.documentElement.scrollTo) {
            document.documentElement.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        } else {
            document.body.scrollTop = 0;
        }
    }

    // Assign the correct function to the click event of the scroll-to-top button
    scrollToTopBtn.addEventListener("click", scrollToTopButton);
});
