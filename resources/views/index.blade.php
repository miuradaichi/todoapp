<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css" />
    <style>
        body{
            background-color:aqua;
        }
        div{
            background-color:white;
            width:600px;
            height:300px;
            margin:100px auto;
        }
    </style>
</head>
<body>
    <div>
        <h1>Todo List{{$content}}</h1>
        <form action="/">
        @csrf
            <input type="text" method="post" name="add">
            <input type="submit" value="追加">
            <li style="list-style:none;">
                <tr>
                    <th>作成日</th>
                    <th>タスク名</th>
                    <th>更新</th>
                    <th>削除</th>
                </tr></br>
                <tr>
                    <td></td>
                    <td><input type="text" method="post" name="task"></td>
                    <td>{{$items->id}}<input type="submit" value="更新" name="update"></td>
                    <td>{{$items->content}}<input type="submit" value="削除" name="delete"></td>
                </tr>
            </li>
        </form>
    </div>
</body>
</html>