<?php
#########################################################################
# File Name: array3.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 2018年10月30日 星期二 17时38分38秒
#########################################################################

$ar2[1] = '1';
$ar2[0] = '0';
$ar2['dasfds'] = 'add1';

foreach ($ar2 as $v) {
    error_log($v);
}
