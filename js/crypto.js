function getAllCoins() {

    $.ajax({
        type: "GET",
        dataType: "json",
        //Gebruik gemaakt van API
        url: "https://api.coincap.io/v2/assets",

        success: function(data) {

            coins = data;
            var template = $("#crypto-template").html();
            var renderTemplate = Mustache.render(template, coins);


            $("#crypto-table tbody").append(renderTemplate);
        }
    });

}

//Functie om data uit API te halen en vervolgens te tonen op HTML
function getChartInfo(clickedButton) {

    var cryptoName = $(clickedButton).closest("tr").find(".crypto-name").text().toLowerCase();
    var priceUSD = $(clickedButton).closest("tr").find(".crypto-price").text();
    var marketCap = $(clickedButton).closest("tr").find(".crypto-market").text();
    var volumeUsd24Hr = $(clickedButton).closest("tr").find(".volumeUsd24Hr").text();
    var supply = $(clickedButton).closest("tr").find(".supply").text();

    $('.modal-title').html(cryptoName);
    $('.price').html(priceUSD);
    $('.marketcap').html(marketCap);
    $('.volume').html(volumeUsd24Hr);
    $('.supplyInfo').html(supply);


    console.log(cryptoName);

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://api.coincap.io/v2/assets/" + cryptoName + "/history?interval=d1",

        success: function(historicalData) {

            console.log(historicalData);

            var dateArray = [];
            var priceArray = [];

            $.each(historicalData.data, function(index, value) {
                dateArray.push(value.date);
                priceArray.push(value.priceUsd);

            })
            console.log(dateArray);
            console.log(priceArray);
            generateChart(dateArray, priceArray)

        }
    })
}

//generates the chart with the historical information from the past 2 years
function generateChart(chartDate, chartPrice) {

    var ctx = document.getElementById('coin-history-chart').getContext('2d');

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: chartDate,
            datasets: [{
                type: "line",
                label: "Price",
                borderColor: '#3e95cd',
                data: chartPrice,
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Date'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
}

// Function to open the modal and change the info of the coin
function getCoinInfo(selectedButton) {

    //get the value from the table
    var cryptoName = $(selectedButton).closest("tr").find(".crypto-name").text();
    var cryptoPrice = $(selectedButton).closest("tr").find(".crypto-price").text();

    //add the values to the modal
    $("#coin-name").html(cryptoName);
    $("#coin-price").html(cryptoPrice);

}


$(document).ready(function() {
    getAllCoins();

    //On click to get a character
    $("#crypto-table").on("click", ".crypto-info-btn", function() {

        //The charts loads on click
        getChartInfo(this);

    });

    //Open modal and get coin info
    $(document).on("click", ".btn-open-modal-cryptofolio", function() {

        getCoinInfo(this);

    });
    $(document).on("change", "#amount-coins", function() {

        var coinAmount = $("#amount-coins").val();
        var coinPrice = $("#coin-price").text();
        var totalAmount = coinAmount * coinPrice;
        $("#total-value").text(totalAmount);

    });


});