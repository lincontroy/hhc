@extends('layouts.main')
@section('content')


<section id="donations" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Support Us with Your Donations</h2>

        <div class="row">
            <!-- M-Pesa Donations -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary">M-Pesa Donations</h3>
                        <p class="card-text">You can send your donations through M-Pesa using the following details:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Option 1:</strong></li>
                            <li class="list-group-item"> <strong>PAYBILL:</strong> 639498</li>
                            <li class="list-group-item"> <strong>Account No:</strong> GDC63117</li>
                        </ul>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item"><strong>Option 2:</strong></li>
                            <li class="list-group-item"> <strong>PAYBILL:</strong> 400200</li>
                            <li class="list-group-item"> <strong>Account No:</strong> 847127</li>
                        </ul>
                        <p class="mt-3"><strong>Recipient Name:</strong> Hellena Hand of Compassion</p>
                    </div>
                </div>
            </div>
            
            <!-- Gift Donations -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-success">Gift Donations</h3>
                        <p class="card-text">You can also donate essential items to support our cause:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Food Stuff</li>
                            <li class="list-group-item">Food Supplements</li>
                            <li class="list-group-item">Pharmaceutical Supplies (Medications & Consumables for Medical Camps)</li>
                            <li class="list-group-item">Toiletries</li>
                            <li class="list-group-item">Books</li>
                        </ul>
                        <p class="mt-3">Please contact us for drop-off locations or pickup arrangements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
