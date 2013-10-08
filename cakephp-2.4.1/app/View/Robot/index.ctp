<script type="text/javascript">
	
</script>

<div class="row">

	<div class="col-lg-8">
		<h2>Тестовое задание от Redmadrobot</h2>
		<p class="well">В текстовое поле вводится URL, выбирается метод GET или POST, так же есть возможность добавить 5 параметров, каждый параметр представлен в виде 2х полей – название параметра и его значение. Далее нажимаем на кнопку «отправить запрос»</p>

		
		<?php if (isset($http_code)) : ?>
			<pre><?php echo 'HTTP status code: ' . $http_code ?></pre>
		<?php endif ?>
		
		<?php if (isset($result)) : ?>
			<pre><?php echo $result ?></pre>
		<?php endif ?>
	</div>
	
</div>

<div class="row">
	<?php echo $this->Form->create('Robot', array('class' => 'form-horizontal')) ?>

	<div class="form-group">
		<label for="inputURL" class="col-lg-1 control-label">URL</label>
		<div class="col-lg-4">
			<input type="text" class="form-control" id="inputURL" name="data[Robot][inputURL]" value="<?php echo isset($url) ? $url : '' ?>" placeholder="url">
		</div>
		<div class="col-lg-1">
				<?php echo $this->Form->input('requestType', array(
					'options' => array('GET' => 'GET', 'POST' => 'POST'),
					'selected' => isset($requestType) ? $requestType : 'POST',
					'class' => 'form-control',
					'label' => false
				)); ?>
		</div>
	</div>

	<!-- Param 1 -->
	<div class="form-group">
		<label for="inputParam1Name" class="col-lg-1 control-label">Param 1</label>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam1Name" name="data[Robot][params][1][name]" placeholder="name" value="<?php echo isset($params[1]['name']) ? $params[1]['name'] : '' ?>">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam1Value" name="data[Robot][params][1][value]" placeholder="value" value="<?php echo isset($params[1]['value']) ? $params[1]['value'] : '' ?>">
		</div>
	</div>

	<!-- Param 2 -->
	<div class="form-group">
		<label for="inputParam2Name" class="col-lg-1 control-label">Param 2</label>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam2Name" name="data[Robot][params][2][name]" placeholder="name" value="<?php echo isset($params[2]['name']) ? $params[2]['name'] : '' ?>">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam2Value" name="data[Robot][params][2][value]" placeholder="value" value="<?php echo isset($params[2]['value']) ? $params[2]['value'] : '' ?>">
		</div>
	</div>

	<!-- Param 3 -->
	<div class="form-group">
		<label for="inputParam3Name" class="col-lg-1 control-label">Param 3</label>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam3Name" placeholder="name">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam3Value" placeholder="value">
		</div>
	</div>

	<!-- Param 4 -->
	<div class="form-group">
		<label for="inputParam4Name" class="col-lg-1 control-label">Param 4</label>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam4Name" placeholder="name">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam4Value" placeholder="value">
		</div>
	</div>

	<!-- Param 5 -->
	<div class="form-group">
		<label for="inputParam5Name" class="col-lg-1 control-label">Param 5</label>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam5Name" placeholder="name">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam5Value" placeholder="value">
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-offset-1 col-lg-7">
			<button type="submit" class="btn btn-primary">Отправить запрос</button>
		</div>
	</div>
	<?php echo $this->Form->end(); ?>
</div>