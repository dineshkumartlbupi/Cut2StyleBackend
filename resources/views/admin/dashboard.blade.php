@extends('layouts.admin')

@section('content')
<!-- Metric Cards -->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 mb-4">
    @php
        $metrics = [
            ['label' => 'Users', 'value' => $userCount ?? 0, 'icon' => 'fa-users', 'color' => 'primary'],
            ['label' => 'Products', 'value' => $productCount ?? 0, 'icon' => 'fa-box', 'color' => 'success'],
            ['label' => 'Vendors', 'value' => $vendorCount ?? 0, 'icon' => 'fa-store', 'color' => 'info'],
            ['label' => 'Orders', 'value' => $orderCount ?? 0, 'icon' => 'fa-shopping-cart', 'color' => 'warning'],
            ['label' => 'Service Categories', 'value' => $serviceCategoryCount ?? 0, 'icon' => 'fa-list', 'color' => 'secondary'],
            ['label' => 'Services', 'value' => $serviceCount ?? 0, 'icon' => 'fa-concierge-bell', 'color' => 'dark'],
        ];
    @endphp

    @foreach($metrics as $m)
    <div class="col">
        <div class="card metric-card border-start border-{{ $m['color'] }} shadow-sm p-3 h-100">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <i class="fas {{ $m['icon'] }} text-{{ $m['color'] }} fa-2x"></i>
                </div>
                <div>
                    <h6 class="mb-0">{{ $m['label'] }}</h6>
                    <h4 class="fw-bold">{{ $m['value'] }}</h4>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Charts -->
<div class="row g-4">
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm p-3 h-100">
            <h6 class="mb-3">Sales & Orders (Monthly)</h6>
            <div class="chart-container" style="position: relative; height:300px;">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card shadow-sm p-3 h-100">
            <h6 class="mb-3">Lead Summary</h6>
            <div class="chart-container" style="position: relative; height:300px;">
                <canvas id="leadsChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Recent Services or Categories -->
<div class="row mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm p-3">
            <h6 class="mb-3">Recent Service Categories</h6>
            <ul class="list-group">
                @foreach($recentServiceCategories ?? [] as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $category->name }}
                        <span class="badge bg-primary">{{ $category->services_count ?? 0 }} services</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm p-3">
            <h6 class="mb-3">Recent Services</h6>
            <ul class="list-group">
                @foreach($recentServices ?? [] as $service)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $service->name }}
                        <span class="badge bg-secondary">{{ $service->category->name ?? 'Uncategorized' }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script>
    const ctx1 = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Orders',
                    data: [12, 19, 10, 15, 20, 18],
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                },
                {
                    label: 'Sales',
                    data: [500, 800, 600, 1000, 1200, 1100],
                    backgroundColor: 'rgba(255, 206, 86, 0.7)',
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    const ctx2 = document.getElementById('leadsChart').getContext('2d');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Cold', 'Warm', 'Hot'],
            datasets: [{
                data: [30, 50, 20],
                backgroundColor: ['#adb5bd', '#ffc107', '#198754']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });
</script>
@endsection
