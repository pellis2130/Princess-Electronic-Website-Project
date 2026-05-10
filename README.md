# Princess Electronic Store

## Project Overview

This project is a PHP and MySQL web application for an electronic store. The application allows users to view products, add products to a cart, update cart quantities, remove products, and complete checkout by clearing the cart. The project was developed using the MVC architecture, which separates the model, view, and controller files to keep the code organized.

Throughout the project, I created the database, connected the application to MySQL, added product and cart functionality, reorganized the project into MVC format, improved the layout, and completed final testing. The final version of the application runs locally using XAMPP and demonstrates database support, CRUD-style cart operations, and organized PHP application structure.

---

## Features

* View product catalog from database
* Add items to cart
* Increase or decrease item quantity
* Remove items from cart
* Shopping cart page with total calculation

---

## Technologies Used

* PHP
* MySQL (XAMPP)
* HTML

---

## How to Run the Project

1. Start Apache and MySQL in XAMPP
2. Open phpMyAdmin and ensure the database is created:

   * Database name: `sdc310_ellis`
3. Import or create the required tables (`products`)
4. Place the project folder in:

   ```
   C:\xampp\htdocs
   ```
5. Open in browser:

   ```
   http://localhost/Ellis_Project/catalog.php
   ```

---

## Database Details

The project uses a MySQL database with a `products` table containing:

* ProductId
* ProductName
* ProductDescription
* ProductCost
* QuantityInCart

---

## Author

Princess Ellis

---

## Submission Notes

This project includes database support and cart functionality as required for Week 3.
The repository includes a tag labeled **Phase #2** to mark this submission.
