@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <div class="container mt-5">
     
                
                <style>
                    body {
                        background-color: #f8f9fa; /* Light background for a clean look */
                        font-family: 'Arial', sans-serif;
                    }
                    .header {
                        background-color: #ffffff; 
                        color: rgb(7, 15, 83);
                        padding: 20px;
                        border-radius: 5px;
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .policy-section {
                        background: white;
                        border-radius: 5px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                        padding: 15px;
                        margin-bottom: 15px;
                    }
                    .policy-title {
                        color: #343a40; /* Dark text for headings */
                        font-size: 1.5em;
                        margin-bottom: 10px;
                    }
                    footer {
                        text-align: center;
                        margin-top: 30px;
                        font-size: 0.9em;
                        color: #555;
                    }
                </style>

               
                    <h2 style="margin-left:40%; margin-bottom:20px">Company Policies</h2>
                

                <div class="policy-section">
                    <h3 class="policy-title">1. Employee Conduct Policy</h3>
                    <p>Maintain a respectful and professional work environment.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">2. Attendance Policy</h3>
                    <p>Ensure operational efficiency and reliability.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">3. Leave Policy</h3>
                    <p>Support work-life balance with vacation and sick leave.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">4. Workplace Safety Policy</h3>
                    <p>Promote a safe working environment by following safety protocols.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">5. Confidentiality Policy</h3>
                    <p>Protect sensitive company and employee information.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">6. Equal Employment Opportunity Policy</h3>
                    <p>Foster a diverse and inclusive workplace without discrimination.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">7. Performance Management Policy</h3>
                    <p>Encourage professional development through regular reviews.</p>
                </div>

                <div class="policy-section">
                    <h3 class="policy-title">8. Termination Policy</h3>
                    <p>Provide clear processes for ending employment.</p>
                </div>
      
          </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Employee Dashboard</a> by Bootstrap</span>
            <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
@endsection