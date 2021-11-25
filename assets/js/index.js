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

// Persist tab across refresh
$(document).ready(function(){
    $('button[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('data-bs-target'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab button[data-bs-target="' + activeTab + '"]').tab('show');
    }
});

// Add back to top icon from external
addBackToTop({
    diameter: 64,
    backgroundColor: '#6a5acd',
    textColor: '#ffffff'
})