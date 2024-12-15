<form action="{{ route('upload') }}" enctype="multipart/form-data" method="POST">
@csrf 
<input name="upload_file" type="file" /> 
<button>アップロード</button>
</form>