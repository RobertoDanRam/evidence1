# Halcón - Construction Material Distributor System
**Evidence 1 - Activity 7 Part 2 & homework 6**

## Project Overview
"Halcón" is a web application designed to automate the internal processes of a construction material distributor. The system allows customers to track their order status in real-time and provides a comprehensive administrative dashboard for the company's internal departments (Sales, Purchasing, Warehouse, and Route).

For this phase of the project, the backend database architecture was implemented using Laravel's migrations and Eloquent ORM, incorporating automated database population via Seeders and Factories using FakerPHP.

## Features
- **Customer Tracking:** Customers can view the real-time status of their orders using their Customer Number and Invoice Number.
- **Role-Based Access Control:** Pre-configured administrative roles to manage internal staff (Sales, Purchasing, Warehouse, Route).
- **Order Lifecycle Management:** Seamless transition of order statuses (Ordered ➡️ In Process ➡️ In Route ➡️ Delivered).
- **Photographic Evidence:** Route operators can upload photos of loaded and delivered materials, including exact timestamps and geolocation tracking.
- **Logical Deletion:** Safe deletion of orders (hidden from main views without losing database records) utilizing Laravel SoftDeletes.
- **Transactional Integrity:** Implementation of `OrderDetail` and `MaterialStock` entities to freeze historical prices and manage inventory dynamically.

## Tech Stack
- **Frontend:** Vue.js
- **Backend:** PHP (Laravel)
- **Database:** MySQL (via XAMPP)

## Entity-Relationship (ER) Diagram
<img width="5806" height="6790" alt="er diagrama" src="https://github.com/user-attachments/assets/c783c149-fce1-41b4-8531-6c7c320ac4e1" />

## Contributors
- Roberto Ramos
