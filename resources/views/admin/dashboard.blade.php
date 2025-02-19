@extends('admin.layouts.app')

@section('content')
    





        <div class="row justify-content-center">
            <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-shrink-0">
                                <div class="icon transition rounded-circle">
                                    <i class="flaticon-goal"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">200</h3>
                                <span>Total Pelayanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-shrink-0">
                                <div class="icon transition rounded-circle bg-00b69b">
                                    <i class="flaticon-learning"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">3.340.000,00</h3>
                                <span>Total Value</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-shrink-0">
                                <div class="icon transition rounded-circle bg-ee368c">
                                    <i class="flaticon-struggle"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">64</h3>
                                <span>Success Pelayanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-shrink-0">
                                <div class="icon transition rounded-circle bg-2db6f5">
                                    <i class="flaticon-purpose"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">10</h3>
                                <span>Pending Pelayanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-shrink-0">
                                <div class="icon transition rounded-circle bg-ff8a54">
                                    <i class="flaticon-idea"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">4</h3>
                                <span>Karyawan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-8">
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-semibold fs-18 mb-0">Your Progress</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i data-feather="chevron-down"></i>
                                    <span>This Week</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="your_progress"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div
                                    class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Hours spent</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                            <span>This Week</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 12 Months
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="hours_spent"></div>
                            </div>
                        </div>
                        <div class="card bg-white border-0 rounded-10 mb-4 top-instructor">
                            <div class="card-body p-4">
                                <div
                                    class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Top Instructor</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                            <span>This Week</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 12 Months
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row justify-content-center gx-3">
                                    <div class="col-lg-6 col-sm-6">
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-3 border-0 bg-gray-div p-3 mb-15">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user-8.jpg" class="rounded-3 wh-55"
                                                        alt="user">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="mb-1 fw-semibold fs-16 text-dark">Melanie Grutt</p>
                                                    <p class="fw-semibold text-gray-light">@melgrutt</p>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none plush-btn">
                                                <i class="ri-add-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-3 border-0 bg-gray-div p-3 mb-15">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user-9.jpg" class="rounded-3 wh-55"
                                                        alt="user">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="mb-1 fw-semibold fs-16 text-dark">Nicholas Tan</p>
                                                    <p class="fw-semibold text-gray-light">@nilyeager</p>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none plush-btn">
                                                <i class="ri-add-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-3 border-0 bg-gray-div p-3 mb-15">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user-10.jpg" class="rounded-3 wh-55"
                                                        alt="user">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="mb-1 fw-semibold fs-16 text-dark">Theron Trump</p>
                                                    <p class="fw-semibold text-gray-light">@therontrump</p>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none plush-btn">
                                                <i class="ri-add-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-3 border-0 bg-gray-div p-3 mb-15">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user-11.jpg" class="rounded-3 wh-55"
                                                        alt="user">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="mb-1 fw-semibold fs-16 text-dark">Tyler Mark</p>
                                                    <p class="fw-semibold text-gray-light">@tylemark</p>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none plush-btn">
                                                <i class="ri-add-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-3 border-0 bg-gray-div p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user-12.jpg" class="rounded-3 wh-55"
                                                        alt="user">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="mb-1 fw-semibold fs-16 text-dark">Johen Mark</p>
                                                    <p class="fw-semibold text-gray-light">@johenmark</p>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none plush-btn">
                                                <i class="ri-add-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-3 border-0 bg-gray-div p-3 mt-3 mt-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user-13.jpg" class="rounded-3 wh-55"
                                                        alt="user">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="mb-1 fw-semibold fs-16 text-dark">Martina Albart</p>
                                                    <p class="fw-semibold text-gray-light">@martina</p>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none plush-btn">
                                                <i class="ri-add-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div
                                    class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-bold fs-18 mb-0">My Planning</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 12 Months
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="max-h-402" data-simplebar>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-6">
                                            <div
                                                class="d-flex align-items-center rounded-3 bg-gray-div2 p-3 p-sm-2 p-md-3 mb-15">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/planning-1.jpg"
                                                        class="rounded-3 wh-44" alt="planning">
                                                </div>
                                                <div class="flex-grow-1 ms-10">
                                                    <p class="mb-0 fw-semibold fs-16 text-dark">3D Animation learn
                                                    </p>
                                                    <p class="fw-medium text-gray-light fs-13">December 14, 08:30
                                                        PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6">
                                            <div
                                                class="d-flex align-items-center rounded-3 bg-gray-div2 p-3 p-sm-2 p-md-3 mb-15">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/planning-2.jpg"
                                                        class="rounded-3 wh-44" alt="planning">
                                                </div>
                                                <div class="flex-grow-1 ms-10">
                                                    <p class="mb-0 fw-semibold fs-16 text-dark">Handle UX Research
                                                    </p>
                                                    <p class="fw-medium text-gray-light fs-13">December 15, 09:30
                                                        PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6">
                                            <div
                                                class="d-flex align-items-center rounded-3 bg-gray-div2 p-3 p-sm-2 p-md-3 mb-3 mb-15">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/planning-3.jpg"
                                                        class="rounded-3 wh-44" alt="planning">
                                                </div>
                                                <div class="flex-grow-1 ms-10">
                                                    <p class="mb-0 fw-semibold fs-16 text-dark">Machine Learning
                                                    </p>
                                                    <p class="fw-medium text-gray-light fs-13">December 16, 10:30
                                                        PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6">
                                            <div
                                                class="d-flex align-items-center rounded-3 bg-gray-div2 p-3 p-sm-2 p-md-3">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/planning-4.jpg"
                                                        class="rounded-3 wh-44" alt="planning">
                                                </div>
                                                <div class="flex-grow-1 ms-10">
                                                    <p class="mb-0 fw-semibold fs-16 text-dark">Web Development
                                                    </p>
                                                    <p class="fw-medium text-gray-light fs-13">December 17, 11:30
                                                        PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-10 mb-4 bg-primary">
                            <div class="card-body p-4 total-progress">
                                <ul class="ps-0 mb-0 list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span class="text-white fs-15 fw-semibold">Total Watched</span>
                                        <span class="text-white fw-semibold">
                                            <i class="flaticon-bar-chart-4"></i> <span
                                                class="ms-2">66:15h</span>
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span class="text-white fs-15 fw-semibold">Assignment Completed</span>
                                        <span class="text-white fw-semibold">81%</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span class="text-white fs-15 fw-semibold">Monthly Progress</span>
                                        <span class="text-white fw-semibold">75%</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span class="text-white fs-15 fw-semibold">Overall Pass Percentage</span>
                                        <span class="text-white fw-semibold">95%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-semibold fs-18 mb-0">Current Courses</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="chevron-down"></i>
                                    <span>Development</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            Design
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            Business
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            Marketing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            Lifestyle
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card border-0 bg-gary-div2 rounded-3 mb-4 mb-lg-0">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mb-4 pb-2">
                                                <p class="fw-bold fs-24 text-dark">C++</p>
                                                <p class="fs-14 fw-semibold text-primary text-uppercase">IT &
                                                    SOFTWARE</p>
                                            </div>
                                            <img src="assets/images/c-plush.png" alt="c-plush">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fw-semibold fs-15">4.5 Score</span>
                                            <span class="fs-15 text-gray-light">37 Days Left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card border-0 bg-gary-div2 rounded-3 mb-4 mb-lg-0">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mb-4 pb-2">
                                                <p class="fw-bold fs-24 text-dark">JavaScript</p>
                                                <p class="fs-14 fw-semibold text-primary">LANGUAGE</p>
                                            </div>
                                            <img src="assets/images/javascript.png" alt="javascript">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fw-semibold fs-15">3.5 Score</span>
                                            <span class="fs-15 text-gray-light">25 Days Left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card border-0 bg-gary-div2 rounded-3 mb-4 mb-lg-0">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mb-4 pb-2">
                                                <p class="fw-bold fs-24 text-dark">Haskell</p>
                                                <p class="fs-14 fw-semibold text-primary">BACKEND</p>
                                            </div>
                                            <img src="assets/images/haskell.png" alt="haskell">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fw-semibold fs-15">2.5 Score</span>
                                            <span class="fs-15 text-gray-light">15 Days Left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <ul class="nav nav-tabs border-0 courses-tab" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-18 fw-semibold border-0 active" id="enrolled-tab"
                                        data-bs-toggle="tab" data-bs-target="#enrolled-tab-pane"
                                        type="button" role="tab" aria-controls="enrolled-tab-pane"
                                        aria-selected="true">Enrolled</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fs-18 fw-semibold border-0" id="created-tab"
                                        data-bs-toggle="tab" data-bs-target="#created-tab-pane" type="button"
                                        role="tab" aria-controls="created-tab-pane"
                                        aria-selected="false">Created</button>
                                </li>
                            </ul>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="enrolled-tab-pane" role="tabpanel"
                                aria-labelledby="enrolled-tab" tabindex="0">
                                <div class="default-table-area course-list">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-primary">Course</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-1.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Node.js For Beginners: Go From Zero To Hero With
                                                                    Node.js</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">87%</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">19/02/2024</span>
                                                        <span class="d-block fs-15">10:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">19/02/2024</span>
                                                        <span class="d-block fs-15">11:00 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-2.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Learn The Fundamentals Of Working With Angular
                                                                    And How To Create</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold">Failed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">18/02/2024</span>
                                                        <span class="d-block fs-15">04:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">18/02/2024</span>
                                                        <span class="d-block fs-15">05:00 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-3.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Build An Ios Application In Swift Learn The
                                                                    Fundamentals</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Passed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">17/02/2024</span>
                                                        <span class="d-block fs-15">05:00 PM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">17/02/2024</span>
                                                        <span class="d-block fs-15">06:00 PM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-4.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Programming Language Become A React Native
                                                                    Developer</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">95%</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">16/02/2024</span>
                                                        <span class="d-block fs-15">12:00 PM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">16/02/2024</span>
                                                        <span class="d-block fs-15">01:00 PM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-5.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    The Data Science Course 2024: Complete Data
                                                                    Science Bootcamp</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Passed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">15/02/2024</span>
                                                        <span class="d-block fs-15">03:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">15/02/2024</span>
                                                        <span class="d-block fs-15">04:00 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-8.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Python for Finance: Investment Fundamentals &
                                                                    Data Analytics</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Passed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">16/02/2024</span>
                                                        <span class="d-block fs-15">12:00 PM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">16/02/2024</span>
                                                        <span class="d-block fs-15">01:00 PM</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-sm-flex justify-content-between align-items-center text-center">
                                        <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link icon" href="project-management.html"
                                                        aria-label="Previous">
                                                        <i data-feather="arrow-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active"
                                                        href="project-management.html">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="project-management.html">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="project-management.html">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link icon" href="project-management.html"
                                                        aria-label="Next">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="created-tab-pane" role="tabpanel"
                                aria-labelledby="created-tab" tabindex="0">
                                <div class="default-table-area course-list">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-primary">Course</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-5.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    The Data Science Course 2024: Complete Data
                                                                    Science Bootcamp</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Passed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">19/02/2024</span>
                                                        <span class="d-block fs-15">10:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">19/02/2024</span>
                                                        <span class="d-block fs-15">11:00 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-6.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Java Programming Masterclass for Software
                                                                    Developers</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">32%</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">18/02/2024</span>
                                                        <span class="d-block fs-15">04:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">18/02/2024</span>
                                                        <span class="d-block fs-15">05:00 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-7.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Deep Learning A-Z™: Hands-On Artificial Neural
                                                                    Networks</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold">Failed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">17/02/2024</span>
                                                        <span class="d-block fs-15">05:00 PM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">17/02/2024</span>
                                                        <span class="d-block fs-15">06:00 PM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-8.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Python for Finance: Investment Fundamentals &
                                                                    Data Analytics</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Passed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">16/02/2024</span>
                                                        <span class="d-block fs-15">12:00 PM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">16/02/2024</span>
                                                        <span class="d-block fs-15">01:00 PM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-1.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Node.js for Beginners: Go From Zero to Hero with
                                                                    Node.js</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">87%</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">15/02/2024</span>
                                                        <span class="d-block fs-15">03:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">15/02/2024</span>
                                                        <span class="d-block fs-15">04:00 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html"
                                                            class="d-flex align-items-center mw-380">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/course-2.jpg"
                                                                    class="rounded-3 wh-75" alt="course">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h4 class="fw-semibold fs-16 mb-0 lh-base hover">
                                                                    Learn The Fundamentals Of Working With Angular
                                                                    And How To Create</h4>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold">Failed</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">18/02/2024</span>
                                                        <span class="d-block fs-15">04:00 AM</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block fs-15">18/02/2024</span>
                                                        <span class="d-block fs-15">05:00 AM</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-sm-flex justify-content-between align-items-center text-center">
                                        <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link icon" href="#"
                                                        aria-label="Previous">
                                                        <i data-feather="arrow-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active"
                                                        href="#">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="#">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link icon" href="#"
                                                        aria-label="Next">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-0">
                            <h4 class="fw-bold fs-18 mb-0">Experience IQ</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="experience_iq"></div>
                    </div>
                </div>
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-bold fs-18 mb-0">Active Course</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="active_course"></div>
                    </div>
                </div>
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-bold fs-18 mb-0">Course Completion</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12 col-sm-6">
                                <div class="bg-gray-div3 p-7 rounded-4 mb-15">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div id="course_completion1"></div>
                                            </div>
                                            <div class="flex-grow-1 ms-0">
                                                <h4 class="fs-16 fw-semibold text-dark body-font">Data with Python
                                                </h4>
                                                <span class="text-gray-light fw-semibold">5 Lessons</span>
                                            </div>
                                        </div>
                                        <a href="#" class="fs-20 text-decoration-none position-relative"
                                            style="top: 3px; right: -4px;">
                                            <i class="flaticon-chevron"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-sm-6">
                                <div class="bg-gray-div3 p-7 rounded-4 mb-15">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div id="course_completion2"></div>
                                            </div>
                                            <div class="flex-grow-1 ms-0">
                                                <h4 class="fs-16 fw-semibold text-dark body-font">Code Foundation
                                                </h4>
                                                <span class="text-gray-light fw-semibold">15 Lessons</span>
                                            </div>
                                        </div>
                                        <a href="#" class="fs-20 text-decoration-none position-relative"
                                            style="top: 3px; right: -4px;">
                                            <i class="flaticon-chevron"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-sm-6">
                                <div class="bg-gray-div3 p-7 rounded-4 mb-15">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div id="course_completion3"></div>
                                            </div>
                                            <div class="flex-grow-1 ms-0">
                                                <h4 class="fs-16 fw-semibold text-dark body-font">Styling With CSS
                                                </h4>
                                                <span class="text-gray-light fw-semibold">13 Lessons</span>
                                            </div>
                                        </div>
                                        <a href="#" class="fs-20 text-decoration-none position-relative"
                                            style="top: 3px; right: -4px;">
                                            <i class="flaticon-chevron"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-sm-6">
                                <div class="bg-gray-div3 p-7 rounded-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div id="course_completion4"></div>
                                            </div>
                                            <div class="flex-grow-1 ms-0">
                                                <h4 class="fs-16 fw-semibold text-dark body-font">Code Foundation
                                                </h4>
                                                <span class="text-gray-light fw-semibold">15 Lessons</span>
                                            </div>
                                        </div>
                                        <a href="#" class="fs-20 text-decoration-none position-relative"
                                            style="top: 3px; right: -4px;">
                                            <i class="flaticon-chevron"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-bold fs-18 mb-0">Messages</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="ps-0 mb-0 list-unstyled messages-list" data-simplebar>
                            <li class="border-color-gray border-bottom p-4" id="my-element1">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="assets/images/user-20.jpg"
                                                class="rounded-3 border border-color-gray2" alt="user">
                                            <div
                                                class="position-absolute p-1 bg-primary border border-2 border-white rounded-circle status-position">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fs-16 fw-semibold mb-0 text-dark">Johen Mandel</p>
                                            <p class="text-truncate d-inline-block">Hi, i want make enquiries
                                                about you work</p>
                                        </div>
                                    </div>
                                    <p class="mt-0">
                                        <span class="new">New</span>
                                        <span class="count">2</span>
                                        <span class="d-block text-gray-light mt-1">12:55 Am</span>
                                    </p>
                                </div>
                            </li>
                            <li class="border-color-gray border-bottom p-4 active" id="my-element2">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="assets/images/user-21.jpg"
                                                class="rounded-3 border border-color-gray2" alt="user">
                                            <div
                                                class="position-absolute p-1 bg-success border border-2 border-white rounded-circle status-position">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fs-16 fw-semibold mb-0 text-dark">Thomas Albart</p>
                                            <p class="text-truncate d-inline-block">Hi, i want make enquiries
                                                about you work</p>
                                        </div>
                                    </div>
                                    <p class="mt-0">
                                        <span class="new">New</span>
                                        <span class="count">3</span>
                                        <span class="d-block text-gray-light mt-1">Today</span>
                                    </p>
                                </div>
                            </li>
                            <li class="border-color-gray border-bottom p-4" id="my-element3">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="assets/images/user-22.jpg"
                                                class="rounded-3 border border-color-gray2" alt="user">
                                            <div
                                                class="position-absolute p-1 bg-warning border border-2 border-white rounded-circle status-position">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fs-16 fw-semibold mb-0 text-dark">Maical Doe</p>
                                            <p class="text-truncate d-inline-block">Hi, i want make enquiries
                                                about you Work</p>
                                        </div>
                                    </div>
                                    <p class="mt-0">
                                        <span class="new">New</span>
                                        <span class="count">1</span>
                                        <span class="d-block text-gray-light mt-1">Yesterday</span>
                                    </p>
                                </div>
                            </li>
                            <li class="p-4" id="my-element4">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="assets/images/user-23.jpg"
                                                class="rounded-3 border border-color-gray2" alt="user">
                                            <div
                                                class="position-absolute p-1 bg-danger border border-2 border-white rounded-circle status-position">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="fs-16 fw-semibold mb-0 text-dark">Staven Dew</p>
                                            <p class="text-truncate d-inline-block">Hi, i want make enquiries
                                                about you Work</p>
                                        </div>
                                    </div>
                                    <p class="mt-0">
                                        <span class="new">New</span>
                                        <span class="count">2</span>
                                        <span class="d-block text-gray-light mt-1">2 Days Ago</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-bold fs-18 mb-0">Top Students</h4>
                            <div class="dropdown action-opt">
                                <button class="btn bg-transparent p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="clock"></i>
                                            Today
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="pie-chart"></i>
                                            Last 7 Days
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="rotate-cw"></i>
                                            Last Month
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="calendar"></i>
                                            Last 1 Year
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="bar-chart"></i>
                                            All Time
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="eye"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <i data-feather="trash"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center gx-3">
                            <div class="col-lg-6 col-sm-6 col-md-4 col-xxxl-12">
                                <div class="rounded-3 border-0 bg-gray-div2 p-3 mb-15">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-14.jpg" class="rounded-circle wh-44"
                                                alt="user">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="mb-0 fw-semibold fs-16 text-dark">Andrew Burns</h4>
                                            <p class="text-gray-light">Programming</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-4 col-xxxl-12">
                                <div class="rounded-3 border-0 bg-gray-div2 p-3 mb-15">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-15.jpg" class="rounded-circle wh-44"
                                                alt="user">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="mb-0 fw-semibold fs-16 text-dark">Richard Payne</h4>
                                            <p class="text-gray-light">Chemistry</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-4 col-xxxl-12">
                                <div class="rounded-3 border-0 bg-gray-div2 p-3 mb-15">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-16.jpg" class="rounded-circle wh-44"
                                                alt="user">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="mb-0 fw-semibold fs-16 text-dark">Tammy Sanchez</h4>
                                            <p class="text-gray-light">Wordpress</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-4 col-xxxl-12">
                                <div class="rounded-3 border-0 bg-gray-div2 p-3 mb-15">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-17.jpg" class="rounded-circle wh-44"
                                                alt="user">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="mb-0 fw-semibold fs-16 text-dark">Jennifer Sum</h4>
                                            <p class="text-gray-light">UI/UX</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-4 col-xxxl-12">
                                <div class="rounded-3 border-0 bg-gray-div2 p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-18.jpg" class="rounded-circle wh-44"
                                                alt="user">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="mb-0 fw-semibold fs-16 text-dark">Dana Carey</h4>
                                            <p class="text-gray-light">Programming</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-4 col-xxxl-12 c-mt-15">
                                <div class="rounded-3 border-0 bg-gray-div2 p-3 mt-3 mt-md-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-19.jpg" class="rounded-circle wh-44"
                                                alt="user">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="mb-0 fw-semibold fs-16 text-dark">Jordan Enson</h4>
                                            <p class="text-gray-light">Physics</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   


@endsection