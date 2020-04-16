$(document).ready(function(){
  $.ajax({
    url: "http://localhost/project/admin/chartjs/data2.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var date = [];
      var sum_amount = [];

      for(var i in data) {
        date.push("Date " + data[i].date);
        sum_amount.push(data[i].sum_amount);
      }

      var chartdata = {
        labels: date,
        datasets : [
          {
            label: 'Total Amount on Each Day',
            // backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor:'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(255, 206, 86, 0.2)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: sum_amount
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});