<h1>Add Post</h1>

<?php

echo $this->Form->create('Owner', array('action' => 'add'));

echo $this->Form->input('name');
echo $this->Form->input('address');
echo $this->Form->input('email');
echo $this->Form->input('phone');

echo $this->Form->end('Save');

?>
