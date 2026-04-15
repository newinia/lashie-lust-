@extends('layouts.app')

@section('content')

    <div class="card card-content-bg p-5">

        <div class="d-flex justify-content-between align-items-center mb-5">

            <h1 class="fw-bold mb-0">Services</h1>

            <!-- BUTTON ADD -->
            <a href="#" class="btn btn-add-service text-dark fw-bold" data-bs-toggle="modal"
                data-bs-target="#addServiceModal"
                style="background-color: #fcd881; padding: 0.75rem 1.5rem; border-radius: 0.5rem;">
                Add +
            </a>
        </div>

        <div class="row">

            <!-- SERVICE CARD 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card service-card" style="border: none; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">

                    <div class="service-image-wrapper"
                        style="background-color: #f7f3e8; padding: 10px; border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem;">
                        <img src="{{ asset('images/service1.jpg') }}" class="card-img-top"
                            style="max-height: 150px; width: 100%; object-fit: contain; border-radius: 0.3rem;">
                    </div>

                    <div class="card-body p-3">
                        <h5 class="card-title fw-medium mb-1">Nail Art</h5>
                        <p class="card-text text-muted small mb-3">Start from 50.000</p>

                        <div class="d-flex justify-content-end">

                            <!-- EDIT -->
                            <a href="#" class="btn btn-sm text-dark me-2" data-bs-toggle="modal"
                                data-bs-target="#editServiceModal" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <!-- DELETE -->
                            <button type="button" class="btn btn-sm text-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteServiceModal" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- SERVICE CARD 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card service-card" style="border: none; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">

                    <div class="service-image-wrapper"
                        style="background-color: #f7f3e8; padding: 10px; border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem;">
                        <img src="{{ asset('images/service1.jpg') }}" class="card-img-top"
                            style="max-height: 150px; width: 100%; object-fit: contain; border-radius: 0.3rem;">
                    </div>

                    <div class="card-body p-3">
                        <h5 class="card-title fw-medium mb-1">Lash Lift</h5>
                        <p class="card-text text-muted small mb-3">Start from 80.000</p>

                        <div class="d-flex justify-content-end">

                            <a href="#" class="btn btn-sm text-dark me-2" data-bs-toggle="modal"
                                data-bs-target="#editServiceModal" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <button type="button" class="btn btn-sm text-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteServiceModal" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="addServiceModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Add Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Service Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn" style="background:#fcd881; font-weight:bold;">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editServiceModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Edit Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Service Name</label>
                            <input type="text" class="form-control" value="Nail Art">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" value="50000">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn" style="background:#fcd881; font-weight:bold;">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteServiceModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">

                <h5 class="fw-bold mb-3">Delete Service?</h5>
                <p class="text-muted">Are you sure you want to delete this service?</p>

                <div class="d-flex justify-content-center gap-2 mt-3">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger">Delete</button>
                </div>

            </div>
        </div>
    </div>

@endsection