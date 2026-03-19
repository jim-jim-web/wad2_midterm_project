# Schedule Management System

## Project Overview
This is a Laravel-based CRUD application designed to manage event schedules. It features a database seeded with 200 records and a full suite of management tools.

## Database Fields
The `schedules` table contains the following fields:
* **id**: Primary Key (Auto-incrementing)
* **event_title**: The name of the scheduled event (Unique)
* **description**: Detailed information about the event
* **schedule_date**: The date the event takes place
* **start_time**: The beginning time of the event
* **end_time**: The concluding time of the event
* **timestamps**: `created_at` and `updated_at`

## How to Run
1. Clone the repository.
2. Run `composer install`.
3. Configure your `.env` file.
4. Run `php artisan migrate --seed`.
5. Run `php artisan serve`.

## Application Screenshots

### 1. Dashboard (Read)
![Schedule List](./Screenshots/read.PNG)

### 2. Create New Schedule
![Create Form](./Screenshots/create.PNG)

### 3. Update Schedule
![Edit Form](./Screenshots/update.PNG)

### 4. Delete Function
![Delete Confirmation](./Screenshots/delete.PNG)
