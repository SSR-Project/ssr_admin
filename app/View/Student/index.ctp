
  <div class="container">
    <?php echo  $this->Session->flash(); ?>
    <div class="row">
        <div class="button_section">
          <div class="button_section2 span12"style="margin-bottom: 30px">
              <a href="/<?php echo $base_dir;?>/student/add" class="btn btn-primary span2" style="float: right;">新規追加する</a>
          </div>
        </div>
      <table class="table table-striped">
        <thead>
              <tr>
                <th>名前</th>
                <th>性別</th>
                <th>生年月日</th>
                <th>学籍番号</th>
                <th>学年</th>
                <th>学部(研究科</th>
                <th>学科(専攻)</th>
                <th>入学日</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 0; $i < count($users); $i++ ): ?>
              <tr>
                <td><a href="/<?php echo $base_dir;?>/student/show/<?php echo $users[$i]['User']['id'] ?>"><?php echo $users[$i]['User']['name'] ?></a></td>
                <td><?php echo $GENDER[$users[$i]['User']['gender']] ?></td>
                <td><?php echo $users[$i]['User']['birthday'] ?></td>
                <td><?php echo $users[$i]['Student']['number'] ?></td>
                <td><?php echo $GRADE[$users[$i]['Student']['grade']] ?></td>
                <td><?php echo $DEPARTMENT[$users[$i]['Student']['department']] ?></td>
                <td><?php echo $MAJOR[$users[$i]['Student']['major']] ?></td>
                <td><?php echo $users[$i]['Student']['entrance_day'] ?></td>
              <tr>
              <?php endfor; ?>
            </tbody>
      </table>
  </div>
</div>