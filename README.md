# Human Organ Transplant (HOT)

This project is a **Human Organ Transplant Management System** developed using **Laravel, HTML, CSS, JavaScript, and MySQL**. The system is designed to streamline and support the **organ transplantation process** by managing relevant data and providing necessary details about hospitals and doctors involved in the process.

## 🧠 Project Overview

The Human Organ Transplant (HOT) system provides a centralized platform for managing key aspects of organ donation and transplantation. It offers interfaces and panels for **Admins**, **Hospitals**, and **Doctors** to effectively manage records and collaborate efficiently.

### ✨ Key Features

- 🏥 **Hospital Module**: 
  - Register and manage hospital profiles
  - List available organs and donors
  - Coordinate with doctors and update transplantation status

- 👨‍⚕️ **Doctor Module**:
  - Manage personal profiles and availability
  - Access organ and patient data
  - Communicate with hospitals and oversee transplant procedures

- 🔒 **Admin Panel**:
  - Manage hospital and doctor registrations
  - Approve or reject new entries
  - Maintain system-wide data integrity

- 📊 **Dashboard and Layouts**:
  - Clean, responsive UI for all modules
  - Visual data management for easy operations

## ⚙️ Tech Stack

- **Backend**: Laravel (PHP Framework)
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL
- **Tools**: PHPMyAdmin, Laravel Blade Templates

## 📂 Project Structure (Simplified)

/HOT ├── app/ # Laravel core files ├── public/ # Public assets (CSS, JS, Images) ├── resources/ │ └── views/ # Blade templates for different panels ├── routes/ │ └── web.php # Routes configuration ├── database/ # Migrations and seeders ├── .env # Environment configuration

## 🚀 How to Run

1. Clone the repository: git clone https://github.com/Patel4182/HOT.git
2. Navigate to the project directory: cd HOT
3. Install dependencies: composer install and npm intall
4. Set up your .env file and database connection.
5. Run migrations : php artisan migrate
6. Serve the application : php artisan serve
7. Visit http://localhost:8000 in your browser.

📌 Future Improvements

Add real-time notifications and messaging
Implement role-based authentication using Laravel policies
Improve UI with modern frameworks like Tailwind CSS or Vue.js
Integrate REST APIs for third-party hospital data

 📃 License
This project is open-source and available under the MIT License.
