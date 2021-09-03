<html>
<head>
    <title>SimpleCalculator_Dumawal</title>
	<link rel='stylesheet' href='/css/app.css'/>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>

    
</head>
<body>
    <div id="main_container">
        <form action="calcu" method="POST">
            @csrf
            <div id="titlehead">MIDTERM EXAM</div>
                <div class="form-group row">
                    <div class="col-md-9">
                        <select name="formula" class="form-control" style="margin-left: 15px">
                            <option>Select Formula</option>
                            <option value="Perimeter">Perimeter of rectangle</option>
                            <option value="Volume">Volume of Cuboid</option>
                            <option value="Area">Area of a square</option>
                        </select>
                    </div>
                </div>
            </div>

            <div id="a_container">
                <input class="w-100" type="number" name="value1" class="txt form-control" placeholder="Enter a Number">
            </div>

            <div id="a_container">
                <input class="w-100" type="number" name="value2" class="txt form-control" placeholder="Enter a Number">
            </div>

            <div id="a_container">
                <input class="w-100" type="number" name="value3" class="txt form-control" placeholder="Enter a Number">
            </div>

            <br/>
            <input class="text-center calculate" type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Calculate">


        </form>    
            <div id="a_container">
                Result
                <div class="row" >
                    <div class="col-md-3 m-auto" >
                        @if(session('message'))
                        <div class="alert alert-warning">
                            <h1 class="text-center"> {{session ('message')}}</h1>
                        </div>
                        @endif 
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>