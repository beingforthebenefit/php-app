<?php include __DIR__.'/header.php'; ?>
<div id="content">
    <form action="." method="post" >
        <fieldset>
            <legend>User Information</legend>
                <?php foreach (\Fields::REGISTER_FIELDS as $settings) { ?>
                    <?= \Render::formField($fields, $settings[0], $settings[1], $settings[2] ?? null); ?>
                <?php } ?>
        </fieldset>
        <fieldset>
            <legend>Submit Registration</legend>
                <input type="submit" name="action" value="Register" />
                <input type="submit" name="action" value="Reset" /><br />
        </fieldset>
    </form>
</div>
<?php include __DIR__.'/footer.php'; ?>