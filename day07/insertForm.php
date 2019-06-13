<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글작성</title>
</head>
<body>
  <h1>글작성</h1>
  <form method="POST" action="insert.php">
    <label>
      작성자 :
      <input type="text" name="writer"/>
    </label>
    <br/><br/><br/>
    <label>
      제목 :
      <input type="text" name="title"/>
    </label>
    <br/><br/><br/>
    <label>
      내용 :
      <textarea name="content">
      </textarea>
    </label>
    <br/><br/><br/>
    <button>작성하기</button>
    <a href="index.php">돌아가기</a>
  </form>
</body>
</html>