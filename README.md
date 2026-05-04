# Princess Electronic Store

## Project Overview

This project is a web-based application developed using PHP and MySQL. It allows users to view products, add them to a shopping cart, and manage item quantities. The application demonstrates database connectivity and dynamic content generation.

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
