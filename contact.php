<?php include 'header.php'; ?>
<main>
    <section id="contact-form">
        <h2>Contact Us</h2>
        <form action="handle_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>
    <section id="company-info">
        <h2>Company Information</h2>
        <p>Email: mpriyanka200305@gmail.com</p>
        <p>Phone:8088771947</p>
        
    </section>
    <section id="social-media">
        <h2>Follow Us</h2>
        <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
        <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn"></a>
    </section>
</main>
