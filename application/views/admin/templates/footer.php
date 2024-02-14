<!-- Custom template | don't include it in your project! -->

    <!-- End Custom template -->
  </div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/dist')?>/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/dist')?>/js/core/popper.min.js"></script>
<script src="<?php echo base_url('assets/dist')?>/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url('assets/dist')?>/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/dist')?>/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url('assets/dist')?>/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?php echo base_url('assets/dist')?>/js/ready.min.js"></script>

  <script>
    var lineChart = document.getElementById('lineChart').getContext('2d'),
    barChart = document.getElementById('barChart').getContext('2d'),
    
    htmlLegendsChart = document.getElementById('htmlLegendsChart').getContext('2d');

    var myLineChart = new Chart(lineChart, {
      type: 'line',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Active Users",
          borderColor: "#1d7af3",
          pointBorderColor: "#FFF",
          pointBackgroundColor: "#1d7af3",
          pointBorderWidth: 2,
          pointHoverRadius: 4,
          pointHoverBorderWidth: 1,
          pointRadius: 4,
          backgroundColor: 'transparent',
          fill: true,
          borderWidth: 2,
          data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
        }]
      },
      options : {
        responsive: true, 
        maintainAspectRatio: false,
        legend: {
          position: 'bottom',
          labels : {
            padding: 10,
            fontColor: '#1d7af3',
          }
        },
        tooltips: {
          bodySpacing: 4,
          mode:"nearest",
          intersect: 0,
          position:"nearest",
          xPadding:10,
          yPadding:10,
          caretPadding:10
        },
        layout:{
          padding:{left:15,right:15,top:15,bottom:15}
        }
      }
    });

    var myBarChart = new Chart(barChart, {
      type: 'bar',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets : [{
          label: "Sales",
          backgroundColor: 'rgb(23, 125, 255)',
          borderColor: 'rgb(23, 125, 255)',
          data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
        }],
      },
      options: {
        responsive: true, 
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        },
      }
    });

    // Chart with HTML Legends

    var gradientStroke = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, '#177dff');
    gradientStroke.addColorStop(1, '#80b6f4');

    var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
    gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

    var gradientStroke2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke2.addColorStop(0, '#f3545d');
    gradientStroke2.addColorStop(1, '#ff8990');

    var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
    gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

    var gradientStroke3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke3.addColorStop(0, '#fdaf4b');
    gradientStroke3.addColorStop(1, '#ffc478');

    var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
    gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

    var myLegendContainer = document.getElementById("myChartLegend");

    // generate HTML legend
    myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

    // bind onClick event to all LI-tags of the legend
    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
      legendItems[i].addEventListener("click", legendClickCallback, false);
    }

  </script>

</body>
</html>