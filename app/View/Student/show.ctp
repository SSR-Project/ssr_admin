<div class='container'>
    <?php echo  $this->Session->flash(); ?>
    <ul class="breadcrumb">
        <li>
            <a href="/<?php echo $base_dir;?>/student/">ユーザー検索</a><span class="divider">/</span>
        </li>
        <li class="active">
            <?php echo $user['User']['name']; ?></li>
        </ul>

    <h2>在学生情報</h2>

    <table class="table table-striped table-bordered table-smallheader">
        <tr>
            <th>ID</th>
            <td colspan="3"><?php echo $user['User']['id']; ?></td>
        </tr>
        <tr>
            <th>名前</th>
            <td><?php echo $user['User']['name']; ?></td>
            <th>国籍</th>
            <td><?php echo $user['User']['nationality']; ?></td>
        </tr>
        <tr>
            <th>性別</th>
            <td><?php echo $GENDER[$user['User']['gender']]; ?></td>
            <th>学籍番号</th>
            <td><?php echo $user['Student']['number']; ?></td>
        </tr>
        <tr>
            <th>学年</th>
            <td colspan="3"><?php echo $GRADE[$user['Student']['grade']]; ?></td>
        </tr>
        <tr>
            <th>学部(研究科)</th>
            <td><?php echo $DEPARTMENT[$user['Student']['department']]; ?></td>
            <th>学科(専攻)</th>
            <td><?php echo $MAJOR[$user['Student']['major']]; ?></td>
        </tr>
        <tr>
            <th>入学日</th>
            <td colspan="3"><?php echo $user['Student']['entrance_day']; ?></td>
        </tr>
        <tr>
            <th>住所</th>
            <td colspan="3"><?php echo $user['User']['adress']; ?></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><?php echo $user['User']['phone']; ?></td>
            <th>メールアドレス</th>
            <td><?php echo $user['UserConfidential']['email']; ?></td>
        </tr>
        <tr>
            <th>保証人氏名</th>
            <td><?php echo $user['Student']['guarantor_name']; ?></td>
            <th>保証人連絡先</th>
            <td><?php echo $user['Student']['guarantor_email']; ?></td>
        </tr>
        <tr>
            <th>保証人住所</th>
            <td colspan="3" class="comment">
                <?php echo $user['Student']['guarantor_adress']; ?>
            </td>
        </tr>
    </table>

    <div class="button_section">
        <div class="button_section2 span10"style="margin-bottom: 30px;margin-left: 270px;">
            <a href="/<?php echo $base_dir;?>/student/edit/<?php echo $user['User']['id']; ?>" class="btn btn-primary span2">編集する</a>
            <a href="/<?php echo $base_dir;?>/student/delete/<?php echo $user['User']['id']; ?>" class="btn btn-danger span2">削除する</a>
        </div>
    </div>
</div>
