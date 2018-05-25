<?php if (! empty($messages)) { ?>
    <div class="alert alert-<?php echo array_key_exists('success', $messages) ? 'success' : 'warning'; ?>">
        <?php echo $messages['success'] ?? $messages['warning']; ?>
    </div>
<?php } ?>
