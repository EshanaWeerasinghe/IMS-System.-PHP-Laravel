
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

<!--  <title>Dashboard</title>-->
  
<!--  <?php echo $__env->yieldContent('title',''); ?>-->
  <?php echo Html::style('css/bootstrap.min.css'); ?>

  <?php echo Html::style('css/bootstrap-theme.css'); ?>

  <?php echo Html::style('css/elegant-icons-style.css'); ?>

  <?php echo Html::style('css/font-awesome.min.css'); ?>

  <?php echo Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css'); ?>

  <?php echo Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css'); ?>

  <?php echo Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css'); ?>

  <?php echo Html::style('css/owl.carousel.css'); ?>

  <?php echo Html::style('css/jquery-jvectormap-1.2.2.css'); ?>

  <?php echo Html::style('css/fullcalendar.css'); ?>

  <?php echo Html::style('css/widgets.css'); ?>

  <?php echo Html::style('css/style.css'); ?>

  <?php echo Html::style('css/style-responsive.css'); ?>

  <?php echo Html::style('css/xcharts.min.css'); ?>

  <?php echo Html::style('css/jquery-ui-1.10.4.min.css'); ?>

  
  <?php echo Html::style('css/jquery.dataTables.min.css'); ?>

  <?php echo Html::style('css/buttons.dataTables.min.css'); ?>

  
    <?php echo $__env->yieldContent('style'); ?>  
  
</head>

<body>

 <!-- container section start -->
<section id="container" class="">
<?php echo $__env->make('layouts.header.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidebars.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <section id="main-content">
     <div class="wrapper">
         <?php echo $__env->yieldContent('content'); ?>
     </div>
 
 </section>
</section>
  <!-- javascripts -->
  <?php echo Html::script('js/jquery.js'); ?>

  <?php echo Html::script('js/jquery-ui-1.10.4.min.js'); ?>

  <?php echo Html::script('js/jquery-1.8.3.min.js'); ?>

  <?php echo Html::script('js/jquery-ui-1.9.2.custom.min.js'); ?>

  <?php echo Html::script('js/bootstrap.min.js'); ?>

  <?php echo Html::script('js/jquery.scrollTo.min.js'); ?>

  <?php echo Html::script('js/jquery.nicescroll.js'); ?>

  <?php echo Html::script('assets/jquery-knob/js/jquery.knob.js'); ?>

  <?php echo Html::script('js/jquery.sparkline.js'); ?>

  <?php echo Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>

  <?php echo Html::script('js/owl.carousel.js'); ?>

  <?php echo Html::script('js/fullcalendar.min.js'); ?>

  <?php echo Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js'); ?>

  <?php echo Html::script('js/calendar-custom.js'); ?>

  <?php echo Html::script('js/jquery.rateit.min.js'); ?>

  <?php echo Html::script('js/jquery.customSelect.min.js'); ?>

  <?php echo Html::script('assets/chart-master/Chart.js'); ?>

  <?php echo Html::script('js/scripts.js'); ?>

  <?php echo Html::script('js/sparkline-chart.js'); ?>

  <?php echo Html::script('js/easy-pie-chart.js'); ?>

  <?php echo Html::script('js/jquery-jvectormap-1.2.2.min.js'); ?>

  <?php echo Html::script('js/jquery-jvectormap-world-mill-en.js'); ?>

  <?php echo Html::script('js/xcharts.min.js'); ?>

  <?php echo Html::script('js/jquery.autosize.min.js'); ?>

  <?php echo Html::script('js/jquery.placeholder.min.js'); ?>

  <?php echo Html::script('js/gdp-data.js'); ?>

  <?php echo Html::script('js/morris.min.js'); ?> 
  <?php echo Html::script('js/sparklines.js'); ?>

  <?php echo Html::script('js/charts.js'); ?>

  <?php echo Html::script('js/jquery.slimscroll.min.js'); ?>

  
  
  <?php echo Html::script('js/jquery.dataTables.min.js'); ?>

  <?php echo Html::script('js/dataTables.buttons.min.js'); ?>

  <?php echo Html::script('js/jszip.min.js'); ?>

  <?php echo Html::script('js/pdfmake.min.js'); ?>

  <?php echo Html::script('js/vfs_fonts.js'); ?>

  <?php echo Html::script('js/vfs_fonts.js'); ?>

  <?php echo Html::script('js/buttons.html5.min.js'); ?>

  
   <?php echo $__env->yieldContent('script'); ?>
    <script>
        $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    });
        
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>
</html>
