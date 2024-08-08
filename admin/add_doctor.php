<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" hre="./script/script.js">
    </script>
    <style>
        body {
            font-family: "Lato", sans - serif;
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Contactus</a>
                </li>
                <li>
                    <a href="index.php">Admin dashboard</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
            </ul>
        </nav>
    </header>

    <main align="center">
        <div class="bd-example-snippet bd-code-snippet">
            <div class="bd-example m-0 border-0">
                <div class="vstack gap-3 card text-white bg-dark mb-3">
                    <h1 class="card-title">Add Doctor</h1>
                    <form method="post" action="">
                        <label for="doc_id">Dcotor ID</label><br>
                        <input placeholder="doc001" type="text" id="doc_id" name="doc_id">
                        <br>
                        <label for="doc_name">Doctor Name:</label><br>
                        <input placeholder="Dr Jhonny" type="text" id="doc_name" name="doc_name" required><br>
                        <br>
                        <label for="Qualification">Qualification</label><br>
                        <input placeholder="MBBS" type="text" id="qualification" name="qualification" required><br>
                        <br>
                        <label for="address">Doctor Address:</label>
                        <textarea placeholder="123, rk desai marg, Athwalines , surat, gujarat" class="form-control" name="address" id="exampleFormControlTextarea1" rows="5"></textarea>
                        <br>
                        <label for="hospital_address">Hospital Address:</label>
                        <textarea placeholder="123, rk desai marg, Athwalines , surat, gujarat" class="form-control" name="hospital_address" id="exampleFormControlTextarea1" rows="5"></textarea>
                        <br>
                        <label for="phone">Phone:</label><br>
                        <input placeholder="+91 9999999999" type="phone" id="phone" name="phone"><br>
                        <br>
            
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="jhondeo123@gmail.com">
                        </div>
            
                        <br>
            
                        <label for="status">status:</label><br>
                        <select type="text" id="status" name="status">
                            <option value="default">Select status</option>
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>
                        </select>
                        <br>
    
                        <div class="row ">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-6">
                                <button type="reset" class="btn btn-danger">clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>created by Rsp</p>
    </footer>
</body>

</html>