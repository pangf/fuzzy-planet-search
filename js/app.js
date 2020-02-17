
function getPlanetDetails() {
    var current_planet = $("#planet_name").val();
    console.log(current_planet);
    $.ajax({
        url: 'http://localhost/fuzzy_planet_search/server.php',
        type: "POST",
        data: "planet_name=" + current_planet,
        dataType: 'JSON',
        beforeSend: function () {
            console.log("not start yet!");
        },
        success: function (response, status, http) {
            console.log("successFUl!");
            var new_suggestions = "";
            //loop json
            $.each(response, function (index, item) {
                new_suggestions = new_suggestions + "Name: " + item.name + "<br>";
                new_suggestions = new_suggestions + "Number of the days in a year: " + item
                    .no_of_days_in_year + '<br>';
                new_suggestions = new_suggestions + "Order number: " + item.order_no +
                    '<br>';


            });
            $("#suggestions-box").html(new_suggestions);
        },
        error: function (http, status, error) {
            console.log("Some error happens!" + error);

        }
    });
}
