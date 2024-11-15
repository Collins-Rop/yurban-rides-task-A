# Rides Portal
## Overview
The Rides Portal is a Laravel-based web application developed for managing rides, drivers, and customers efficiently. This platform allows administrators to monitor ride requests, drivers' activity, and customers' interactions, providing a centralized dashboard for tracking and managing ride-related operations. The app was built with an emphasis on an intuitive user interface, ease of use, and responsive design, making it suitable for administrative tasks and customer support.

## Features
- **Dashboard**: Overview of active rides, statistics on completed rides, and quick links to key sections.
- **Customer Management**: Interface for viewing, filtering, and managing registered customers.
- **Driver Management**: View and manage driver details, including contact information, status, and assignment history.
- **Ride Management**: Detailed information on ride requests, status tracking, and date sorting.

### Tech Stack
- **Backend**: Laravel (PHP)
- **Frontend**: Tailwind CSS, Blade templating engine
- **Database**: MySQL (configured to use Eloquent ORM)
- **Authentication**: Built-in Laravel authentication with role-based access control for admins, drivers, and customers

## Setup and Installation

### Prerequisites
- PHP >= 8.0
- Composer
- Node.js and npm
- MySQL

### Installation Steps

1. **Clone the Repository**
    ```bash
    git clone https://github.com/Collins-Rop/yurban-rides-task-A.git
    cd rides-portal
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install && npm run dev
    ```

3. **Configure Environment**
    - Duplicate the `.env.example` file and rename it to `.env`.
    - Set up your database connection details in the `.env` file:
      ```plaintext
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=rides_portal
      DB_USERNAME=root(or the username you use)
      DB_PASSWORD=password
      ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations and Seed the Database**
    ```bash
    php artisan migrate:fresh --seed
    ```

6. **Serve the Application**
    ```bash
    php artisan serve
    ```

7. **Access the Application**
    - Open your browser and go to `http://127.0.0.1:8000`.

## Usage

### Dashboard
The Dashboard provides an overview of active rides, total registered customers, and current active drivers. The visual interface allows quick access to the most important aspects of the platform.

![Dashboard Screenshot](/images/dashboard.png)

### Customers
In the Customers section, you can view a list of all registered customers, filter them based on registration date, and access their contact information.
![Customers Screenshot](/images/customers.png)

### Drivers
The Drivers section displays all registered drivers with their status, contact details, and other relevant information. This helps in tracking active drivers and managing their accounts.
![Drivers Screenshot](/images/drivers.png)

### Rides
The Rides section lists all ride requests in the system, displaying ride IDs, drivers assigned, customers, status, and request dates. You can sort rides to see the latest or earliest entries.
![Rides Screenshot](/images/rides.png)

### Database Seeding
The seeder has been configured to create sample data, including admin, driver, and customer users, along with sample rides. To login as an administrator, use:
- **Username**: Admin
- **Password**: password

Other user roles are created for drivers and customers.
Sample view of database through MySQL workbench:
![Database Screenshot](/images/MySQLworkbench.png)

## Testing and Development

### Running Tests
You can run the provided unit and feature tests by executing:
```bash
php artisan test
```

### Customizing Styling
The application uses Tailwind CSS for styling. To customize the styling:
- Modify classes directly in Blade views.
- Rebuild the CSS by running:
  ```bash
  npm run dev
  ```

## Troubleshooting

- **Issue**: Database errors on seed
  - **Solution**: Ensure that migrations were successful by checking if tables exist in your database, and verify your `.env` database credentials.
- **Issue**: Cannot login
  - **Solution**: Double-check seeder configurations for User creation and validate password settings.
