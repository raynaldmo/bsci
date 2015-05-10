<h2>My magazines</h2>
<?php
$this->table->set_heading('Publication', 'Issue', 'Date', 'Cover', 'Actions');
$template = array(
  'table_open' => '<table class="table table-striped">'
);

$this->table->set_template($template);
echo $this->table->generate($magazines);