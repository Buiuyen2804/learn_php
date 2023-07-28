<!DOCTYPE html>
<html>
<head>
    <title>Upload File PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color:orange;
        }

        #uploaded-image img {
            max-width: 200px;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px; 
        }
    </style>
</head>
<body>
    <h1>Tải hình ảnh</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" name="submit" value="Tải lên">
    </form>

    <div id="uploaded-image">
        <!-- Hiển thị hình ảnh tải lên ở đây -->
    </div>
</body>
</html>
