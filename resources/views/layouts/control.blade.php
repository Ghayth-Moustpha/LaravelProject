<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #212121;
            color: #fff;
            padding: 20px;
            height: 100vh;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar li {
            margin-bottom: 10px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .content {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar text-center position-sticky top-0">
                <h3>Dashboard</h3>
                <ul>
                
                    <a href="\Admin"> <li class ="p-2 btn btn-primary w-100"><i class="fas fa-home"></i> Home</li></a>
                    <a href="\ourtemp"><li class ="p-2 btn btn-primary w-100"><i class="fas fa-file-code"></i>  Templates</li> </a>
                    <a href="{{route ('services.admin')}}"><li class ="p-2 btn btn-primary w-100"><i class="fas fa-list"></i> Services</li></a>

                    <a href="/users"><li class ="p-2 btn btn-primary w-100"><i class="fas fa-users"></i> Users</li></a>
                </ul>
            </div>
            <!-- Content -->
            <div class="col-md-9 content">
                <nav class="navbar navbar-expand-lg navbar-dark btn bg-dark p-3  position-sticky top-0">
                    <div class="container">
                        <a class="navbar-brand" href="/">Temp<span class="text-danger">Hoster</span></a> 
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="btn btn-danger ml-3" href="/"> view the website </a>
                        <div class="collapse navbar-collapse text-end" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item ml-auto">
                                    
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket text-white" ></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                
                            </ul>
                           
                        </div>
                    </div>
                    
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
        <!-- Include jQuery and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>