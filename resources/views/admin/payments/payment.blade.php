    @extends('admin.layouts.app')

    @section('content')
        <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
            <ul class="ms-auto ps-0 mb-0 list-unstyled d-flex justify-content-center">
                <li>
                    <a href="index.html" class="text-decoration-none">
                        <i class="ri-home-2-line" style="position: relative; top: -1px"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Table Payment</span>
                </li>
            </ul>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="mb-3 d-flex align-items-center justify-content-between  ">
                            <h4 class="fs-18 ">Tabel Payment</h4>
                            <a href="/payment/tambah" class="btn btn-success text-white ">Tambah Payment</a>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                aria-labelledby="preview-tab" tabindex="0">
                                <div class="default-table-area members-list">
                                    <div class="table-responsive">
                                        <table class="table align-middle text-center" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Nomer WhatsApp</th>
                                                    <th scope="col">Status Pembelian</th>
                                                    <th scope="col">Waktu Pemesanan</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dataPayments as $get)
                                                    <tr>
                                                        <td><span>{{ $loop->iteration }}</span></td>
                                                        <td>
                                                            <span>{{ $get->nama_pemesanan }}</span>
                                                        </td>
                                                        <td>
                                                            <span>{{ $get->nomer_pemesanan }}</span>
                                                        </td>

                                                        <td>
                                                            <span>
                                                                @if ($get->status_pemesanan == 'pending')
                                                                    <div class="btn btn-warning text-white"><< Pending</div>
                                                                @elseif ($get->status_pemesanan == 'success')
                                                                    <div class="btn btn-success text-white"> Success </div>
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span> {{ $get->created_at }} </span>
                                                        </td>
                                                      
                                                        <td>
                                                            <div class="dropdown action-opt">
                                                                <button class="btn bg p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i data-feather="more-horizontal"></i>
                                                                </button>
                                                                <ul
                                                                    class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <i data-feather="edit-3"></i>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <i data-feather="download"></i>
                                                                            Detail
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:;">
                                                                            <i data-feather="trash-2"></i>
                                                                            Hapus
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
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
            </div>
        </div>
    @endsection
