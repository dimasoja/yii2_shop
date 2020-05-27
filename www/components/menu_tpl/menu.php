<?php 
$a_href = '';
$ul_open = '';
$ul_close = '';
if (isset($category['children'])) 
    {
       $a_href = '#'; 
    }
    else {
       $ul_open = '<ul class="kid_menu">';
       $ul_close = '</ul>'; 
       $a_href=  \yii\helpers\Url::to(['category/view', 'id' => $category['id']]);
    }
 ?>

<?=$ul_open?>
<li> 
   
    <a href=<?= $a_href ?>>
        <?= $category['title']; ?>
        <?php if (isset($category['children'])) echo '<img class="arrow-img" src="images/arrow1.png" alt=""/>' ?>
    </a> 
    <?php if (isset($category['children'])): ?>
        <ul class="cute">
            <?= $this->getMenuHtml($category['children']) ?>
        </ul>
    <?php endif ?>
</li>
<?=$ul_close?>


