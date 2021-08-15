<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="todo">
        <h1>Todo List</h1>
            <form action="/todo/create" method="post">
                @csrf
                <div class="parent">
                    <input type="text" name="content" class="txtbox">
                    <input type="submit" value="追加" formaction="/todo/create" class="add">
                </div>
            </form>
            <form action="/todo/update" method="post">
            @csrf
                <table>
                    <tr>
                        <th></th>
                        <th>作成日</th>
                        <th>タスク名</th>
                        <th>更新</th>
                        <th>削除</th>
                    </tr>
                    @foreach($items as $item)
                    <tr>
                        <td><input type="hidden" name="id" value="{{$item->id}}"></td>
                        <td>{{$item->created_at}}</td>
                        <td><input type="text" name="content" value="{{$item->content}}" class="txtbox2"></td>
                        <td>
                            <input type="submit" value="更新" formaction="/todo/update" class="update">
                        </td>
                        <td>
                            <input type="submit" value="削除" formaction="/todo/delete" class="delete">
                        </td>
                    </tr>
                    @endforeach
                </table>
            </form>
        </div>
</body>
</html>