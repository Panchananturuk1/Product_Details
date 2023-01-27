function populateSubCategories() {
    // alert("I am an alert box!");
    console.log(document.getElementById("populateSubCategoriesfunction is called"));
    var category = document.getElementsByName("category")[0].value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("sub_category").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "get_sub_categories.php?category=" + category, true);
    xhttp.send();
    
}
