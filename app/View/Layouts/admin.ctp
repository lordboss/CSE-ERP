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
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><img src="images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span>
                        <ul class="menu_body">
                            <li><a href="#" title="">new message</a></li>
                            <li><a href="#" title="">inbox</a></li>
                            <li><a href="#" title="">outbox</a></li>
                            <li><a href="#" title="">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
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
            <li class="iUser"><a href="#" title=""><span>User list</span></a></li>
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
        	<li class="dash"><a href="index.html" title="" class="active"><span>Dashboard</span></a></li>
            <li class="graphs"><a href="charts.html" title=""><span>Graphs and charts</span></a></li>
            <li class="forms"><a href="form_elements.html" title=""><span>Form elements</span></a></li>
            <li class="login"><a href="ui_elements.html" title=""><span>Interface elements</span></a></li>
            <li class="typo"><a href="typo.html" title=""><span>Typography</span></a></li>
            <li class="tables"><a href="tables.html" title=""><span>Tables</span></a></li>
            <li class="cal"><a href="calendar.html" title=""><span>Calendar</span></a></li>
            <li class="gallery"><a href="gallery.html" title=""><span>Gallery</span></a></li>
            <li class="widgets"><a href="widgets.html" title=""><span>Widgets</span></a></li>
            <li class="files"><a href="file_manager.html" title=""><span>File manager</span></a></li>
            <li class="errors"><a href="#" title="" class="exp"><span>Error pages</span><span class="numberLeft">6</span></a></li>
            <li class="pic"><a href="icons.html" title=""><span>Buttons and icons</span></a></li>
            <li class="contacts"><a href="contacts.html" title=""><span>Organized contact list</span></a></li>
        </ul>
    </div>
    
    <!-- Content -->
    <div class="content">
    	<div class="title"><h5>Dashboard</h5></div>
        
        <!-- Statistics -->
        <div class="stats">
        	<ul>
            	<li><a href="#" class="count grey" title="">52</a><span>new pending tasks</span></li>
                
                <li><a href="#" class="count grey" title="">520</a><span>pending orders</span></li>
                <li><a href="#" class="count grey" title="">14</a><span>new opened tickets</span></li>
                <li class="last"><a href="#" class="count grey" title="">48</a><span>new user registrations</span></li>
            </ul>
            <div class="fix"></div>
        </div>
		
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
