<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('ui/backend') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('ui/backend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('ui/backend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('ui/backend') }}/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center mt-3"><b>Fixed Asset Management Systems</b></h1>
                        
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                 
                
            </div><!-- End Logo -->
            
            <div class="card mb-3">
                
                <div class="card-body">
                    
                    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login Form</h5>
                    <hr>
                  </div>

                  <form action="{{ route('admin.login') }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                  <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                      
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" Placeholder="Password" required>
        
                    </div>

                   
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                   
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('ui/backend') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('ui/backend') }}/assets/js/main.js"></script>

</body>

</html>