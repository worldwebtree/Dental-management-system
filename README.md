# Dental Management System (Huzaifa Dental Clinic)

A comprehensive web-based solution for managing dental clinic operations, built with **Laravel 11**, **Tailwind CSS**, and **Vite**. This system streamlines appointment scheduling, patient record management, and clinic administrative tasks.

> [!NOTE]
> This project was originally developed as a **Final Year Project (FYP)** for a Computer Science student by the **WorldWebTree** team in **2022**. It has since been maintained and updated to the latest technology standards, including **Laravel 11**.

## Key Features

### Frontend (Public)
- **Responsive Homepage**: Modern design showcasing clinic services.
- **Online Appointment Booking**: Patients can easily request appointments online.
- **Contact Form**: Direct communication channel for patient inquiries.

### Dashboard (Admin/Staff)
- **Overview Analytics**: Visual representation of clinic performance and upcoming appointments.
- **Appointment Management**:
  - View, create, and search appointments.
  - Update status (Completed, Cancelled).
  - Detailed appointment tracking.
- **Patient Management**:
  - Centralized database for patient records.
  - View and manage patient history.
- **Dentist & Staff Management**:
  - Manage dentist profiles and availability.
- **Communication Hub**:
  - Manage incoming contact messages from the frontend.
  - Integration with email services.
- **Transaction History**: Track clinic transactions and financial records.
- **Advanced Search**: Quickly find patients, appointments, or staff members.

## Tech Stack

- **Backend**: [Laravel 11](https://laravel.com/)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/), [Vite](https://vitejs.dev/)
- **Authentication**: [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze)
- **Database**: MySQL (Recommended)
- **Notifications**: [SweetAlert](https://realrashid.github.io/sweet-alert/)
- **Email**: Support for SMTP/Mailgun

## Installation

Follow these steps to set up the project locally:

### 1. Clone the Repository
```bash
git clone <repository-url>
cd Dental-management-system
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Frontend dependencies
npm install
```

### 3. Environment Configuration
Copy the `.env.example` to `.env` and configure your database settings:
```bash
cp .env.example .env
```
Update these lines in `.env`:
```env
DB_DATABASE=dental-clinic
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations & Seeders
```bash
php artisan migrate --seed
```

### 6. Build Assets
```bash
npm run dev
# or for production
npm run build
```

### 7. Start the Server
```bash
php artisan serve
```
Visit `http://localhost:8000` in your browser.

### Default Credentials
If you run the seeders, you can use these accounts:
- **Admin/Dentist**: `dentist@example.com` / `password`
- **Patient**: `patient@example.com` / `password`

## Project Structure

- `app/Http/Controllers/Dashboard`: Contains logic for administrative features.
- `app/Http/Controllers/FrontEnd`: Handles public-facing pages and appointment requests.
- `resources/views`: Blade templates styled with Tailwind CSS.
- `routes/web.php`: Defines the web routes for the application.

## About WorldWebTree

[WorldWebTree](https://worldwebtree.com) is a premier software and web development company based in Peshawar, Pakistan. We specialize in delivering high-performance, scalable solutions tailored to meet complex business challenges.

### Our Expertise:
- **Custom Software Development**: Architecting robust systems for diverse industries.
- **Mobile App Development**: Crafting intuitive iOS and Android applications.
- **UI/UX Design**: Prioritizing user experience through modern, aesthetic, and functional designs.
- **AI & Data Solutions**: Leveraging automation and analytics to drive business insights.
- **Enterprise Solutions (ERP/CRM)**: Building comprehensive management systems for streamlined operations.

If you are looking to add more features to this project or want to build a custom solution from scratch, please feel free to reach out to us or our lead developer.

**Contact Us:**
- **Company Website**: [worldwebtree.com](https://worldwebtree.com/contact)
- **Lead Developer Email**: [umar@worldwebtree.com](mailto:umar@worldwebtree.com)

## Security

If you discover any security-related issues, please use the contact form on the website or email our development team directly.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
