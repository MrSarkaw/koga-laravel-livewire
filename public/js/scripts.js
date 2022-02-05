let menuBTN = document.getElementById("menuBTN");
let menuBTNClose = document.getElementById("menuBTNClose");
let leftSide = document.getElementById("leftSide");
let rightSide = document.getElementById("rightSide");
let text1 = document.getElementById("text");
let text2 = document.getElementById("text2");
let sublink = document.getElementById("sublink");

menuBTN.addEventListener("click", () => {
    if (window.innerWidth > 500) {
        if (rightSide.classList.contains("md:w-2/12")) {
            rightSide.classList.remove("md:w-2/12");
            rightSide.classList.add("md:w-1/12");
            leftSide.classList.add("md:w-11/12");
            leftSide.classList.remove("md:w-9/12");
            text1.classList.toggle("md:inline");
            text2.classList.toggle("md:inline");
          

        } else {
            rightSide.classList.add("md:w-2/12");
            rightSide.classList.remove("md:w-1/12");
            leftSide.classList.remove("md:w-11/12");
            leftSide.classList.add("md:w-9/12");
            text1.classList.toggle("md:inline");
            text2.classList.toggle("md:inline");
           
           


        }

    } else {
        if (rightSide.classList.contains('hidden')) {
            leftSide.classList.remove("w-full");
            leftSide.classList.add("w-10/12");
            rightSide.classList.remove("hidden");

        } else {
            leftSide.classList.add("w-full");
            leftSide.classList.remove("w-10/12");
            rightSide.classList.add("hidden");
        }
    }

});

