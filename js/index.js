let button = document.querySelector(".hamburger__menu"),
    navigation = document.querySelector(".navigation__small");

button.addEventListener("click", function() {
    if (navigation.style.display === "none" || !navigation.style.display) {
        navigation.style.display = "block";
    } else {
        navigation.style.display = "none";
    }
});