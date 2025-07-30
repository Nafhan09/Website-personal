<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg  bg-light rounded-3 border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='dashboardPelayan') ? 'active' : 'link-dark' ; ?>" aria-current="page" href="/RPL/pelayan/dashboardPelayan"><i
                                    class="bi bi-house"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='Order') ? 'active' : 'link-dark' ; ?>" href="/RPL/pelayan/Order"><i class="bi bi-cart-fill"></i>
                                Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='Status') ? 'active' : 'link-dark' ; ?>" href="/RPL/pelayan/Status"><i class="bi bi-card-checklist"></i>
                                Status Pesanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>