<footer class="row tm-mt-small">
  <div class="col-12 font-weight-light">
    <p class="d-inline-block tm-bg-transparant text-white py-2 px-4 bg-merah">
      Copyright &copy; 2024 . Created by
      <a rel="nofollow" href="https://www.instagram.com/achmad_957/" class="text-white tm-footer-link">Maman957</a>
    </p>
  </div>
</footer>
</div>
</div>

<!-- https://jquery.com/download/ -->
<script src="<?= base_url('assets/js/moment.min.js') ?>"></script>
<!-- https://momentjs.com/ -->
<script src="<?= base_url('assets/js/utils.js') ?>"></script>
<script src="<?= base_url('assets/js/Chart.min.js') ?>"></script>
<!-- http://www.chartjs.org/docs/latest/ -->
<script src="<?= base_url('assets/js/fullcalendar.min.js') ?>"></script>
<!-- https://fullcalendar.io/ -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- https://getbootstrap.com/ -->
<script src="<?= base_url('assets/js/tooplate-scripts.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/tiny-slider.js') ?>"></script>
<script src="<?= base_url('assets/js/custom.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('lineChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
      datasets: [{
        label: 'Pendapatan per Bulan',
        data: [1000, 1500, 2000, 1800, 2200, 2500, 2300, 2600, 2800, 3000, 3200, 3500],
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        tension: 0.4,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>