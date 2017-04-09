<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

?>
<div class="form-group field-trstudentstoppoints-stop_name required has-error">
<label class="control-label col-sm-3" for="trstudentstoppoints-stop_name">Stop Name</label>
<div class="col-sm-6">
<?php echo Html::dropDownList('TrStudentStopPoints[stop_name]',null, ['one'=>'one', 'two'=>'two'],['class'=>'form-control', 'id'=>'trstudentstoppoints-stop_name']);
?>


</div>

</div>