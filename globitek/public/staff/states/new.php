<?php
require_once('../../../private/initialize.php');

// Set default values for all variables the page needs.
$errors = array();
$state = array(
  'name' => '',
  'code' => '',
  'country_id' => ''
);

?>
<?php $page_title = 'Staff: New State'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to States List</a><br />

  <h1>New State</h1>

  <form action="new.php" method="post">
    State name:<br />
    <input type="text" name="name" value="<?php echo h($state['name']); ?>" /><br />
    State code:<br />
    <input type="text" name="code" value="<?php echo echo h($state['code']); ?>" /><br />
    Country ID:<br />
    <input type="text" name="phone" value="<?php echo h($state['country_id']); ?>" /><br />
    <br />
    <input type="submit" name="submit" value="Create"  />
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
