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

	<?php for ($i = 1; $i <= 5; ++$i) : ?>
	<!-- Param <?php echo $i ?> -->
	<div class="form-group">
		<label for="inputParam<?php echo $i ?>Name" class="col-lg-1 control-label">Param <?php echo $i ?></label>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam<?php echo $i ?>Name" name="data[Robot][params][<?php echo $i ?>][name]" placeholder="name" value="<?php echo isset($params[$i]['name']) ? $params[$i]['name'] : '' ?>">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control" id="inputParam<?php echo $i ?>Value" name="data[Robot][params][<?php echo $i ?>][value]" placeholder="value" value="<?php echo isset($params[$i]['value']) ? $params[$i]['value'] : '' ?>">
		</div>
	</div>
	<?php endfor ?>

	<div class="form-group">
		<div class="col-lg-offset-1 col-lg-7">
			<button type="submit" class="btn btn-primary">Отправить запрос</button>
		</div>
	</div>
	<?php echo $this->Form->end(); ?>
</div>