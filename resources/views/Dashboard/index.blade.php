@extends('Layouts.index')
@section('title', 'Dashboard')
@section('content')

<div class="main-container container-fluid">

  <!-- breadcrumb -->
  <div class="breadcrumb-header justify-content-between">
    <div>
      <h4 class="content-title mb-2">Hi, welcome back!</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Project</li>
        </ol>
      </nav>
    </div>
    <div class="d-flex my-auto">
      <div class=" d-flex right-page">
        <div class="d-flex justify-content-center me-5">
          <div class="">
            <span class="d-block">
              <span class="label "> </span>
            </span>
            <span class="value">
              
            </span>
          </div>
          <div class="ms-3 mt-2">
            
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="">
            <span class="d-block">
              <span class="label">  </span>
            </span>
            <span class="value">
             
            </span>
          </div>
          <div class="ms-3 mt-2">
            php
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /breadcrumb -->

  <!-- main-content-body -->
  <div class="main-content-body">
    <div class="row row-sm">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card overflow-hidden project-card">
          <div class="card-body">
            <div class="d-flex">
              <div class="my-auto">
                <svg enable-background="new 0 0 469.682 469.682" version="1.1" class="me-4 ht-60 wd-60 my-auto primary" viewBox="0 0 469.68 469.68" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path d="m120.41 298.32h87.771c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449h-87.771c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449z"></path>
                  <path d="m291.77 319.22h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"></path>
                  <path d="m291.77 361.01h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"></path>
                  <path d="m420.29 387.14v-344.82c0-22.987-16.196-42.318-39.183-42.318h-224.65c-22.988 0-44.408 19.331-44.408 42.318v20.376h-18.286c-22.988 0-44.408 17.763-44.408 40.751v345.34c0.68 6.37 4.644 11.919 10.449 14.629 6.009 2.654 13.026 1.416 17.763-3.135l31.869-28.735 38.139 33.959c2.845 2.639 6.569 4.128 10.449 4.18 3.861-0.144 7.554-1.621 10.449-4.18l37.616-33.959 37.616 33.959c5.95 5.322 14.948 5.322 20.898 0l38.139-33.959 31.347 28.735c3.795 4.671 10.374 5.987 15.673 3.135 5.191-2.98 8.232-8.656 7.837-14.629v-74.188l6.269-4.702 31.869 28.735c2.947 2.811 6.901 4.318 10.971 4.18 1.806 0.163 3.62-0.2 5.224-1.045 5.493-2.735 8.793-8.511 8.361-14.629zm-83.591 50.155-24.555-24.033c-5.533-5.656-14.56-5.887-20.376-0.522l-38.139 33.959-37.094-33.959c-6.108-4.89-14.79-4.89-20.898 0l-37.616 33.959-38.139-33.959c-6.589-5.4-16.134-5.178-22.465 0.522l-27.167 24.033v-333.84c0-11.494 12.016-19.853 23.51-19.853h224.65c11.494 0 18.286 8.359 18.286 19.853v333.84zm62.693-61.649-26.122-24.033c-4.18-4.18-5.224-5.224-15.673-3.657v-244.51c1.157-21.321-15.19-39.542-36.51-40.699-0.89-0.048-1.782-0.066-2.673-0.052h-185.47v-20.376c0-11.494 12.016-21.42 23.51-21.42h224.65c11.494 0 18.286 9.927 18.286 21.42v333.32z"></path>
                  <path d="m232.21 104.49h-57.47c-11.542 0-20.898 9.356-20.898 20.898v104.49c0 11.542 9.356 20.898 20.898 20.898h57.469c11.542 0 20.898-9.356 20.898-20.898v-104.49c1e-3 -11.542-9.356-20.898-20.897-20.898zm0 123.3h-57.47v-13.584h57.469v13.584zm0-34.482h-57.47v-67.918h57.469v67.918z"></path>
                </svg>
              </div>
              <div class="project-content">
                <h6>Invoices</h6>
                <ul>
                  <li>
                    <strong>Processing</strong>
                    <span>5</span>
                  </li>

                  <li>
                    <strong>Paid</strong>
                    <span>56</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card  overflow-hidden project-card">
          <div class="card-body">
            <div class="d-flex">
              <div class="my-auto">
                <svg enable-background="new 0 0 438.891 438.891" class="me-4 ht-60 wd-60 my-auto danger" version="1.1" viewBox="0 0 438.89 438.89" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path d="m347.97 57.503h-39.706v-17.763c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347-20.668-0.777-39.467 11.896-46.498 31.347h-30.302c-5.747 0-11.494 2.612-11.494 8.359v17.763h-39.707c-23.53 0.251-42.78 18.813-43.886 42.318v299.36c0 22.988 20.898 39.706 43.886 39.706h257.04c22.988 0 43.886-16.718 43.886-39.706v-299.36c-1.106-23.506-20.356-42.068-43.886-42.319zm-196.44-5.224h28.735c5.016-0.612 9.045-4.428 9.927-9.404 3.094-13.474 14.915-23.146 28.735-23.51 13.692 0.415 25.335 10.117 28.212 23.51 0.937 5.148 5.232 9.013 10.449 9.404h29.78v41.796h-135.84v-41.796zm219.43 346.91c0 11.494-11.494 18.808-22.988 18.808h-257.04c-11.494 0-22.988-7.314-22.988-18.808v-299.36c1.066-11.964 10.978-21.201 22.988-21.42h39.706v26.645c0.552 5.854 5.622 10.233 11.494 9.927h154.12c5.98 0.327 11.209-3.992 12.016-9.927v-26.646h39.706c12.009 0.22 21.922 9.456 22.988 21.42v299.36z"></path>
                  <path d="m179.22 233.57c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z"></path>
                  <path d="m329.16 256.03h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"></path>
                  <path d="m179.22 149.98c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.364-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z"></path>
                  <path d="m329.16 172.44h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"></path>
                  <path d="m179.22 317.16c-3.919-4.131-10.425-4.363-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.21-0.391-0.411-0.601-0.604z"></path>
                  <path d="m329.16 339.63h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"></path>
                </svg>
              </div>
              <div class="project-content">
                <h6>Tasks</h6>
                <ul>
                  <li>
                    <strong>Processing</strong>
                    <span>42</span>
                  </li>

                  <li>
                    <strong>Completed</strong>
                    <span>23</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card overflow-hidden project-card">
          <div class="card-body">
            <div class="d-flex">
              <div class="my-auto">
                <svg enable-background="new 0 0 477.849 477.849" class="me-4 ht-60 wd-60 my-auto success" version="1.1" viewBox="0 0 477.85 477.85" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path d="m374.1 385.52c71.682-74.715 69.224-193.39-5.492-265.08-34.974-33.554-81.584-52.26-130.05-52.193-103.54-0.144-187.59 83.676-187.74 187.22-0.067 48.467 18.639 95.077 52.193 130.05l-48.777 65.024c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l47.275-63.044c65.4 47.651 154.08 47.651 219.48 0l47.275 63.044c5.655 7.541 16.353 9.069 23.893 3.413 7.541-5.655 9.069-16.353 3.413-23.893l-48.775-65.024zm-135.54 24.064c-84.792-0.094-153.51-68.808-153.6-153.6 0-84.831 68.769-153.6 153.6-153.6s153.6 68.769 153.6 153.6-68.769 153.6-153.6 153.6z"></path>
                  <path d="m145.29 24.984c-33.742-32.902-87.767-32.221-120.67 1.521-32.314 33.139-32.318 85.997-8e-3 119.14 6.665 6.663 17.468 6.663 24.132 0l96.546-96.529c6.663-6.665 6.663-17.468 0-24.133zm-106.55 82.398c-12.186-25.516-1.38-56.08 24.136-68.267 13.955-6.665 30.175-6.665 44.131 0l-68.267 68.267z"></path>
                  <path d="m452.49 24.984c-33.323-33.313-87.339-33.313-120.66 0-6.663 6.665-6.663 17.468 0 24.132l96.529 96.529c6.665 6.663 17.468 6.663 24.132 0 33.313-33.322 33.313-87.338 0-120.66zm-14.08 82.449-68.301-68.301c19.632-9.021 42.79-5.041 58.283 10.018 15.356 15.341 19.371 38.696 10.018 58.283z"></path>
                  <path d="m238.56 136.52c-9.426 0-17.067 7.641-17.067 17.067v96.717l-47.787 63.71c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l51.2-68.267c2.216-2.954 3.413-6.547 3.413-10.24v-102.4c1e-3 -9.426-7.64-17.067-17.065-17.067z"></path>
                </svg>
              </div>
              <div class="project-content">
                <h6>Estimates</h6>
                <ul>
                  <li>
                    <strong>Processing</strong>
                    <span>2</span>
                  </li>

                  <li>
                    <strong>Accepted</strong>
                    <span>16</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card overflow-hidden project-card">
          <div class="card-body">
            <div class="d-flex">
              <div class="my-auto">
                <svg enable-background="new 0 0 512 512" class="me-4 ht-60 wd-60 my-auto warning" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <path d="m259.2 317.72h-6.398c-8.174 0-14.824-6.65-14.824-14.824 1e-3 -8.172 6.65-14.822 14.824-14.822h6.398c8.174 0 14.825 6.65 14.825 14.824h29.776c0-20.548-13.972-37.885-32.911-43.035v-33.74h-29.777v33.739c-18.94 5.15-32.911 22.487-32.911 43.036 0 24.593 20.007 44.601 44.601 44.601h6.398c8.174 0 14.825 6.65 14.825 14.824s-6.65 14.824-14.825 14.824h-6.398c-8.174 0-14.824-6.65-14.824-14.824h-29.777c0 20.548 13.972 37.885 32.911 43.036v33.739h29.777v-33.74c18.94-5.15 32.911-22.487 32.911-43.035 0-24.594-20.008-44.603-44.601-44.603z"></path>
                  <path d="m502.7 432.52c-7.232-60.067-26.092-111.6-57.66-157.56-27.316-39.764-65.182-76.476-115.59-112.06v-46.29l37.89-98.425-21.667-0.017c-6.068-4e-3 -8.259-1.601-13.059-5.101-6.255-4.559-14.821-10.802-30.576-10.814h-0.046c-15.726 0-24.292 6.222-30.546 10.767-4.799 3.487-6.994 5.081-13.041 5.081h-0.027c-6.07-5e-3 -8.261-1.602-13.063-5.101-6.255-4.559-14.821-10.801-30.577-10.814h-0.047c-15.725 0-24.293 6.222-30.548 10.766-4.8 3.487-6.995 5.081-13.044 5.081h-0.027l-21.484-0.017 36.932 98.721v46.117c-51.158 36.047-89.636 72.709-117.47 111.92-33.021 46.517-52.561 98.116-59.74 157.74l-9.304 77.285h512l-9.304-77.284zm-301.06-395.47c4.8-3.487 6.995-5.081 13.045-5.081h0.026c6.07 4e-3 8.261 1.602 13.062 5.101 6.255 4.559 14.821 10.802 30.578 10.814h0.047c15.725 0 24.292-6.222 30.546-10.767 4.799-3.487 6.993-5.081 13.041-5.081h0.026c6.068 5e-3 8.259 1.602 13.059 5.101 2.869 2.09 6.223 4.536 10.535 6.572l-21.349 55.455h-92.526l-20.762-55.5c4.376-2.041 7.773-4.508 10.672-6.614zm98.029 91.89v26.799h-83.375v-26.799h83.375zm-266.09 351.08 5.292-43.947c6.571-54.574 24.383-101.7 54.458-144.07 26.645-37.537 62.54-71.458 112.73-106.5h103.78c101.84 71.198 150.75 146.35 163.29 250.56l5.291 43.948h-444.85z"></path>
                </svg>
              </div>
              <div class="project-content">
                <h6>Revenue</h6>
                <ul>
                  <li>
                    <strong>Earnings</strong>
                    <span>$15,425</span>
                  </li>
                  <li>
                    <strong>Expensive</strong>
                    <span>$8,147</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- row -->
    <div class="row row-sm ">
      <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10">Project Budget</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-2">The Project Budget is a tool used by project managers to estimate the total cost of a project. <a href="">Learn more</a></p>
          </div>
          <div class="card-body pd-y-7"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="area chart-legend mb-0">
              <div>
                <i class="mdi mdi-album text-primary me-2"></i> Total Budget
              </div>
              <div>
                <i class="mdi mdi-album text-pink me-2"></i>Amount Used
              </div>
            </div>
            <canvas id="project-budget" class="ht-300 chartjs-render-monitor" width="401" height="200" style="display: block; width: 401px; height: 200px;"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="card overflow-hidden">
          <div class="card-body pb-3">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10">project &amp; task</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-3">In project, a task is an activity that needs to be accomplished within a defined period of time or by a deadline. <a href="">Learn more</a></p>
            <div class="table-responsive mb-0 projects-stat tx-14">
              <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap  ">
                <thead>
                  <tr>
                    <th>Project &amp; Task</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="project-names">
                        <h6 class="bg-primary-transparent text-primary d-inline-block me-2 text-center">U</h6>
                        <p class="d-inline-block font-weight-semibold mb-0">UI Design</p>
                      </div>
                    </td>
                    <td>
                      <div class="badge bg-success">Completed</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-names">
                        <h6 class="bg-pink-transparent text-pink d-inline-block text-center me-2">R</h6>
                        <p class="d-inline-block font-weight-semibold mb-0">Landing Page</p>
                      </div>
                    </td>
                    <td>
                      <div class="badge bg-warning">Pending</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-names">
                        <h6 class="bg-success-transparent text-success d-inline-block me-2 text-center">W</h6>
                        <p class="d-inline-block font-weight-semibold mb-0">Website &amp; Blog</p>
                      </div>
                    </td>
                    <td>
                      <div class="badge bg-danger">Canceled</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-names">
                        <h6 class="bg-purple-transparent text-purple d-inline-block me-2 text-center">P</h6>
                        <p class="d-inline-block font-weight-semibold mb-0">Product Development</p>
                      </div>
                    </td>
                    <td>
                      <div class="badge bg-teal">on-going</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-names">
                        <h6 class="bg-danger-transparent text-danger d-inline-block me-2 text-center">L</h6>
                        <p class="d-inline-block font-weight-semibold mb-0">Logo Design</p>
                      </div>
                    </td>
                    <td>
                      <div class="badge bg-success">Completed</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /row -->

    <!-- row -->
    <div class="row row-sm">
      <div class="col-lg-6 col-xl-4 col-md-12 col-sm-12">
        <div class="card overflow-hidden latest-tasks">
          <div class="">
            <div class="d-flex justify-content-between ps-4 pt-4 pe-4">
              <h4 class="card-title mg-b-10">Latest Task</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <div class="">
              <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tasktab-1" role="tab" aria-selected="false">
                    Today
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tasktab-2" role="tab" aria-selected="false">
                    Week
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tasktab-3" role="tab" aria-selected="true">
                    Month
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body pt-3">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="tasktab-1" role="tabpanel">
                <div class="">
                  <div class="tasks">
                    <div class=" task-line primary active">
                      <a href="javascript:void(0);" class="label">
                        XML Import &amp; Export
                      </a>
                      <div class="time">
                        12:00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input checked="" type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line pink">
                      <a href="javascript:void(0);" class="label">
                        Database Optimization
                      </a>
                      <div class="time">
                        02:13 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line success">
                      <a href="javascript:void(0);" class="label">
                        Create Wireframes
                      </a>
                      <div class="time">
                        06:20 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line warning">
                      <a href="javascript:void(0);" class="label">
                        Develop MVP
                      </a>
                      <div class="time">
                        10: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line teal">
                      <a href="javascript:void(0);" class="label">
                        Design Ecommerce
                      </a>
                      <div class="time">
                        10: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks mb-0">
                    <div class="task-line purple">
                      <a href="javascript:void(0);" class="label">
                        Fix Validation Issues
                      </a>
                      <div class="time">
                        12: 00 AM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tasktab-2" role="tabpanel">
                <div class="">
                  <div class="tasks">
                    <div class=" task-line teal">
                      <a href="javascript:void(0);" class="label">
                        Management meeting
                      </a>
                      <div class="time">
                        06:30 AM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line danger">
                      <a href="javascript:void(0);" class="label">
                        Connect API to pages
                      </a>
                      <div class="time">
                        08:00 AM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line purple">
                      <a href="javascript:void(0);" class="label">
                        Icon change in Redesign App
                      </a>
                      <div class="time">
                        11:20 AM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line warning">
                      <a href="javascript:void(0);" class="label">
                        Test new features in tablets
                      </a>
                      <div class="time">
                        02: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line success">
                      <a href="javascript:void(0);" class="label">
                        Design Logo
                      </a>
                      <div class="time">
                        04: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks mb-0">
                    <div class="task-line primary">
                      <a href="javascript:void(0);" class="label">
                        Project Launch
                      </a>
                      <div class="time">
                        06: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tasktab-3" role="tabpanel">
                <div class="">
                  <div class="tasks">
                    <div class=" task-line info">
                      <a href="javascript:void(0);" class="label">
                        Design a Landing Page
                      </a>
                      <div class="time">
                        06:12 AM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line danger">
                      <a href="javascript:void(0);" class="label">
                        Food Delivery Mobile Application
                      </a>
                      <div class="time">
                        3:00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line warning">
                      <a href="javascript:void(0);" class="label">
                        Export Database values
                      </a>
                      <div class="time">
                        03:20 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line pink">
                      <a href="javascript:void(0);" class="label">
                        Write Simple Python Script
                      </a>
                      <div class="time">
                        04: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks">
                    <div class="task-line success">
                      <a href="javascript:void(0);" class="label">
                        Write Simple Anugalr Program
                      </a>
                      <div class="time">
                        05: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                  <div class="tasks mb-0">
                    <div class="task-line primary">
                      <a href="javascript:void(0);" class="label">
                        Design PSD files
                      </a>
                      <div class="time">
                        06: 00 PM
                      </div>
                    </div>
                    <span class="add-delete-task ">
                      <a href="javascript:void(0);" class="btn btn-link">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                    </span>
                    <div class="checkbox">
                      <label class="check-box">
                        <label class="ckbox"><input type="checkbox"><span></span></label>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
        <div class="card overflow-hidden">
          <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10 mt-2">Projects Workload</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-0"> In the Project Workload report, their remaining assignments, completion dates, whether their work is at-risk. <a href="">Learn more</a></p>
          </div>
          <div class="card-body">
            <div class="">
              <div class="row justify-content-md-center">
                <div class="col-sm-12">
                  <div class="">
                    <canvas id="chartDonut" class="ht-175 drop-shadow" width="170" height="170" style="display: block;"><ul class="0-legend"><li><span style="background-color:#3858f9"></span>External</li><li><span style="background-color:#f09819"></span>Internal</li><li><span style="background-color:#3cba92"></span>Other</li></ul></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="pt-3">
              <div class="row ">
                <div class="col-sm-8 ">
                  <h5 class="mb-0 tx-15 d-flex"><span class="legend bg-primary-gradient brround"></span>40.32%</h5>
                  <p class="text-muted  tx-13 mb-0">External</p>
                </div>
                <div class="col-sm-4 ">
                  <span id="sparkel1"><canvas width="85" height="30" style="display: inline-block; width: 85.7656px; height: 30px; vertical-align: top;"></canvas></span>
                </div>
              </div>
            </div>

            <div class="pt-3">
              <div class="row ">
                <div class="col-sm-8 ">
                  <h6 class="mb-0 tx-15 d-flex"><span class="legend bg-danger-gradient brround"></span>40.73%</h6>
                  <p class="text-muted tx-13 mb-0 ">Internal</p>
                </div>
                <div class="col-sm-4 ">
                  <span id="sparkel2"><canvas width="85" height="30" style="display: inline-block; width: 85.7656px; height: 30px; vertical-align: top;"></canvas></span>
                </div>
              </div>
            </div>
            <div class="pt-3">
              <div class="row ">
                <div class="col-sm-8 ">
                  <h6 class="mb-0 tx-15 d-flex"><span class="legend bg-success-gradient brround"></span>50.12%</h6>
                  <p class="text-muted tx-13 mb-0">Other</p>
                </div>
                <div class="col-sm-4 ">
                  <span id="sparkel3"><canvas width="85" height="30" style="display: inline-block; width: 85.7656px; height: 30px; vertical-align: top;"></canvas></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
        <div class="card card-dashboard-events">
          <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10">Upcoming Events</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-0">It had the latest news and notes from the championship, while previewing the upcoming event.. <a href="">Learn more</a></p>
          </div>
          <div class="card-body">
            <div class="list-group ">
              <div class="list-group-item border-top-0">
                <div class="event-indicator bg-primary-gradient"></div><label>Nov 20 <span>Tuesday</span></label>
                <h6>PH World Mall Lantern Festival</h6>
                <p><strong>8AM - 4PM</strong> Bay Area, San Francisco</p><small><span class="tx-danger">Sold Out</span> (3000 tickets sold)</small>
              </div>
              <div class="list-group-item">
                <div class="event-indicator bg-danger-gradient"></div><label>Nov 23 <span>Friday</span></label>
                <h6>Asia Pacific Generation Workshop</h6>
                <p><strong>8AM - 5PM</strong> Singapore</p><small><span class="tx-warning">Sold Out Soon</span> (12 tickets left)</small>
              </div>
              <div class="list-group-item border-bottom-0">
                <div class="event-indicator bg-info-gradient"></div><label>Nov 23 <span>Friday</span></label>
                <h6>Korea Smart Device Trade Show</h6>
                <p><strong>8AM - 5PM</strong> Singapore</p><small><span class="tx-success">Free Registration</span> (Limited seats only)</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /row -->

    <!-- row -->
    <div class="row row-sm ">
      <div class="col-md-12 col-xl-12">
        <div class="card overflow-hidden review-project">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10">All Projects</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-3">A project is an activity to meet the creation of a unique product or service and thus activities that are undertaken to accomplish routine activities cannot be considered projects. <a href="">Learn more</a></p>
            <div class="table-responsive mb-0">
              <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
                <thead>
                  <tr>
                    <th>Project</th>
                    <th>Team Members</th>
                    <th>Categorie</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Deadline</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="project-contain">
                        <h6 class="mb-1 tx-13">Angular Project</h6>
                      </div>
                    </td>
                    <td>
                      <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/2.jpg"></div>
                    </td>
                    <td>Web Design</td>
                    <td>01 Jan 2020</td>
                    <td><span class="badge bg-primary-gradient">Ongoing</span></td>
                    <td>15 March 2020</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-contain">
                        <h6 class="mb-1 tx-13">PHP Project</h6>
                      </div>
                    </td>
                    <td>
                      <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"></div>
                    </td>
                    <td>Web Development</td>
                    <td>03 March 2020</td>
                    <td><span class="badge bg-success-gradient">Ongoing</span></td>
                    <td>15 Jun 2020</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-contain">
                        <h6 class="mb-1 tx-13">Python</h6>
                      </div>
                    </td>
                    <td>
                      <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/3.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
                    </td>
                    <td>Web Development</td>
                    <td>15 March 2020</td>
                    <td><span class="badge bg-danger-gradient">Pending</span></td>
                    <td>15 March 2020</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-contain">
                        <h6 class="mb-1 tx-13">Android App</h6>
                      </div>
                    </td>
                    <td>
                      <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/6.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"></div>
                    </td>
                    <td>Android</td>
                    <td>15 March 2020</td>
                    <td><span class="badge bg-success-gradient">Ongoing</span></td>
                    <td>15 March 2020</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="project-contain">
                        <h6 class="mb-1 tx-13">Mobile Application</h6>
                      </div>
                    </td>
                    <td>
                      <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
                    </td>
                    <td>Android</td>
                    <td>15 March 2020</td>
                    <td><span class="badge bg-pink-gradient">Ongoing</span></td>
                    <td>15 March 2020</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /row -->

    <!-- row -->
    <div class="row row-sm ">
      <div class="col-lg-12 col-xl-4 col-sm-12">
        <div class="card">
          <div class="card-header pb-0 pt-4">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10">Top Ongoing Projects</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-0">Project Description is a formally written declaration of the project and its idea and context . <a href="">Learn more</a></p>
          </div>
          <div class="card-body p-0 m-scroll mh-350 mt-2">
            <div class="list-group projects-list">
              <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-top-0">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1 font-weight-semibold ">PSD Projects</h6>
                  <small class="text-danger"><i class="fa fa-caret-down me-1"></i>5 days ago</small>
                </div>
                <p class="mb-0 text-muted mb-0 tx-12">Started:17-02-2020</p>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</small>
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1 font-weight-semibold">Wordpress Projects</h6>
                  <small class="text-success"><i class="fa fa-caret-up me-1"></i>2 days ago</small>
                </div>
                <p class="mb-0 text-muted mb-0 tx-12">Started:15-02-2020</p>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
                  <small class="text-danger"><i class="fa fa-caret-down me-1"></i>1 days ago</small>
                </div>
                <p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
                  <small class="text-danger"><i class="fa fa-caret-down me-1"></i>1 days ago</small>
                </div>
                <p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card overflow-hidden ">
          <div class="card-header pb-0 pt-4">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10 ">Activity</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-0">An activity is a scheduled phase in a project plan with a distinct beginning and end. <a href="">Learn more</a></p>
          </div>
          <div class="card-body p-0">
            <div class="activity Activity-scroll ps ps--active-y">
              <div class="activity-list">
                <img src="../assets/img/faces/6.jpg" alt="" class="img-activity">
                <div class="time-activity ">
                  <div class="item-activity">
                  <p class="mb-0"><span class="h6 me-1">Adam Berry</span><span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project"> AngularJS Template</span></p><small class="text-muted ">30 mins ago</small> </div>
                </div>
              <img src="../assets/img/faces/9.jpg" alt="" class="img-activity">
                <div class="time-activity">
                  <div class="item-activity">
                  <p class="mb-0"><span class="h6 me-1">Irene Hunter</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-danger">Free HTML Template</span></p><small class="text-muted ">1 days ago</small> </div>
                </div> <img src="../assets/img/faces/3.jpg" alt="" class="img-activity">
                <div class="time-activity">
                  <div class="item-activity">
                  <p class="mb-0"><span class="h6 me-1">John Payne</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-success">Free PSD Template</span></p><small class="text-muted ">3 days ago</small> </div>
                </div> <img src="../assets/img/faces/4.jpg" alt="" class="img-activity">
                <div class="time-activity">
                  <div class="item-activity ">
                  <p class="mb-0"><span class="h6 me-1">Julia Hardacre</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-warning">Free UI Template</span></p><small class="text-muted ">5 days ago</small> </div>
                </div> <img src="../assets/img/faces/5.jpg" alt="" class="img-activity">
                <div class="time-activity">
                  <div class="item-activity">
                  <p class="mb-0"><span class="h6 me-1">Adam Berry</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-pink"> AngularJS Template</span></p><small class="text-muted ">30 mins ago</small> </div>
                </div> <img src="../assets/img/faces/6.jpg" alt="" class="img-activity">
                <div class="time-activity">
                  <div class="item-activity">
                  <p class="mb-0"><span class="h6 me-1">Irene Hunter</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-purple">Free HTML Template</span></p><small class="text-muted ">1 days ago</small> </div>
                </div> <img src="../assets/img/faces/16.jpg" alt="" class="img-activity">
                <div class="time-activity">
                  <div class="item-activity">
                  <p class="mb-0"><span class="h6 me-1">John Payne</span><span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-success">Free PSD Template</span></p><small class="text-muted ">3 days ago</small> </div>
                </div> <img src="../assets/img/faces/10.jpg" alt="" class="img-activity">
                <div class="time-activity mb-0">
                  <div class="item-activity mb-0">
                  <p class="mb-0"><span class="h6 me-1">Julia Hardacre</span><span class="text-muted tx-13"> Add a new projects</span><span class="h6 ms-1 added-project">Free UI Template</span></p><small class="text-muted ">5 days ago</small> </div>
                </div>
              </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 344px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 173px;"></div></div></div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card">
          <div class="card-header pt-4 pb-0">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-10 ">Task Statistics</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-0">The Statistics You can also summarize your data in a graphical display, such as histograms <a href="">Learn more</a> </p>
          </div>
          <div class="p-4">
            <div class="">
              <div class="row">
                <div class="col-md-6 col-6 text-center">
                  <div class="task-box primary mb-0">
                    <p class="mb-0 tx-12">Total Tasks</p>
                    <h3 class="mb-0">385</h3>
                  </div>
                </div>
                <div class="col-md-6 col-6 text-center">
                  <div class="task-box danger  mb-0">
                    <p class="mb-0 tx-12">Overdue Tasks</p>
                    <h3 class="mb-0">19</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="task-stat pb-0">
            <div class="d-flex tasks">
              <div class="mb-0">
                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-primary me-2"></i>Completed Tasks</div>
                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
              </div>
              <span class="float-end ms-auto">135</span>
            </div>
            <div class="d-flex tasks">
              <div class="mb-0">
                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-pink me-2"></i>Inprogress Tasks</div>
                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
              </div>
              <span class="float-end ms-auto">75</span>
            </div>
            <div class="d-flex tasks">
              <div class="mb-0">
                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-success me-2"></i>On Hold Tasks</div>
                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
              </div>
              <span class="float-end ms-auto">23</span>
            </div>
            <div class="d-flex tasks mb-0 border-bottom-0">
              <div class="mb-0">
                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-purple me-2"></i>Pending Tasks</div>
                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
              </div>
              <span class="float-end ms-auto">1</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /row -->
</div>

@endsection
