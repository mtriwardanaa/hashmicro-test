<div class="accordion accordion-border-primary accordions-items-seperate" id="accordionprimaryborderExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingborderprimaryOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#primaryBorderOne"
                aria-expanded="true" aria-controls="primaryBorderOne">
                Apply Filter &nbsp; <i class="ri-filter-line"></i>
            </button>
        </h2>
        <div id="primaryBorderOne" class="accordion-collapse collapse @if ($filter == 1) show @endif"
            aria-labelledby="headingborderprimaryOne" data-bs-parent="#accordionprimaryborderExample">
            <div class="accordion-body">
                <div class="alert alert-secondary alert-dismissible fade show custom-alert-icon shadow-sm"
                    role="alert">
                    <svg class="svg-secondary" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
                        width="1.5rem" fill="#000000">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                    Secara default data yang muncul dengan rentan tanggal 1 bulan kebelakang, silahkan
                    filter jika ingin mengubah tanggal
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <input type="date" value="{{ date('Y-m-d', strtotime($dateStart)) }}" class="form-control"
                            id="date-start" placeholder="Pilih tanggal mulai">
                    </div>
                    <div class="col-md-3">
                        <input type="date" value="{{ date('Y-m-d', strtotime($dateEnd)) }}" class="form-control"
                            id="date-end" placeholder="Pilih tanggal selesai">
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-sm btn-filter"
                        data-link="{{ route('connote.index') }}">Submit</button>
                    <a href="{{ route('connote.index') }}"><button
                            class="btn btn-warning btn-sm btn-filter">Reset</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
