# Ci-4-LOGIN-Example
A CodeIgniter 4 app starter project with login and register.
Run 'composer create-project codeigniter4/appstarter project-root' in your www folder
changing project-root to you apps name. Use my UserModel.php, Routes.php, Views and Controllers in my files.
Replace Filters.php in App/Config with mine. The forms use  <?= csrf_field() ?> for security.
Controller list: Dashboard.php   Home.php   Login.php  Register.php
Create a database, or add the users table and edit App/Config/app.php for baseURL
Edit App/Config/Database.php with your db credentials. Also I added my db SQL and just
the users SQL.
Register, login and land on the dashboard view.
