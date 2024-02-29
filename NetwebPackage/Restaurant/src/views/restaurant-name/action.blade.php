<div class="actionbtns d-flex" style="gap: 5px;">
    <a href="javascript::void()" onclick="modalShow(`{{ route('restaurant-name.edit', encrypt($model->id)) }}`, 'get', 'Add New Restaurant Type')" class="action-btn btn btn-sm btn-primary edit_button">Edit</a>
    <form action="{{ route('restaurant-name.destroy', encrypt($model->id)) }}" method="POST" onsubmit="ajaxFormSubmission($(this))">
        @method("DELETE")
        @csrf
        <button type="submit"  class="action-btn btn btn-sm btn-danger">Delete</button>
    </form>
</div>
