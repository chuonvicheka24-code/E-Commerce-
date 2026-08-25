@extends('layouts.admin')

@section('title', 'Products - FreshMart Admin')

@section('content')

<div class="page-heading">

    <div>

        <p class="breadcrumb">
            Dashboard / Products
        </p>

        <h1>Products</h1>

        <p>Manage your supermarket products.</p>

    </div>


    <button class="primary-btn"
            id="openProductModal">

        <i class="fa-solid fa-plus"></i>

        Add New Product

    </button>

</div>


<div class="mini-stats-grid">

    <div class="mini-stat">

        <div>

            <p>Total Products</p>

            <h3>256</h3>

        </div>

        <i class="fa-solid fa-box"></i>

    </div>


    <div class="mini-stat">

        <div>

            <p>In Stock</p>

            <h3>221</h3>

        </div>

        <i class="fa-solid fa-circle-check"></i>

    </div>


    <div class="mini-stat">

        <div>

            <p>Low Stock</p>

            <h3>24</h3>

        </div>

        <i class="fa-solid fa-triangle-exclamation"></i>

    </div>


    <div class="mini-stat">

        <div>

            <p>Out of Stock</p>

            <h3>11</h3>

        </div>

        <i class="fa-solid fa-circle-xmark"></i>

    </div>

</div>


<div class="dashboard-card">

    <div class="products-toolbar">

        <div class="table-search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="productSearch"
                placeholder="Search products...">

        </div>


        <select id="categoryFilter">

            <option value="all">All Categories</option>
            <option value="fruit">Fruit</option>
            <option value="vegetable">Vegetable</option>
            <option value="meat">Meat</option>
            <option value="drinks">Drinks</option>

        </select>

    </div>


    <div class="table-responsive">

        <table class="admin-table"
               id="productsTable">

            <thead>

                <tr>

                    <th>
                        <input type="checkbox"
                               id="selectAll">
                    </th>

                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

                <tr data-category="fruit">

                    <td><input type="checkbox"></td>

                    <td>

                        <div class="product-cell">

                            <div class="product-thumb">🍎</div>

                            <div>

                                <strong>Fresh Red Apples</strong>

                                <small>SKU: FR-001</small>

                            </div>

                        </div>

                    </td>

                    <td>Fruit</td>

                    <td>$2.50</td>

                    <td>120</td>

                    <td>

                        <span class="status-badge completed">
                            Active
                        </span>

                    </td>

                    <td>

                        <button class="table-action edit-product">

                            <i class="fa-solid fa-pen"></i>

                        </button>

                        <button class="table-action delete-product">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </td>

                </tr>


                <tr data-category="vegetable">

                    <td><input type="checkbox"></td>

                    <td>

                        <div class="product-cell">

                            <div class="product-thumb">🥦</div>

                            <div>

                                <strong>Fresh Broccoli</strong>

                                <small>SKU: VG-001</small>

                            </div>

                        </div>

                    </td>

                    <td>Vegetable</td>

                    <td>$3.20</td>

                    <td>75</td>

                    <td>

                        <span class="status-badge completed">
                            Active
                        </span>

                    </td>

                    <td>

                        <button class="table-action edit-product">

                            <i class="fa-solid fa-pen"></i>

                        </button>

                        <button class="table-action delete-product">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </td>

                </tr>


                <tr data-category="meat">

                    <td><input type="checkbox"></td>

                    <td>

                        <div class="product-cell">

                            <div class="product-thumb">🥩</div>

                            <div>

                                <strong>Premium Beef</strong>

                                <small>SKU: MT-001</small>

                            </div>

                        </div>

                    </td>

                    <td>Meat</td>

                    <td>$8.90</td>

                    <td>8</td>

                    <td>

                        <span class="status-badge pending">
                            Low Stock
                        </span>

                    </td>

                    <td>

                        <button class="table-action edit-product">

                            <i class="fa-solid fa-pen"></i>

                        </button>

                        <button class="table-action delete-product">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>


<!-- PRODUCT MODAL -->

<div class="modal-overlay"
     id="productModal">

    <div class="modal">

        <div class="modal-header">

            <h2>Add New Product</h2>

            <button class="close-modal"
                    id="closeProductModal">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>


        <div class="modal-body">

            <div class="form-row">

                <div class="form-group">

                    <label>Product Name</label>

                    <input
                        type="text"
                        placeholder="Product name">

                </div>


                <div class="form-group">

                    <label>Category</label>

                    <select>

                        <option>Fruit</option>
                        <option>Vegetable</option>
                        <option>Meat</option>
                        <option>Drinks</option>

                    </select>

                </div>

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label>Price</label>

                    <input
                        type="number"
                        placeholder="0.00">

                </div>


                <div class="form-group">

                    <label>Stock</label>

                    <input
                        type="number"
                        placeholder="0">

                </div>

            </div>

        </div>


        <div class="modal-footer">

            <button class="outline-btn"
                    id="cancelProduct">

                Cancel

            </button>

            <button class="primary-btn"
                    id="saveProduct">

                Save Product

            </button>

        </div>

    </div>

</div>

@endsection