$(document).ready(function(){
  $.ajax({
    url: "http://localhost/project/admin/chartjs/data1.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var bill_no = [];
      var total_amount = [];

      for(var i in data) {
        bill_no.push("Bill Number " + data[i].bill_no);
        total_amount.push(data[i].total_amount);
      }

      var chartdata = {
        labels: bill_no,
        datasets : [
          {
            label: 'Total Amount',
            // backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor:'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(255, 206, 86, 0.2)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: total_amount
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