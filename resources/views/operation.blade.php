<!DOCTYPE html>
<html>
    <head>
        <title>Transpose matrix</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/app.js') }}">
    </head>
<body>
    <div class="container">
        <div class="well well-lg">
            <h1 class="text-center">Transpose matrix</h1>
            <p>Give the matrix sive</p>
            <form >
                
            </form>
            <form id="inputField" role="form">
                <input type="text" name="field00" size="3">
                <input type="text" name="field01" size="3">
                <input type="text" name="field02" size="3">
                <input type="text" name="field03" size="3">
                <br>
                <input type="text" name="field10" size="3">
                <input type="text" name="field11" size="3">
                <input type="text" name="field12" size="3">
                <input type="text" name="field13" size="3">
                <br>
                <input type="text" name="field20" size="3">
                <input type="text" name="field21" size="3">
                <input type="text" name="field22" size="3">
                <input type="text" name="field23" size="3">
                <br>
                <input type="submit" onclick="calcJacobian()" value="calculate" name="calculate" class="btn btn-info">
            </form>
            <div id="resultField">
                
            </div>

        </div>
    </div>
    <script type="text/javascript">
        function calcJacobian(){
            var myArr = document.forms.inputField;
            var myControls = myArr.elements['p_id'];
            for(var i =0; i<myControls.length; i++){
                var aControl = myControls[i];
                document.getElementById("resultField").append=aControl;
            }
        }
    </script>
</body>
</html>