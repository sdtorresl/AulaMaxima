<?php
$contactsCounter = $this->cell('ContactsCounter');
// $productsCounter = $this->cell('ProductsCounter');
// $categoriesCounter = $this->cell('CategoriesCounter');
// $customersCounter = $this->cell('CustomersCounter');
?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Dashboard</h2>
    </div>
</header>

<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <?= $contactsCounter ?>

            <!-- Item -->
            <!-- <?= $productsCounter ?> -->

            <!-- Item -->
            <!-- <?= $categoriesCounter ?> -->
            
            <!-- Item -->
            <!-- <?= $customersCounter ?> -->
        </div>
    </div>
</section>

<!-- Updates Section -->
<section class="updates">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <iframe src="https://www.aulamaxima.org" frameborder="0" height="700px">
                        <p><? __('Your browser does not support iframes.') ?></p>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
