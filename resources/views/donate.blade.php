@extends('layouts.main')
@section('content')

<section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fwe/WhatsApp%20Image%202025-01-29%20at%2011.18.17%20PM.jpeg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Pages</li>
                    </ul>
                    <h2>Donate</h2>
                </div>
            </div>
        </section>


<section id="donations" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Support Us with Your Donations</h2>

        <div class="row">
            <!-- M-Pesa Donations -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">M-Pesa Donations</h3>
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
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title ">Gift Donations</h3>
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
            
            <!-- International Transfers -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title ">International Transfers</h3>
                        <p class="card-text">For international donations, please use the following bank details:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Acc. Name:</strong> HELLENA HAND OF COMPASSION</li>
                            <li class="list-group-item"><strong>Acc No:</strong> 01100725948001</li>
                            <li class="list-group-item"><strong>Bank:</strong> Co-operative Bank of Kenya</li>
                            <li class="list-group-item"><strong>Swift Code:</strong> KCOOKENA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
