<label><?= $label ?>:</label>
<input type="<?= $type ?>"
       name="<?= $name ?>" 
       value="<?= htmlspecialchars($$name ?? null); ?>" />
<?= $fields->getField($name)->getHTML(); ?><br />