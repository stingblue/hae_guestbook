<div class="login-popup popup" id="login-form">
  <form action="./login.php" class="form-container" method="POST">
    <h1>Login</h1>

    <label for="usr-login"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="usr-login" required>

    <label for="psw-login"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw-login" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
  </form>
</div>

<div class="feedback-popup popup" id="feedback-new-popup">
  <form action="./feedback_new.php" id="feedback-new-form" class="form-container">
    <h2>Message</h2>

    <label for="usr-create"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="guest-name" id="usr-create" required>

    <label for="email-create"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="guest-email" id="email-create" required>

    <label for="msg-create"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" id="msg-create" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeFeedbackForm()">Close</button>
  </form>
</div>

<div class="feedback-popup popup" id="feedback-update-popup">
  <form action="./feedback_update.php" id="feedback-update-form" class="form-container">
    <h2>Update Message</h2>

    <input type="hidden" name="id">
    <label for="usr-update"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="guest-name" id="usr-update" required>

    <label for="email-update"><b>Email</b></label>
    <input type="email" placeholder="" name="guest-email" id="email-update" required disabled>

    <label for="msg-update"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" id="msg-update" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeFeedbackForm()">Close</button>
  </form>
</div>