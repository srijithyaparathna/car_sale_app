<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>RNR Auto World | Administration</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/logo/logo.png') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/map.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css.map') ?>">


</head>

<body class="body counter-scroll">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle">
        </div>
    </div>
    <!-- /preload -->

    <!-- /#page -->
    <div id="wrapper">
        <div id="page" class="clearfix">
            <?php include 'components/dashboard-sidebar.php' ?>
            <div class="overlay-dashboard">
            </div>
            <div class="has-dashboard">
                <!-- Main Header -->
                <header id="header2" class="main-header">
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="themesflat-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flex justify-space align-center">
                                        <!-- Logo Box -->
                                        <div class="logo-box flex">
                                            <div class="logo">
                                                <a href="index.html"><img
                                                        src="<?= base_url('assets/images/logo/logo2.png') ?>"
                                                        alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->

                                            <!-- Main Menu End-->
                                        </div>
                                        <div class="header-account flex align-center">

                                        </div>
                                        <div class="mobile-nav-toggler mobile-button">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header Lower -->

                    <!-- Mobile Menu  -->
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                    <!-- End Mobile Menu -->

                </header>
                <!-- End Main Header -->

                <main id="main-content" class="site-main-dashboard">
                    <div class="page-dashboard-wrap">
                        <div class="dashboard">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="title-dashboard">Category Management</h4>
                                </div>
                                <div class="col-md-6 sellec-list-db">
                                    <div class="group-select">
                                        <button class="btn btn-primary" onclick="handleButtonClick()">
                                            Add Category
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal HTML -->
                            <div id="addCategoryModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <h4>Add Category</h4>
                                    <form action="<?= base_url('category/create') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <label for="categoryName">Category Name:</label>
                                        <input type="text" id="categoryName" name="categoryName" required>

                                        <label for="categoryImage">Category Image:</label>
                                        <input type="file" id="categoryImage" name="categoryImage" accept="image/* "
                                            required>

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div id="subCategoryModalfill" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeSubCategoryModalfill()">&times;</span>
                                    <h4>Add Subcategories</h4>
                                    <form action="<?= base_url('subcategory') ?>" method="post"
                                        enctype="multipart/form-data">

                                        <label for="subcategoryName"> Sub Category Name:</label>
                                        <input type="text" id="model_name" name="model_name" required>

                                        <input type="hidden" id="main_category_id" name="main_category_id">

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Edit Modal -->
                            <div id="editModal" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <span class="close" onclick="closeEditModal()">&times;</span>
                                    <h4>Edit Category</h4>
                                    <form action="<?= base_url('category/updateName') ?>" method="POST">
                                        <input type="hidden" id="catg_id" name="catg_id" />
                                        <label for="category_name">Category Name:</label>
                                        <input type="text" id="category_name" name="category_name" required />
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                            <!-- sub Cateory Edit Modal -->
                            <div id="editModal1" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <span class="close" onclick="closeEditModalsub()">&times;</span>
                                    <h4>Edit Sub-Category</h4>
                                    <form action="<?= base_url('category/updateNamesub') ?>" method="POST">
                                        <input type="hidden" id="subcatg_id" name="subcatg_id" />
                                        <label for="subcategory_name">Sub-Category Name:</label>
                                        <input type="text" id="subcategory_name" name="model_name" required />
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                            <script>
                                function handleButtonClick() {
                                    document.getElementById('addCategoryModal').style.display = 'block';
                                }
                                function closeModal() {
                                    document.getElementById('addCategoryModal').style.display = 'none';
                                }
                                function handleButtonClickSub(id) {
                                    var modalName = 'subCategoryModal' + id;
                                    console.log(modalName, 'modalName');
                                    var modalId = document.getElementById(modalName);
                                    console.log(modalId, 'modalId');
                                    // Open the modal
                                    modalId.style.display = 'block';

                                }
                                function closeSubCategoryModal(id) {
                                    var modalName = 'subCategoryModal' + id;
                                    var modal = document.getElementById(modalName);

                                    if (modal) {
                                        modal.style.display = 'none';
                                    } else {
                                        console.error('Modal with ID ' + modalName + ' not found.');
                                    }
                                }
                                function handleButtonClickSubfill(id) {
                                    var modal = document.getElementById('subCategoryModalfill');

                                    if (modal) {
                                        document.getElementById('main_category_id').value = id;
                                        modal.style.display = 'block';
                                    } else {
                                        console.error('Modal with ID subCategoryModalfill not found.');
                                    }
                                }
                                function closeSubCategoryModalfill() {
                                    document.getElementById('subCategoryModalfill').style.display = 'none';
                                }

                                window.onclick = function (event) {
                                    if (event.target == document.getElementById('subCategoryModal')) {
                                        closeSubCategoryModal();
                                    }
                                }
                                function confirmDelete(event, id) {
                                    event.preventDefault();

                                    const url = `/category/delete/${id}`;

                                    if (confirm('Are you sure you want to delete this category and all its subcategories?')) {
                                        fetch(url, {
                                            method: 'DELETE', // HTTP method for deletion
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-Requested-With': 'XMLHttpRequest'
                                            }
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message === 'Category and its subcategories deleted') {
                                                    alert('Deleted successfully.');
                                                    location.reload(); // Reload the page to reflect changes
                                                } else {
                                                    alert('Failed to delete category.');
                                                }
                                            })
                                            .catch(error => {
                                                alert('An error occurred.');
                                                console.error('Error:', error);
                                            });
                                    }
                                }
                                function openEditModal(id, category_name) {

                                    console.log(category_name, 'element');

                                    $('#catg_id').val(id);
                                    $('#category_name').val(category_name);
                                    $('#editModal').show();
                                }
                                function editCategoryForm() {
                                    const id = document.getElementById('edit_catg_id').value;
                                    const category_name = document.getElementById('edit_catg_name').value;

                                    $('#editCategoryForm').on('submit', function (event) {
                                        event.preventDefault();

                                        const data = {
                                            category_name: category_name
                                        };

                                        fetch(`/category/updateName/${id}`, {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                            },
                                            body: JSON.stringify(data),
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message) {
                                                    alert(data.message);
                                                    closeEditModal();
                                                } else if (data.errors) {

                                                    alert(JSON.stringify(data.errors));
                                                }
                                            })
                                            .catch((error) => {
                                                console.error('Error:', error);
                                            });
                                    });
                                }
                                function closeEditModal() {
                                    document.getElementById('editModal').style.display = 'none';
                                }
                                function openEditModal(id, category_name) {

                                    console.log(category_name, 'element');

                                    $('#catg_id').val(id);
                                    $('#category_name').val(category_name);
                                    $('#editModal').show();
                                }
                                function editCategoryForm() {
                                    const id = document.getElementById('edit_catg_id').value;
                                    const category_name = document.getElementById('edit_catg_name').value;

                                    $('#editCategoryForm').on('submit', function (event) {
                                        event.preventDefault();

                                        const data = {
                                            category_name: category_name
                                        };

                                        fetch(`/category/updateName/${id}`, {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                            },
                                            body: JSON.stringify(data),
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message) {
                                                    alert(data.message);
                                                    closeEditModal();
                                                } else if (data.errors) {

                                                    alert(JSON.stringify(data.errors));
                                                }
                                            })
                                            .catch((error) => {
                                                console.error('Error:', error);
                                            });
                                    });
                                }
                                function closeEditModal() {
                                    document.getElementById('editModal').style.display = 'none';
                                }
                                function openEditModalsub(element) {
                                    const id = $(element).data('id');
                                    const model_name = $(element).data('name');

                                    $('.modal').each(function () {
                                        if ($(this).is(':visible')) {
                                            $(this).hide(); // or use .fadeOut(), etc.
                                        }
                                    });

                                    closeSubCategoryModal(id);

                                    console.log('ID:', id);
                                    console.log('Model Name:', model_name);

                                    $('#subcatg_id').val(id);
                                    $('#subcategory_name').val(model_name);
                                    $('#editModal1').show();
                                }
                                function closeEditModalsub() {
                                    $('#editModal1').hide(); // Make sure this matches the modal ID in HTML
                                }

                                $(document).ready(function () {
                                    $('#editCategoryFormsub').on('submit', function (event) {
                                        event.preventDefault();

                                        const id = $('#subcatg_id').val();
                                        const model_name = $('#subcategory_name').val();

                                        const data = {
                                            model_name: model_name
                                        };

                                        fetch(`/category/updateNamesub/${id}`, {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                            },
                                            body: JSON.stringify(data),
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message) {
                                                    alert(data.message);
                                                    closeEditModalsub();
                                                } else if (data.errors) {
                                                    alert(JSON.stringify(data.errors));
                                                }
                                            })
                                            .catch(error => console.error('Error:', error));
                                    });
                                });
                            </script>
                            <style>
                                .btn {
                                    background-color: #2e445c;
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    border-radius: 12px;
                                    width: 180px;

                                }

                                .btn-primary:hover {
                                    background-color: #062240;
                                }

                                /* The Modal (background) */
                                .modal {
                                    display: none;
                                    position: fixed;
                                    z-index: 1;
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    height: 100%;
                                    overflow: auto;
                                    background-color: rgba(0, 0, 0, 0.4);
                                }

                                /* Modal Content/Box */
                                .modal-content {
                                    background-color: #fff;
                                    margin: 15% auto;
                                    padding: 20px;
                                    border: 1px solid #888;
                                    width: 80%;
                                    max-width: 400px;
                                    border-radius: 10px;
                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                                    animation: fadeIn 0.5s;
                                }

                                /* Close Button */
                                .close {
                                    color: #aaa;
                                    float: right;
                                    /* Align to the right */
                                    font-size: 28px;
                                    font-weight: bold;
                                    position: absolute;
                                    /* Position it absolutely within modal-content */
                                    top: 10px;
                                    /* Distance from the top */
                                    right: 15px;
                                    /* Distance from the right */
                                }

                                /* Fade-in animation */
                                @keyframes fadeIn {
                                    from {
                                        opacity: 0;
                                    }

                                    to {
                                        opacity: 1;
                                    }
                                }

                                /* The Close Button */
                                .close {
                                    color: #aaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: black;
                                    text-decoration: none;
                                    cursor: pointer;
                                }

                                .modal form {
                                    display: flex;
                                    flex-direction: column;
                                }

                                .modal form label {
                                    margin-bottom: 8px;
                                    font-size: 14px;
                                    color: #333;
                                }

                                .modal form input {
                                    margin-bottom: 15px;
                                    padding: 8px;
                                    font-size: 14px;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                    box-sizing: border-box;
                                }

                                .modal form .btn-primary {
                                    font-size: 14px;
                                    padding: 10px 20px;
                                    border: none;
                                    border-radius: 4px;
                                    background-color: #007bff;
                                    color: white;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                }

                                .modal form .btn-primary:hover {
                                    background-color: #0056b3;
                                }

                                /*dot*/
                                ul.features-images {
                                    list-style-type: none;
                                    padding-left: 0;
                                    margin: 0;
                                }

                                /* subbutton */
                                .action-button {
                                    background-color: #4db5c9;
                                    border: none;
                                    color: white;
                                    padding: 10px 20px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                    border-radius: 4px;
                                }

                                .action-button:hover {
                                    background-color: #0d4f5c;
                                }

                                .action-button1 {
                                    background-color: #8080FF;
                                    border: none;
                                    color: white;
                                    padding: 10px 20px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                    border-radius: 4px;
                                }

                                .action-button1:hover {
                                    background-color: #333380;
                                }

                                .btn-dlt {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 16px 16px;
                                    background-color: #2d2e45;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    text-align: center;
                                    text-decoration: none;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                    min-width: 10px;
                                    min-height: 10px;

                                }

                                .btn-dlt svg {
                                    vertical-align: middle;
                                    width: 15px;
                                    /* Adjust size of SVG icon */
                                    height: 15px;
                                    /* Adjust size of SVG icon */
                                }

                                .btn-dlt:hover {
                                    background-color: #c82333;
                                }

                                .btn-edit {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 16px 16px;
                                    background-color: #2d2e45;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    text-align: center;
                                    text-decoration: none;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                    min-width: 10px;
                                    min-height: 10px;

                                }

                                .btn-edit svg {
                                    vertical-align: middle;
                                    width: 15px;
                                    /* Adjust size of SVG icon */
                                    height: 15px;
                                    /* Adjust size of SVG icon */
                                }

                                .btn-edit:hover {
                                    background-color: #fAD02C;
                                }

                                .unique-table {
                                    width: 100%;
                                    border-collapse: collapse;
                                }

                                .unique-table th,
                                .unique-table td {
                                    padding: 8px 16px;
                                    text-align: left;
                                }

                                .unique-table th,
                                .unique-table td {
                                    padding-right: 20px;
                                }

                                .unique-table th:last-child,
                                .unique-table td:last-child {
                                    padding-right: 0;
                                }

                                .image-styles {
                                    height: 111px;
                                    text-align: center;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    width: 100%;
                                    object-fit: cover;

                                }

                                .images {
                                    justify-content: center;
                                    align-items: center;
                                    text-align: center;
                                    height: 111px;
                                }

                                .images img {
                                    height: auto;
                                    width: auto;
                                }
                            </style>
                            <div class="show-dashboard">
                                <span class="btn-show-dashboard">
                                    <i class="icon-th-list"></i>
                                    Show Dashboard
                                </span>
                            </div>
                            <?php foreach ($categories as $category): ?>
                                <div id="subCategoryModal<?php echo $category['id']; ?>" class="modal"
                                    style="display:none;">
                                    <div class="modal-content">
                                        <span class="close"
                                            onclick="closeSubCategoryModal('<?php echo $category['id']; ?>')">&times;</span>
                                        <h4><?php echo $category['category_name']; ?> - Subcategories</h4>
                                        <div id="subCategoryContent<?php echo $category['id']; ?>">
                                            <?php if (empty($category['sub_categories'])): ?>
                                                <p>No subcategories</p>
                                            <?php else: ?>
                                                <table class="unique-table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $rowNumber = 1;
                                                        foreach ($category['sub_categories'] as $sub_category):
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $rowNumber++; ?>
                                                                </td>

                                                                <td>
                                                                    <?= htmlspecialchars($sub_category['model_name']) ?>
                                                                </td>
                                                                <td>
                                                                    <a class="btn-edit" title="Edit"
                                                                        data-id="<?= htmlspecialchars($sub_category['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                                                        data-name="<?= htmlspecialchars($sub_category['model_name'], ENT_QUOTES, 'UTF-8'); ?>"
                                                                        onclick="openEditModalsub(this)">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                            <div class="table-listing-inventory">
                                <table class="listing-inventory">
                                    <tbody>
                                        <?php foreach ($categories as $category): ?>
                                            <tr>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <ul class="features-images">
                                                            <li>
                                                                <h5><?= htmlspecialchars($category['category_name']) ?>
                                                                </h5>
                                                                <?php if (isset($category['image_url'])): ?>
                                                                    <div class="listing-item active"
                                                                        title="<?= htmlspecialchars($category['category_name']) ?>">
                                                                        <div class="images">
                                                                            <img src="<?= $category['image_url']; ?>"
                                                                                class="swiper-image tfcl-light-gallery"
                                                                                alt="Category Image">
                                                                        </div>
                                                                    </div>
                                                                <?php else: ?>
                                                                    No images available.
                                                                <?php endif; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <!-- Button element -->
                                                        <button id="actionButton" class="action-button"
                                                            onclick="handleButtonClickSub(<?= $category['id']; ?>)">Sub
                                                            Category</button>
                                                    </div>
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <!-- Button element -->
                                                        <button id="actionButton1" class="action-button1"
                                                            onclick="handleButtonClickSubfill(<?= $category['id']; ?>)">Add
                                                            Sub
                                                            Category</button>
                                                    </div>
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <a class="btn-edit" title="Edit" data-id="CATEGORY_ID"
                                                            data-name="CATEGORY_NAME"
                                                            onclick="openEditModal(<?= $category['id']; ?>, '<?= $category['category_name']; ?>')">
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                    fill="white" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <a href="#" class="btn-dlt" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"
                                                            data-id="<?= $category['id'] ?>"
                                                            onclick="confirmDelete(event, <?= $category['id'] ?>)">
                                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                    fill="white" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- /#page -->

    <!-- Button Top -->
    <a id="scroll-top" class="button-go"></a>
    <!-- Button Top -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Register</div>
                    <div class="register-form">
                        <div class="respond-register-form">
                            <form method="post" class="comment-form form-submit" action="/" accept-charset="utf-8"
                                novalidate="novalidate">
                                <fieldset>
                                    <label>User name</label>
                                    <input type="text" class="tb-my-input" name="text" placeholder="User name">
                                </fieldset>
                                <fieldset>
                                    <label>Email</label>
                                    <input type="email" class="tb-my-input" name="email" placeholder="Email">
                                </fieldset>
                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input"
                                        placeholder="Your password">
                                </fieldset>
                                <fieldset>
                                    <label>Confirm password</label>
                                    <input type="password" class="input-form password-input"
                                        placeholder="Confirm password">
                                </fieldset>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Sign Up</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30">Allready have an account? <a class="color-popup "
                            data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Login</a></div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Login</div>
                    <div class="register-form">
                        <div class="respond-register-form">
                            <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                <fieldset>
                                    <label>Account</label>
                                    <input type="email" id="email" class="tb-my-input" name="email"
                                        placeholder="Email or user name">
                                </fieldset>
                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input"
                                        placeholder="Your password">
                                </fieldset>
                                <div class="title-forgot t-al-right mb-20"><a class="t-al-right"
                                        data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">Forgot password</a>
                                </div>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Login</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30">Don’t you have an account? <a class="color-popup"
                            data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Register</a></div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Forgot your password?</div>
                    <div class="register-form">
                        <div class="respond-register-form">
                            <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">

                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input"
                                        placeholder="Your password">
                                </fieldset>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Get new password</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30"><a class="color-popup" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to Login</a></div>
                </div>

            </div>
        </div>
    </div><!-- Modal -->


    <!-- Javascript -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-countTo.js') ?>"></script>
    <script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/price-ranger.js') ?>"></script>
    <script src="<?= base_url('assets/js/magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/apexcharts.js') ?>"></script>
    <script src="<?= base_url('assets/js/line-chart.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>