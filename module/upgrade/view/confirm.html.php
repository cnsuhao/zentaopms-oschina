<?php
/**
 * The html template file of confirm method of upgrade module of ZenTaoMS.
 *
 * @copyright   Copyright 2009-2010 QingDao Nature Easy Soft Network Technology Co,LTD (www.cnezsoft.com)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     upgrade
 * @version     $Id$
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<style>body{background:white}</style>
<div class='yui-d0' style='margin-top:50px'>
  <form method='post' action='<?php echo inlink('execute');?>'>
  <table align='center' class='table-6 f-14px'>
    <caption><?php echo $lang->upgrade->confirm;?></caption>
    <tr>
      <td><textarea rows='20' class='area-1'><?php echo $confirm;?></textarea></td>
    <tr>
      <td class='a-center'><?php echo html::submitButton($lang->upgrade->sureExecute) . html::hidden('fromVersion', $fromVersion);?></td>
    </tr>
  </table>
  </form>
</div>
<?php include '../../common/view/footer.html.php';?>
