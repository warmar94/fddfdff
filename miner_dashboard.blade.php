<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
  <x-auth.navbars.sidebar activePage="applications" activeItem="miner-dashboard" activeSubitem=""></x-auth.navbars.sidebar>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <x-auth.navbars.navs.auth pageTitle="EPS Miner Dashboard"></x-auth.navbars.navs.auth>
    <!-- End Navbar -->
    <div class="container-fluid py-4 pt-7">
      <div class="row mt-4">
        <div class="col-lg-7">
          <div class="card bg-gradient-dark">
            <img src="{{ asset('assets') }}/img/shapes/waves-white.svg" alt="pattern-lines"
                class="position-absolute opacity-2 start-0 top-0 w-100">
            <img class="w-75 mt-n7 mt-lg-n8 d-none d-md-block mx-auto z-index-1"
                src="{{ asset('assets') }}/img/asic-miner.png" alt="car image">
            <div class="card-body px-5 z-index-1 bg-cover overflow-hidden pb-2">
              <div class="row">
                <div class="col-12 text-center">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <h4 class="text-white opacity-9">ASIC Miners</h4>
                      <hr class="horizontal light mt-1 mb-3">
                      <div class="d-flex justify-content-center">
                        <div>
                            <h6 class="mb-0 text-white opacity-8 font-weight-normal">Active
                            </h6>
                            <h3 class="text-white">11 <small class="text-sm">miner</small></h3>
                        </div>
                        <div class="ms-lg-6 ms-4">
                            <h6 class="mb-0 text-white opacity-8 font-weight-normal">Offline
                            </h6>
                            <h3 class="text-white">2 <small class="text-sm">miner</small></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <h4 class="text-white opacity-9">Outstanding Bill</h4>
                      <hr class="horizontal light mt-1 mb-3">
                      <div class="d-flex justify-content-center">
                        <div>
                            <h6 class="mb-0 text-white">#1981123</h6>
                            <h6 class="mb-0 text-white">1,250.25$</h6>
                            </div>
                            <div class="ms-lg-6 ms-4">
                              <button
                                  class="btn btn-icon-only btn-rounded btn-outline-white mb-0 p-1">
                                  <i class="material-icons text-lg" aria-hidden="true">map</i>
                              </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row">
              <div class="col-12">
                <div class="card bg-gradient-dark mb-4 mt-4 mt-lg-0">
                  <div class="card-body p-3">
                    <div class="row">
                      <div class="col-8 my-auto">
                        <div class="numbers">
                            <p
                                class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                Marton Ersek</p>
                            <h5 class="text-white font-weight-bolder mb-0">
                                ersekmarton@gmail.com
                            </h5>
                        </div>
                      </div>
                      <div class="col-4 text-end">
                        <img class="w-50"
                          src="{{ asset('assets') }}/img/small-logos/icon-sun-cloud.png"
                          alt="image sun">
                        <h5 class="mb-0 text-white text-end me-1">Member</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-12 mt-2">
                <div class="card">
                  <div class="card-body p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10" aria-hidden="true">power</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Total Power</p>
                      <h4 class="mb-0">12300.20 W</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-12 mt-4 mt-lg-2">
                <div class="card">
                  <div class="card-body p-3 pt-2">
                    <div
                      class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10" aria-hidden="true">storage</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Total Number of Miners</p>
                      <h4 class="mb-0">13 Miner</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 mt-4 d-none d-lg-block">
                <div class="card mt-2">
                  <div class="card-body p-3 pt-2">
                    <div
                      class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10" aria-hidden="true">payment</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Electricity Price (/kwh)</p>
                      <h4 class="mb-0">0.077$</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 mt-4 d-none d-lg-block">
                <div class="card mt-2">
                  <div class="card-body p-3 pt-2">
                    <div
                      class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10" aria-hidden="true">grading</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Onboarding Requests</p>
                      <h4 class="mb-0">1 Pending</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 mt-4 d-none d-lg-block">
                <div class="card mt-2">
                  <div class="card-body p-3 pt-2">
                    <div
                      class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10" aria-hidden="true">outlet</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Current Electricity</p>
                      <h4 class="mb-0">18900 kwh</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 mt-4 d-none d-lg-block">
                <div class="card mt-2">
                  <div class="card-body p-3 pt-2">
                    <div
                      class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                      <i class="material-icons opacity-10" aria-hidden="true">build</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">Service Requests</p>
                      <h4 class="mb-0">0 Pending</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>       
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <button type="button" class="btn btn-info me-2">
                    <i class="material-icons">terminal</i> Config
                  </button>
                  <button type="button" class="btn btn-success me-2">
                    <i class="material-icons">restart_alt</i> Restart
                  </button>
                  <button type="button" class="btn btn-primary me-2">
                    <i class="material-icons">power_settings_new</i> Power Cycle
                  </button>
                <div>
                  <button type="button" class="btn btn-warning me-2">
                    <i class="material-icons">system_update_alt</i> Factory Reset
                  </button>
                  <button type="button" class="btn btn-dark me-2">
                    <i class="material-icons">power_settings_new</i> Power On
                  </button>
                  <button type="button" class="btn btn-secondary me-2">
                    <i class="material-icons">power_settings_new</i> Power Off
                  </button>
                </div>
                <div>
                  <div class="row mt-3">
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="Pool 1">
                    </div>
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="User 1">
                    </div>
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="Password 1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="Pool 2">
                    </div>
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="User 2">
                    </div>
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="Password 2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="Pool 3">
                    </div>
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="User 3">
                    </div>
                    <div class="col-md-4 mb-3">
                      <input type="text" class="form-control" placeholder="Password 3">
                    </div>
                  </div>
                </div>
                <h6 class="mb-2">Miner Setup: Select your Miner, input your pool details & hit "Config"!</h6>
              </div>
              <div class="d-none d-md-block">
                <img src="{{ asset('assets/img/miner-dashboard-cover-miners.jpg') }}" alt="miner dashboard cover" class="img-fluid">
              </div>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                  <thead class="thead-light">
                    <tr>
                      <th>Select</th>  
                      <th>IP</th>
                      <th>Type</th>
                      <th>Hashrate</th>
                      <th>Hashrate Avg</th>
                      <th>Running Time</th>
                      <th>Status</th>
                      <th>Temperature</th>
                      <th>Fan Speed</th>
                      <th>Firmware</th>
                      <th>Pool</th>
                      <th>Worker</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($miners as $miner)
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $miner->id }}" id="minerCheck-{{ $miner->id }}">
                            <label class="form-check-label" for="minerCheck-{{ $miner->id }}"></label>
                          </div>
                        </td>
                        <td>{{ $miner->ip }}</td>
                        <td>{{ $miner->type }}</td>
                        <td>{{ $miner->hashrate }}</td>
                        <td>{{ $miner->hashrate_avg }}</td>
                        <td>{{ $miner->running_time }}</td>
                        <td>{{ $miner->status }}</td>
                        <td>{{ $miner->temperature }}</td>
                        <td>{{ $miner->fan_speed }}</td>
                        <td>{{ $miner->firmware }}</td>
                        <td>{{ $miner->pool }}</td>
                        <td>{{ $miner->worker }}</td>
                        <td>{{ $miner->password }}</td>
                      </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
  </main>
  <x-plugins></x-plugins>
  @push('js')
  <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
  <script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: true
    });

    // Checkbox selection logic
    document.getElementById('selectAll').addEventListener('change', function (e) {
      const checkboxes = document.querySelectorAll('.row-select');
      for (const checkbox of checkboxes) {
        checkbox.checked = e.target.checked;
      }
    });

    // Get selected rows
    function getSelectedRows() {
      const checkboxes = document.querySelectorAll('.row-select:checked');
      const selectedIds = [];
      for (const checkbox of checkboxes) {
        selectedIds.push(checkbox.dataset.id);
      }
      return selectedIds;
    }

    // Button event listeners
    document.getElementById('configBtn').addEventListener('click', function () {
      const selectedIds = getSelectedRows();
      console.log('Config selected rows:', selectedIds);
      // Implement your Config functionality here
    });

    document.getElementById('restartBtn').addEventListener('click', function () {
      const selectedIds = getSelectedRows();
      console.log('Restart selected rows:', selectedIds);
      // Implement your Restart functionality here
    });

    document.getElementById('powerCycleBtn').addEventListener('click', function () {
      const selectedIds = getSelectedRows();
      console.log('Power Cycle selected rows:', selectedIds);
      // Implement your Power Cycle functionality here
    });

    document.getElementById('factoryResetBtn').addEventListener('click', function () {
      const selectedIds = getSelectedRows();
      console.log('Factory Reset selected rows:', selectedIds);
      // Implement your Factory Reset functionality here
    });

    document.getElementById('firmwareUpdateBtn').addEventListener('click', function () {
      const selectedIds = getSelectedRows();
      console.log('Firmware Update selected rows:', selectedIds);
      // Implement your Firmware Update functionality here
    });
  </script>
  @endpush
</x-page-template>