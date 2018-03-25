<!DOCTYPE html>
<h1>Choose student</h1>
<?php
echo Form::open(array('action' => 'FormController@view'));
echo Form::label('Student1');
echo $evaluari=Form::radio('evaluari', 'Student1')."<br/>";
echo Form::label('Student2');
echo $evaluari=Form::radio('evaluari', 'Student2')."<br/>";
echo Form::label('Student3');
echo $evaluari=Form::radio('evaluari', 'Student3', true)."<br/>";
echo Form::submit('Submit')."<br/><br/>";
echo Form::close();
?>
