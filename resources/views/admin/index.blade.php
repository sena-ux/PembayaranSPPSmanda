@extends('admin.partiall.index')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            {{--  <img src="https://source.unsplash.com/1200x400/?siswa" alt="" srcset="">  --}}
                            <div class="card-body"><i class="bi bi-people-fill"> </i> Siswa</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link"
                                    href="/Pembayaran%20SPP%20Smanda/public/admin smandapura pembayaran/seluruh siswa">View
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            {{--  <img src="https://source.unsplash.com/1200x400/?spp" alt="" srcset="">  --}}
                            <div class="card-body"><i class="bi bi-credit-card-2-front-fill"></i> Pembayaran</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link"
                                    href="/Pembayaran%20SPP%20Smanda/public/admin smandapura pembayaran/list pembayaran">View
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            {{--  <img src="https://source.unsplash.com/1200x400/?denda" alt="" srcset="">  --}}
                            <div class="card-body"><i class="bi bi-currency-dollar"></i> Tunggakan Siswa</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link"
                                    href="/Pembayaran%20SPP%20Smanda/public/admin smandapura pembayaran/tunggakan siswa">View
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
