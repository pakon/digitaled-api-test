<script type="text/javascript">
	
</script>

<div class="row">

	<div class="col-lg-8">
		<h2>Тестовое задание от Redmadrobot</h2>
		<div class="well">
		<p>В текстовое поле вводится URL, выбирается метод GET или POST, так же есть возможность добавить 5 параметров, каждый параметр представлен в виде 2х полей – название параметра и его значение. Далее нажимаем на кнопку «отправить запрос».</p>
		
		<p>На этойже странице должен отобразиться ответ от сервера (желательно форматированный, для удобного просмотра). Если ответа от сервера не получено – вывести HTTP статус ответа.</p>
		</div>

		<?php if (isset($http_code)) : ?>
			<h3>Результат работы скрипта</h3>
			<pre class="alert alert-info"><?php echo 'HTTP status code: ' . $http_code ?></pre>
		<?php endif ?>
		
		<?php if (isset($result)) : ?>
			<pre><?php echo $result ?></pre>
		<?php endif ?>

		<?php echo $this->Form->create('Robot', array('class' => 'form-horizontal')) ?>

		<div class="form-group">
			<label for="inputURL" class="col-lg-2 control-label">URL</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="inputURL" name="data[Robot][inputURL]" value="<?php echo isset($url) ? $url : '' ?>" placeholder="url">
			</div>
			<div class="col-lg-2">
					<?php echo $this->Form->input('requestType', array(
						'options' => array('GET' => 'GET', 'POST' => 'POST'),
						'selected' => isset($requestType) ? $requestType : 'GET',
						'class' => 'form-control',
						'label' => false
					)); ?>
			</div>
		</div>

		<?php for ($i = 1; $i <= 5; ++$i) : ?>
		<!-- Param <?php echo $i ?> -->
		<div class="form-group">
			<label for="inputParam<?php echo $i ?>Name" class="col-lg-2 control-label">Param <?php echo $i ?></label>
			<div class="col-lg-4">
				<input type="text" class="form-control" id="inputParam<?php echo $i ?>Name" name="data[Robot][params][<?php echo $i ?>][name]" placeholder="name" value="<?php echo isset($params[$i]['name']) ? $params[$i]['name'] : '' ?>">
			</div>
			<div class="col-lg-4">
				<input type="text" class="form-control" id="inputParam<?php echo $i ?>Value" name="data[Robot][params][<?php echo $i ?>][value]" placeholder="value" value="<?php echo isset($params[$i]['value']) ? $params[$i]['value'] : '' ?>">
			</div>
		</div>
		<?php endfor ?>

		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-8">
				<button type="submit" class="btn btn-primary">Отправить запрос</button>
			</div>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>

	<div class="col-lg-4" style="margin-top: 4.5em">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Test Case 1</h3>
			</div>

			<div class="panel-body">
				<p>http://digitaled.ru/freeapi/public/api/list/</p>
				<p>Название переменной - app_id, значение 52, метод - GET</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Test Case 2</h3>
			</div>
			<div class="panel-body">
				<p>http://digitaled.ru/freeapi/public/api/password</p>
				<p>Название переменной - param_id, значение 31, метод - POST</p>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Test Case 3</h3>
			</div>
			<div class="panel-body">
				<p>http://digitaled.ru/freeapi/public/api/detail_list</p>
				<p>Метод - POST</p>
			</div>
		</div>

	</div>
	
</div>
