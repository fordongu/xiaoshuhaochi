<?php
//��һ�� ���������ļ�
define('hopedir', dirname(__FILE__).DIRECTORY_SEPARATOR);   
@$step = intval($_GET['step']);
$step = empty($step)?'a':$step;
switch($step){
 case 'a':
  echo '<a href="/update.php?step=1">���³���,����ȫ�ֶ������һ�����������ļ�</a>';
  
 break;
 case 1:
 include(hopedir.'update/step1.php');
 echo '<a href="/update.php?step=2">�����ļ�������ɣ���һ���������ݿ�</a>';
 break;
 case 2:
 include(hopedir.'update/step2.php');
 echo '<a href="/update.php?step=3">���ݽṹ������ɣ���һ����������</a>';
 break;
 case 3:
 include(hopedir.'update/step3.php');
 echo '<a href="/update.php?step=3">�������ݿ����ݵ��±���</a>';
 break;
 case 4:
 include(hopedir.'update/step4.php');
 echo '���ݿ���³ɹ���������ɺ���ɾ����Ŀ¼�µ�update.php��update�ļ���';
 break;
}


 




?>