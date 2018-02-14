<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش ویدئو</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<style>
    .containerrrrr form{
        font-weight: bold;
        font-family: IRANSans;
        direction: rtl;
        text-align: right;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        margin: 10%;
    }
    /*body{*/
        /*background-image: url("img/BackgroundHome.jpg");*/
    /*}*/

</style>
<body>
<div class="containerrrrr">
    <form action="">
        <br/>
        <div class="form-group">
            <label> عنوان:</label>
            <input type="text" class="form-control"  name="title">
        </div>
        <div class="form-group">
            <label>قیمت:</label>
            <input type="text" class="form-control"  name="price">
        </div>

        <div class="form-group">
            <label for="comment">توضیحات:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <label for="video">انتخاب ویدئو</label>
        <input style="direction: rtl;width: 100%" type="file" id="myFile"><br/>
        <!--        <script>-->
        <!--            function myFunction() {-->
        <!--                var x = document.getElementById("myFile");-->
        <!--                x.disabled = true;-->
        <!--            }-->
        <!--        </script>-->

        <div style="direction: rtl;width: 100%" class="checkbox">
            <label><input type="checkbox" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
        </div>
        <div style="direction: rtl;width: 100%">
            <button style="direction: rtl" type="submit" class="btn btn-danger">ویرایش</button>
        </div>
    </form>
</div>
</body>
</html>