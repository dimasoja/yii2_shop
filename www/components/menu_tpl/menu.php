
<li> 
    <?php $str = isset($category['children']) ? "#" : \yii\helpers\Url::to(['category/view', 'id' => $category['id']]); ?>
    <a href=<?= $str ?>>
        <?= $category['title']; ?>
        <?php if (isset($category['children'])) echo '<img class="arrow-img" src="images/arrow1.png" alt=""/>' ?>
    </a> 
    <?php if (isset($category['children'])): ?>
        <ul class="cute">
            <?= $this->getMenuHtml($category['children']) ?>
        </ul>
    <?php endif ?>
</li>



