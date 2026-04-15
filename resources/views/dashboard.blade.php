@extends('layouts.app')

@section('content')

    <div class="row mb-4">
        <div class="col-12">
            <div class="p-4 card-content-bg">


                <div class="row">
                    <div class="col-md-7">
                        <h1 class="fw-bold"> Welcome Back,</h1>
                        <h1 class="fw-bold mb-4">Tita!</h1>
                        <p class="text-secondary small mb-1"> | Manage your orders and customer's feedback efficiently</p>
                        <p class="text-secondary small mb-1">| Stay updated with real-time notifications and insights
                            real-time.</p>
                    </div>

                    <div class="col-md-5">
                        <p class="fw-bold mb-2">Sales overview</p>
                        <div class="p-3" style="border: 1px solid #eee; border-radius: 8px; height: 250px;">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-md-6">
            <div class="card p-4 card-content-bg">
                <div class="d-flex align-items-center mb-2">
                    <div class="icon-wrapper me-3">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </div>
                    <p class="mb-0 fw-medium">Today's Order</p>
                </div>
                <div class="stat-number fw-bold">115</div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4 card-content-bg">
                <div class="d-flex align-items-center mb-2">
                    <div class="icon-wrapper me-3">
                        <i class="fas fa-sack-dollar fa-lg"></i>
                    </div>
                    <p class="mb-0 fw-medium">Today's Income</p>
                </div>
                <div class="stat-number fw-bold">Rp 50.000</div>
            </div>
        </div>
    </div>

    <div class="card mb-4 card-content-bg">

        <h3 class="pt-4 px-3 fw-bold mb-3">Recent Orders</h3>

        <div class="px-3 table-wrapper">
            <table class="table table-striped table-hover mb-4">
                <thead class="table-header-custom">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ORDER NO</th>
                        <th scope="col">CUSTOMER NAME</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>#001</td>
                        <td>John Doe</td>
                        <td>Completed</td>
                        <td>May 10, 2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>#002</td>
                        <td>Jane Smith</td>
                        <td>Pending</td>
                        <td>May 11, 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mb-5 card-content-bg">

        <h3 class="pt-4 px-3 fw-bold mb-3">Notifications</h3>

        <div class="px-3 table-wrapper">
            <table class="table table-striped table-hover mb-4">
                <thead class="table-header-custom">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Message</th>
                        <th scope="col">Last Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>New booking received.</td>
                        <td>5 mins ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('salesChart');

            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

            const barData = [250, 300, 450, 400, 350, 500, 550, 480, 420, 510, 580, 600];
            const lineData = [150, 180, 220, 250, 210, 280, 310, 290, 260, 330, 360, 390];

            // Gradient warna bar
            const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, '#6C5DD3');
            gradient.addColorStop(1, '#4E3C8B');

            new Chart(ctx, {
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Orders',
                            data: barData,
                            type: 'bar',
                            backgroundColor: gradient,
                            borderRadius: 8,
                            borderSkipped: false,
                            yAxisID: 'y'
                        },
                    ]
                },

                options: {
                    responsive: true,
                    maintainAspectRatio: false,

                    animation: {
                        duration: 1200,
                        easing: 'easeOutQuart'
                    },

                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.05)',
                                borderDash: [5, 5]
                            }
                        },
                        y1: {
                            display: false
                        }
                    },

                    plugins: {
                        legend: {
                            display: false
                        },

                        tooltip: {
                            backgroundColor: '#111',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 10,
                            displayColors: false
                        }
                    }
                }
            });
        });
    </script>

@endsection