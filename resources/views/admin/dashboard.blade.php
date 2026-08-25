@extends('layouts.admin')

@section('title', 'Dashboard - FreshMart Admin')

@section('content')

<div class="page-heading">

    <div>

        <p class="breadcrumb">
            Dashboard / Overview
        </p>

        <h1>Dashboard Overview</h1>

        <p>
            Welcome back! Here's what's happening
            with your store today.
        </p>

    </div>


    <button class="primary-btn"
            onclick="showNotification('New product page selected!')">

        <i class="fa-solid fa-plus"></i>

        Add New Product

    </button>

</div>


<div class="stats-grid">

    <div class="stat-card">

        <div class="stat-icon sales">
            <i class="fa-solid fa-dollar-sign"></i>
        </div>

        <div class="stat-info">

            <p>Total Sales</p>

            <h2>$12,580</h2>

            <span class="positive">
                ↑ 12.5% from last month
            </span>

        </div>

    </div>


    <div class="stat-card">

        <div class="stat-icon orders">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <div class="stat-info">

            <p>Total Orders</p>

            <h2>1,245</h2>

            <span class="positive">
                ↑ 8.2% from last month
            </span>

        </div>

    </div>


    <div class="stat-card">

        <div class="stat-icon products">
            <i class="fa-solid fa-box"></i>
        </div>

        <div class="stat-info">

            <p>Total Products</p>

            <h2>256</h2>

            <span class="positive">
                ↑ 4 new products
            </span>

        </div>

    </div>


    <div class="stat-card">

        <div class="stat-icon customers">
            <i class="fa-solid fa-users"></i>
        </div>

        <div class="stat-info">

            <p>Total Customers</p>

            <h2>3,542</h2>

            <span class="positive">
                ↑ 15.3% this month
            </span>

        </div>

    </div>

</div>


<div class="dashboard-grid">

    <div class="dashboard-card">

        <div class="card-header">

            <div>

                <h2>Revenue Overview</h2>

                <p>Monthly sales performance</p>

            </div>

            <select>

                <option>This Year</option>

                <option>This Month</option>

            </select>

        </div>


        <div class="simple-chart">

            <div class="chart-y-axis">

                <span>$15k</span>
                <span>$10k</span>
                <span>$5k</span>
                <span>$0</span>

            </div>


            <div class="chart-bars">

                <div class="bar-item">
                    <div class="bar" style="height:45%"></div>
                    <span>Jan</span>
                </div>

                <div class="bar-item">
                    <div class="bar" style="height:65%"></div>
                    <span>Feb</span>
                </div>

                <div class="bar-item">
                    <div class="bar" style="height:55%"></div>
                    <span>Mar</span>
                </div>

                <div class="bar-item">
                    <div class="bar" style="height:80%"></div>
                    <span>Apr</span>
                </div>

                <div class="bar-item">
                    <div class="bar" style="height:70%"></div>
                    <span>May</span>
                </div>

                <div class="bar-item">
                    <div class="bar" style="height:95%"></div>
                    <span>Jun</span>
                </div>

            </div>

        </div>

    </div>


    <div class="dashboard-card">

        <div class="card-header">

            <div>

                <h2>Order Status</h2>

                <p>Current order summary</p>

            </div>

        </div>


        <div class="order-status-list">

            <div class="status-item">

                <div class="status-color pending"></div>

                <span>Pending</span>

                <strong>24</strong>

            </div>


            <div class="status-item">

                <div class="status-color processing"></div>

                <span>Processing</span>

                <strong>18</strong>

            </div>


            <div class="status-item">

                <div class="status-color shipped"></div>

                <span>Shipped</span>

                <strong>32</strong>

            </div>


            <div class="status-item">

                <div class="status-color completed"></div>

                <span>Completed</span>

                <strong>156</strong>

            </div>

        </div>

    </div>

</div>


<div class="dashboard-card">

    <div class="card-header">

        <div>

            <h2>Recent Orders</h2>

            <p>Latest customer orders</p>

        </div>

        <a href="{{ route('admin.orders') }}"
           class="view-all-link">

            View All

        </a>

    </div>


    <div class="table-responsive">

        <table class="admin-table">

            <thead>

                <tr>

                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Products</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

                <tr>

                    <td><strong>#ORD-1001</strong></td>

                    <td>

                        <div class="customer-cell">

                            <div class="small-avatar">JD</div>

                            John Doe

                        </div>

                    </td>

                    <td>3 Items</td>

                    <td>$24.50</td>

                    <td>

                        <span class="status-badge completed">
                            Completed
                        </span>

                    </td>

                    <td>

                        <button class="table-action">

                            <i class="fa-solid fa-eye"></i>

                        </button>

                    </td>

                </tr>


                <tr>

                    <td><strong>#ORD-1002</strong></td>

                    <td>

                        <div class="customer-cell">

                            <div class="small-avatar">SM</div>

                            Sarah Miller

                        </div>

                    </td>

                    <td>5 Items</td>

                    <td>$45.20</td>

                    <td>

                        <span class="status-badge processing">
                            Processing
                        </span>

                    </td>

                    <td>

                        <button class="table-action">

                            <i class="fa-solid fa-eye"></i>

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection