@extends('layouts.admin')

@section('title', 'Inventory - FreshMart Admin')

@section('content')

<div class="page-heading">

    <div>

        <p class="breadcrumb">
            Dashboard / Inventory
        </p>

        <h1>Inventory Management</h1>

        <p>
            Monitor and manage product stock levels.
        </p>

    </div>

</div>


<div class="inventory-alert">

    <div class="alert-icon">

        <i class="fa-solid fa-triangle-exclamation"></i>

    </div>


    <div>

        <h3>Low Stock Alert</h3>

        <p>
            24 products have stock below
            the minimum quantity.
        </p>

    </div>

</div>


<div class="inventory-grid">

    <div class="inventory-card">

        <i class="fa-solid fa-boxes-stacked"></i>

        <h2>256</h2>

        <p>Total Products</p>

    </div>


    <div class="inventory-card">

        <i class="fa-solid fa-circle-check"></i>

        <h2>221</h2>

        <p>Healthy Stock</p>

    </div>


    <div class="inventory-card">

        <i class="fa-solid fa-triangle-exclamation"></i>

        <h2>24</h2>

        <p>Low Stock</p>

    </div>


    <div class="inventory-card">

        <i class="fa-solid fa-circle-xmark"></i>

        <h2>11</h2>

        <p>Out of Stock</p>

    </div>

</div>


<div class="dashboard-card">

    <div class="card-header">

        <div>

            <h2>Stock Inventory</h2>

            <p>
                Current stock levels for all products.
            </p>

        </div>

    </div>


    <div class="table-responsive">

        <table class="admin-table">

            <thead>

                <tr>

                    <th>Product</th>
                    <th>SKU</th>
                    <th>Current Stock</th>
                    <th>Minimum Stock</th>
                    <th>Stock Level</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

                <tr>

                    <td>

                        <div class="product-cell">

                            <div class="product-thumb">🍎</div>

                            <strong>Fresh Red Apples</strong>

                        </div>

                    </td>

                    <td>FR-001</td>

                    <td>120</td>

                    <td>20</td>

                    <td>

                        <div class="stock-progress">

                            <div class="stock-bar high"
                                 style="width:90%"></div>

                        </div>

                        Healthy

                    </td>

                    <td>

                        <button class="table-action update-stock">

                            <i class="fa-solid fa-pen"></i>

                        </button>

                    </td>

                </tr>


                <tr>

                    <td>

                        <div class="product-cell">

                            <div class="product-thumb">🥩</div>

                            <strong>Premium Beef</strong>

                        </div>

                    </td>

                    <td>MT-001</td>

                    <td>8</td>

                    <td>20</td>

                    <td>

                        <div class="stock-progress">

                            <div class="stock-bar low"
                                 style="width:35%"></div>

                        </div>

                        Low Stock

                    </td>

                    <td>

                        <button class="table-action update-stock">

                            <i class="fa-solid fa-pen"></i>

                        </button>

                    </td>

                </tr>


                <tr>

                    <td>

                        <div class="product-cell">

                            <div class="product-thumb">🥤</div>

                            <strong>Orange Juice</strong>

                        </div>

                    </td>

                    <td>DR-001</td>

                    <td>0</td>

                    <td>15</td>

                    <td>

                        <div class="stock-progress">

                            <div class="stock-bar out"
                                 style="width:5%"></div>

                        </div>

                        Out of Stock

                    </td>

                    <td>

                        <button class="table-action update-stock">

                            <i class="fa-solid fa-pen"></i>

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection