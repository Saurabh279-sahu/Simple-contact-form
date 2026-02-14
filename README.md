📌 Contact Form Project<br>
A simple full-stack contact form built using HTML, CSS, JavaScript, and PHP.<br>
This project allows users to submit their name, email, and message, which is then saved to a text file on the server.<br>
🚀 Features<br>
Clean and responsive UI<br>
Form validation using HTML<br>
AJAX-based form submission (no page reload)<br>
PHP backend processing<br>
Data stored in form_data.txt
🛠 Technologies Used
HTML5
CSS3
JavaScript (Fetch API)
PHP
📂 Project Structure
Copy code

├── index.html       # Main contact form page
├── style.css        # Styling for the form
├── script.js        # AJAX form submission logic
├── save.php         # Backend processing file
├── form_data.txt    # Stores submitted form data
└── README.md        # Project documentation
⚙️ How It Works
User fills out the contact form.
JavaScript prevents page reload and sends form data using fetch().
save.php receives the data using POST method.
Data is appended to form_data.txt.
Success message is shown on the page.
💻 How To Run This Project
Option 1: Using XAMPP / Local Server
Install XAMPP.
Place project folder inside htdocs.
Start Apache server.
Open browser and visit:
Copy code

http://localhost/your-folder-name/
Option 2: Hosting Server
Upload all files to a PHP-supported hosting server.
⚠️ Important Note
This is a basic project for learning purposes.
For production use:
Use a database like MySQL instead of text files.
Add input sanitization.
Add proper security validation.
Protect backend files.
👨‍💻 Author
Saurabh Sahu
