<?php
// Quick and dirty navigation.
$menu_item_default = 'index';
$menu_items = array(
  'index' => array(
    'label' => 'Home',
    'desc' => 'A list of all my magazines',
  ),
  'add' => array(
    'label' => 'Add',
    'desc' => 'Add a magazine to my collection',
  ),
);

// Determine the current menu item.
$menu_current = $menu_item_default;
// If there is a query for a specific menu item and that menu item exists...
if (@array_key_exists($this->uri->segment(2), $menu_items)) {
  $menu_current = $this->uri->segment(2);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>My Magazines | <?php html_escape($menu_items[$menu_current]['label']); ?></title>
        <meta name="description" content="<?php html_escape($menu_items[$menu_current]['desc']); ?>">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/custom.css');?>">

        <script src="<?php echo base_url('js/vendor/modernizr-2.8.3.min.js')?>"></script>
    </head>
    <body>
        <header role="banner">
          <nav role="navigation"
               class="navbar navbar-static-top navbar-default">
            <div class="container">
              <div class="nav-bar-header">
                <button type="button" class="navbar-toggle"
                        data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Magazine Collection</a>
              </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <?php
                  foreach ($menu_items as $item => $item_data) {
                    echo '<li' . ($item == $menu_current ? ' class="active"' : '') . '>';
                    echo '<a href="/index.php/magazine/' . $item .
                      '" title="' . $item_data['desc'] . '">' . $item_data['label'] . '</a>';
                    echo '</li>';
                  }
                  ?>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <div class="container">