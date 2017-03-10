<?php if($cases):?>
<table class='table' id='cases'>
  <thead>
    <tr>
      <th class='w-id'>    <?php echo $lang->idAB;?></th>
      <th class='w-pri'>   <?php echo $lang->priAB;?></th>
      <th>                 <?php echo $lang->testcase->title;?></th>
      <th class='w-type'>  <?php echo $lang->testcase->type;?></th>
      <th class='w-user'>  <?php echo $lang->testtask->assignedTo;?></th>
      <th class='w-user'>  <?php echo $lang->testtask->lastRunAccount;?></th>
      <th class='w-130px'> <?php echo $lang->testtask->lastRunTime;?></th>
      <th class='w-80px'>  <?php echo $lang->testtask->lastRunResult;?></th>
      <th class='w-status'><?php echo $lang->statusAB;?></th>
    </tr>
  </thead>
  <tbody class='text-center'>
    <?php foreach($cases as $case):?>
    <tr>
      <td><?php echo $case->id . html::hidden('cases[]', $case->id)?></td>
      <td><span class='pri<?php echo $case->pri?>'><?php echo zget($lang->testcase->priList, $case->pri);?></span></td>
      <td class='text-left' title='<?php echo $case->title?>'><?php echo $case->title?></td>
      <td><?php echo zget($lang->testcase->typeList, $case->type);?></td>
      <td><?php echo zget($users, $case->assignedTo);?></td>
      <td><?php echo zget($users, $case->lastRunner);?></td>
      <td><?php echo substr($case->lastRunDate, 2);?></td>
      <td><?php echo zget($lang->testcase->resultList, $case->lastRunResult);?></td>
      <td><?php echo zget($lang->testtask->statusList, $case->status);?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
  <tfoot><tr><td colspan='9'><?php echo $caseSummary;?></td></tr></tfoot>
</table>
<?php else:?>
<?php echo $lang->testreport->none;?>
<?php endif;?>
