<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Transaction
        </div>
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="searchInput" class="col-form-label">Search :</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="searchInput" class="form-control" placeholder="Ketik untuk mencari...">
                </div>
            </div>
            <br>
            <div class="table-responsive">                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Meja</th>
                            <th scope="col">Tanggal Order</th>
                            <th scope="col">Kode Order</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>3</td>
                            <td>2025-07-28</td>
                            <td>OR0001</td>
                            <td>28.000</td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#bayar">Bayar</button>
                                </div>
                                <div class="modal fade" id="bayar" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Transaksi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <th scope="col">Kode Order</th>
                                                            <th scope="col">No Meja</th>
                                                            <th scope="col">Nama Menu</th>
                                                            <th scope="col">Kategori</th>
                                                            <th scope="col">Jumlah</th>
                                                            <th scope="col">Total Harga</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>OR0001</td>
                                                                <td>2</td>
                                                                <td>Nasi Ayam Serundeng</td>
                                                                <td>Makanan</td>
                                                                <td>2</td>
                                                                <td>30.000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>                                                
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex me-3">
                                                    <div class="form-floating mb-3 me-2 col-lg-6">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Harga">
                                                        <label for="floatingInput">Sub Total</label>
                                                    </div>
                                                    <div class="form-floating mb-3 me-2 col-lg-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Harga">
                                                        <label for="floatingInput">Jumlah Uang</label>
                                                    </div>
                                                    <div class="form-floating mb-3 col-lg-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Harga">
                                                        <label for="floatingInput">Uang Kembalian</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Keluar</button>
                                                <button type="button" class="btn btn-success">Bayar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>3</td>
                            <td>2025-07-28</td>
                            <td>OR0002</td>
                            <td>15.000</td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-success btn-sm" type="button">Bayar</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>2</td>
                            <td>2025-07-28</td>
                            <td>OR0003</td>
                            <td>13.000</td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-success btn-sm" type="button">Bayar</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>