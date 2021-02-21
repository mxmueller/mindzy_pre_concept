<h3>Chat Alpha</h3>
<br>
<br>
<p>Input</p>
<form method="put" action="/chat-submit">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <button type="submit" name="Submit">Submit Chat</button>
</form>
