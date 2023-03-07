<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/solid.min.js" integrity="sha512-dcTe66qF6q/NW1X64tKXnDDcaVyRowrsVQ9wX6u7KSQpYuAl5COzdMIYDg+HqAXhPpIz1LO9ilUCL4qCbHN5Ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/brands.min.js" integrity="sha512-1e+6G7fuQ5RdPcZcRTnR3++VY2mjeh0+zFdrD580Ell/XcUw/DQLgad5XSCX+y2p/dmJwboZYBPoiNn77YAL5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <style> 
        .d-flex .item {  
            padding: .25rem 1rem;  
            border-radius: 4px;
            text-align:center;
            background-color: rgba(192, 192, 192, .75);
            margin: 0 .25rem;
            display:
        }

        .font-smaller {
            font-size:smaller !important;
        }

        .transparent {
            color: transparent !important;
        }
        
    </style>
</head>
<body>
<h1>Hello-Bootstrap</h1>

    <div class="container">

        <div class="d-flex align-items-center mb-4">
            <i class="fa fa-clock fa-lg mr-3"></i>
            <span>September 30, 2023</span>
            <span>08:00 AM</span>
            <span>-</span>
            <span>09:00 AM</span>
            <span>All Day</span>
        </div>  

       
        <h3>Use This One</h3>
        <div class="d-flex justify-content-start flex-column flex-sm-row p-3 font-smaller"> 
            <div class="d-flex mb-2">
                <div class="p-2 mr-2"><i class="fa fa-calendar fa-lg"></i></div>
                <div class="p-2 mx-1 bg-light rounded">September 30, 2023</div>
            </div>
            <div class="d-flex mb-2">
                <div class="p-2 mr-2 d-sm-none"><i class="fa fa-clock fa-lg"></i></div>
                <div class="p-2 mx-1 bg-light rounded">09:00 AM</div>    
                <div class="py-2 "><span>&#8211;</span></div>
                <div class="p-2 mx-1 bg-light rounded">10:00 AM</div>
            </div>
            <div class="d-flex mb-2">
                <div class="p-2 mr-2 d-sm-none transparent"><i class="fa fa-clock fa-lg"></i></div>
                <div class="p-2 mx-1">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                        <label class="form-check-label" for="flexSwitchCheckChecked">All Day</label>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</body>
</html>