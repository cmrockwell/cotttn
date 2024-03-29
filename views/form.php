<p>Enter your information in the form below to send me a message!</p>
<?php if ($error != false) { ?>
    <div id="error"><?php echo $error; ?></div>
<?php } ?>
<form method="post" action="contact">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf']; ?>" />
    <label>Name: <input type="text"
                        placeholder="your name"
                        name="contact[name]"
                        value="<?php echo htmlentities($contact->name); ?>"
                         /></label>

    <label>Email: <input type="email"
                         placeholder="you@example.com"
                         name="contact[email]"
                         value="<?php echo htmlentities($contact->email); ?>"
                          /></label>

    <label for="contact_message">Message:</label>
    <textarea id="contact_message" name="contact[message]"><?php echo htmlentities($contact->message); ?></textarea>

    <input type="submit" value="Contact Me!" />
</form>
