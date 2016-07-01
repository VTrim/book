
<div class="bs-example">
	  
    <div class="panel panel-default">
      <!-- Default panel contents -->

      <div class="panel-heading">Редагування та видалення записів</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Email</th>
            <th>Сайт</th>
			<th>Текст</th>
				  <?php if($moder): ?>
	  			<th>Функції модератора</th>
	              <?php endif; ?>
          </tr>
        </thead>
		
        <tbody>
		
		<?php foreach($offers as $data): ?>
		
          <tr>
            <td><?= $data->id; ?></td>
            <td><?= htmlspecialchars($data->name); ?></td>
            <td><?= htmlspecialchars($data->email); ?></td>
            <td><?= htmlspecialchars($data->site); ?></td>
			<td><?= htmlspecialchars($data->offer); ?></td>
			
			<?php if($moder): ?>
			<td> Редагування | <button id="<?= $data->id; ?>" onclick="deleteOffer(this.id)"> Видалити </button>
			<div id="data_edit">
			<textarea id="name<?= $data->id; ?>"><?= htmlspecialchars($data->name); ?></textarea> - Ім'я<br>
			<textarea id="email<?= $data->id; ?>"><?= htmlspecialchars($data->email); ?></textarea> - Email<br>
			<textarea id="site<?= $data->id; ?>"><?= htmlspecialchars($data->site); ?></textarea> - Сайт<br>
			<textarea id="offer<?= $data->id; ?>"><?= htmlspecialchars($data->offer); ?></textarea> - Текст<br>
			<button id="<?= $data->id; ?>" onclick="updateOffer(this.id);">Зберегти</button>
			</div>
			<?php endif; ?>
			
			</td>
			
          </tr>
		  
		  <?php endforeach; ?>
          
        </tbody>
      </table>
    </div>
  </div>