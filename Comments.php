<?php
<form method='post'>
  NAME: <input type='text' name='name' id='name' /><br />

  Email: <input type='text' name='email' id='email' /><br />

  Website: <input type='text' name='website' id='website' /><br />

  Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />

  <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />

  <input type='submit' value='Submit' />  
</form>
