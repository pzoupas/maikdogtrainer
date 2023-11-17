<section class="contact">
    <div class="container">
        <div class="contact-form bg-black">
            <h2>Επικοινωνήστε μαζί μας</h2>
            <form id="contact_form" method="POST">
                <label for="name">Ονοματεπώνυμο:</label><br>
                <input type="text" id="name" name="name" placeholder="Ονοματεπώνυμο" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Email" required><br>
                <label for="subject">Θέμα:</label><br>
                <input type="text" id="subject" name="subject" placeholder="Θέμα:" required><br>
                <label for="message">Μήνυμα:</label><br>
                <textarea id="message" name="message" rows="6" placeholder="Γράψτε μας το μήνυμά σας" required></textarea><br>
                <input type="hidden" name="contact_submitted" value="">
                <button class="clickBtn" type="submit">Αποστολή</button>
            </form>
        </div>
        
    </div>
</section>
<div class="popup d-none">
    <div class="popupOverlay"></div>
    <div class="popupBox">
        <button>close</button>
        <h3>Συγχαρητήρια</h3>
        <p>Το μήνυμά σας εστάλη με επιτυχία</p>
        <span></span>
    </div>
</div>