<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>
<div id="header">
    <?php echo isset($messages) && ($messages != '') ? $messages : ''; ?>

    <div class="top">
        <div class="container">
            <div class="logo">
                <a href="<?php echo e(FuncLib::getBaseUrl()); ?>">
                    <img src="<?php echo e(FuncLib::getBaseUrl()); ?>assets/img/logo.png" alt="" title="">
                </a>
            </div>
            <div class="menu-top">
                <div class="navigation mNavigation">
                           <span class="navigationIcon">
                               <span></span>
                           </span>
                    <div class="backdropNav"></div>
                    <ul>
                        <?php if(isset($arrCategory) && !empty($arrCategory)): ?>
                            <?php $__currentLoopData = $arrCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($cat->category_menu == CGlobal::status_show && $cat->category_parent_id == 0): ?>
                                    <?php $i=0 ?>
                                    <li>
                                        <a <?php if($i > 0): ?> <?php endif; ?> title="<?php echo e($cat->category_title); ?>" href="<?php if($cat->category_link_replace != ''): ?><?php echo e($cat->category_link_replace); ?><?php endif; ?>">
                                            <?php echo e($cat->category_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="info-top">
        <div class="thumb-top">
            <div class="container">
                <div class="descrip-top">
                    Colos Platium chính là giải pháp hoàn hảo giúp mẹ đánh bay nỗi lo con biếng ăn chỉ từ 3 ngày sử dụng
                </div>
                <div class="gif">
                    <span>"Món quà quý"</span> cho sức khỏe con yêu
                </div>
                <div class="hot-line">
                    <div class="tv">
                        Tư vấn ngay
                    </div>
                    <div class="phone"><?php echo $textHotline; ?></div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\xampp\htdocs\project.vn\ColosPlatium\app\Modules/Statics/Views/block/header.blade.php ENDPATH**/ ?>