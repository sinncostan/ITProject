@extends('layouts.konten')
@section('content')
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
            height="60" width="60">
    </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Beranda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Penjualan Hari ini</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>4</h3>

                            <p>Total Produk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Total Karyawan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Rp.</sup>1.200.000</h3>

                            <p>Pendapatan Hari ini</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">         
                      <div class="card">
                        <div class="card-header border-0">
                          <h3 class="card-title">Products</h3>
                          <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                              <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                              <i class="fas fa-bars"></i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                          <table class="table table-striped table-valign-middle">
                            <thead>
                            <tr>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Sales</th>
                              <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>
                                Some Product
                              </td>
                              <td>$13 USD</td>
                              <td>
                                <small class="text-success mr-1">
                                  <i class="fas fa-arrow-up"></i>
                                  12%
                                </small>
                                12,000 Sold
                              </td>
                              <td>
                                <a href="#" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                
                                Another Product
                              </td>
                              <td>$29 USD</td>
                              <td>
                                <small class="text-warning mr-1">
                                  <i class="fas fa-arrow-down"></i>
                                  0.5%
                                </small>
                                123,234 Sold
                              </td>
                              <td>
                                <a href="#" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                
                                Amazing Product
                              </td>
                              <td>$1,230 USD</td>
                              <td>
                                <small class="text-danger mr-1">
                                  <i class="fas fa-arrow-down"></i>
                                  3%
                                </small>
                                198 Sold
                              </td>
                              <td>
                                <a href="#" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Perfect Item
                                <span class="badge bg-danger">NEW</span>
                              </td>
                              <td>$199 USD</td>
                              <td>
                                <small class="text-success mr-1">
                                  <i class="fas fa-arrow-up"></i>
                                  63%
                                </small>
                                87 Sold
                              </td>
                              <td>
                                <a href="#" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-header border-0">
                          <div class="d-flex justify-content-between">
                            <h3 class="card-title">Sales</h3>
                            <a href="javascript:void(0);">View Report</a>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="d-flex">
                            <p class="d-flex flex-column">
                              <span class="text-bold text-lg">$18,230.00</span>
                              <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                              <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 33.1%
                              </span>
                              <span class="text-muted">Since last month</span>
                            </p>
                          </div>
                          <!-- /.d-flex -->
          
                          <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                          </div>
          
                          <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                              <i class="fas fa-square text-primary"></i> This year
                            </span>
          
                            <span>
                              <i class="fas fa-square text-gray"></i> Last year
                            </span>
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
              </div>
              <!-- /.content -->
          
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
