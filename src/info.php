<?php
session_start();
if (!empty($_SESSION['userinfo']) && !empty($_SESSION['emailinfo']) && !empty($_SESSION['select'])) :
?>
    <ul>

        <?php foreach ($_SESSION['userinfo']as $key => $val): ?>
            <li><strong><?= $key; ?></strong> : <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php foreach ($_SESSION['address']as $key => $val): ?>
            <li><strong><?= $key; ?></strong> : <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php foreach ($_SESSION['select']as $key => $val): ?>
            <li><strong><?= $key; ?></strong> : <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>
<?php
    else:
?>
        <h1>Empty data</h1>
<?php endif; ?>
<?php  if (!empty($_COOKIE['use_info'])): ?>
    <strong>You visit this page: <?= $_COOKIE['use_info']; ?></strong>
<?php  endif;?>
<?php session_write_close(); ?>
