<?php echo validation_errors(); ?>
<?php echo $this->upload->display_errors('<div class="alert alert-error">', '</div>'); ?>
<div class="row">
<div class="col-sm-6">
<?php echo form_open_multipart(); ?>

    <div class="form-group">
        <?php echo form_label('Publication Name', 'publication_id'); ?>
        <?php echo form_dropdown(
          array('name' => 'publication_id', 'class' => 'form-control'),
          $publication_form_options,
          set_value('publication_id'));
        ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Issue Number', 'issue_number'); ?>
        <?php echo form_input(
            array('name' => 'issue_number', 'class' => 'form-control'),
            set_value('issue_number'));
        ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Date Published', 'issue_date_publication'); ?>
        <?php echo form_input(
          array('name' => 'issue_date_publication', 'class' => 'form-control'),
          set_value('issue_date_publication'));
        ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Cover scan', 'issue_cover'); ?>
        <?php echo form_upload(
          array('name' => 'issue_cover', 'class' => ''));
        ?>
    </div>
    <div class="form-group">
        <?php echo form_button(
          array('name' => 'save', 'type' => 'submit', 'class' => 'btn btn-primary'),
          'Save');
        ?>
    </div>
<?php echo form_close(); ?>
</div>
</div>