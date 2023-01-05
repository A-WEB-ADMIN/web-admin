<h1> 파일 업로드 폼</h1>

<form method="POST" action="/convert/insert_file" enctype="multipart/form-data">
    @csrf

    <input type="file" name="myfile">

    <button type="submit">파일 업로드</button>

</form>