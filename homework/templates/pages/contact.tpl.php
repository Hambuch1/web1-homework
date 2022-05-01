<h1>Send a message to us!</h1>
<form name="contact" action=".?page=validation" onsubmit="return check();" method="post">
<div>
<label class="form-label">Name: </label><input class="form-control" type="text" id="name" name="name" size="20" maxlength="40">
<br/>
<label class="form-label">E-mail: </label><input class="form-control" type="text" id="email" name="email" size="30" maxlength="40">
<br/>
<label class="form-label">Message: </label><textarea class="form-control" id="textarea" name="textarea" cols="40" rows="10"></textarea>
<br/>
<input id="send" type="submit" value="Send">
<button onclick="check();" type="button">Check</button>
</div>
</form>