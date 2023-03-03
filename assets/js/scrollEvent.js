const btnScrollToTop = document.getElementById('backToTop');

window.onscroll = function () {
    scrollToTop()
};

function scrollToTop() {
    if (document.documentElement.scrollTop > 300) {
        btnScrollToTop.style.opacity = "1";
    } else {
        btnScrollToTop.style.opacity = "0";
    }
}