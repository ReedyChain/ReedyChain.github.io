document.addEventListener("DOMContentLoaded", () => {
    const backToTopBtn = document.getElementById("back-to-top-btn");
    
    window.onscroll = () => {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTopBtn.style.display = "flex";
        } else {
            backToTopBtn.style.display = "none";
        }
    };

    backToTopBtn.onclick = function () {
        document.body.scrollTop = 0; // Safari
        document.documentElement.scrollTop = 0; // Chrome, Firefox, IE y Opera
    };
});