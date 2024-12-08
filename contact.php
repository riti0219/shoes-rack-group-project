<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Shoe Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('plain.jpg'); /* Replace with your background image path */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin: 50px auto;
            width: 80%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .contact-info, .contact-form, .social-media {
            margin-bottom: 20px;
        }
        .contact-info h2, .contact-form h2, .social-media h2 {
            margin-top: 0;
        }
        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
        }
        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>

        <div class="contact-info">
            <h2>Our Contact Information</h2>
            <p>Email: <a href="#"></a></p>
            <p>Phone: <a href="#"></a></p>
            <p>Address: </p>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <?php
            if (isset($_GET['error'])) {
                echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
            } elseif (isset($_GET['success'])) {
                echo "<p style='color: green;'>" . htmlspecialchars($_GET['success']) . "</p>";
            }
            ?>
            <form id="contactForm" action="process_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="social-media">
            <h2>Connect with Us</h2>
            <div class="social-icons">
                <a href="https://www.facebook.com/YOUR_FACEBOOK_USERNAME" target="_blank" aria-label="Facebook">Facebook</a>
                <a href="https://www.instagram.com/YOUR_INSTAGRAM_USERNAME" target="_blank" aria-label="Instagram">Instagram</a>
                <a href="https://www.linkedin.com/company/YOUR_LINKEDIN_USERNAME" target="_blank" aria-label="LinkedIn">LinkedIn</a>
                <a href="https://www.twitter.com/YOUR_TWITTER_USERNAME" target="_blank" aria-label="Twitter">Twitter</a>
            </div>
        </div>
    </div>
</body>
</html>
