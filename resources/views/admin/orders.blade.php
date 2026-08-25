@extends('layouts.admin')

@section('title', 'Orders - FreshMart Admin')

@section('content')

<div class="page-heading">

    <div>

        <p class="breadcrumb">
            Dashboard / Orders
        </p>

        <h1>Orders</h1>

        <p>
            Manage and track all customer orders.
        </p>

    </div>

</div>


<div class="dashboard-card">

    <div class="products-toolbar">

        <div class="table-search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="orderSearch"
                placeholder="Search order or customer...">

        </div>


        <select id="orderStatusFilter">

            <option value="all">All Status</option>
            <option value="pending">Pending</option>
            <option value="processing">Processing</option>
            <option value="completed">Completed</option>

        </select>

    </div>


    <div class="table-responsive">

        <table class="admin-table"
               id="ordersTable">

            <thead>

                <tr>

                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

                <tr data-status="completed">

                    <td><strong>#ORD-1001</strong></td>

                    <td>John Doe</td>

                    <td>24 Aug 2026</td>

                    <td>3</td>

                    <td>$24.50</td>

                    <td>Cash</td>

                    <td>

                        <span class="status-badge completed">
                            Completed
                        </span>

                    </td>

                    <td>

                        <button class="table-action view-order">

                            <i class="fa-solid fa-eye"></i>

                        </button>

                    </td>

                </tr>


                <tr data-status="processing">

                    <td><strong>#ORD-1002</strong></td>

                    <td>Sarah Miller</td>

                    <td>24 Aug 2026</td>

                    <td>5</td>

                    <td>$45.20</td>

                    <td>Card</td>

                    <td>

                        <span class="status-badge processing">
                            Processing
                        </span>

                    </td>

                    <td>

                        <button class="table-action view-order">

                            <i class="fa-solid fa-eye"></i>

                        </button>

                    </td>

                </tr>


                <tr data-status="pending">

                    <td><strong>#ORD-1003</strong></td>

                    <td>David Park</td>

                    <td>23 Aug 2026</td>

                    <td>2</td>

                    <td>$18.90</td>

                    <td>Cash</td>

                    <td>

                        <span class="status-badge pending">
                            Pending
                        </span>

                    </td>

                    <td>

                        <button class="table-action view-order">

                            <i class="fa-solid fa-eye"></i>

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection