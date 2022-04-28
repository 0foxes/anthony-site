/*
    This file has javascript for a search engine and a back to top button

    Author: Anthony Chen
    Version: 1.00
    Date: 2022-05-10
*/

// Search by pressing search icon
document.querySelector(".fa-search").addEventListener("click", function(){
    window.location.href = "https://cse.google.com/cse?cx=f60ebdd916d115591&q=" + document.querySelector(".search-box").value;
});

// Search by pressing enter in box
document.querySelector(".search-box").addEventListener("keyup", function(event) {
    if (event.keyCode == 13) {
        window.location.href = "https://cse.google.com/cse?cx=f60ebdd916d115591&q=" + document.querySelector(".search-box").value;
    }
});

// Add back to top icon with library
addBackToTop({
    diameter: 64,
    backgroundColor: '#6a5acd',
    textColor: '#ffffff'
})