<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                {{-- <select class="custom-select">
                    <option value="" selected>All Companies</option>
                    <option value="1">Company One</option>
                    <option value="2">Company Two</option>
                    <option value="3">Company Three</option>
                </select> --}}
            </div>
            <form>
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" value="{{ request()->query('search') }}"
                            id="search-input" placeholder="Search..." aria-label="Search..."
                            aria-describedby="button-addon2">
                        <div class="input-group-append">
                            @if (request()->filled('search'))
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="document.getElementById('search-input').value = '', this.form.submit()">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            @endif
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
