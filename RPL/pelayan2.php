<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Order
        </div>
        <div class="card-body">
            <!-- Button Tambah order, menu -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-order me-md-2" type="button" data-bs-toggle="modal"
                    data-bs-target="#tambahMenu">Tambah Menu</button>
                <button class="btn btn-order" type="button" data-bs-toggle="modal" data-bs-target="#tambahOrder">Tambah
                    Order</button>
            </div>
            <!-- End -->

            <!-- Modal Untuk Menambahkan Menu Baru -->
            <div class="modal fade" id="tambahMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Menu</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="d-flex me-2">
                                    <div class="form-floating mb-3 me-2 col-lg-6">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Menu">
                                        <label for="floatingInput">Nama Menu</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-6">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Harga">
                                        <label for="floatingInput">Harga</label>
                                    </div>
                                </div>
                                <div class="d-flex me-2">
                                    <div class="form-floating mb-3 me-2 col-lg-6">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Kategori">
                                        <label for="floatingInput">Tambah Kategori Jika Ada</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-6">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected hidden value="">Kategori</option>
                                            <option value="1">Makanan</option>
                                            <option value="2">Minuman</option>
                                        </select>
                                        <label for="floatingInput">Pilih Kategori</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            <button type="button" class="btn btn-order">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

            <!-- Modal Tambah Order -->
            <div class="modal fade" id="tambahOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="d-flex me-3">
                                    <div class="form-floating mb-3 me-2 col-lg-6">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Menu">
                                        <label for="floatingInput">Kode Order</label>
                                    </div>
                                    <div class="form-floating mb-3 me-2 col-lg-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected hidden value="">No Meja</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <label for="floatingInput">Pilih Meja</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected hidden value="">Kategori</option>
                                            <option value="1">Makanan</option>
                                            <option value="2">Minuman</option>
                                        </select>
                                        <label for="floatingInput">Pilih Kategori</label>
                                    </div>
                                </div>
                                <div class="d-flex me-2">
                                    <div class="form-floating mb-3 me-2 col-lg-6">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected hidden value="">Menu</option>
                                            <option value="1">Nasi Ayam Serundeng</option>
                                            <option value="2">Chicken Katsu</option>
                                            <option value="3">Green Tea</option>
                                        </select>
                                        <label for="floatingInput">Pilih Menu</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-6">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Harga">
                                        <label for="floatingInput">Jumlah Porsi</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-body">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            <button type="button" class="btn btn-danger">Hapus Pesanan</button>
                            <button type="button" class="btn btn-order">Tambah Pesanan</button>
                            <button type="button" class="btn btn-order">Buat Pesanan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

            <br>
            <!-- Tabel Menu -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">No</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col" class="text-center">Edit Menu</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Nasi Ayam Serundeng</td>
                            <td>Makanan</td>
                            <td>15.000</td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#editMenu">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" type="button">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                                <div class="modal fade" id="editMenu" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Menu</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="d-flex me-2">
                                                        <div class="form-floating mb-3 me-2 col-lg-6">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="Menu">
                                                            <label for="floatingInput">Nama Menu</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-lg-6">
                                                            <input type="number" class="form-control" id="floatingInput"
                                                                placeholder="Harga">
                                                            <label for="floatingInput">Harga</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex me-2">
                                                        <div class="form-floating mb-3 me-2 col-lg-6">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="Kategori">
                                                            <label for="floatingInput">Tambah Kategori Jika Ada</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-lg-6">
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected hidden value="">Kategori</option>
                                                                <option value="1">Makanan</option>
                                                                <option value="2">Minuman</option>
                                                            </select>
                                                            <label for="floatingInput">Pilih Kategori</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Keluar</button>
                                                <button type="button" class="btn btn-order">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Chicken Katsu</td>
                            <td>Makanan</td>
                            <td>15.000</td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-warning btn-sm" type="button"><i
                                            class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm" type="button"><i
                                            class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Green Tea</td>
                            <td>Minuman</td>
                            <td>13.000</td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-warning btn-sm" type="button"><i
                                            class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm" type="button"><i
                                            class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Tabel -->
        </div>
    </div>
</div>