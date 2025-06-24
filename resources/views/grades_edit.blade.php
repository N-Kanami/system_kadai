<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>成績編集画面</title>
    </head>

    <body>
        <form action="{{route('redirect_grades.edit')}}" method="post">
            @csrf
            <h3>成績編集フォーム</h3>
            <p>学年：<select name="grades" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select></p>

            <p>学期：<select name="grades" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select></p>

            <p>国語：<select name="japanese">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>
            
            <p>数学：<select name="math">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>理科：<select name="science">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>社会：<select name="social_stuies">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>音楽：<select name="music">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>家庭科：<select name="home_economics">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>英語：<select name="english">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>美術：<select name="art">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

            <p>保健体育：<select name="health_and_physical_education">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select></p>

             <button type="submit">編集</button>
        </form> 
        <br>
        
        <h3>戻るボタン</h3>
        <button type="button" onClick="location.href='{{route('students.details')}}'">戻る</button>
    </body>

</html>
