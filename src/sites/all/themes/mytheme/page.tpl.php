
<nav class="navbar bg-light border-bottom">
    <div class="container-fluid">
        <div class="navbar-brand">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
        </div>
        <?php if($main_menu): ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array( 'inline', 'navbar-nav')))); ?>
        <?php endif;?>
    </div>
</nav>

<div class="container">    
    <div class="row">
        <div id="content" class="col">
            <div class="section">
                <!-- <a id="main-content"></a> --> 
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1 class="title" id="page-title">
                        <?php print $title; ?>
                    </h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs">
                        <?php print render($tabs); ?>
                    </div
                <?php endif; ?>
                <?php if ($action_links): ?>
                    <ul class="action-links">
                        <?php print render($action_links); ?>
                    </ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
        </div>
        <div id="sidebar" class="col-4">
            <?php print render($page['sidebar']); ?>
        </div>
    </div>
</div>