<?php include_once('./head.php') ?> <!-- Include header/navigation -->
<?php include_once('./navbar.php')?>
    <section class="hero-section">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Have a question? We'd love to hear from you!</p>
        </div>
    </section>

    <div class="container1">
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="process_contact_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
    <hr class="hr2">

    <?php include_once('./footer.php') ?>