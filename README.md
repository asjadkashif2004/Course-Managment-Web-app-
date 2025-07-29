
# 🎓 Course Management Web App

A simple and responsive Course Management System built with **Laravel**. It allows users to add, view, update, and delete course records stored in a **MySQL** database.

---

## 🚀 Features

- 📋 Add new courses with title, description, and price
- 📝 Edit existing courses
- ❌ Delete courses
- 📖 View detailed information about each course
- 🗂️ List all courses in a user-friendly interface
- 🔐 CSRF-protected form handling
- 🧠 Session and Database-based course management

---

## 🧰 Tech Stack

- **Laravel** 10+
- **Blade Templates**
- **Bootstrap 5** (for responsive UI)
- **MySQL** (or any SQL-compatible DB)
- Optional deployment using **Render** or **Heroku**

---

## 🛠️ Installation Instructions

### 📥 1. Clone the Repository

```bash
git clone https://github.com/YOUR-USERNAME/course-management-app.git
cd course-management-app
````

### ⚙️ 2. Install Dependencies

```bash
composer install
npm install && npm run dev
```

### 🔑 3. Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` and set up your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 🧾 4. Run Migrations

```bash
php artisan migrate
```

### 🔄 5. Serve the Application

```bash
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## 🌐 Deployment (Optional)

You can deploy this Laravel app on:

* [Render](https://render.com)
* [Heroku](https://heroku.com)
* [Laravel Forge](https://forge.laravel.com)
* Any shared VPS supporting PHP

---

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you'd like to change.

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 👨‍💻 Author

**M. Asjad Kashif**
Student at NUST | Full Stack Developer

```

---

### ✅ Next Step:

- Replace:
  - `YOUR-USERNAME` with your GitHub username
  - `your_db_name` and other placeholders with your actual values
  - Add screenshots if you like in a `screenshots/` folder
  - Add your license file (`LICENSE`)

Let me know if you'd like a version for **Render deployment** with database instructions too.
```
