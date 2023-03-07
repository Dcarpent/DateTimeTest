<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date Time Test</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="/js/tempus-dominus.js"></script>
    <link rel="stylesheet" href="/css/tempus-dominus.css">

    <style>
        input.form-control{
            outline: 0;
            border: 0;  
        }

        input.form-control:focus,   
        input.form-control:hover {

            outline:0;
            background-color: rgba(234,234,234,.5);                
        }
    </style>

</head>
<body>

    <div class="container">

        <div class="row mt-5">
            <div class="col-sm-2">
            <label for="eventdateinput" class="form-label">Event Date:</label>
            <div class="input-group" id="eventdate" data-td-target-input="nearest" data-td-target-toggle="nearest">
                <input id="eventdateinput" type="text" class="form-control" data-td-target="#eventdate">
                <span class="input-group-text" data-td-target="#eventdate" data-td-toggle="datetimepicker">
                    <span class="fas fa-calendar"></span>
                </span>
            </div>
            </div>

            <div class="col-2">
                <label for="datetimepicker3Input" class="form-label">From:</label>
                <div class='input-group' id='datetimepicker3' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                    <input id='datetimepicker3Input' type='text' class='form-control' data-td-target='#datetimepicker3'/>
                    <span class='input-group-text' data-td-target='#datetimepicker3' data-td-toggle='datetimepicker'>
                        <span class='fa-solid fa-clock'></span>
                    </span>
                </div>
            </div>
           
        </div>  


        <div class="row my-5">
            <div class="col-md-3">
               <input type="button" value="OpenModal" class="open-modal">
            </div>
        </div>
    </div>

    <div class="container">
  <div class="alert alert-info" id="info"></div>
  <div class="row">
    <div class="col-12">
      <div id="noteTarget">
        <p>
          An input group and icon are not required for the picker to function,
          you can also simply use an input field.
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-2" id="htmlTarget">
      <label for="datetimepicker2" class="form-label">Event Date</label>
      <input id="datetimepicker2" type="text" class="form-control" value="September 30, 2023" />
    </div>
  </div>
 
</div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <!-- Popperjs -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha256-BRqBN7dYgABqtY9Hd4ynE+1slnEw+roEPFzQ7TRRfcg=" crossorigin="anonymous"></script>


   <!-- Jquery from example -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/jQuery-provider.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/solid.min.js" integrity="sha512-dcTe66qF6q/NW1X64tKXnDDcaVyRowrsVQ9wX6u7KSQpYuAl5COzdMIYDg+HqAXhPpIz1LO9ilUCL4qCbHN5Ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/brands.min.js" integrity="sha512-1e+6G7fuQ5RdPcZcRTnR3++VY2mjeh0+zFdrD580Ell/XcUw/DQLgad5XSCX+y2p/dmJwboZYBPoiNn77YAL5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/js/customDateFormat.js"></script>

    <!-- Custom --> 
    <script type="text/javascript">
       
        $(function () {

        

           
            $('.open-modal').on('click', function () {
                alert('$()');
            });
                 

            tempusDominus.extend(tempusDominus.plugins.customDateFormat);

            $('#eventdate').tempusDominus({
                useCurrent: true,
                display: {
                    viewMode: 'calendar',
                    buttons: {
                        close: true,
                    },
                    components: {
                        decades: false,
                        year: true,
                        month: true,
                        date: true,
                        hours: false,
                        minutes: false,
                        seconds: false
                    }
                }
            });


            $('#datetimepicker3').tempusDominus({
                useCurrent: true,
                stepping: 5,
                display: {
                    viewMode: 'clock',
                    buttons: {
                        close: false,
                    },
                    components: {
                        useTwentyfourHour: false,
                        decades: false,
                        year: false,
                        month: false,
                        date: false,
                        hours: true,
                        minutes: true,
                        seconds: false
                    }
                }
            });

           


            $('#datetimepicker2').tempusDominus({
                useCurrent: true,
                display: {
                    viewMode: 'calendar',
                    components: {
                        decades: false,
                        year: true,
                        month: true,
                        date: true,
                        hours: false,
                        minutes: false,
                        seconds: false,
                    },
                    icons: {
                        time: 'bi bi-clock',
                        date: 'bi bi-calendar',
                        up: 'bi bi-arrow-up',
                        down: 'bi bi-arrow-down',
                        previous: 'bi bi-chevron-left',
                        next: 'bi bi-chevron-right',
                        today: 'bi bi-calendar-check',
                        clear: 'bi bi-trash',
                        close: 'bi bi-x',
                    },
                    buttons: {
                        today: false,
                        clear: false,
                        close: false,
                    },          
                },
                localization: {
                    locale: 'us',
                    format: 'MMMM d, yyyy',
                },
            })

        });  
      
    </script>

</body>
</html>