

function scrollFunc() {
  if (document.body.scrollTop > 240 || document.documentElement.scrollTop > 240) {
    document.querySelector(".header__collections__nav").setAttribute(
      "style", "width: 95%; padding: 1em 0 1em 0; color: black; font-weight: bold; position: fixed; top: .5em; left: 50%; transform: translate(-50%); background-color: white"
      );
  } else {
    document.querySelector(".header__collections__nav").removeAttribute(
      "style", "width: 95%; padding: 1em 0 1em 0; color: black; font-weight: bold; position: fixed; top: .5em; left: 50%; transform: translate(-50%); background-color: white"
      );
  }
}