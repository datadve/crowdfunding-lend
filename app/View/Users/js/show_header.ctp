document.getElementById('js-head-menu').innerHTML = '<?php echo preg_replace('/(\>)\s+(<?)/', '$1$2', $this->element('header-menu', array('config' => 'sec'))); ?>';
document.getElementById('js-head-menu').className = '';