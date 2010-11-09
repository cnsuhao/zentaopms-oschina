<?php
/**
 * The story view file of dashboard module of ZenTaoMS.
 *
 * @copyright   Copyright 2009-2010 QingDao Nature Easy Soft Network Technology Co,LTD (www.cnezsoft.com)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     dashboard
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/tablesorter.html.php';?>
<div class='yui-d0'>
  <table class='table-1 tablesorter'>
    <thead>
      <tr class='colhead'>
        <th class='w-id'><?php echo $lang->idAB;?></th>
        <th class='w-pri'><?php echo $lang->priAB;?></th>
        <th><?php echo $lang->story->product;?></th>
        <th><?php echo $lang->story->title;?></th>
        <th><?php echo $lang->story->plan;?></th>
        <th class='w-user'><?php echo $lang->openedByAB;?></th>
        <th class='w-hour'><?php echo $lang->story->estimateAB;?></th>
        <th class='w-status'><?php echo $lang->statusAB;?></th>
        <th class='w-stage'><?php echo $lang->story->stageAB;?></th>
        <th class='w-140px {sorter:false}'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($stories as $key => $story):?>
        <?php $storyLink = $this->createLink('story', 'view', "id=$story->id");?>
        <tr class='a-center'>
        <td><?php echo html::a($storyLink, sprintf('%03d', $story->id));?></td>
        <td><?php echo $story->pri;?></td>
        <td><?php echo $story->productTitle;?></td>
        <td class='a-left nobr'><?php echo html::a($storyLink, $story->title);?></td>
        <td><?php echo $story->planTitle;?></td>
        <td><?php echo $users[$story->openedBy];?></td>
        <td><?php echo $story->estimate;?></td>
        <td class='<?php echo $story->status;?>'><?php echo $lang->story->statusList[$story->status];?></td>
        <td><?php echo $lang->story->stageList[$story->stage];?></td>
        <td>
          <?php
          if(!($story->status != 'closed' and common::printLink('story', 'change', "storyID=$story->id", $lang->story->change))) echo $lang->story->change . ' ';
          if(!(($story->status == 'draft' or $story->status == 'changed') and common::printLink('story', 'review', "storyID=$story->id", $lang->story->review))) echo $lang->story->review . ' ';
          if(!($story->status != 'closed' and common::printLink('story', 'close', "storyID=$story->id", $lang->story->close))) echo $lang->story->close . ' ';
          ?>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
<?php include '../../common/view/footer.html.php';?>
