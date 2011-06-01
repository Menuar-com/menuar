<!-- default.php -->
<div id="form">
    <input type="text" id="message" name="message" />
    <input type="submit" id="submit" name="submit" value="submit" />
</div>
<div id="content">
<?php $this->load->view('messages_list') ?>
 
</div>