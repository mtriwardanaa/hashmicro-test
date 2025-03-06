<div class="dropdown">
    <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown"
        aria-expanded="false">
        Aksi
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate" style="">
        <li>
            <a href="{{ route('percentage.edit', $percentage['id']) }}" class="dropdown-item text-info">
                Edit <i class="ri-edit-line"></i>
            </a>
        </li>
        <li>
            <a class="dropdown-item text-danger btn-delete"data-link={{ url('percentage/delete', $percentage['id']) }} href="javascript:void(0);">
                Delete <i class="ri-delete-bin-line"></i>
            </a>
        </li>
    </ul>
</div>
