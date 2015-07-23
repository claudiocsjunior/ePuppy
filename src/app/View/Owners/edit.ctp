<?php

echo $this->Form->create('Owner', array('action' => 'edit'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('name');
echo $this->Form->input('address');
echo $this->Form->input('email');
echo $this->Form->input('phone');

echo $this->Form->end('Update');
?>
