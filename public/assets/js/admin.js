document.addEventListener("DOMContentLoaded", function () {

    // SIDEBAR

    const sidebarToggle =
        document.getElementById("sidebarToggle");

    const adminSidebar =
        document.getElementById("adminSidebar");


    if (sidebarToggle && adminSidebar) {

        sidebarToggle.addEventListener("click", function () {

            adminSidebar.classList.toggle("show");

        });

    }


    // PRODUCT MODAL

    const productModal =
        document.getElementById("productModal");

    const openProductModal =
        document.getElementById("openProductModal");

    const closeProductModal =
        document.getElementById("closeProductModal");

    const cancelProduct =
        document.getElementById("cancelProduct");

    const saveProduct =
        document.getElementById("saveProduct");


    if (openProductModal && productModal) {

        openProductModal.addEventListener("click", function () {

            productModal.classList.add("show");

        });

    }


    if (closeProductModal) {

        closeProductModal.addEventListener("click", function () {

            productModal.classList.remove("show");

        });

    }


    if (cancelProduct) {

        cancelProduct.addEventListener("click", function () {

            productModal.classList.remove("show");

        });

    }


    if (saveProduct) {

        saveProduct.addEventListener("click", function () {

            productModal.classList.remove("show");

            showNotification(
                "Product saved successfully!"
            );

        });

    }


    // PRODUCT SEARCH

    const productSearch =
        document.getElementById("productSearch");

    const productsTable =
        document.getElementById("productsTable");


    if (productSearch && productsTable) {

        productSearch.addEventListener("input", function () {

            const value =
                this.value.toLowerCase();

            const rows =
                productsTable.querySelectorAll("tbody tr");


            rows.forEach(function (row) {

                const text =
                    row.textContent.toLowerCase();

                row.style.display =
                    text.includes(value) ? "" : "none";

            });

        });

    }


    // PRODUCT FILTER

    const categoryFilter =
        document.getElementById("categoryFilter");


    if (categoryFilter && productsTable) {

        categoryFilter.addEventListener("change", function () {

            const category =
                this.value;

            const rows =
                productsTable.querySelectorAll("tbody tr");


            rows.forEach(function (row) {

                if (
                    category === "all" ||
                    row.dataset.category === category
                ) {

                    row.style.display = "";

                } else {

                    row.style.display = "none";

                }

            });

        });

    }


    // SELECT ALL

    const selectAll =
        document.getElementById("selectAll");


    if (selectAll && productsTable) {

        selectAll.addEventListener("change", function () {

            const checkboxes =
                productsTable.querySelectorAll(
                    "tbody input[type='checkbox']"
                );

            checkboxes.forEach(function (checkbox) {

                checkbox.checked = selectAll.checked;

            });

        });

    }


    // DELETE PRODUCT

    document.querySelectorAll(".delete-product")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                const row = this.closest("tr");

                const product =
                    row.querySelector(".product-cell strong")
                    .textContent;


                if (
                    confirm(
                        "Delete " + product + "?"
                    )
                ) {

                    row.remove();

                    showNotification(
                        product + " deleted successfully!"
                    );

                }

            });

        });


    // EDIT PRODUCT

    document.querySelectorAll(".edit-product")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                showNotification(
                    "Edit product feature selected!"
                );

            });

        });


    // ORDER SEARCH

    const orderSearch =
        document.getElementById("orderSearch");

    const ordersTable =
        document.getElementById("ordersTable");


    if (orderSearch && ordersTable) {

        orderSearch.addEventListener("input", function () {

            const value =
                this.value.toLowerCase();

            const rows =
                ordersTable.querySelectorAll("tbody tr");


            rows.forEach(function (row) {

                row.style.display =
                    row.textContent
                    .toLowerCase()
                    .includes(value)
                    ? ""
                    : "none";

            });

        });

    }


    // ORDER FILTER

    const orderStatusFilter =
        document.getElementById("orderStatusFilter");


    if (orderStatusFilter && ordersTable) {

        orderStatusFilter.addEventListener("change", function () {

            const status =
                this.value;

            const rows =
                ordersTable.querySelectorAll("tbody tr");


            rows.forEach(function (row) {

                if (
                    status === "all" ||
                    row.dataset.status === status
                ) {

                    row.style.display = "";

                } else {

                    row.style.display = "none";

                }

            });

        });

    }


    // VIEW ORDER

    document.querySelectorAll(".view-order")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                const row =
                    this.closest("tr");

                const orderId =
                    row.querySelector("td strong")
                    .textContent;

                showNotification(
                    "Opening " + orderId
                );

            });

        });


    // UPDATE STOCK

    document.querySelectorAll(".update-stock")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                const row =
                    this.closest("tr");

                const product =
                    row.querySelector(".product-cell strong")
                    .textContent;

                const newStock =
                    prompt(
                        "Enter new stock for " + product
                    );


                if (
                    newStock !== null &&
                    newStock !== "" &&
                    !isNaN(newStock)
                ) {

                    row.querySelectorAll("td")[2]
                        .textContent = newStock;

                    showNotification(
                        product +
                        " stock updated to " +
                        newStock
                    );

                }

            });

        });

});


// GLOBAL NOTIFICATION

function showNotification(message) {

    const notification =
        document.getElementById("adminNotification");

    const notificationText =
        document.getElementById("notificationText");


    if (!notification || !notificationText) {
        return;
    }


    notificationText.textContent = message;

    notification.classList.add("show");


    setTimeout(function () {

        notification.classList.remove("show");

    }, 3000);

}