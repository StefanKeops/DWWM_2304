<?php
foreach ($comments as $comment) {
    <p><strong><?= htmlspecialchars ($comment['author'])?> le <?=$comment['french_creation_date']</strong></p>
}