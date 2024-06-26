@extends('admin.master')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Artikel</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahBerita }}</h6>
                      <span class="text-success small pt-1 fw-bold"><span class="text-muted small pt-2 ps-1">article</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Kegiatan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahKegiatan }}</h6>
                      <span class="text-success small pt-1 fw-bold"><span class="text-muted small pt-2 ps-1">kegiatan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Postingan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahPostingan }}</h6>
                      <span class="text-success small pt-1 fw-bold"><span class="text-muted small pt-2 ps-1">postingan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Promo</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahPromo }}</h6>
                      <span class="text-success small pt-1 fw-bold"><span class="text-muted small pt-2 ps-1">promo</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Sales Card -->

   
          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  // Menyimpan jumlah berita, jumlah kegiatan, dan data promo dari PHP ke JavaScript
                  let jumlahBerita = <?php echo $jumlahBerita; ?>;
                  let jumlahKegiatan = <?php echo $jumlahKegiatan; ?>;
                  let jumlahPromo = <?php echo json_encode($jumlahPromo); ?>;
                  let jumlahPostingan = <?php echo $jumlahPostingan; ?>;

                  let chartColors = ['#FF6B6B', '#FFD166', '#06D6A0', '#57A6A1']; // Merah, kuning, dan hijau, biru
                  let chartData = [{
                      value: jumlahBerita,
                      name: 'Berita',
                      itemStyle: {
                        color: chartColors[0]
                      }
                    },
                    {
                      value: jumlahKegiatan,
                      name: 'Kegiatan',
                      itemStyle: {
                        color: chartColors[1]
                      }
                    },
                    
                    {
                      value: jumlahPromo,
                      name: 'Promo',
                      itemStyle: {
                        color: chartColors[2]
                      }
                    },

                    {
                      value: jumlahPostingan,
                      name: 'Postingan',
                      itemStyle: {
                        color: chartColors[3]
                      }
                    }
                  ];

                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: chartData
                    }]
                  });
                });
              </script>

            </div>
          </div>
          



        </div>

      </div>
    </section>

  </main>
@endsection