<form action="{{ route('upload.csv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file">
    <button type="submit">アップロード</button>
</form>