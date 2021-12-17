<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="resources\css\index.blade.css">
  <link rel="stylesheet" href="resources\css\reset.css">
  <title>COACHTECH</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      <div class="todo">
        <form action="/todo/create" method="post" class="flex between mb-30">
          <input type="hidden" name="_token" value=""> <input type="text" class="input-add" name="content" />
          <input class="button-add" type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          <tr>
            <td>
              2021-12-08 13:20:09
            </td>
            <form action="" method="post">
              <input type="hidden" name="_token" value="">
              <td>
                <input type="text" class="input-update" value="mama" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="" method="post">
                <input type="hidden" name="_token" value=""> <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          <tr>
            <td>
              2021-12-08 13:20:22
            </td>
            <form action="" method="post">
              <input type="hidden" name="_token" value="">
              <td>
                <input type="text" class="input-update" value="vv" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="" method="post">
                <input type="hidden" name="_token" value=""> <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          <tr>
            <td>
              2021-12-08 14:11:22
            </td>
            <form action="" method="post">
              <input type="hidden" name="_token" value="">
              <td>
                <input type="text" class="input-update" value="愛" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="" method="post">
                <input type="hidden" name="_token" value=""> <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          <tr>
            <td>
              2021-12-08 14:11:26
            </td>
            <form action="" method="post">
              <input type="hidden" name="_token" value="">
              <td>
                <input type="text" class="input-update" value="" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="" method="post">
                <input type="hidden" name="_token" value=""> <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>