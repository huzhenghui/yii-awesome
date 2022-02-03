<?php

namespace huzhenghui\app_basic_wrap_layout\widgets;

use Yii;

class Footer extends \yii\bootstrap4\Widget
{
    public function run()
    {
?>
        <footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
<?php
    }
}
