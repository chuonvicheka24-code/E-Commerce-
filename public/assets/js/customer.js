document.addEventListener("DOMContentLoaded", function () {

    // ==========================================
    // CATEGORY MENU
    // ==========================================

    const categoryButton = document.getElementById("category-button");
    const categoryMenu = document.getElementById("category-menu");

    if (categoryButton && categoryMenu) {

        categoryButton.addEventListener("click", function () {
            categoryMenu.classList.toggle("show");
        });

    }


    // ==========================================
    // CART
    // ==========================================

    let cart = JSON.parse(localStorage.getItem("freshmartCart")) || [];

    function updateCartCount() {

        const cartCount = document.getElementById("cart-count");

        if (!cartCount) return;

        let totalItems = 0;

        cart.forEach(function (item) {
            totalItems += item.quantity;
        });

        cartCount.textContent = totalItems;
    }


    function saveCart() {
        localStorage.setItem("freshmartCart", JSON.stringify(cart));
    }


    const addCartButtons =
        document.querySelectorAll(".add-cart");

    addCartButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            const product = this.dataset.product;
            const price = parseFloat(this.dataset.price);

            const existingProduct = cart.find(function (item) {
                return item.product === product;
            });


            if (existingProduct) {

                existingProduct.quantity++;

            } else {

                cart.push({
                    product: product,
                    price: price,
                    quantity: 1
                });

            }


            saveCart();

            updateCartCount();

            showToast(product + " added to cart!");

        });

    });


    updateCartCount();


    // ==========================================
    // SEARCH
    // ==========================================

    const searchInput =
        document.getElementById("search-input");

    if (searchInput) {

        searchInput.addEventListener("input", function () {

            const value = this.value.toLowerCase();

            const products =
                document.querySelectorAll(".product-card");

            products.forEach(function (product) {

                const name =
                    product.querySelector(".product-name")
                    ?.textContent
                    .toLowerCase() || "";

                if (name.includes(value)) {

                    product.style.display = "";

                } else {

                    product.style.display = "none";

                }

            });

        });

    }


    // ==========================================
    // PRODUCT CATEGORY FILTER
    // ==========================================

    const categoryFilters =
        document.querySelectorAll(".category-filter");

    categoryFilters.forEach(function (filter) {

        filter.addEventListener("change", function () {

            filterProducts();

        });

    });


    function filterProducts() {

        const selectedCategory =
            document.querySelector(".category-filter:checked");

        const maxPrice =
            document.getElementById("price-range");

        const products =
            document.querySelectorAll(".product-card");

        const resultCount =
            document.getElementById("product-result-count");


        const category = selectedCategory
            ? selectedCategory.value
            : "all";

        const price = maxPrice
            ? parseFloat(maxPrice.value)
            : 99999;

        let count = 0;


        products.forEach(function (product) {

            const productCategory =
                product.dataset.category;

            const productPrice =
                parseFloat(product.dataset.price || 0);


            const categoryMatch =
                category === "all" ||
                productCategory === category;

            const priceMatch =
                productPrice <= price;


            if (categoryMatch && priceMatch) {

                product.style.display = "";
                count++;

            } else {

                product.style.display = "none";

            }

        });


        if (resultCount) {
            resultCount.textContent = count;
        }

    }


    // ==========================================
    // PRICE RANGE
    // ==========================================

    const priceRange =
        document.getElementById("price-range");

    const priceValue =
        document.getElementById("price-value");

    if (priceRange) {

        priceRange.addEventListener("input", function () {

            if (priceValue) {
                priceValue.textContent = this.value;
            }

            filterProducts();

        });

    }


    // ==========================================
    // CART QUANTITY
    // ==========================================

    document.querySelectorAll(".quantity-plus")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                const row = this.closest("tr");

                const quantityElement =
                    row.querySelector(".quantity");

                let quantity =
                    parseInt(quantityElement.textContent);

                quantity++;

                quantityElement.textContent = quantity;

                updateCartRow(row);

            });

        });


    document.querySelectorAll(".quantity-minus")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                const row = this.closest("tr");

                const quantityElement =
                    row.querySelector(".quantity");

                let quantity =
                    parseInt(quantityElement.textContent);

                if (quantity > 1) {

                    quantity--;

                    quantityElement.textContent = quantity;

                    updateCartRow(row);

                }

            });

        });


    // ==========================================
    // REMOVE CART ITEM
    // ==========================================

    document.querySelectorAll(".remove-item")
        .forEach(function (button) {

            button.addEventListener("click", function () {

                const row = this.closest("tr");

                row.remove();

                updateCartSummary();

                showToast("Item removed from cart");

            });

        });


    // ==========================================
    // UPDATE CART ROW
    // ==========================================

    function updateCartRow(row) {

        const priceText =
            row.querySelectorAll("td")[1].textContent;

        const price =
            parseFloat(priceText.replace("$", ""));

        const quantity =
            parseInt(
                row.querySelector(".quantity").textContent
            );

        const total = price * quantity;

        row.querySelector(".cart-item-total")
            .textContent = "$" + total.toFixed(2);

        updateCartSummary();

    }


    // ==========================================
    // UPDATE CART SUMMARY
    // ==========================================

    function updateCartSummary() {

        const rows =
            document.querySelectorAll("#cart-body tr");

        let subtotal = 0;


        rows.forEach(function (row) {

            const total =
                row.querySelector(".cart-item-total");

            if (total) {

                subtotal += parseFloat(
                    total.textContent.replace("$", "")
                );

            }

        });


        const subtotalElement =
            document.getElementById("cart-subtotal");

        const totalElement =
            document.getElementById("cart-total");


        if (subtotalElement) {

            subtotalElement.textContent =
                "$" + subtotal.toFixed(2);

        }


        if (totalElement) {

            const delivery = subtotal > 0 ? 2 : 0;

            totalElement.textContent =
                "$" + (subtotal + delivery).toFixed(2);

        }

    }


    // ==========================================
    // CHECKOUT
    // ==========================================

    const checkoutForm =
        document.getElementById("checkout-form");

    if (checkoutForm) {

        checkoutForm.addEventListener("submit", function (event) {

            event.preventDefault();

            showToast("Order placed successfully!");

            setTimeout(function () {

                window.location.href = "/";

            }, 1500);

        });

    }


    // ==========================================
    // LOGIN
    // ==========================================

    const loginForm =
        document.getElementById("login-form");

    if (loginForm) {

        loginForm.addEventListener("submit", function (event) {

            event.preventDefault();

            showToast("Login successful!");

            setTimeout(function () {

                window.location.href = "/";

            }, 1200);

        });

    }


    // ==========================================
    // SHOW / HIDE PASSWORD
    // ==========================================

    const password =
        document.getElementById("password");

    const togglePassword =
        document.getElementById("toggle-password");

    if (password && togglePassword) {

        togglePassword.addEventListener("click", function () {

            if (password.type === "password") {

                password.type = "text";

                togglePassword.innerHTML =
                    '<i class="fa-solid fa-eye-slash"></i>';

            } else {

                password.type = "password";

                togglePassword.innerHTML =
                    '<i class="fa-regular fa-eye"></i>';

            }

        });

    }

});


// ==========================================
// TOAST NOTIFICATION
// ==========================================

function showToast(message) {

    let toast =
        document.getElementById("freshmart-toast");


    if (!toast) {

        toast = document.createElement("div");

        toast.id = "freshmart-toast";

        toast.className = "toast";

        document.body.appendChild(toast);

    }


    toast.textContent = message;

    toast.classList.add("show");


    setTimeout(function () {

        toast.classList.remove("show");

    }, 2500);

}