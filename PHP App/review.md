# PHP App ① レビュー

## 全般

### 以下のaタグのリンクを押下した際にedit.phpの$_GETにどんな値が格納されるか説明してください。

```html
<a href="edit.php?todo_id=123&todo_content=焼肉">更新</a>
```
* $_GET には todo_id=123のtodo_contentを焼肉に変更した値が連想配列に格納されます。

### 以下のフォームの送信ボタンを押下した際にstore.phpの$_POSTにどんな値が格納されるか説明してください。

```html
<form action="store.php" method="post">
    <input type="text" name="id" value="123">
		<textarea　name="content">焼肉</textarea>
    <button type="submit">送信</button>
</form>
```
* store.phpの$_POSTに id=>"123", content=>"焼肉"の連想配列が格納されます。
### `require_once()` は何のために記述しているか説明してください。
* 他のファイルで記述した内容を参照するために利用しています。また、一度だけimportするため何度も読み込む必要が無いため軽く処理できます。
### `savePostedData($post)`は何をしているか説明してください。
* section15以降の内容のため、未記入
### `header('location: ./index.php')`は何をしているか説明してください。
* この場合はクライアントを同一階層にあるindex.phpに遷移させています。
HTTPレスポンスのヘッダーを設定することができ、locationで新しいURLに遷移できます。
### `getRefererPath()`は何をしているか説明してください。
* section15以降の内容のため、未記入
### `connectPdo()` の返り値は何か、またこの記述は何をするための記述か説明してください。
* PDOクラスのオブジェクトを返り値に設定しています。この記述は、データベースと接続するためのもので、mysql以外のデータベースにも接続可能です。
### `try catch`とは何か説明してください。
* try内でエラーが発生したときにcatchでそれを受け取り、処理するものです。エラーが発生した際にプログラムが強制終了するのを防ぎ、適切にエラー処理することができます。
### Pdoクラスをインスタンス化する際に`try catch`が必要な理由を説明してください。
* データベースが正常に動いていない時、パスワードの変更があった時など、特定の条件下でエラーが発生する可能性があるためtry catchが必要になります。
## 新規作成

### `createTodoData($post)`は何をしているか説明してください。
* まず、new.phpでsubmitされた内容をstore.phpで受け取り、それをfunctions.phpに渡しています。function.phpでは受け取った連想配列のcontentキーの要素をcreateTodoDataの引数として更に渡しています。createTodoDataではデータベースと接続して、受け取った要素をtodosターブルのcontentとして挿入しています。
## 一覧

### `getTodoList()`の返り値について説明してください。
* todosターブルからdeleted_atがnullでないものをを2次元の連想配列に格納されれたものが戻り値となっています。
### `<?= ?>`は何の省略形か説明してください。
* 
## 更新
* 
### `getSelectedTodo($_GET['id'])`の返り値は何か、またなぜ`$_GET['id']` を引数に渡すのか説明してください。
* 
### `updateTodoData($post)`は何をしているか説明してください。
* 
## 削除

### `deleteTodoData($id)`は何をしているか説明してください。
* 
### `deleted_at`を現在時刻で更新すると一覧画面からToDoが非表示になる理由を説明してください。
* 
### 今回のように実際のデータを削除せずに非表示にすることで削除されたように扱うことを〇〇削除というか。
* 
### 実際にデータを削除することを〇〇削除というか。
* 
### 前問のそれぞれの削除のメリット・デメリットについて説明してください。
* 