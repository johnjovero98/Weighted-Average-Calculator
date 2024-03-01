<?php if (isset($_POST['calculate'])): ?>
    <?php include('process.php'); ?>
    <?php if ($asgn_count > 0): ?>
        <p><span>Current Weighted Average:</span>
            <?php echo round($weighted_avg, 1) ?>&percnt;
        </p>
        <p><span>Desired Grade:</span>
            <?php echo $desired_grade ?>&percnt;
        </p>
        <p>You need <span>
                <?php echo round($precent_need, 1) ?>&percnt;
            </span> on your remaining coursework to achieve your desired grade.</p>
    <?php endif ?>
<?php endif ?>