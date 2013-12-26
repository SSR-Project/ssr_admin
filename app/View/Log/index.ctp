
  <div class="container">
    <div class="row">
      <table class="table table-striped">
        <thead>
              <tr>
                <th>アプリケーション</th>
                <th>名前</th>
                <th>操作</th>
                <th>日時</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 0; $i < count($users); $i++ ): ?>
              <tr>
                <td><?php echo h($APPTYPE[$users[$i]['Log']['application_type']]) ?></td>
                <td><?php echo h($users[$i]['User']['name']) ?></td>
                <td><?php echo h($METHODTYPE[$users[$i]['Log']['method_type']]) ?></td>
                <td><?php echo h($users[$i]['Log']['created']) ?></td>
              <tr>
              <?php endfor; ?>
            </tbody>
      </table>
  </div>
</div>