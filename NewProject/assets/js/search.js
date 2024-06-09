$(document).ready(function() {
    $('#search').keydown(function(event) {
      if (event.key === "Enter") {
        searchData();
      }
    });
  
    function searchData() {
      var searchValue = $('#search').val();
      window.location = 'search=' + searchValue;
    }
  });
  