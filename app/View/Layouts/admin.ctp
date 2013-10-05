<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>It's Brain - premium admin HTML template by Eugene Kopyov</title>

<?php echo $this->Html->css(array('main','reset','dataTable','elfinder','fullcalendar','icons','ui_custom','wysiwyg')); ?>

</head>

<body>

<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="/CSE-ERP/images/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="/CSE-ERP/images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="/CSE-ERP/images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><img src="/CSE-ERP/images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span>
                        <ul class="menu_body">
                            <li><a href="#" title="">new message</a></li>
                            <li><a href="#" title="">inbox</a></li>
                            <li><a href="#" title="">outbox</a></li>
                            <li><a href="#" title="">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="/CSE-ERP/images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="/CSE-ERP/images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
    <div class="logo"><a href="/" title=""><img src="images/loginLogo.png" alt="" /></a></div>
    <div class="middleNav">
    	<ul>
        	<li class="iMes"><a href="#" title=""><span>Support tickets</span></a><span class="numberMiddle">9</span></li>
            <li class="iStat"><a href="#" title=""><span>Statistics</span></a></li>
            <li class="iUser"><a href="<?php echo $this->Html->url(array('controller' => 'membres', 'action' => 'index')); ?>" title=""><span><?php echo __('Liste des membres'); ?></span></a></li>
            <li class="iOrders"><a href="#" title=""><span>Billing panel</span></a></li>
        </ul>
    </div>
    <div class="fix"></div>
</div>


<!-- Content wrapper -->
<div class="wrapper">
	
	<!-- Left navigation -->
    <div class="leftNav">
    	<ul id="menu">
        	<li class="contacts"><a href="<?php echo $this->Html->url(array('controller' => 'membres', 'action' => 'index')); ?>" title="" class="active"><span><?php echo __('Membres'); ?></span></a></li>
            <li class="tables"><a href="<?php echo $this->Html->url(array('controller' => 'sections', 'action' => 'index')); ?>" title=""><span><?php echo __('Sections'); ?></span></a></li>
            <li class="files"><a href="<?php echo $this->Html->url(array('controller' => 'projets', 'action' => 'index')); ?>" title=""><span><?php echo __('Projets'); ?></span></a></li>
            <li class="pic"><a href="icons.html" title=""><span>Compétences</span></a></li>
        </ul>
    </div>
    
    <!-- Content -->
    <div class="content">
   
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
        
    </div>
    <div class="fix"></div>
</div>

<!-- Footer -->
<div id="footer">
	<div class="wrapper">
    	<span>&copy; Copyright 2011. All rights reserved. It's Brain admin theme by <a href="#" title="">Eugene Kopyov</a></span>
    </div>
</div>

</body>
</html>
