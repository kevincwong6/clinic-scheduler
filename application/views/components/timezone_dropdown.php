<?php
/**
 * Local variables.
 *
 * @var string $attributes
 * @var array $grouped_timezones
 */
?>

<select <?= $attributes ?>>
    <?php foreach ($grouped_timezones as $continent => $entries): ?>
        <optgroup label="<?= $continent ?>">
            <?php foreach ($entries as $value => $name): ?>
                <?php
                // Keep the real timezone value unchanged, but make the label
                // patient-friendly by removing technical UTC offset suffixes.
                $display_name = preg_replace('/\s*\([+-]\d{1,2}:\d{2}\)\s*$/', '', $name);
                $display_name = str_replace('_', ' ', $display_name);
                ?>
                <option value="<?= $value ?>"><?= e($display_name) ?></option>
            <?php endforeach; ?>
        </optgroup>
    <?php endforeach; ?>
</select>
